<?php

use App\Models\Investment;
use Livewire\Attributes\Reactive;
use Livewire\Component;

new class extends Component {
    #[Reactive]
    public ?int $limit = null;

    public function with(): array
    {
        $query = Investment::active()->latest('created_at');

        if ($this->limit) {
            $query->limit($this->limit);
        }

        return [
            'investments' => $query->get(),
            'totalCount' => Investment::active()->count(),
            'hasMore' => $this->limit && Investment::active()->count() > $this->limit,
        ];
    }
};
?>

<div class="container mx-auto max-w-7xl">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($investments as $index => $investment)
            <x-investment-card :investment="$investment" :index="$index" />
        @endforeach
    </div>

    @if($hasMore)
        <div class="mt-12 flex justify-center">
            <a href="{{ route('investments') }}" wire:navigate
                class="group flex items-center gap-3 px-8 py-4 border-2 border-brand-yellow text-brand-yellow font-black uppercase text-xs tracking-[0.2em] transition-all duration-300 hover:bg-brand-yellow hover:text-black">
                <span>View All Investments</span>
                <svg class="w-4 h-4 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    @endif
</div>
