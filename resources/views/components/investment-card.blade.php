@props(['investment', 'index' => null])

<a wire:navigate href="{{ route('investment.show', $investment) }}"
    class="relative min-h-[320px] p-8 border border-white/10 overflow-hidden group flex flex-col justify-between transition-all duration-500 hover:border-brand-yellow/60 cursor-pointer block">

    {{-- Background Image with Overlay --}}
    <div class="absolute inset-0 z-0 transition-transform duration-700 group-hover:scale-110">
        @if($investment->hasMedia('images'))
            <img src="{{ $investment->getFirstMediaUrl('images', 'webp') }}" alt="{{ $investment->project_name }}"
                class="w-full h-full object-cover opacity-30 grayscale group-hover:grayscale-0 transition-all">
        @else
            <img src="{{ asset('covers/investment-placeholder.png') }}" alt="{{ $investment->project_name }}"
                class="w-full h-full object-cover opacity-30 grayscale group-hover:grayscale-0 transition-all">
        @endif
        <div class="absolute inset-0 bg-gradient-to-br from-black via-black/80 to-transparent"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10">
        @if($index !== null)
            <span class="text-brand-yellow font-black tracking-widest text-[10px]">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
        @endif
        <h4 class="text-xl font-black uppercase mt-3 mb-2 tracking-tight">{{ $investment->project_name }}</h4>

        @if($investment->project_description)
            <p class="text-[10px] text-white/90 font-bold uppercase tracking-tight mb-3 italic leading-tight">
                {{ $investment->project_description }}
            </p>
        @endif

        @if($investment->investment_amount)
            <div class="inline-flex items-center gap-2 px-3 py-1 bg-brand-yellow/10 border border-brand-yellow/20 rounded mb-3">
                <span class="text-[10px] font-black uppercase text-brand-yellow">Investment</span>
                <span class="text-xs font-black text-white">${{ number_format($investment->investment_amount, 0) }}</span>
            </div>
        @endif

        @if($investment->project_content)
            <p class="text-[11px] text-white/50 leading-relaxed max-w-[90%]">
                {{ Str::limit(strip_tags($investment->project_content), 120) }}
            </p>
        @endif
    </div>

    <div class="relative z-10 flex items-center justify-between mt-8">
        <span class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-yellow group-hover:translate-x-2 transition-transform">
            View Details —
        </span>
        <div class="h-px grow ml-4 bg-white/10 group-hover:bg-brand-yellow/30 transition-colors"></div>
    </div>
</a>
