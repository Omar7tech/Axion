<section class="py-20 bg-black overflow-hidden px-6">
    <div class="container mx-auto max-w-5xl">
        
        <div class="group relative bg-[#080808] border border-white/5 p-12 lg:p-20 overflow-hidden">
            
            {{-- Kinetic Background: Revealed on Hover --}}
            <div class="absolute inset-0 z-0 opacity-0 group-hover:opacity-30 transition-opacity duration-700">
                <img src="https://picsum.photos/1200/400?grayscale&random=701" class="w-full h-full object-cover scale-150 group-hover:scale-100 transition-transform duration-[2s] ease-out">
                <div class="absolute inset-0 bg-gradient-to-r from-black via-black/40 to-transparent"></div>
            </div>

            {{-- Glitch Pattern Overlay --}}
            <div class="absolute inset-0 z-10 opacity-[0.03] pointer-events-none bg-[repeating-linear-gradient(0deg,transparent,transparent_1px,#fff_1px,#fff_2px)] bg-[size:100%_3px]"></div>

            <div class="relative z-20 grid lg:grid-cols-12 gap-12 items-center">
                
                {{-- Left: The Brief --}}
                <div class="lg:col-span-8 space-y-6">
                    <div class="inline-flex items-center gap-3">
                        <span class="w-2 h-2 rounded-full bg-brand-yellow animate-pulse"></span>
                        <span class="text-[9px] font-black uppercase tracking-[0.6em] text-brand-yellow">Operational Readiness</span>
                    </div>
                    
                    <h2 class="text-4xl md:text-6xl font-black uppercase tracking-tighter leading-[0.9]">
                        Powerful platforms keep <br/>
                        <span class="text-transparent stroke-white stroke-[0.5px]" style="-webkit-text-stroke: 1px rgba(255,255,255,0.3);">global markets</span> moving.
                    </h2>
                </div>

                {{-- Right: The Action --}}
                <div class="lg:col-span-4 lg:text-right">
                    <div class="inline-block relative">
                        {{-- Magnetic Button Effect --}}
                        <a href="#" class="relative z-10 inline-flex items-center justify-center px-10 py-5 bg-brand-yellow text-black font-black uppercase tracking-[0.4em] text-[10px] transition-all duration-500 hover:bg-white hover:tracking-[0.6em] group/btn">
                            Ready for Alignment
                            <svg class="w-4 h-4 ml-4 transition-transform group-hover/btn:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                        
                        {{-- Decorative "Ghost" Button Shadow --}}
                        <div class="absolute inset-0 border border-brand-yellow translate-x-2 translate-y-2 -z-10 group-hover:translate-x-0 group-hover:translate-y-0 transition-transform duration-500"></div>
                    </div>
                </div>
            </div>

            {{-- Bottom Metric Bar --}}
            <div class="mt-12 pt-8 border-t border-white/5 flex flex-wrap gap-10 opacity-30 group-hover:opacity-100 transition-opacity duration-1000">
                <div class="space-y-1">
                    <p class="text-[8px] font-black uppercase tracking-widest">Network Status</p>
                    <p class="text-[10px] font-bold text-brand-yellow">ACTIVE // 100%</p>
                </div>
                <div class="space-y-1 border-l border-white/10 pl-10">
                    <p class="text-[8px] font-black uppercase tracking-widest">Global Sync</p>
                    <p class="text-[10px] font-bold text-white">LATENCY 14MS</p>
                </div>
                <div class="space-y-1 border-l border-white/10 pl-10">
                    <p class="text-[8px] font-black uppercase tracking-widest">System Load</p>
                    <p class="text-[10px] font-bold text-white">OPTIMIZED</p>
                </div>
            </div>

        </div>
    </div>
</section>
