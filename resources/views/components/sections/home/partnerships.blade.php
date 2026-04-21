{{-- ===================== 04. PARTNERSHIP & TESTIMONIALS (COMPACT) ===================== --}}
<section class="py-24 bg-[#080808] relative overflow-hidden px-6 lg:px-20">
    {{-- Structural Background Element --}}
    <div class="absolute left-0 top-0 w-1/2 h-full bg-white/[0.01] border-r border-white/5 hidden lg:block"></div>

    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="grid lg:grid-cols-12 gap-16 items-center">

            {{-- Left: The Logic (Why Choose Us) --}}
            <div class="lg:col-span-5 space-y-12">
                <div class="space-y-4">
                    <div class="flex items-center gap-4">
                        <div class="h-[1px] w-12 bg-brand-yellow"></div>
                        <span class="text-brand-yellow text-[10px] font-black uppercase tracking-[0.4em]">The Axion Advantage</span>
                    </div>
                    <h3 class="text-5xl lg:text-6xl font-black uppercase tracking-tighter leading-[0.85]">
                        Ambition <br/>
                        <span class="text-white/20">Requires</span> <br/>
                        Results.
                    </h3>
                </div>

                <div class="grid grid-cols-1 gap-10">
                    <div class="group flex gap-6 items-start">
                        <span class="text-brand-yellow font-black text-xl leading-none opacity-50 group-hover:opacity-100 transition-opacity">/01</span>
                        <div class="space-y-1">
                            <p class="text-sm font-black uppercase tracking-widest">Consistency</p>
                            <p class="text-[10px] text-white/40 uppercase tracking-tighter">Engineered by system, not by human effort.</p>
                            <div class="h-[2px] w-0 bg-brand-yellow group-hover:w-full transition-all duration-700 mt-2"></div>
                        </div>
                    </div>

                    <div class="group flex gap-6 items-start">
                        <span class="text-brand-yellow font-black text-xl leading-none opacity-50 group-hover:opacity-100 transition-opacity">/02</span>
                        <div class="space-y-1">
                            <p class="text-sm font-black uppercase tracking-widest">Execution</p>
                            <p class="text-[10px] text-white/40 uppercase tracking-tighter">Measured stability across global frontiers.</p>
                            <div class="h-[2px] w-0 bg-brand-yellow group-hover:w-full transition-all duration-700 mt-2"></div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Right: The Emotion (Creative Testimonial Card) --}}
            <div class="lg:col-span-7 relative group">
                {{-- Decorative "Pulse" rings behind the card --}}
                <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                    <div class="w-[120%] aspect-square border border-white/5 rounded-full animate-[spin_20s_linear_infinite]"></div>
                </div>

                {{-- THE GLASS CARD --}}
                <div class="relative bg-white/[0.03] backdrop-blur-3xl border border-white/10 p-10 lg:p-16 rounded-2xl shadow-[0_50px_100px_rgba(0,0,0,0.5)] transition-all duration-700 
                            group-hover:bg-white/[0.07] group-hover:border-white/20 group-hover:shadow-[0_80px_120px_rgba(0,0,0,0.7)] overflow-hidden">
                    
                    {{-- GLASS SHADE REFLECTION (HOVER ONLY) --}}
                    <div class="absolute inset-0 bg-gradient-to-tr from-transparent via-white/[0.05] to-transparent translate-x-[-100%] group-hover:translate-x-[100%] transition-transform duration-1000 ease-in-out pointer-events-none"></div>

                    {{-- Large Decorative Quote Mark --}}
                    <div class="absolute -top-6 -left-6 text-8xl font-black text-brand-yellow/10 select-none">"</div>

                    <p class="text-2xl lg:text-3xl font-medium tracking-tight leading-snug mb-12 relative z-10 italic">
                        "AXION is not just a partner — they are a <span class="text-brand-yellow font-black not-italic">complete ecosystem</span>. From supply chain to deep-tech, every division works in perfect alignment."
                    </p>

                    <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 pt-8 border-t border-white/10 relative z-10">
                        {{-- Reviewer A --}}
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 bg-brand-yellow rounded-full flex items-center justify-center font-black text-black text-xs">SA</div>
                            <div>
                                <p class="text-[11px] font-black uppercase text-white">Stacey Adams</p>
                                <p class="text-[9px] text-brand-yellow uppercase tracking-widest">Operations Manager</p>
                            </div>
                        </div>

                        {{-- Reviewer B (CEO) --}}
                        <div class="text-left md:text-right">
                            <p class="text-[11px] font-black text-white/40 uppercase tracking-[0.2em] mb-1">Global Verification</p>
                            <p class="text-[10px] font-black text-white uppercase">KHALID AL MANSOURI</p>
                            <p class="text-[8px] text-white/20 uppercase">CEO, International Ventures</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>