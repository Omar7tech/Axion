<?php

use App\Models\Inquiry;
use App\Models\InquiryTerm;
use Blaspsoft\Blasp\Facades\Blasp;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\RateLimiter;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{
    public string $fullName = '';
    public string $discussion = '';
    public string $otherDiscussion = '';

    public function mount(): void
    {
        // Set default discussion to first inquiry term if available
        $firstTerm = InquiryTerm::first();
        if ($firstTerm) {
            $this->discussion = $firstTerm->term;
        }
    }

    public function updatedContactMethod(): void
    {
        // Clear validation errors when contact method changes
        $this->resetErrorBag(['email', 'phone']);
    }

    public string $contactMethod = 'email';
    public string $email = '';
    public string $phone = '';
    public bool $submitted = false;

    protected function rules(): array
    {
        $rules = [
            'fullName' => ['required', 'string', 'max:255'],
            'discussion' => ['required', 'string', 'max:255'],
            'otherDiscussion' => ['nullable', 'string', 'max:255'],
            'contactMethod' => ['required', 'in:email,phone,both'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['nullable', 'string', 'max:50'],
        ];

        // Require email if contactMethod is email or both
        if (in_array($this->contactMethod, ['email', 'both'])) {
            $rules['email'] = ['required', 'email', 'max:255'];
        }

        // Require phone if contactMethod is phone or both
        if (in_array($this->contactMethod, ['phone', 'both'])) {
            $rules['phone'] = ['required', 'string', 'max:50', 'regex:/^[\+]?[(]?[0-9]{1,4}[)]?[-\s\.]?[0-9]{1,4}[-\s\.]?[0-9]{1,9}$/'];
        }

        return $rules;
    }

    protected function messages(): array
    {
        return [
            'fullName.required' => 'The full name field is required.',
            'fullName.max' => 'The full name field must not exceed 255 characters.',
            'discussion.required' => 'Please select a discussion topic.',
            'discussion.max' => 'The discussion field must not exceed 255 characters.',
            'otherDiscussion.max' => 'The other discussion field must not exceed 255 characters.',
            'email.required' => 'The email field is required.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'The email field must not exceed 255 characters.',
            'phone.required' => 'The phone field is required.',
            'phone.max' => 'The phone field must not exceed 50 characters.',
            'phone.regex' => 'Please enter a valid phone number.',
        ];
    }

    #[Computed]
    public function contactEmails(): array
    {
        return app(\App\Settings\GeneralSettings::class)->contact_emails ?? [];
    }

    #[Computed]
    public function contactPhones(): array
    {
        return app(\App\Settings\GeneralSettings::class)->contact_phones ?? [];
    }

    #[Computed]
    public function socialMedia(): array
    {
        return app(\App\Settings\GeneralSettings::class)->social_media ?? [];
    }

    #[Computed]
    public function inquiryTerms()
    {
        return InquiryTerm::all();
    }

    public function submit(): void
    {
        $ip = request()->ip();

        // Race condition: reject concurrent submissions from the same IP
        $lock = Cache::lock('inquiry-submit:' . $ip, 10);

        abort_unless($lock->get(), 429, 'Too many requests. Please try again later.');

        try {
            // Rate limit: 5 submissions per 10 minutes per IP
            abort_unless(
                RateLimiter::attempt('inquiry-submit:' . $ip, 5, fn () => true, 600),
                429,
                'Too many submissions. Please wait before trying again.'
            );

            // If "Other" is selected, use otherDiscussion as the discussion value
            if ($this->discussion === 'Other' && filled($this->otherDiscussion)) {
                $this->discussion = $this->otherDiscussion;
            }

            $validated = $this->validate();

            $this->checkProfanity($validated);

            if ($this->getErrorBag()->isNotEmpty()) {
                return;
            }

            $inquiry = Inquiry::create([
                'full_name' => $validated['fullName'],
                'email' => in_array($this->contactMethod, ['email', 'both']) ? $validated['email'] : null,
                'phone' => in_array($this->contactMethod, ['phone', 'both']) ? $validated['phone'] : null,
                'discussion' => $validated['discussion'],
            ]);

            $bodyLines = [
                'Full Name: ' . $inquiry->full_name,
                'Email: ' . ($inquiry->email ?? '—'),
                'Phone: ' . ($inquiry->phone ?? '—'),
                '',
                'Discussion Topic: ' . $inquiry->discussion,
            ];

            $subject = rawurlencode('New Inquiry — ' . $inquiry->full_name);
            $body = rawurlencode(implode("\n", $bodyLines));

            $this->submitted = true;
            $this->dispatch('inquiry-submitted');

            $this->reset(['fullName', 'discussion', 'otherDiscussion', 'contactMethod', 'email', 'phone']);

            $firstEmail = collect(app(\App\Settings\GeneralSettings::class)->contact_emails)->first()['email'] ?? null;

            if (filled($firstEmail)) {
                $this->js("window.location.href = 'mailto:{$firstEmail}?subject={$subject}&body={$body}'");
            }
        } finally {
            $lock->release();
        }
    }

    /**
     * @param  array<string, mixed>  $validated
     */
    private function checkProfanity(array $validated): void
    {
        $fields = [
            'fullName' => 'full name',
            'discussion' => 'discussion topic',
            'otherDiscussion' => 'other discussion',
        ];

        foreach ($fields as $key => $label) {
            $value = $validated[$key] ?? '';

            if (filled($value) && Blasp::check($value)->isOffensive()) {
                $this->addError($key, "The {$label} field contains inappropriate language.");
            }
        }
    }

    public function with(): array
    {
        return [
            'contactEmails' => $this->contactEmails(),
            'contactPhones' => $this->contactPhones(),
            'socialMedia' => $this->socialMedia(),
            'inquiryTerms' => $this->inquiryTerms(),
        ];
    }
};