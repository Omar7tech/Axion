<div>
    {{-- Hero --}}
    <section class="relative flex min-h-[calc(100vh-66px)] flex-col items-center justify-center overflow-hidden px-6 pb-20 pt-16">
        {{-- Subtle radial glow behind headline --}}
        <div class="pointer-events-none absolute inset-0 flex items-center justify-center">
            <div class="h-[500px] w-[700px] rounded-full bg-brand-yellow/[0.04] blur-[120px]"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-4xl text-center">
            {{-- Badge --}}
            <div class="mb-8 inline-flex items-center gap-2 rounded-full border border-brand-yellow/20 bg-brand-yellow/5 px-4 py-1.5 text-xs font-medium text-brand-yellow">
                <span class="h-1.5 w-1.5 animate-pulse rounded-full bg-brand-yellow"></span>
                Now in beta — join the waitlist
            </div>

            {{-- Headline --}}
            <h1 class="mb-6 text-5xl font-bold leading-[1.06] tracking-tight text-white md:text-7xl">
                Build faster.<br>
                <span class="text-brand-yellow">Ship smarter.</span>
            </h1>

            {{-- Subtext --}}
            <p class="mx-auto mb-10 max-w-xl text-base leading-relaxed text-white/45 md:text-lg">
                Axion gives your team the tools to move at the speed of thought — from idea to production, without the friction.
            </p>

            {{-- CTAs --}}
            <div class="flex flex-col items-center justify-center gap-3 sm:flex-row">
                <a href="#" class="group inline-flex items-center gap-2 rounded-xl bg-brand-yellow px-7 py-3.5 text-sm font-semibold text-brand-black transition-all duration-200 hover:brightness-105 active:scale-95">
                    Get Started Free
                    <svg class="h-4 w-4 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
                <a href="#features" class="inline-flex items-center gap-2 px-4 py-3.5 text-sm text-white/50 transition-colors duration-200 hover:text-white">
                    See how it works
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m19 9-7 7-7-7"/>
                    </svg>
                </a>
            </div>
        </div>

        {{-- Bottom fade --}}
        <div class="pointer-events-none absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-brand-black to-transparent"></div>
    </section>

    {{-- Features --}}
    <section id="features" class="border-t border-white/[0.05] px-6 py-24">
        <div class="mx-auto mb-14 max-w-2xl text-center">
            <p class="mb-3 text-xs font-semibold uppercase tracking-widest text-brand-yellow">Features</p>
            <h2 class="text-3xl font-bold text-white md:text-4xl">Everything you need</h2>
            <p class="mt-3 text-sm text-white/35">Placeholder — edit me later.</p>
        </div>
        <div class="mx-auto grid max-w-5xl gap-4 md:grid-cols-3">
            @foreach(range(1, 3) as $i)
            <div class="h-44 rounded-2xl border border-white/[0.06] bg-brand-second-black/50"></div>
            @endforeach
        </div>
    </section>

    {{-- Work --}}
    <section id="work" class="border-t border-white/[0.05] px-6 py-24">
        <div class="mx-auto mb-14 max-w-2xl text-center">
            <p class="mb-3 text-xs font-semibold uppercase tracking-widest text-brand-yellow">Work</p>
            <h2 class="text-3xl font-bold text-white md:text-4xl">Selected projects</h2>
            <p class="mt-3 text-sm text-white/35">Placeholder — edit me later.</p>
        </div>
        <div class="mx-auto grid max-w-5xl gap-4 md:grid-cols-2">
            @foreach(range(1, 4) as $i)
            <div class="h-52 rounded-2xl border border-white/[0.06] bg-brand-second-black/50"></div>
            @endforeach
        </div>
    </section>

    {{-- Pricing --}}
    <section id="pricing" class="border-t border-white/[0.05] px-6 py-24">
        <div class="mx-auto mb-14 max-w-2xl text-center">
            <p class="mb-3 text-xs font-semibold uppercase tracking-widest text-brand-yellow">Pricing</p>
            <h2 class="text-3xl font-bold text-white md:text-4xl">Simple, honest pricing</h2>
            <p class="mt-3 text-sm text-white/35">Placeholder — edit me later.</p>
        </div>
        <div class="mx-auto grid max-w-4xl gap-4 md:grid-cols-3">
            @foreach(range(1, 3) as $i)
            <div class="h-72 rounded-2xl border border-white/[0.06] bg-brand-second-black/50" style="{{ $i === 2 ? 'border-color: rgba(230,177,46,0.2)' : '' }}"></div>
            @endforeach
        </div>
    </section>

    {{-- About --}}
    <section id="about" class="border-t border-white/[0.05] px-6 py-24">
        <div class="mx-auto mb-14 max-w-2xl text-center">
            <p class="mb-3 text-xs font-semibold uppercase tracking-widest text-brand-yellow">About</p>
            <h2 class="text-3xl font-bold text-white md:text-4xl">Our story</h2>
            <p class="mt-3 text-sm text-white/35">Placeholder — edit me later.</p>
        </div>
        <div class="mx-auto max-w-4xl rounded-2xl border border-white/[0.06] bg-brand-second-black/50 h-56"></div>
    </section>

    {{-- Footer spacer --}}
    <div class="border-t border-white/[0.05] py-10 text-center text-xs text-white/20">
        © {{ date('Y') }} Axion. All rights reserved.
    </div>
</div>
