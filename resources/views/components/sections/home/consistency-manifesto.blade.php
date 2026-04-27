<section class="relative py-24 bg-[#050505] overflow-hidden border-y border-white/5 font-sans" 
    x-data="{ 
        init() {
            if(window.innerWidth > 768) {
                // Parallax for the 'AX' Background Text
                $el.addEventListener('mousemove', (e) => {
                    const { clientX, clientY } = e;
                    const xPos = (clientX / window.innerWidth - 0.5) * 40;
                    const yPos = (clientY / window.innerHeight - 0.5) * 40;
                    gsap.to($refs.bgText, { x: xPos, y: yPos, duration: 1, ease: 'power2.out' });
                });

                // Magnetic Heading logic
                const heading = $el.querySelector('.magnetic-heading');
                heading.addEventListener('mousemove', (e) => {
                    const rect = heading.getBoundingClientRect();
                    const x = (e.clientX - rect.left - rect.width/2) * 0.2;
                    const y = (e.clientY - rect.top - rect.height/2) * 0.2;
                    gsap.to(heading, { x, y, duration: 0.4 });
                });
                heading.addEventListener('mouseleave', () => {
                    gsap.to(heading, { x: 0, y: 0, duration: 0.6, ease: 'elastic.out(1, 0.3)' });
                });
            }
        }
    }">

    {{-- DYNAMIC GRID BACKGROUND --}}
    <div class="absolute inset-0 pointer-events-none opacity-[0.07]"
        style="background-image: radial-gradient(circle, #ffffff 1px, transparent 1px); background-size: 30px 30px;">
    </div>

    <div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-brand-yellow/[0.03] blur-[120px] rounded-full"></div>

    <div class="container mx-auto px-6 lg:px-20 max-w-7xl relative z-10">
        <div class="flex flex-col lg:flex-row items-stretch gap-0 border border-white/10 bg-black/40 backdrop-blur-3xl overflow-hidden shadow-[0_50px_100px_-20px_rgba(0,0,0,1)] group/main">

            {{-- LEFT CONTENT BLOCK --}}
            <div class="flex-1 p-8 lg:p-16 space-y-12 border-r border-white/10 relative overflow-hidden">
                <div class="absolute top-0 left-0 w-4 h-4 border-t border-l border-brand-yellow transition-all duration-700 group-hover/main:w-12 group-hover/main:h-12"></div>
                
                <div class="magnetic-heading inline-block">
                    <h2 class="text-5xl lg:text-7xl font-black uppercase tracking-tighter leading-[0.85] text-white italic">
                        <span class="inline-block transition-transform duration-500 group-hover/main:-translate-y-1">Precision</span> <br />
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-white via-white/40 to-transparent transition-all duration-1000 group-hover/main:tracking-normal">Over Noise.</span>
                    </h2>
                </div>

                <div class="max-w-sm space-y-6 relative">
                    <div class="absolute -left-6 top-0 w-[1px] h-0 bg-brand-yellow transition-all duration-1000 group-hover/main:h-full"></div>
                    <p class="text-sm md:text-base text-white/40 leading-relaxed font-light lowercase tracking-wider transition-colors duration-500 group-hover/main:text-white/70">
                        Consistency isn't a goal—it's a <span class="text-white/90 font-medium italic">mechanical necessity</span>. 
                        We eliminate variance to ensure your scaling remains mathematically predictable.
                    </p>
                </div>
            </div>

            {{-- RIGHT ACTION BLOCK --}}
            <div class="w-full lg:w-[400px] bg-brand-yellow flex flex-col justify-between p-8 lg:p-12 relative overflow-hidden group/card">
                
                <div x-ref="bgText"
                    class="absolute top-0 right-0 p-4 opacity-20 text-black text-[120px] font-black leading-none select-none pointer-events-none -mr-8 -mt-8 transition-transform duration-200">
                    AX
                </div>

                <div class="relative z-10 space-y-8">
                    {{-- STATIC EXCLAMATION ICON --}}
                    <div class="w-12 h-12 border-2 border-black flex items-center justify-center font-black text-black italic">
                        !
                    </div>

                    <div class="space-y-4">
                        <h3 class="text-xl font-black uppercase tracking-tighter leading-tight text-black">
                            The Unified <br /> 
                            <span class="group-hover/card:pl-4 transition-all duration-500 inline-block">Standard.</span>
                        </h3>
                        <p class="text-sm font-bold leading-snug text-black/80">
                            Our promise is mechanical. Standardized workflows are the architecture of our operation, 
                            delivering absolute uniform quality from concept to execution.
                        </p>
                    </div>
                </div>

                <div class="relative z-10 pt-10">
                    <button class="w-full flex items-center justify-between transition-transform duration-500 group-hover/card:translate-x-2">
                        <div class="flex flex-col items-start">
                            <span class="text-[10px] font-black uppercase tracking-widest text-black">Verify Standards</span>
                            <div class="h-[2px] w-0 bg-black group-hover/card:w-full transition-all duration-700 delay-100"></div>
                        </div>
                        
                       
                    </button>
                </div>

                <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/20 to-transparent -translate-x-full group-hover/card:animate-[shimmer_1.5s_infinite] pointer-events-none"></div>
            </div>
        </div>
    </div>

    <style>
        @keyframes shimmer {
            0% { transform: translateX(-100%); }
            100% { transform: translateX(100%); }
        }
    </style>
</section>