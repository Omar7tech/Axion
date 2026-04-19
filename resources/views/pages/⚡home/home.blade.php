<div class="bg-brand-black text-white font-sans selection:bg-brand-yellow selection:text-brand-black">

    {{-- ===================== 01. THE NEXUS HERO (COMPACT) ===================== --}}
    <section class="relative min-h-[90vh] flex items-center px-6 lg:px-20 py-10 overflow-hidden">
        
        {{-- Background Glow --}}
        <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-yellow/5 blur-[100px] rounded-full -mr-48 -mt-48"></div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-12 gap-8 lg:gap-16 items-center">
                
                {{-- Left: Content --}}
                <div class="lg:col-span-6 space-y-6 md:space-y-8">
                    <div class="inline-flex items-center gap-3">
                        <span class="w-2 h-2 bg-brand-yellow rounded-full animate-pulse"></span>
                        <span class="text-[9px] font-black uppercase tracking-[0.4em] text-white/40">Award-winning firm</span>
                    </div>

                    <div class="space-y-3">
                        <h1 class="text-5xl md:text-6xl lg:text-7xl font-black tracking-tighter uppercase leading-[0.9]">
                            AXION<br/><span class="text-brand-yellow">Holding Group</span>
                        </h1>
                        <p class="text-md lg:text-lg font-bold text-white/80 tracking-tight uppercase border-l-4 border-brand-yellow pl-5">
                            A Global Platform for Technology, Trade, and Industrial Innovation
                        </p>
                    </div>

                    <div class="space-y-4 max-w-xl">
                        <p class="text-xs md:text-sm text-white/50 leading-relaxed text-justify">
                            AXION Holding Group is a dynamic global platform that integrates technology, trade, and industrial innovation into a unified ecosystem. The company is dedicated to driving progress by connecting advanced technological solutions with international markets and industrial operations.
                        </p>
                        <p class="text-[10px] text-white/30 leading-relaxed uppercase tracking-widest italic">
                            Bridging gaps between industries and regions, facilitating global commerce and industrial development.
                        </p>
                    </div>

                    <div class="flex flex-wrap gap-4">
                        <button class="px-8 py-4 bg-brand-yellow text-black font-black uppercase tracking-widest text-[9px] hover:scale-105 transition-transform">Schedule Now</button>
                        <button class="px-8 py-4 border border-white/20 text-white font-black uppercase tracking-widest text-[9px] hover:bg-white hover:text-black transition-all">Our Divisions</button>
                    </div>
                </div>

                {{-- Right: Full Color Video --}}
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-xl overflow-hidden shadow-2xl border border-white/10 group">
                        <video autoplay muted loop playsinline class="w-full aspect-video lg:aspect-square object-cover transition-transform duration-1000 group-hover:scale-110">
                            <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>
                        <div class="absolute bottom-6 left-6">
                            <p class="text-2xl md:text-3xl font-black italic uppercase tracking-tighter text-white">Consistency<br/>Matters.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== 02. CONSISTENCY MANIFESTO (COMPACT) ===================== --}}
    <section class="py-16 bg-white/[0.03] border-y border-white/5">
        <div class="container mx-auto px-6 lg:px-10 max-w-6xl">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="space-y-4">
                    <span class="text-brand-yellow text-[9px] font-black uppercase tracking-[0.5em] block">Service Excellence</span>
                    <h2 class="text-3xl lg:text-4xl font-black uppercase tracking-tighter leading-none">Where Consistency <br/> Matters Most</h2>
                    <p class="text-xs md:text-sm text-white/60 leading-relaxed max-w-md">
                        Consistency matters most where trust, quality, and performance define success. It is the foundation that supports growth and enables organizations to deliver excellence.
                    </p>
                </div>
                <div class="p-8 md:p-10 bg-brand-yellow text-black rounded-sm shadow-xl">
                    <h3 class="text-sm font-black uppercase mb-3 tracking-widest">Our Promise</h3>
                    <p class="text-xs md:text-sm font-bold leading-snug mb-5">Standardized workflows are at the core of our operations, ensuring consistency and precision at every stage. We deliver uniform quality from first batch to last.</p>
                    <div class="h-1 w-16 bg-black"></div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== 03. THE 11 DIVISIONS BENTO (DENSE) ===================== --}}
    <section class="py-20">
        <div class="container mx-auto px-6 lg:px-10">
            <div class="mb-12 text-center">
                <h2 class="text-4xl lg:text-5xl font-black uppercase tracking-tighter">Core Divisions</h2>
                <p class="text-white/30 uppercase tracking-[0.4em] text-[9px] mt-2 font-bold italic">Bridging industries and borders through technology</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @php
                $divs = [
                    ['01', 'Agriculture Expansion', 'Feeding the world through smart farming.', 'Modern farming solutions enhancing productivity.'],
                    ['02', 'Technology & AI', 'Engineering tomorrow\'s intelligence.', 'Driving innovation through automation and AI.'],
                    ['03', 'Construction & Real Estate', 'Building the infrastructure of a world.', 'Infrastructure growth and industrial execution.'],
                    ['04', 'Logistics & Supply Chain', 'Moving goods, connecting continents.', 'Reliable transportation and distribution.'],
                    ['05', 'Finance & Investment', 'Global demand meets trading.', 'Efficient exchange of goods and services.'],
                    ['06', 'Equipment & Automotive', 'Driving next-generation vehicles.', 'Reliability, durability, and performance.'],
                    ['07', 'Medical & Pharma', 'Advancing health through science.', 'Safe, effective, and high-quality products.'],
                    ['08', 'AXION Logistics', 'Reliability at global speed.', 'Transportation and operational excellence.'],
                    ['09', 'AXION Energy', 'Your energy market gateway.', 'Reliable sourcing and resource trading.'],
                    ['10', 'AXION Trade Finance', 'Powering world markets.', 'Efficiency across global commercial networks.'],
                    ['11', 'AXION Digital', 'The digital economy gateway.', 'Cutting-edge digital platform solutions.']
                ];
                @endphp

                @foreach($divs as $index => $d)
                <div class="relative min-h-[280px] p-8 border border-white/10 overflow-hidden group flex flex-col justify-between transition-all duration-500 hover:border-brand-yellow/60">
                    
                    {{-- Background Image with Overlay --}}
                    <div class="absolute inset-0 z-0 transition-transform duration-700 group-hover:scale-110">
                        <img src="https://picsum.photos/600/800?random={{ $index }}" alt="{{ $d[1] }}" class="w-full h-full object-cover opacity-30 grayscale group-hover:grayscale-0 transition-all">
                        <div class="absolute inset-0 bg-gradient-to-br from-black via-black/80 to-transparent"></div>
                    </div>

                    {{-- Content --}}
                    <div class="relative z-10">
                        <span class="text-brand-yellow font-black tracking-widest text-[10px]">{{ $d[0] }}</span>
                        <h4 class="text-xl font-black uppercase mt-3 mb-2 tracking-tight">{{ $d[1] }}</h4>
                        <p class="text-[10px] text-white/90 font-bold uppercase tracking-tight mb-3 italic leading-tight">{{ $d[2] }}</p>
                        <p class="text-[11px] text-white/50 leading-relaxed max-w-[90%]">{{ $d[3] }}</p>
                    </div>

                    <div class="relative z-10 flex items-center justify-between mt-8">
                        <a href="#" class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-yellow group-hover:translate-x-2 transition-transform">Learn more —</a>
                        <div class="h-[1px] flex-grow ml-4 bg-white/10 group-hover:bg-brand-yellow/30 transition-colors"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

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
                <div class="lg:col-span-7 relative">
                    {{-- Decorative "Pulse" rings behind the card --}}
                    <div class="absolute inset-0 flex items-center justify-center pointer-events-none">
                        <div class="w-[120%] aspect-square border border-white/5 rounded-full animate-[spin_20s_linear_infinite]"></div>
                    </div>

                    <div class="relative bg-gradient-to-br from-white/[0.05] to-transparent backdrop-blur-3xl border border-white/10 p-10 lg:p-16 rounded-2xl shadow-[0_50px_100px_rgba(0,0,0,0.5)] group">
                        
                        {{-- Large Decorative Quote Mark --}}
                        <div class="absolute -top-6 -left-6 text-8xl font-black text-brand-yellow/10 select-none">“</div>

                        <p class="text-2xl lg:text-3xl font-medium tracking-tight leading-snug mb-12 relative z-10 italic">
                            “AXION is not just a partner — they are a <span class="text-brand-yellow font-black not-italic">complete ecosystem</span>. From supply chain to deep-tech, every division works in perfect alignment.”
                        </p>

                        <div class="flex flex-col md:flex-row md:items-center justify-between gap-8 pt-8 border-t border-white/10">
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

    
</div>