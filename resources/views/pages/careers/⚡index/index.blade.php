<div>
    <section class="py-12 md:py-24 relative overflow-hidden bg-[#050505] min-h-screen">
        {{-- THE "BLUEPRINT DOT" PATTERN --}}
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute inset-0 opacity-[0.1]" style="background-image: radial-gradient(circle at 1px 1px, #ffffff 1px, transparent 0);
                        background-size: 24px 24px;
                        -webkit-mask-image: linear-gradient(to bottom, black 0%, transparent 100%);
                        mask-image: linear-gradient(to bottom, black 0%, transparent 100%);">
            </div>
        </div>

        <div class="container mx-auto px-6 lg:px-10 relative z-10">
            {{-- TITLE SECTION --}}
            <div class="mb-10 md:mb-20 text-center">
                <h1
                    class="text-4xl sm:text-6xl lg:text-8xl font-black uppercase tracking-tighter leading-[0.9] text-brand-yellow">
                    Join Our <span class="block sm:inline">Team</span>
                </h1>
                {{-- Minimal decorative line --}}
                <div class="mt-4 h-px w-12 bg-brand-yellow/30 mx-auto"></div>
                <p class="mt-6 text-white/60 text-sm md:text-base max-w-2xl mx-auto font-medium">
                    Explore career opportunities at Axion and be part of our mission to deliver industrial excellence.
                </p>
            </div>

            {{-- Career Cards Grid --}}
            <div class="w-full">
                <livewire:career-list />
            </div>
        </div>
    </section>
</div>