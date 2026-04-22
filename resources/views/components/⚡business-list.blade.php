<?php

use App\Models\Business;
use Livewire\Attributes\Reactive;
use Livewire\Component;

new class extends Component {
    #[Reactive]
    public ?int $limit = null;

    public function with(): array
    {
        $query = Business::active()->published();

        if ($this->limit) {
            $query->limit($this->limit);
        }

        return [
            'businesses' => $query->get(),
            'totalCount' => Business::active()->published()->count(),
            'hasMore' => $this->limit && Business::active()->published()->count() > $this->limit,
        ];
    }
};
?>

<div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @foreach($businesses as $index => $business)
            <a @if($business->link) target="_blank" @endif @if(!$business->link) wire:navigate @endif
                href="{{ $business->link ?? route('business.show', $business) }}"
                class="relative min-h-[280px] p-8 border border-white/10 overflow-hidden group flex flex-col justify-between transition-all duration-500 hover:border-brand-yellow/60 cursor-pointer block">

                {{-- Background Image with Overlay --}}
                <div class="absolute inset-0 z-0 transition-transform duration-700 group-hover:scale-110">
                    @if($business->hasMedia('cover'))
                        <img src="{{ $business->getFirstMediaUrl('cover', 'webp') }}" alt="{{ $business->title }}"
                            class="w-full h-full object-cover opacity-30 grayscale group-hover:grayscale-0 transition-all">
                    @else
                        <img src="{{ asset('covers/aboutus.png') }}" alt="{{ $business->title }}"
                            class="w-full h-full object-cover opacity-30 grayscale group-hover:grayscale-0 transition-all">
                    @endif
                    <div class="absolute inset-0 bg-gradient-to-br from-black via-black/80 to-transparent"></div>
                </div>

                {{-- Content --}}
                <div class="relative z-10">
                    <span
                        class="text-brand-yellow font-black tracking-widest text-[10px]">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
                    <h4 class="text-xl font-black uppercase mt-3 mb-2 tracking-tight">{{ $business->title }}</h4>
                    <p class="text-[10px] text-white/90 font-bold uppercase tracking-tight mb-3 italic leading-tight">
                        {{ $business->subtitle }}
                    </p>
                    <p class="text-[11px] text-white/50 leading-relaxed max-w-[90%]">
                        {{ Str::limit($business->description, 100) }}</p>
                </div>

                <div class="relative z-10 flex items-center justify-between mt-8">
                    <span
                        class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-yellow group-hover:translate-x-2 transition-transform">{{ $business->link ? 'Visit' : 'Show more' }}
                        —</span>
                    <div class="h-px grow ml-4 bg-white/10 group-hover:bg-brand-yellow/30 transition-colors"></div>
                </div>
            </a>
        @endforeach
    </div>

    @if($hasMore)
        <div class="mt-12 flex justify-center">
            <a href="{{ route('business.index') }}" wire:navigate
                class="group flex items-center gap-3 px-8 py-4 border-2 border-brand-yellow text-brand-yellow font-black uppercase text-xs tracking-[0.2em] transition-all duration-300 hover:bg-brand-yellow hover:text-black">
                <span>View All Businesses</span>
                <svg class="w-4 h-4 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                </svg>
            </a>
        </div>
    @endif
</div>