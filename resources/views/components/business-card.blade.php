@props(['business', 'index'])

@php
    $shouldUseExternalLink = $business->link && $business->is_published;
@endphp

<a @if($shouldUseExternalLink) target="_blank" @else wire:navigate @endif
    href="{{ $shouldUseExternalLink ? $business->link : route('business.show', $business) }}"
    class="relative min-h-[280px] p-8 border border-white/10 overflow-hidden group flex flex-col justify-between transition-all duration-500 hover:border-brand-yellow/60 cursor-pointer block">

    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 z-0 transition-transform duration-700 group-hover:scale-110">
        @if($business->hasMedia('cover'))
            <img src="{{ $business->getFirstMediaUrl('cover', 'webp') }}" alt="{{ $business->title }}"
                class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 transition-all">
        @else
            <img src="{{ asset('covers/aboutus.png') }}" alt="{{ $business->title }}"
                class="w-full h-full object-cover opacity-60 grayscale group-hover:grayscale-0 transition-all">
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
            class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-yellow group-hover:translate-x-2 transition-transform">{{ $shouldUseExternalLink ? 'Visit' : 'Show more' }}
            —</span>
        <div class="h-px grow ml-4 bg-white/10 group-hover:bg-brand-yellow/30 transition-colors"></div>
    </div>
</a>
