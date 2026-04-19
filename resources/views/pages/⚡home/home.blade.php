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
    <section class="py-20 bg-white/5">
        <div class="container mx-auto px-6 lg:px-10">
            <div class="grid lg:grid-cols-12 gap-12 items-center">
                <div class="lg:col-span-5 space-y-6">
                    <span class="px-3 py-1 border border-brand-yellow text-brand-yellow text-[8px] font-black uppercase tracking-widest">Why Choose Us</span>
                    <h3 class="text-4xl font-black uppercase tracking-tighter leading-none">Ambition Driving Results.</h3>
                    <div class="grid grid-cols-2 gap-4 pt-4 border-t border-white/10">
                        <div>
                            <p class="text-[10px] font-black uppercase text-brand-yellow">Consistency</p>
                            <p class="text-[9px] text-white/40 uppercase mt-1">System, not effort</p>
                        </div>
                        <div>
                            <p class="text-[10px] font-black uppercase text-brand-yellow">Execution</p>
                            <p class="text-[9px] text-white/40 uppercase mt-1">Measured Stability</p>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 relative p-8 md:p-12 bg-black border border-white/10 rounded-lg">
                    <p class="text-xl md:text-2xl font-bold tracking-tight italic mb-8">“AXION is not just a partner — they are a complete ecosystem. Every division works in perfect alignment.”</p>
                    <div class="flex flex-wrap gap-6 justify-between items-center">
                        <div class="flex items-center gap-4">
                            <div class="w-1 h-8 bg-brand-yellow"></div>
                            <div>
                                <p class="text-[11px] font-black uppercase">Stacey Adams</p>
                                <p class="text-[9px] text-white/30 uppercase">Operations Manager</p>
                            </div>
                        </div>
                        <div class="text-right">
                             <p class="text-[9px] font-black text-brand-yellow uppercase tracking-widest">KHALID AL MANSOURI</p>
                             <p class="text-[8px] text-white/20 uppercase">CEO, International Ventures</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ===================== 05. EXECUTIVE FOOTER (COMPACT) ===================== --}}
    <footer class="pt-20 pb-10 px-6 lg:px-10">
        <div class="container mx-auto">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-10 mb-16 border-t border-white/5 pt-12">
                <div class="col-span-2 lg:col-span-1 space-y-4">
                    <h5 class="text-2xl font-black uppercase tracking-tighter italic">Axion<span class="text-brand-yellow">.</span></h5>
                    <p class="text-[9px] text-white/30 uppercase leading-relaxed tracking-wider max-w-xs">
                        Standardized workflows eliminate variation, delivering uniform quality across all processes.
                    </p>
                </div>
                <div>
                    <h6 class="text-[10px] font-black uppercase mb-6 text-brand-yellow">Company</h6>
                    <ul class="text-[9px] uppercase tracking-widest space-y-3 text-white/50">
                        <li><a href="#" class="hover:text-white">Home</a></li>
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Partnerships</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="text-[10px] font-black uppercase mb-6 text-brand-yellow">Divisions</h6>
                    <ul class="text-[9px] uppercase tracking-widest space-y-3 text-white/50">
                        <li><a href="#" class="hover:text-white">Agriculture</a></li>
                        <li><a href="#" class="hover:text-white">Trading</a></li>
                        <li><a href="#" class="hover:text-white">Logistics</a></li>
                    </ul>
                </div>
                <div>
                    <h6 class="text-[10px] font-black uppercase mb-6 text-brand-yellow">Contact</h6>
                    <ul class="text-[9px] uppercase tracking-widest space-y-3 text-white/50">
                        <li>support@axion.com</li>
                        <li>+1 123 456 7890</li>
                    </ul>
                </div>
            </div>
            <div class="text-center pt-8 border-t border-white/5">
                <p class="text-[8px] font-bold text-white/20 uppercase tracking-[0.4em]">Copyright © 2026 Axion | Powered By Webtimize Local</p>
            </div>
        </div>
    </footer>
</div>