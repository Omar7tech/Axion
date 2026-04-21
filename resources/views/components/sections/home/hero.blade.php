{{-- ===================== 01. THE NEXUS HERO (COMPACT) ===================== --}}
<section class="relative min-h-[90vh] flex items-center px-6 lg:px-20 py-10 overflow-hidden">

    {{-- Background Glow --}}
    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-yellow/5 blur-[100px] rounded-full -mr-48 -mt-48"></div>

    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-16 items-center">

            {{-- Left: Content --}}
            <div class="lg:col-span-6 space-y-6 md:space-y-8">
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
