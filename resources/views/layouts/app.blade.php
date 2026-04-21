<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'AXION - ' . ($title ?? config('app.name')) }}</title>
    <link rel="icon" type="image/png" href="/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="/favicon.svg" />
    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="Axion" />
    <link rel="manifest" href="/site.webmanifest" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>



<body
    class="bg-brand-black text-brand-white font-poppins  selection:bg-brand-yellow selection:text-black overflow-x-hidden">
    <x-nav />

    <main class="pt-[66px]">
        {{ $slot }}
    </main>
    <footer class="relative pt-24 pb-10 px-6 lg:px-20 overflow-hidden bg-brand-black">
        {{-- Subtle Background Architectural Grid --}}
        <div
            class="absolute inset-0 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:40px_40px] [mask-image:radial-gradient(ellipse_60%_50%_at_50%_0%,#000_70%,transparent_100%)]">
        </div>

        <div class="container mx-auto max-w-7xl relative z-10">
            {{-- Top Tier: Brand & CTA --}}
            <div class="flex flex-col lg:flex-row justify-between items-start lg:items-end gap-10 mb-20">
                <div class="space-y-6">
                    <h5 class="text-4xl font-black uppercase tracking-tighter italic">Axion<span
                            class="text-brand-yellow">.</span></h5>
                    <p class="text-[10px] text-white/40 uppercase leading-loose tracking-[0.3em] max-w-sm">
                        Standardizing global innovation through <br /> precision, trade, and industrial excellence.
                    </p>
                </div>
                <div class="flex flex-col sm:flex-row gap-4 w-full lg:w-auto">
                    <div class="px-6 py-4 border border-white/10 bg-white/5 backdrop-blur-md">
                        <p class="text-[8px] text-white/30 uppercase tracking-[0.2em] mb-1">Inquiries</p>
                        <p class="text-[11px] font-black uppercase">support@axion.com</p>
                    </div>
                    <div class="px-6 py-4 border border-white/10 bg-white/5 backdrop-blur-md">
                        <p class="text-[8px] text-white/30 uppercase tracking-[0.2em] mb-1">Headquarters</p>
                        <p class="text-[11px] font-black uppercase">+1 123 456 7890</p>
                    </div>
                </div>
            </div>

            {{-- Middle Tier: Navigation Grid --}}
            <div class="grid grid-cols-2 md:grid-cols-4 gap-12 py-16 border-y border-white/5">
                <div class="space-y-6">
                    <h6 class="text-[11px] font-black uppercase tracking-[0.3em] text-brand-yellow">Ecosystem</h6>
                    <ul class="text-[10px] uppercase tracking-widest space-y-4 text-white/50">
                        <li><a href="#"
                                class="hover:text-brand-yellow hover:translate-x-1 transition-all inline-block">Architecture</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-brand-yellow hover:translate-x-1 transition-all inline-block">Global
                                Trading</a></li>
                        <li><a href="#"
                                class="hover:text-brand-yellow hover:translate-x-1 transition-all inline-block">Digital
                                Assets</a></li>
                        <li><a href="#"
                                class="hover:text-brand-yellow hover:translate-x-1 transition-all inline-block">Development</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-6">
                    <h6 class="text-[11px] font-black uppercase tracking-[0.3em] text-brand-yellow">Company</h6>
                    <ul class="text-[10px] uppercase tracking-widest space-y-4 text-white/50">
                        <li><a href="#"
                                class="hover:text-brand-yellow hover:translate-x-1 transition-all inline-block">About
                                Axion</a></li>
                        <li><a href="#"
                                class="hover:text-brand-yellow hover:translate-x-1 transition-all inline-block">Sustainability</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-brand-yellow hover:translate-x-1 transition-all inline-block">Partnerships</a>
                        </li>
                        <li><a href="#"
                                class="hover:text-brand-yellow hover:translate-x-1 transition-all inline-block">Careers</a>
                        </li>
                    </ul>
                </div>
                <div class="space-y-6">
                    <h6 class="text-[11px] font-black uppercase tracking-[0.3em] text-brand-yellow">Connect</h6>
                    <div class="flex gap-4">
                        <a href="#"
                            class="w-10 h-10 border border-white/10 flex items-center justify-center text-[10px] hover:bg-brand-yellow hover:text-black transition-all">LN</a>
                        <a href="#"
                            class="w-10 h-10 border border-white/10 flex items-center justify-center text-[10px] hover:bg-brand-yellow hover:text-black transition-all">TW</a>
                        <a href="#"
                            class="w-10 h-10 border border-white/10 flex items-center justify-center text-[10px] hover:bg-brand-yellow hover:text-black transition-all">IG</a>
                    </div>
                </div>
                <div class="space-y-6 relative">
                    <h6 class="text-[11px] font-black uppercase tracking-[0.3em] text-brand-yellow">Newsletter</h6>
                    <div class="flex">
                        <input type="email" placeholder="EMAIL ADDRESS"
                            class="bg-white/5 border border-white/10 px-4 py-3 text-[10px] w-full focus:outline-none focus:border-brand-yellow/50 transition-colors uppercase">
                        <button class="bg-brand-yellow text-black px-4 py-3 transition-transform hover:scale-105">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path d="M14 5l7 7m0 0l-7 7m7-7H3" stroke-width="3" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Bottom Tier: Legal & Credit --}}
            <div class="flex flex-col md:flex-row justify-between items-center pt-10 gap-6">
                <p class="text-[8px] font-bold text-white/20 uppercase tracking-[0.5em]">
                    © 2026 AXION HOLDING GROUP — ALL RIGHTS RESERVED
                </p>
                <div class="flex gap-8 text-[8px] font-bold text-white/20 uppercase tracking-[0.2em]">
                    <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
                    <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
                    <span class="text-brand-yellow/40">Powered By Webtimize Local</span>
                </div>
            </div>
        </div>
    </footer>
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/SH20RAJ/ScrollProgressJS@main/ScrollProgress.js"></script>
</body>

</html>