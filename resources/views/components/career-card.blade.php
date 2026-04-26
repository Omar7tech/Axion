@props(['career', 'index'])

<a wire:navigate
    href="{{ route('careers.show', $career) }}"
    class="relative min-h-[280px] p-8 border border-white/10 overflow-hidden group flex flex-col justify-between transition-all duration-500 hover:border-brand-yellow/60 cursor-pointer block">

    {{-- Background Pattern --}}
    <div class="absolute inset-0 z-0 transition-transform duration-700">
        <div class="absolute inset-0 bg-gradient-to-br from-black via-black/80 to-transparent"></div>
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff33_1px,transparent_1px)] [background-size:16px_16px]"></div>
    </div>

    {{-- Content --}}
    <div class="relative z-10">
        <div class="flex items-start justify-between mb-4">
            <span class="text-brand-yellow font-black tracking-widest text-[10px]">{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}</span>
            @if($career->is_active)
                <span class="px-2 py-1 text-[8px] font-black uppercase tracking-wider bg-brand-yellow/20 text-brand-yellow rounded border border-brand-yellow/30">Active</span>
            @else
                <span class="px-2 py-1 text-[8px] font-black uppercase tracking-wider bg-white/5 text-white/30 rounded border border-white/10">Closed</span>
            @endif
        </div>

        <h4 class="text-xl font-black uppercase mt-3 mb-2 tracking-tight">{{ $career->title }}</h4>

        <div class="flex flex-wrap gap-3 mb-3">
            @if($career->location)
                <div class="flex items-center gap-1.5 text-[10px] text-white/60">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span class="font-bold uppercase tracking-tight">{{ $career->location }}</span>
                </div>
            @endif

            @if($career->type)
                <div class="flex items-center gap-1.5 text-[10px] text-white/60">
                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span class="font-bold uppercase tracking-tight">{{ $career->type }}</span>
                </div>
            @endif
        </div>

        @if($career->description)
            <p class="text-[11px] text-white/50 leading-relaxed max-w-[90%]">
                {{ Str::limit($career->description, 120) }}
            </p>
        @endif
    </div>

    <div class="relative z-10 flex items-center justify-between mt-8">
        <span class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-yellow group-hover:translate-x-2 transition-transform">Apply Now —</span>
        <div class="h-px grow ml-4 bg-white/10 group-hover:bg-brand-yellow/30 transition-colors"></div>
    </div>
</a>
