<?php

use App\Models\Career;
use App\Models\CareerApplication;
use Blaspsoft\Blasp\Facades\Blasp;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Route;
use Livewire\Component;

new class extends Component
{
    #[Route]
    public Career $career;

    public string $fullName = '';
    public string $email = '';
    public string $phone = '';
    public string $address = '';
    public string $notes = '';

    public bool $submitted = false;
    public bool $showForm = false;

    protected function rules(): array
    {
        return [
            'fullName' => ['required', 'string', 'max:255', 'regex:/^[a-zA-Z\s\-\']+$/'],
            'email'    => ['required', 'email', 'max:255'],
            'phone'    => ['required', 'string', 'max:50', 'regex:/^[+]?[\d\s\-()]{7,50}$/'],
            'address'  => ['required', 'string', 'max:500'],
            'notes'    => ['nullable', 'string', 'max:2000'],
        ];
    }

    public function submit(): void
    {
        $ip = request()->ip();

        $lock = Cache::lock('career-apply:' . $ip, seconds: 10);

        abort_unless($lock->get(), 429);

        try {
            abort_unless(
                RateLimiter::attempt('career-apply:' . $ip, 3, fn () => true, 600),
                429
            );

            $validated = $this->validate();

            $this->checkProfanity($validated);

            if ($this->getErrorBag()->isNotEmpty()) {
                return;
            }

            $application = CareerApplication::create([
                'career_id'  => $this->career->id,
                'full_name'  => $validated['fullName'],
                'email'      => $validated['email'],
                'phone'      => $validated['phone'],
                'address'    => $validated['address'],
                'notes'      => filled($validated['notes']) ? $validated['notes'] : null,
                'ip_address' => $ip,
            ]);

            $bodyLines = [
                'Position: ' . $this->career->title,
                '',
                'Full Name: ' . $application->full_name,
                'Email: ' . $application->email,
                'Phone: ' . $application->phone,
                'Address: ' . $application->address,
                '',
                'Notes: ' . ($application->notes ?? '—'),
            ];

            $subject = rawurlencode('New Career Application — ' . $this->career->title . ' (' . $application->full_name . ')');
            $body    = rawurlencode(implode("\n", $bodyLines));

            $this->submitted = true;
            $this->showForm = false;
            $this->resetForm();

            $this->dispatch('career-applied', careerId: $this->career->id);
            $firstEmail = collect(app(\App\Settings\GeneralSettings::class)->contact_emails)->first()['email'] ?? null;

            if (filled($firstEmail)) {
                $this->js("window.location.href = 'mailto:{$firstEmail}?subject={$subject}&body={$body}'");
            }
        } finally {
            $lock->release();
        }
    }

    /**
     * @param array<string, mixed> $validated
     */
    private function checkProfanity(array $validated): void
    {
        $fields = [
            'fullName' => 'full name',
            'address'  => 'address',
            'notes'    => 'notes',
        ];

        foreach ($fields as $key => $label) {
            $value = $validated[$key] ?? '';

            if (filled($value) && Blasp::check($value)->isOffensive()) {
                $this->addError($key, "The {$label} field contains inappropriate language.");
            }
        }
    }

    private function resetForm(): void
    {
        $this->fullName = '';
        $this->email    = '';
        $this->phone    = '';
        $this->address  = '';
        $this->notes    = '';
    }
};