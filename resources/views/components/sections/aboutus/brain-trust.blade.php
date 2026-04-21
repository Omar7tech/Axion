<section class="py-20 bg-black overflow-hidden px-6 lg:px-20">
    <div class="container mx-auto max-w-7xl">
        
        {{-- Compact Header --}}
        <div class="flex items-center gap-6 mb-12">
            <h2 class="text-3xl font-black uppercase tracking-tighter text-white">The Brain <span class="text-brand-yellow italic">Trust.</span></h2>
            <div class="h-px flex-1 bg-linear-to-r from-brand-yellow/50 to-transparent"></div>
        </div>

        {{-- The Kinetic Strip --}}
        <div class="flex flex-col lg:flex-row gap-2 h-auto lg:h-[350px]">
            @php
                $architects = [
                    ['M. Harrington', 'CEO', '801', 'Architect of global systemic expansion.'],
                    ['D. Whitmore', 'COO', '802', 'Strategic lead for operational synchronization.'],
                    ['S. Mitchell', 'QA Lead', '803', 'Governance over precision and zero-deviation.']
                ];
            @endphp

            @foreach($architects as $m)
            <div class="group relative flex-[1] hover:flex-[1.5] bg-[#0a0a0a] border border-white/5 overflow-hidden transition-all duration-700 ease-[cubic-bezier(0.23,1,0.32,1)]">
                
                {{-- Background Profile - Widescreen Crop --}}
                <div class="absolute inset-0 z-0">
                    <img src="https://picsum.photos/1000/600?grayscale&random={{ $m[2] }}" class="w-full h-full object-cover opacity-40 group-hover:opacity-100 group-hover:scale-105 transition-all duration-1000">
                    <div class="absolute inset-0 bg-gradient-to-r from-black via-black/60 to-transparent lg:bg-gradient-to-t lg:from-black lg:via-transparent lg:to-transparent"></div>
                </div>

                {{-- Content Overlay --}}
                <div class="relative z-10 h-full p-8 flex flex-col justify-end">
                    
                    {{-- Identity Meta --}}
                    <div class="mb-4 translate-y-8 group-hover:translate-y-0 transition-transform duration-500">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="w-2 h-[2px] bg-brand-yellow"></span>
                            <p class="text-brand-yellow text-[9px] font-black uppercase tracking-widest">{{ $m[1] }}</p>
                        </div>
                        <h5 class="text-2xl font-black uppercase tracking-tighter text-white">{{ $m[0] }}</h5>
                    </div>

                    {{-- Hidden Bio: Revealed on expansion --}}
                    <div class="max-w-xs opacity-0 group-hover:opacity-100 translate-y-4 group-hover:translate-y-0 transition-all duration-700 delay-100">
                        <p class="text-[10px] leading-relaxed text-white/60 uppercase tracking-tight mb-6">
                            {{ $m[3] }}
                        </p>
                        <div class="flex gap-4">
                            <div class="w-8 h-8 rounded-full border border-white/10 flex items-center justify-center hover:bg-brand-yellow hover:border-brand-yellow transition-colors group/icon">
                                <svg class="w-3 h-3 text-white group-hover/icon:text-black" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                            </div>
                            <div class="w-8 h-8 rounded-full border border-white/10 flex items-center justify-center hover:bg-brand-yellow hover:border-brand-yellow transition-colors group/icon">
                                <svg class="w-3 h-3 text-white group-hover/icon:text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            </div>
                        </div>
                    </div>

                </div>

                {{-- Bottom "Scanning" Line Animation --}}
                <div class="absolute bottom-0 left-0 w-full h-[2px] bg-brand-yellow/20 overflow-hidden">
                    <div class="w-full h-full bg-brand-yellow -translate-x-full group-hover:translate-x-0 transition-transform duration-[1.5s] ease-in-out"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
