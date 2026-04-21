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
