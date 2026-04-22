<section class="py-16 md:py-32 relative bg-[#030303] overflow-hidden">
    <div class="absolute top-0 right-0 w-[300px] md:w-[600px] h-[300px] md:h-[600px] bg-brand-yellow/5 blur-[100px] md:blur-[150px] rounded-full opacity-50"></div>
    <div class="absolute bottom-0 left-0 w-[200px] md:w-[400px] h-[200px] md:h-[400px] bg-white/2 blur-[80px] md:blur-[100px] rounded-full"></div>

    <div class="container mx-auto px-6 lg:px-20 max-w-7xl relative z-10">
        <div class="mb-12 md:mb-20">
            <h2 class="font-black uppercase tracking-tighter leading-[0.85] text-white" 
                style="font-size: clamp(2.5rem, 8vw, 5rem);">
                Operating <br/> 
                <span class="text-brand-yellow italic">Framework.</span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 lg:gap-8">
            @php
                $nuclear_values = [
                    ['01', 'Consistency Before Speed', 'Measured Pace', 'The standard of rhythmic output over uncoordinated haste.'],
                    ['02', 'Systems Over Effort', 'Scalable Logic', 'Engineering workflows that outlive individual peak performance.'],
                    ['03', 'Discipline in Execution', 'Zero Deviation', 'Unwavering adherence to established technical blueprints.'],
                    ['04', 'Embedded Quality', 'Built-in Excellence', 'Quality as a primary structural element, not a final inspection.'],
                    ['05', 'Measured, Not Assumed', 'Data Verified', 'Decisions driven by hard metrics and verifiable logic.'],
                    ['06', 'Controlled Growth', 'Strategic Pace', 'Expansion regulated by the stability of the core infrastructure.'],
                    ['07', 'Accountability', 'Full Ownership', 'Transparent responsibility mapping across all operational tiers.'],
                    ['08', 'Continuous Improvement', 'Perpetual Beta', 'The systemic pursuit of the next percentage of efficiency.']
                ];
            @endphp

            @foreach($nuclear_values as $v)
            <div class="group relative bg-white/[0.02] border border-white/5 p-8 transition-all duration-500 hover:bg-white/[0.04] hover:border-brand-yellow/30 flex flex-col justify-between min-h-[280px] md:min-h-[320px] backdrop-blur-sm">
                
                {{-- Large Background Ghost Number --}}
                <span class="absolute top-4 right-6 text-6xl md:text-7xl font-black text-white/[0.02] group-hover:text-brand-yellow/[0.05] transition-colors pointer-events-none">
                    {{ $v[0] }}
                </span>

                {{-- Top Tier --}}
                <div class="relative z-10">
                    <div class="w-6 h-[2px] bg-brand-yellow mb-6 group-hover:w-full transition-all duration-700"></div>
                    <p class="text-[9px] font-black text-brand-yellow uppercase tracking-[0.3em] mb-4 opacity-60">{{ $v[2] }}</p>
                    <h4 class="text-lg md:text-xl font-black uppercase tracking-tighter leading-tight text-white group-hover:text-brand-yellow transition-colors">
                        {{ $v[0] }}. {{ $v[1] }}
                    </h4>
                </div>

                {{-- Bottom Tier --}}
                <div class="relative z-10 mt-8 md:mt-12">
                    <p class="text-[10px] md:text-[11px] text-white/40 leading-relaxed uppercase tracking-tight group-hover:text-white/70 transition-colors">
                        {{ $v[3] }}
                    </p>
                    <div class="mt-6 flex items-center justify-between overflow-hidden">
                        <span class="text-[8px] font-black text-white/10 uppercase tracking-widest italic group-hover:translate-x-0 -translate-x-10 transition-transform">Standardized</span>
                        <svg class="w-3 h-3 text-brand-yellow opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="3"/></svg>
                    </div>
                </div>

                {{-- Corner Decor --}}
                <div class="absolute bottom-0 right-0 w-3 h-3 border-r border-b border-white/5 group-hover:border-brand-yellow/40 transition-colors"></div>
            </div>
            @endforeach
        </div>
    </div>
</section>