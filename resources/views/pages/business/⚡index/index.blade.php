<div>
    <section class="py-20 lg:py-32 relative overflow-hidden bg-[#050505] min-h-screen">
        {{-- THE "BLUEPRINT DOT" PATTERN --}}
        <div class="absolute inset-0 pointer-events-none overflow-hidden">
            <div class="absolute inset-0 opacity-[0.15]"
                 style="background-image: radial-gradient(circle at 2px 2px, #ffffff 1px, transparent 0);
                        background-size: 40px 40px;
                        [mask-image:linear-gradient(to_bottom,black_5%,transparent_80%)]">
            </div>
        </div>

        <div class="container mx-auto px-6 lg:px-10 relative z-10">
            {{-- TITLE SECTION --}}
            <div class="mb-20 text-center">
                <h1 class="text-6xl lg:text-8xl font-black uppercase tracking-tighter leading-none text-brand-yellow">
                    Our Businesses
                </h1>
            </div>

            {{-- Business Cards Grid --}}
            <livewire:business-list />
        </div>
    </section>
</div>