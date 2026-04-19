<div class="bg-brand-black text-white font-sans selection:bg-brand-yellow selection:text-brand-black overflow-x-hidden">

    {{-- ===================== 01. THE WIDESCREEN HERO (COMPACT) ===================== --}}
    <section class="relative min-h-[70vh] flex items-end px-6 lg:px-20 pb-20">
        {{-- Background Image with Split Gradient --}}
        <div class="absolute inset-0 z-0">
            <img src="https://picsum.photos/1920/1080?grayscale&random=101" class="w-full h-full object-cover">
            {{-- Technical Grid Pattern --}}
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#ffffff33_1px,transparent_1px)] [background-size:20px_20px]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-brand-black via-brand-black/40 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-brand-black/80 to-transparent"></div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-12 gap-8 items-end">
                <div class="lg:col-span-8">
                    <div class="flex items-center gap-3 mb-6 overflow-hidden">
                        <span class="w-8 h-[1px] bg-brand-yellow"></span>
                        <span class="text-[9px] font-black uppercase tracking-[0.8em] text-brand-yellow animate-pulse">System Origin</span>
                    </div>
                    <h1 class="text-7xl md:text-9xl font-black uppercase tracking-tighter leading-[0.75]">
                        Axion<br/><span class="text-transparent stroke-white stroke-1" style="-webkit-text-stroke: 1px white;">Holdings.</span>
                    </h1>
                </div>
                <div class="lg:col-span-4 lg:pb-4">
                    <p class="text-xs md:text-sm font-bold uppercase tracking-widest leading-relaxed border-l-2 border-brand-yellow pl-6 opacity-80">
                        A partner focused on stable and reliable supply chains, production efficiency, and systemic growth.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== 02. THE LOGIC TRIAD (GLOBAL SOVEREIGN EDITION) ===================== --}}
    <section class="relative min-h-[90vh] flex items-center bg-black overflow-hidden border-y border-white/5 px-6 lg:px-20 py-24">
    
    {{-- Background Geometric Matrix --}}
    <div class="absolute inset-0 z-0 opacity-20 bg-[linear-gradient(45deg,#111_25%,transparent_25%),linear-gradient(-45deg,#111_25%,transparent_25%),linear-gradient(45deg,transparent_75%,#111_75%),linear-gradient(-45deg,transparent_75%,#111_75%)] [background-size:20px_20px] [background-position:0_0,0_10px,10px_-10px,-10px_0px]"></div>

    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="flex flex-col md:flex-row md:divide-x divide-white/5 items-stretch min-h-[600px] border border-white/5">
            
            {{-- Monolith Card Wrapper --}}
            @php
                $monoliths = [
                    ['Consistency', 'Standardized workflows are at the core of our operations, ensuring precision from first batch to last.', '201', 'C', '01'],
                    ['Reliability', 'By minimizing variation, we maintain performance that meets the highest global standards.', '202', 'R', '02'],
                    ['Trust', 'Founders and backers engage confidently, valuing our fairness and systemic discipline.', '203', 'T', '03']
                ];
            @endphp

            @foreach($monoliths as $item)
            <div class="flex-1 p-16 flex flex-col justify-between group relative overflow-hidden transition-all duration-[1000ms] cubic-bezier(0.23, 1, 0.32, 1) hover:flex-[1.8] cursor-crosshair">
                
                {{-- The "Sleeping" Background Image --}}
                <div class="absolute inset-0 z-0 overflow-hidden">
                    <img src="https://picsum.photos/1200/1600?grayscale&random={{ $item[2] }}" 
                         class="w-full h-full object-cover saturate-0 brightness-[0.4] blur-[4px] opacity-40 scale-110 transition-all duration-[1200ms] group-hover:saturate-100 group-hover:brightness-100 group-hover:blur-none group-hover:opacity-80 group-hover:scale-100">
                    
                    {{-- Darkening Gradient --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                </div>

                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-8 overflow-hidden">
                        <span class="w-8 h-[1px] bg-brand-yellow/40 group-hover:bg-brand-yellow group-hover:w-12 transition-all duration-700"></span>
                        <span class="text-[9px] font-black uppercase tracking-[0.8em] text-brand-yellow/60 group-hover:text-brand-yellow group-hover:tracking-tighter transition-all duration-700">Axion Logic.{{ $item[4] }}</span>
                    </div>
                    
                    <h3 class="text-6xl font-black uppercase tracking-tighter text-white group-hover:text-brand-yellow transition-colors duration-500 leading-[0.85]">
                        @if($item[0] == 'Consistency') Consis<br/>tency @elseif($item[0] == 'Reliability') Reliabi<br/>lity @else {{ $item[0] }} @endif
                    </h3>
                </div>

                <div class="relative z-10 pt-10 border-t border-white/10 mt-10">
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-white/40 leading-relaxed group-hover:text-white transition-colors duration-700 max-w-xs">
                        {{ $item[1] }}
                    </p>
                    {{-- Ghost Letter --}}
                    <span class="text-[120px] font-black text-white/[0.04] absolute bottom-[-50px] right-[-30px] select-none group-hover:text-brand-yellow/[0.08] group-hover:rotate-12 transition-all duration-1000">{{ $item[3] }}</span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>

    <section class="py-32 relative bg-[#030303] overflow-hidden">
        {{-- High-End Ambient Background --}}
        <div class="absolute top-0 right-0 w-[600px] h-[600px] bg-brand-yellow/5 blur-[150px] rounded-full opacity-50"></div>
        <div class="absolute bottom-0 left-0 w-[400px] h-[400px] bg-white/[0.02] blur-[100px] rounded-full"></div>

        <div class="container mx-auto px-6 lg:px-20 max-w-7xl relative z-10">
            {{-- Header with Technical Coordinates --}}
            <div class="flex flex-col md:flex-row justify-between items-end mb-20 gap-8">
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <span class="px-2 py-1 bg-brand-yellow text-black text-[8px] font-black uppercase tracking-widest leading-none">Status: Optimized</span>
                        <span class="text-[9px] font-black uppercase tracking-[0.5em] text-white/30">Protocol v.2.0</span>
                    </div>
                    <h2 class="text-5xl lg:text-7xl font-black uppercase tracking-tighter leading-[0.85]">
                        Operating <br/> <span class="text-brand-yellow italic">Framework.</span>
                    </h2>
                </div>
                <div class="hidden lg:block text-right">
                    <p class="text-[9px] font-black text-white/20 uppercase tracking-[0.4em] leading-loose">
                        Ref: AXN-099 // Global Standard <br/> Established 2026_LEB
                    </p>
                </div>
            </div>

            {{-- The "Nuclear" Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 lg:gap-8">
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
                <div class="group relative bg-white/[0.02] border border-white/5 p-8 lg:p-10 transition-all duration-500 hover:bg-white/[0.04] hover:border-brand-yellow/30 flex flex-col justify-between min-h-[320px] backdrop-blur-sm">
                    
                    {{-- Large Background Ghost Number --}}
                    <span class="absolute top-4 right-6 text-7xl font-black text-white/[0.02] group-hover:text-brand-yellow/[0.05] transition-colors pointer-events-none">
                        {{ $v[0] }}
                    </span>

                    {{-- Top Tier: Brand Accent --}}
                    <div class="relative z-10">
                        <div class="w-8 h-[2px] bg-brand-yellow mb-6 group-hover:w-full transition-all duration-700"></div>
                        <p class="text-[9px] font-black text-brand-yellow uppercase tracking-[0.3em] mb-4 opacity-60">{{ $v[2] }}</p>
                        <h4 class="text-xl font-black uppercase tracking-tighter leading-tight text-white group-hover:text-brand-yellow transition-colors">
                            {{ $v[0] }}. {{ $v[1] }}
                        </h4>
                    </div>

                    {{-- Bottom Tier: Descriptive Logic --}}
                    <div class="relative z-10 mt-12">
                        <p class="text-[11px] text-white/40 leading-relaxed uppercase tracking-tight group-hover:text-white/70 transition-colors">
                            {{ $v[3] }}
                        </p>
                        <div class="mt-6 flex items-center justify-between overflow-hidden">
                            <span class="text-[8px] font-black text-white/20 uppercase tracking-widest italic group-hover:translate-x-0 -translate-x-10 transition-transform">Standardized Workflow</span>
                            <svg class="w-4 h-4 text-brand-yellow opacity-0 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="3"/></svg>
                        </div>
                    </div>

                    {{-- Corner Decorative Element --}}
                    <div class="absolute bottom-0 right-0 w-4 h-4 border-r border-b border-white/5 group-hover:border-brand-yellow/40 transition-colors"></div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-20 bg-black overflow-hidden px-6 lg:px-20">
        <div class="container mx-auto max-w-7xl">
            
            {{-- Compact Header --}}
            <div class="flex items-center gap-6 mb-12">
                <h2 class="text-3xl font-black uppercase tracking-tighter text-white">The Brain <span class="text-brand-yellow italic">Trust.</span></h2>
                <div class="h-px flex-1 bg-gradient-to-r from-brand-yellow/50 to-transparent"></div>
                <span class="text-[9px] font-mono text-white/20 uppercase tracking-[0.4em]">Unit: Executive_Core</span>
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

</div>