<div class="bg-[#020202] text-white font-sans selection:bg-brand-yellow selection:text-black overflow-x-hidden">

    <section class="relative min-h-screen flex items-center justify-center overflow-hidden border-b border-white/5 bg-black">
        
        <div class="absolute inset-0 z-0 pointer-events-none opacity-40" id="parallax-bg">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_50%_50%,#111_0%,transparent_70%)]"></div>
            <div class="absolute inset-0 opacity-[0.05] bg-[size:60px_60px] bg-[linear-gradient(to_right,#fff_1px,transparent_1px),linear-gradient(to_bottom,#fff_1px,transparent_1px)]"></div>
        </div>

        <div class="absolute inset-0 z-10 overflow-hidden pointer-events-none">
            <div class="absolute -top-24 -left-24 w-[600px] h-[600px] bg-brand-yellow/10 blur-[120px] rounded-full animate-orbit-slow"></div>
            <div class="absolute top-1/2 -right-48 w-[500px] h-[500px] bg-brand-yellow/5 blur-[100px] rounded-full animate-orbit-reverse"></div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-20 px-6 text-center" id="parallax-content">
            <div class="inline-flex items-center gap-4 mb-12 px-4 py-2 bg-white/[0.03] border border-white/10 backdrop-blur-md rounded-full">
                <div class="flex gap-1">
                    <span class="w-1.5 h-1.5 bg-brand-yellow rounded-full animate-ping"></span>
                    <span class="w-1.5 h-1.5 bg-brand-yellow/50 rounded-full"></span>
                </div>
                <span class="text-[8px] font-black uppercase tracking-[0.8em] text-brand-yellow">System: Active</span>
            </div>

            <h1 class="relative text-[13vw] lg:text-[10vw] font-black uppercase tracking-tighter leading-[0.8] mb-8">
                <span class="block mix-blend-difference">Global</span>
                <span class="block text-transparent stroke-brand-yellow italic" style="-webkit-text-stroke: 1.5px #ffcc00;">Partnership.</span>
            </h1>

            <div class="flex flex-col md:flex-row items-center justify-center gap-12 mt-16 animate-fade-in-up">
                <div class="flex flex-col items-center md:items-start text-center md:text-left gap-2">
                    <span class="text-[9px] font-black uppercase text-brand-yellow tracking-[0.4em]">Strategic Axis</span>
                    <p class="max-w-[280px] text-[11px] font-bold uppercase tracking-widest text-white/40 leading-relaxed">
                        We work with chosen partners to ensure stability and control in production.
                    </p>
                </div>

                <div class="h-12 w-px bg-white/10 hidden md:block"></div>

                <div class="group relative cursor-pointer">
                    <div class="flex items-center gap-6">
                        <span class="text-[10px] font-black uppercase tracking-[0.5em] group-hover:text-brand-yellow transition-colors duration-500">Initiate Sync</span>
                        <div class="w-16 h-16 rounded-full border border-white/10 flex items-center justify-center group-hover:bg-brand-yellow group-hover:border-brand-yellow transition-all duration-500 overflow-hidden relative">
                            <svg class="w-5 h-5 text-white absolute transition-all duration-500 group-hover:translate-x-12" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                            <svg class="w-5 h-5 text-black absolute -translate-x-12 transition-all duration-500 group-hover:translate-x-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path d="M17 8l4 4m0 0l-4 4m4-4H3" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="absolute bottom-10 w-full px-6 lg:px-20 flex justify-between items-end z-30 pointer-events-none">
            <div class="flex flex-col gap-1">
                <span class="text-[8px] font-mono text-white/20 uppercase tracking-widest">Protocol: AXN-G01</span>
                <span class="text-[8px] font-mono text-white/20 uppercase tracking-widest">Sector: Strategic_Alliances</span>
            </div>
            <div class="h-24 w-[1px] bg-gradient-to-t from-brand-yellow to-transparent"></div>
        </div>
    </section>

    <section class="py-24 px-6 lg:px-20 bg-[#050505]">
        <div class="container mx-auto max-w-7xl">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">
                
                <div class="lg:col-span-8 group relative bg-[#080808] border border-white/5 p-12 overflow-hidden transition-all duration-700 hover:border-brand-yellow/50">
                    <div class="relative z-10 flex flex-col h-full justify-between min-h-[400px]">
                        <div>
                            <span class="text-[9px] font-black text-brand-yellow uppercase tracking-widest">Division: Supply_Chain</span>
                            <h3 class="text-5xl font-black uppercase tracking-tighter mt-4 max-w-md">Strategic Supplier Partnerships</h3>
                        </div>
                        <p class="text-sm text-white/40 uppercase tracking-tight max-w-lg leading-loose group-hover:text-white transition-colors">
                            AXION builds strong relationships with trusted suppliers to ensure consistent access to high-quality materials and equipment.
                        </p>
                    </div>
                    <div class="absolute -right-10 -bottom-10 text-[180px] font-black text-white/[0.02] select-none group-hover:text-brand-yellow/[0.03] transition-all">01</div>
                </div>

                <div class="lg:col-span-4 bg-brand-yellow p-12 flex flex-col justify-between text-black relative group overflow-hidden">
                    <h3 class="text-2xl font-black uppercase tracking-tighter relative z-10">Manufacturing Collaborations</h3>
                    <p class="text-[11px] font-bold uppercase leading-relaxed mb-8 relative z-10">
                        Selected manufacturing partners to maintain strict quality control and production standards.
                    </p>
                    <div class="text-9xl font-black tracking-tighter opacity-10 absolute -right-4 -bottom-4 group-hover:scale-110 transition-transform">02</div>
                </div>

                @php
                    $nodes = [
                        ['Logistics & Distribution Alliances', 'These alliances improve supply chain efficiency, reduce delays, and maintain stability.', '03'],
                        ['Technology & Innovation Partnerships', 'Collaborate with technology partners to enhance innovation and process optimization.', '04']
                    ];
                @endphp

                @foreach($nodes as $node)
                <div class="lg:col-span-6 group relative border border-white/5 p-12 flex flex-col gap-8 hover:bg-white/[0.02] transition-all duration-500">
                    <div class="flex justify-between items-start">
                        <h3 class="text-3xl font-black uppercase tracking-tighter">{{ $node[0] }}</h3>
                        <div class="text-[10px] font-mono text-white/20 group-hover:text-brand-yellow transition-colors">{{ $node[2] }}</div>
                    </div>
                    <p class="text-xs text-white/40 uppercase tracking-widest leading-relaxed">
                        {{ $node[1] }}
                    </p>
                    <div class="mt-auto h-px w-full bg-white/5 relative overflow-hidden">
                        <div class="absolute inset-0 bg-brand-yellow -translate-x-full group-hover:translate-x-0 transition-transform duration-1000"></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-32 bg-black border-t border-white/5 overflow-hidden">
        <div class="container mx-auto px-6 lg:px-20 mb-16 flex justify-between items-end">
            <h2 class="text-6xl font-black uppercase tracking-tighter">The Brain <span class="text-brand-yellow italic">Trust.</span></h2>
            <div class="hidden md:block h-px flex-1 mx-20 bg-white/10"></div>
            <p class="text-[10px] font-black text-white/30 uppercase tracking-[0.4em]">Section: Leaders</p>
        </div>

        <div class="flex overflow-x-auto no-scrollbar gap-px bg-white/10 px-6 lg:px-20 border-y border-white/10">
            @php
                $team = [
                    ['Michael Harrington', 'CEO', '801'],
                    ['Daniel Whitmore', 'COO', '802'],
                    ['Sarah Mitchell', 'QA Lead', '803'],
                    ['Personnel_ID', 'Reserved', '804']
                ];
            @endphp

            @foreach($team as $m)
            <div class="min-w-[400px] group relative bg-black aspect-[3/4] overflow-hidden flex-1 hover:flex-[1.5] transition-all duration-[1s]">
                <img src="https://picsum.photos/800/1000?grayscale&random={{ $m[2] }}" class="w-full h-full object-cover opacity-20 blur-sm group-hover:opacity-100 group-hover:blur-none group-hover:scale-105 transition-all duration-[1s]">
                <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
                <div class="absolute bottom-10 left-10">
                    <p class="text-brand-yellow text-[9px] font-black uppercase tracking-[0.4em] mb-2">{{ $m[1] }}</p>
                    <h4 class="text-3xl font-black uppercase tracking-tighter text-white">{{ $m[0] }}</h4>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <footer class="bg-[#020202] pt-32 pb-12 px-6 lg:px-20 border-t border-white/5">
        <div class="container mx-auto max-w-7xl">
            <div class="flex flex-col lg:flex-row justify-between items-center gap-12 mb-32">
                <h2 class="text-6xl lg:text-8xl font-black uppercase tracking-tighter leading-none text-center lg:text-left">
                    Powerful platforms keep <br/> <span class="text-brand-yellow">global markets moving.</span>
                </h2>
                <a href="#" class="px-16 py-8 bg-brand-yellow text-black font-black uppercase tracking-[0.5em] text-[10px] hover:invert transition-all duration-700">
                    Get Started
                </a>
            </div>
            <div class="flex flex-col md:flex-row justify-between items-center opacity-30 text-[9px] font-black uppercase tracking-widest gap-4">
                <p>© 2026 AXION — ALL RIGHTS RESERVED</p>
                <div class="flex gap-10">
                    <a href="#" class="hover:text-brand-yellow transition-colors">Instagram</a>
                    <a href="#" class="hover:text-brand-yellow transition-colors">LinkedIn</a>
                    <a href="#" class="hover:text-brand-yellow transition-colors">YouTube</a>
                </div>
            </div>
        </div>
    </footer>

</div>

<style>
    @keyframes orbit-slow {
        0% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(100px, 50px) scale(1.1); }
        100% { transform: translate(0, 0) scale(1); }
    }
    @keyframes orbit-reverse {
        0% { transform: translate(0, 0) scale(1); }
        50% { transform: translate(-80px, -40px) scale(1.2); }
        100% { transform: translate(0, 0) scale(1); }
    }
    .animate-orbit-slow { animation: orbit-slow 20s ease-in-out infinite; }
    .animate-orbit-reverse { animation: orbit-reverse 25s ease-in-out infinite; }
    .animate-fade-in-up { animation: fadeInUp 1s ease-out forwards; }
    
    @keyframes fadeInUp {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .no-scrollbar::-webkit-scrollbar { display: none; }
    .no-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
</style>

