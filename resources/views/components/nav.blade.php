@php
    $navBusinesses = \App\Models\Business::limit(3)->get();
@endphp

<div
    id="site-nav-wrapper"
    x-data="{
        open: false,
        scrolled: false,
        businessesOpen: false,
        businessesMobileOpen: false,
        init() {
            this.onScroll();
            window.addEventListener('scroll', () => this.onScroll(), { passive: true });
        },
        onScroll() {
            this.scrolled = window.scrollY > 30;
            if (this.scrolled) {
                this.open = false;
                this.businessesOpen = false;
            }
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
                ? 'max-w-6xl h-14 rounded-2xl border border-white/10 bg-brand-second-black/70 backdrop-blur-sm shadow-[0_8px_40px_rgba(0,0,0,0.5)]'
                : 'max-w-none h-16 bg-brand-black/80 backdrop-blur-md border-b border-white/5'"
        >
            {{-- Logo --}}
            <a href="{{ route('home') }}" wire:navigate  id="nav-logo">
                <img src="{{ asset('icons/axion2.png') }}"  class="h-8 bg-cover w-full " alt="Axion Logo">
            </a>

            {{-- Desktop links --}}
            <nav class="hidden md:flex items-center gap-0" aria-label="Primary" id="nav-links">
                @foreach([
                    ['Home', route('home')],
                ] as [$label, $href])
                <a
                    href="{{ $href }}"
                    wire:navigate
                    class="nav-link group relative px-4 py-2 text-[15px] font-medium text-white/55 hover:text-white transition-colors duration-200"
                >
                    {{ $label }}
                    <span class="absolute inset-x-4 bottom-0.5 h-px bg-brand-yellow scale-x-0 origin-left group-hover:scale-x-100 transition-transform duration-300 ease-out"></span>
                </a>
                @endforeach

                {{-- Businesses Dropdown --}}
                <div
                    class="relative"
                    @mouseenter="businessesOpen = true"
                    @mouseleave="businessesOpen = false"
                >
                    <a
                        href="{{ route('business.index') }}"
                        wire:navigate
                        class="nav-link group relative px-4 py-2 text-[15px] font-medium text-white/55 hover:text-white transition-colors duration-200 flex items-center gap-1"
                    >
                        Businesses
                        <svg class="w-3 h-3 transition-transform duration-200" :class="businessesOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                        </svg>
                        <span class="absolute inset-x-4 bottom-0.5 h-px bg-brand-yellow scale-x-0 origin-left group-hover:scale-x-100 transition-transform duration-300 ease-out"></span>
                    </a>

                    {{-- Dropdown Menu --}}
                    <div
                        x-show="businessesOpen"
                        x-cloak
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2"
                        class="absolute left-0 mt-1 w-64 rounded-xl border border-white/10 bg-[#111111]/95 backdrop-blur-2xl shadow-[0_16px_48px_rgba(0,0,0,0.6)] overflow-hidden"
                    >
                        <div class="p-2 max-h-96 overflow-y-auto">
                            @forelse($navBusinesses as $business)
                                @php
                                    $useExternal = $business->is_published && $business->link;
                                @endphp
                                <a
                                    href="{{ $useExternal ? $business->link : route('business.show', $business) }}"
                                    @if($useExternal) target="_blank" @else wire:navigate @endif
                                    class="group flex items-center justify-between rounded-lg px-3 py-2.5 hover:bg-white/5 transition-colors duration-150"
                                >
                                    <div class="flex-1 min-w-0">
                                        <div class="text-sm font-medium text-white/80 group-hover:text-white transition-colors duration-150 truncate">{{ $business->title }}</div>
                                        @if($business->subtitle)
                                            <div class="text-xs text-white/30 mt-0.5 truncate">{{ Str::limit($business->subtitle, 40) }}</div>
                                        @endif
                                    </div>
                                    <svg class="h-3 w-3 text-brand-yellow opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-200 flex-shrink-0 ml-2" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                                    </svg>
                                </a>
                            @empty
                                <div class="px-3 py-2.5 text-xs text-white/30">No businesses available</div>
                            @endforelse

                            <div class="mx-2 my-1.5 border-t border-white/[0.06]"></div>

                            <a
                                href="{{ route('business.index') }}"
                                wire:navigate
                                class="group flex items-center justify-center rounded-lg px-3 py-2.5 text-sm font-medium text-brand-yellow hover:bg-brand-yellow/10 transition-colors duration-150"
                            >
                                View All Businesses
                            </a>
                        </div>
                    </div>
                </div>

                @foreach([
                    ['Investments', route('investments')],
                    ['Partnerships', route('global-partnerships')],
                    ['About Us', route('about-us')],
                    ['Contact Us', route('contact-us')],
                ] as [$label, $href])
                <a
                    href="{{ $href }}"
                    wire:navigate
                    class="nav-link group relative px-4 py-2 text-[15px] font-medium text-white/55 hover:text-white transition-colors duration-200"
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
                {{-- Home Link --}}
                <a
                    href="{{ route('home') }}"
                    wire:navigate
                    @click="open = false"
                    class="group flex items-center justify-between rounded-xl px-4 py-3.5 hover:bg-white/4 transition-colors duration-150"
                >
                    <div>
                        <div class="text-sm font-medium text-white/80 group-hover:text-white transition-colors duration-150">Home</div>
                        <div class="text-xs text-white/30 mt-0.5">Back to start</div>
                    </div>
                    <svg class="h-3.5 w-3.5 text-brand-yellow opacity-0 -translate-x-1 group-hover:opacity-100 group-hover:translate-x-0 transition-all duration-200" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5 21 12m0 0-7.5 7.5M21 12H3"/>
                    </svg>
                </a>

                {{-- Businesses Expandable --}}
                <div class="rounded-xl overflow-hidden">
                    <button
                        @click="businessesMobileOpen = !businessesMobileOpen"
                        class="w-full group flex items-center justify-between rounded-xl px-4 py-3.5 hover:bg-white/4 transition-colors duration-150"
                    >
                        <div class="text-left">
                            <div class="text-sm font-medium text-white/80 group-hover:text-white transition-colors duration-150">Businesses</div>
                            <div class="text-xs text-white/30 mt-0.5">Explore our divisions</div>
                        </div>
                        <svg class="h-3.5 w-3.5 text-white/50 transition-transform duration-200" :class="businessesMobileOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5"/>
                        </svg>
                    </button>

                    <div
                        x-show="businessesMobileOpen"
                        x-cloak
                        x-collapse
                        class="pl-4 pr-2 pb-2 space-y-1"
                    >
                        @forelse($navBusinesses as $business)
                            @php
                                $useExternal = $business->is_published && $business->link;
                            @endphp
                            <a
                                href="{{ $useExternal ? $business->link : route('business.show', $business) }}"
                                @if($useExternal) target="_blank" @else wire:navigate @endif
                                @click="open = false; businessesMobileOpen = false"
                                class="group flex items-center gap-2 rounded-lg px-3 py-2 hover:bg-white/4 transition-colors duration-150"
                            >
                                <svg class="h-1 w-1 text-brand-yellow flex-shrink-0" fill="currentColor" viewBox="0 0 8 8">
                                    <circle cx="4" cy="4" r="3"/>
                                </svg>
                                <div class="flex-1 min-w-0">
                                    <div class="text-xs font-medium text-white/70 group-hover:text-white transition-colors duration-150 truncate">{{ $business->title }}</div>
                                </div>
                            </a>
                        @empty
                            <div class="px-3 py-2 text-xs text-white/30">No businesses available</div>
                        @endforelse

                        <a
                            href="{{ route('business.index') }}"
                            wire:navigate
                            @click="open = false; businessesMobileOpen = false"
                            class="flex items-center gap-2 rounded-lg px-3 py-2.5 text-xs font-medium text-brand-yellow hover:bg-brand-yellow/10 transition-colors duration-150 mt-1"
                        >
                            View All →
                        </a>
                    </div>
                </div>

                @foreach([
                    ['Investments', route('investments'), 'Explore opportunities'],
                    ['Partnerships', route('global-partnerships'), 'Our world network'],
                    ['About Us', route('about-us'), 'Our story'],
                    ['Contact Us', route('contact-us'), 'Get in touch'],
                ] as [$label, $href, $desc])
                <a
                    href="{{ $href }}"
                    wire:navigate
                    @click="open = false"
                    class="group flex items-center justify-between rounded-xl px-4 py-3.5 hover:bg-white/4 transition-colors duration-150"
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
            </div>
        </div>
    </div>
</div>