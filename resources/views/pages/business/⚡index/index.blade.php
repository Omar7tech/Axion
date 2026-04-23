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
                {{-- text-4xl on mobile (perfect fit), text-6xl on tablet, text-8xl on desktop --}}
                <h1
                    class="text-4xl sm:text-6xl lg:text-8xl font-black uppercase tracking-tighter leading-[0.9] text-brand-yellow">
                    Our <span class="block sm:inline">Businesses</span>
                </h1>
                {{-- Minimal decorative line --}}
                <div class="mt-4 h-px w-12 bg-brand-yellow/30 mx-auto"></div>
            </div>

            {{-- Business Cards Grid --}}
            <div class="w-full">
                <livewire:business-list />
            </div>
        </div>
    </section>
</div>