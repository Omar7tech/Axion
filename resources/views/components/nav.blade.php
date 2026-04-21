<div
    id="site-nav-wrapper"
    x-data="{
        open: false,
        scrolled: false,
        init() {
            this.onScroll();
            window.addEventListener('scroll', () => this.onScroll(), { passive: true });
        },
        onScroll() {
            this.scrolled = window.scrollY > 30;
            if (this.scrolled) this.open = false;
        }
    }"
    class="fixed inset-x-0 top-0 z-50"
>
    {{-- Brand accent line --}}
    <div class="h-[2px] w-full bg-linear-to-r from-transparent via-brand-yellow to-transparent opacity-50"></div>

    {{-- Nav positioner: shrinks + adds padding on scroll --}}
    <div
        class="relative flex justify-center transition-all duration-500 ease-out"
        :class="scrolled ? 'px-4 pt-3' : 'px-0 pt-0'"
    >
        {{-- Main nav bar --}}
        <header
            id="site-nav"
            class="flex w-full items-center justify-between px-6 transition-all duration-500 ease-out"
            :class="scrolled
                ? 'max-w-4xl h-14 rounded-2xl border border-white/10 bg-brand-second-black/90 backdrop-blur-xl shadow-[0_8px_40px_rgba(0,0,0,0.5)]'
                : 'max-w-none h-16 bg-brand-black/80 backdrop-blur-md border-b border-white/[0.05]'"
        >
            {{-- Logo --}}
            <a href="{{ route('home') }}" wire:navigate  id="nav-logo">
                <img src="{{ asset('icons/axion2.png') }}"  class="h-8 bg-cover w-full " alt="Axion Logo">
            </a>

            {{-- Desktop links --}}
            <nav class="hidden md:flex items-center gap-0" aria-label="Primary" id="nav-links">
                @foreach([
                    ['Home', route('home')],
                    ['Global Partnerships', route('global-partnerships')],
                    ['About Us', route('about-us')],
                    ['Contact Us', route('contact-us')],
                ] as [$label, $href])
                <a
                    href="{{ $href }}"
                    wire:navigate
                    class="nav-link group relative px-4 py-2 text-[13px] font-medium text-white/55 hover:text-white transition-colors duration-200"
                >
                    {{ $label }}
                    <span class="absolute inset-x-4 bottom-0.5 h-px bg-brand-yellow scale-x-0 origin-left group-hover:scale-x-100 transition-transform duration-300 ease-out"></span>
                </a>
                @endforeach
            </nav>

            {{-- Desktop CTA --}}
            <div class="hidden md:flex items-center gap-5" id="nav-cta">
                <a
                    href="{{ route('contact-us') }}"
                    wire:navigate
                    id="nav-cta-btn"
                    class="group inline-flex items-center gap-1.5 rounded-xl bg-brand-yellow px-5 py-2.5 text-[13px] font-semibold text-brand-black hover:brightness-105 active:scale-95 transition-all duration-200"
                >
                    Get A Quote
                    <svg class="h-3.5 w-3.5 transition-transform duration-200 group-hover:translate-x-0.5" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
            </div>

            {{-- Mobile hamburger --}}
            <button
                @click="open = !open"
                class="md:hidden flex flex-col justify-center items-center w-9 h-9 gap-[5px] rounded-xl border border-white/10 hover:border-brand-yellow/30 transition-colors duration-200 shrink-0"
                :aria-expanded="open.toString()"
                aria-label="Toggle navigation"
            >
                <span
                    class="w-[18px] h-[1.5px] bg-white rounded-full transition-all duration-300 origin-center block"
                    :class="open ? 'rotate-45 translate-y-[6.5px]' : ''"
                ></span>
                <span
                    class="w-[18px] h-[1.5px] bg-white rounded-full transition-all duration-300 block"
                    :class="open ? 'opacity-0 scale-x-0' : ''"
                ></span>
                <span
                    class="w-[18px] h-[1.5px] bg-white rounded-full transition-all duration-300 origin-center block"
                    :class="open ? '-rotate-45 -translate-y-[6.5px]' : ''"
                ></span>
            </button>
        </header>

        {{-- Mobile dropdown --}}
        <div
            x-show="open"
            x-cloak
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 -translate-y-2 scale-[0.97]"
            x-transition:enter-end="opacity-100 translate-y-0 scale-100"
            x-transition:leave="transition ease-in duration-150"
            x-transition:leave-start="opacity-100 translate-y-0 scale-100"
            x-transition:leave-end="opacity-0 -translate-y-2 scale-[0.97]"
            class="absolute left-4 right-4 mt-1.5 rounded-2xl border border-white/10 bg-[#111111]/95 backdrop-blur-2xl shadow-[0_16px_48px_rgba(0,0,0,0.6)] overflow-hidden"
            style="top: 100%"
            @click.outside="open = false"
        >
            <div class="p-3">
                @foreach([
                    ['Home', route('home'), 'Back to start'],
                    ['Global Partnerships', route('global-partnerships'), 'Our world network'],
                    ['About Us', route('about-us'), 'Our story'],
                    ['Contact Us', route('contact-us'), 'Get in touch'],
                ] as [$label, $href, $desc])
                <a
                    href="{{ $href }}"
                    wire:navigate
                    @click="open = false"
                    class="group flex items-center justify-between rounded-xl px-4 py-3.5 hover:bg-white/[0.04] transition-colors duration-150"
                >
                    <div>
                        <div class="text-sm font-medium text-white/80 group-hover:text-white transition-colors duration-150">{{ $label }}</div>
                        <div class="text-xs text-white/30 mt-0.5">{{ $desc }}</div>
                    </div>
                    <svg class="h-3.5 w-3.5 text-brand-yellow opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-200" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>
                @endforeach

                <div class="mx-3 my-2 border-t border-white/[0.06]"></div>

                <div class="grid grid-cols-2 gap-2 px-1 pb-1">
                    <a href="#" class="flex items-center justify-center rounded-xl border border-white/10 py-3 text-sm text-white/55 hover:text-white hover:border-white/20 transition-all duration-200">
                        Sign In
                    </a>
                    <a href="{{ route('contact-us') }}" wire:navigate class="flex items-center justify-center rounded-xl bg-brand-yellow py-3 text-sm font-semibold text-brand-black hover:brightness-105 transition-all duration-200">
                        Get Started
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>