<?php

use App\Models\Career;
use Livewire\Attributes\Reactive;
use Livewire\Component;

new class extends Component {
    #[Reactive]
    public ?int $limit = null;

    public function with(): array
    {
        $query = Career::where('is_active', true)->orderBy('sort');

        if ($this->limit) {
            $query->limit($this->limit);
        }

        return [
            'careers' => $query->get(),
            'totalCount' => Career::where('is_active', true)->count(),
            'hasMore' => $this->limit && Career::where('is_active', true)->count() > $this->limit,
        ];
    }
};
?>

<div class="container mx-auto max-w-7xl">
    @if($careers->count() > 0)
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($careers as $index => $career)
                <x-career-card :career="$career" :index="$index" />
            @endforeach
        </div>

        @if($hasMore)
            <div class="mt-12 flex justify-center">
                <a href="{{ route('careers.index') }}" wire:navigate
                    class="group flex items-center gap-3 px-8 py-4 border-2 border-brand-yellow text-brand-yellow font-black uppercase text-xs tracking-[0.2em] transition-all duration-300 hover:bg-brand-yellow hover:text-black">
                    <span>View All Careers</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        @endif
    @else
        <div class="text-center py-16">
            <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-white/5 border border-white/10 mb-4">
                <svg class="w-8 h-8 text-white/30" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                </svg>
            </div>
            <h3 class="text-xl font-bold text-white/80 mb-2">No Open Positions</h3>
            <p class="text-sm text-white/40">Check back soon for new opportunities</p>
        </div>
    @endif
</div>