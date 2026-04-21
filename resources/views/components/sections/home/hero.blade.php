<section class="relative min-h-[90vh] flex items-center px-6 lg:px-20 py-10 overflow-hidden bg-[#050505]">

    {{-- BACKGROUND DECORATION --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.02]"
        style="background-size: 80px 80px; background-image: linear-gradient(to right, rgba(255,255,255,0.5) 1px, transparent 1px), linear-gradient(to bottom, rgba(255,255,255,0.5) 1px, transparent 1px);">
    </div>

    <div class="absolute inset-0 pointer-events-none bg-[radial-gradient(ellipse_at_top_right,rgba(230,177,46,0.03),transparent_50%)]">
    </div>

    <div class="absolute top-0 right-0 w-[400px] h-[400px] bg-brand-yellow/5 blur-[100px] rounded-full -mr-48 -mt-48">
    </div>

    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-16 items-center">

            <div class="lg:col-span-6 space-y-10 md:space-y-14" 
                x-data="{ 
                    init() {
                        if(window.innerWidth > 768) {
                            // Button Interactions
                            $el.querySelectorAll('.actuator-btn').forEach(btn => {
                                btn.addEventListener('mousemove', (e) => {
                                    const rect = btn.getBoundingClientRect();
                                    const x = (e.clientX - rect.left - rect.width / 2) * 0.4;
                                    const y = (e.clientY - rect.top - rect.height / 2) * 0.4;
                                    gsap.to(btn.querySelector('.btn-content'), { x, y, duration: 0.35, ease: 'power3.out' });
                                });
                                btn.addEventListener('mouseleave', () => {
                                    gsap.to(btn.querySelector('.btn-content'), { x: 0, y: 0, duration: 0.8, ease: 'elastic.out(1.1, 0.4)' });
                                });
                            });

                            // Headline Parallax Animation
                            const title = $el.querySelector('.main-title');
                            title.addEventListener('mousemove', (e) => {
                                const rect = title.getBoundingClientRect();
                                const x = (e.clientX - rect.left - rect.width / 2) * 0.15;
                                const y = (e.clientY - rect.top - rect.height / 2) * 0.15;
                                gsap.to(title.querySelector('.stroke-text'), { x: x, y: y, duration: 0.4, ease: 'power2.out' });
                            });
                            title.addEventListener('mouseleave', () => {
                                gsap.to(title.querySelector('.stroke-text'), { x: 0, y: 0, duration: 0.6, ease: 'power2.out' });
                            });
                        }
                    }
                }">

                {{-- 01. THE BRAND SIGNATURE --}}
                <div class="relative space-y-4">
                    <div class="absolute -left-8 top-0 hidden lg:flex flex-col items-center gap-4 py-2">
                        <span class="[writing-mode:vertical-lr] text-[10px] font-black uppercase tracking-[0.4em] text-brand-yellow/60 select-none">
                            Innovation Hub
                        </span>
                        <div class="h-12 w-[1px] bg-gradient-to-b from-brand-yellow/50 to-transparent"></div>
                    </div>

                    <h1 class="main-title group cursor-default text-6xl md:text-7xl lg:text-8xl font-black tracking-tighter uppercase leading-[0.85] text-white">
                        <span class="inline-block transition-transform duration-500 group-hover:translate-x-2">AXION</span><br />
                        <span class="stroke-text inline-block text-transparent transition-all duration-500 group-hover:drop-shadow-[0_0_15px_rgba(230,177,46,0.4)]" 
                              style="-webkit-text-stroke: 1.5px rgba(230,177,46,0.8);">Holding Group</span>
                    </h1>

                    <div class="flex items-center gap-6 group cursor-default">
                        <div class="h-[2px] w-12 bg-brand-yellow transition-all duration-500 group-hover:w-20"></div>
                        <p class="text-sm lg:text-md font-bold text-white/90 tracking-[0.15em] uppercase italic transition-all duration-500 group-hover:translate-x-2">
                            Platform for Global <span class="text-brand-yellow underline decoration-2 underline-offset-4">Industrial Evolution</span>
                        </p>
                    </div>
                </div>

                {{-- 02. THE ECOSYSTEM BLURB --}}
                <div class="relative max-w-lg group cursor-default">
                    <p class="text-sm md:text-base text-white/50 leading-relaxed font-medium tracking-wide border-l-0 group-hover:border-l-2 border-brand-yellow/50 group-hover:pl-6 transition-all duration-500">
                        A unified ecosystem where <span class="text-white group-hover:text-brand-yellow transition-colors duration-500">advanced tech</span> meets
                        <span class="text-white group-hover:text-brand-yellow transition-colors duration-500">global trade</span>. We don't just bridge markets;
                        we architect the future of industrial synergy.
                    </p>
                </div>

                {{-- 03. THE ELITE ACTUATOR BUTTONS --}}
                <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-6 pt-4">

                    {{-- PRIMARY: THE 'FUSION' CORE --}}
                    <button class="actuator-btn group relative h-16 lg:w-64 overflow-hidden bg-brand-yellow"
                        style="clip-path: polygon(0 0, 100% 0, 100% 70%, 88% 100%, 0 100%);">

                        <div class="absolute inset-0 bg-black translate-x-[-101%] group-hover:translate-x-0 transition-transform duration-500 ease-[cubic-bezier(0.85,0,0.15,1)]">
                        </div>

                        <div class="btn-content relative z-10 flex items-center justify-between h-full px-8 pointer-events-none">
                            <span class="text-[14px] font-black uppercase tracking-[0.25em] text-black group-hover:text-brand-yellow transition-colors duration-300">
                                Schedule Now
                            </span>
                            <div class="flex flex-col gap-[3px]">
                                <div class="w-4 h-[2px] bg-black group-hover:bg-brand-yellow transition-all"></div>
                                <div class="w-4 h-[2px] bg-black group-hover:bg-brand-yellow transition-all translate-x-1">
                                </div>
                            </div>
                        </div>
                    </button>

                    {{-- SECONDARY: THE 'SCANNER' PERIMETER --}}
                    <button @mouseenter="gsap.to($refs.sLine, { width: '100%', duration: 0.5, ease: 'expo.inOut' })"
                        @mouseleave="gsap.to($refs.sLine, { width: '0%', duration: 0.5, ease: 'expo.inOut' })"
                        class="actuator-btn group relative h-16 lg:w-64 border-2 border-white/10 hover:border-brand-yellow/40 transition-all duration-500"
                        style="clip-path: polygon(10% 0, 100% 0, 100% 100%, 0 100%, 0 30%);">

                        <div x-ref="sLine" class="absolute top-0 left-0 h-[2px] w-0 bg-brand-yellow z-20"></div>

                        <div class="absolute inset-0 bg-white/[0.03] backdrop-blur-xl group-hover:bg-brand-yellow/[0.03] transition-all">
                        </div>

                        <div class="btn-content relative z-10 flex items-center justify-center h-full px-6 pointer-events-none">
                            <span class="text-[14px] font-black uppercase tracking-[0.25em] text-white/50 group-hover:text-white transition-colors">
                                Our Divisions
                            </span>
                        </div>

                        <div class="absolute top-2 right-2 w-1 h-1 bg-brand-yellow/30 group-hover:bg-brand-yellow animate-pulse">
                        </div>
                        <div class="absolute bottom-2 left-2 w-1 h-1 bg-brand-yellow/30 group-hover:bg-brand-yellow animate-pulse">
                        </div>
                    </button>
                </div>
            </div>

            {{-- VIDEO COLUMN WITH LOCATION TAG --}}
            <div class="lg:col-span-6 relative">
                <div class="relative rounded-xl overflow-hidden shadow-2xl border border-white/10 group">
                    {{-- LOCATION TAG --}}
                    <div class="absolute top-6 left-6 z-20 flex items-center gap-3 transition-all duration-500 opacity-0 -translate-x-4 group-hover:opacity-100 group-hover:translate-x-0">
                        <div class="w-1.5 h-1.5 bg-brand-yellow animate-pulse rounded-full shadow-[0_0_8px_rgba(230,177,46,0.8)]"></div>
                        <div class="flex flex-col">
                            <span class="text-[10px] font-black uppercase tracking-[0.2em] text-brand-yellow leading-none">Global Operations</span>
                            <span class="text-xs font-bold text-white tracking-wide">New York City, USA</span>
                        </div>
                        {{-- DECORATIVE CORNER --}}
                        <div class="absolute -top-2 -left-2 w-4 h-4 border-t border-l border-brand-yellow/50"></div>
                    </div>

                    <video autoplay muted loop playsinline
                        class="w-full aspect-video lg:aspect-square object-cover transition-transform duration-1000 group-hover:scale-110">
                        <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
                    </video>

                    {{-- HUD OVERLAY EFFECT --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700 pointer-events-none"></div>
                </div>
            </div>
        </div>
    </div>
</section>