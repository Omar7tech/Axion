<div class="bg-[#020202] text-white selection:bg-brand-yellow selection:text-black">
    
    {{-- HERO: INVESTOR RELATIONS --}}
    <section class="relative h-[40vh] md:h-[50vh] flex items-end pb-12 px-6 lg:px-20 overflow-hidden">
        {{-- Geometric Background --}}
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:32px_32px]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-[#020202] via-transparent to-transparent"></div>
            {{-- Accent Glow --}}
            <div class="absolute top-0 right-0 w-full h-full bg-[radial-gradient(circle_at_70%_20%,#brand-yellow10_0%,transparent_50%)] opacity-40"></div>
        </div>

        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="space-y-4">
                <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight leading-tight">
                    Powering Global <br/><span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-white/40">Industrial Growth.</span>
                </h1>
            </div>
        </div>
    </section>

    {{-- ACTIVE INVESTMENTS --}}
    <section class="py-16 px-6 lg:px-20 border-t border-white/5 bg-[#020202]">
        <div class="container mx-auto max-w-7xl">
            <div class="mb-12 text-center">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
                    Active <span class="text-brand-yellow">Investment Opportunities</span>
                </h2>
                <p class="text-white/50 text-sm uppercase tracking-wider">Explore our current portfolio of strategic investments</p>
            </div>

            <livewire:investment-list />
        </div>
    </section>

    {{-- INVESTMENT CONTENT --}}
    <section class="py-16 px-6 lg:px-20 border-t border-white/5 bg-[#020202]">
        <div class="container mx-auto max-w-6xl">
            <div class="grid lg:grid-cols-12 gap-8 items-start">

                {{-- Left: The Value Proposition --}}
                <div class="lg:col-span-5 space-y-6">
                    <div class="p-8 rounded-2xl bg-gradient-to-br from-white/[0.04] to-transparent border border-white/10">
                        <h3 class="text-xs font-black uppercase tracking-widest text-brand-yellow mb-6">Strategy & Vision</h3>
                        <p class="text-lg leading-relaxed text-white/90 font-medium italic mb-6">
                            "To create a unified ecosystem where industrial scale meets digital precision, ensuring sustainable returns in global trade."
                        </p>
                        <div class="space-y-4">
                            <div class="flex justify-between py-3 border-b border-white/5">
                                <span class="text-[10px] uppercase text-white/40">Market Reach</span>
                                <span class="text-xs font-bold">Global / Multi-Sector</span>
                            </div>
                            <div class="flex justify-between py-3 border-b border-white/5">
                                <span class="text-[10px] uppercase text-white/40">Asset Ownership</span>
                                <span class="text-xs font-bold">100% Controlled</span>
                            </div>
                            <div class="flex justify-between py-3">
                                <span class="text-[10px] uppercase text-white/40">Growth Target</span>
                                <span class="text-xs font-bold text-brand-yellow">Accelerated 2026</span>
                            </div>
                        </div>
                    </div>

                    {{-- Call to Action Card --}}
                    <div class="p-8 rounded-2xl bg-brand-yellow text-black group cursor-pointer transition-transform hover:-translate-y-1">
                        <h4 class="font-black uppercase text-xl mb-2">Request Prospectus</h4>
                        <p class="text-[10px] font-bold uppercase opacity-70 mb-6">Get access to private financial data & forecasts.</p>
                        <a wire:navigate href="{{route('contact-us') }}" class="flex items-center justify-between font-black text-sm uppercase tracking-tighter border-b-2 border-black/20 pb-2">
                            Connect with Finance
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                        </a>
                    </div>
                </div>

                {{-- Right: Content Details --}}
                <div class="lg:col-span-7">
                    <div class="prose prose-invert prose-sm md:prose-base max-w-none">
                        <h2 class="text-2xl font-black uppercase tracking-tight text-white mb-8">Why Invest in Our Ecosystem?</h2>

                        <p class="text-white/60 leading-relaxed mb-8">
                            We operate at the intersection of raw material supply, industrial manufacturing, and high-tech distribution. By verticalizing our operations, we eliminate middle-market friction and maximize margin retention across all divisions.
                        </p>

                        <div class="grid md:grid-cols-2 gap-6 not-prose mb-12">
                            <div class="p-6 rounded-xl border border-white/5 bg-white/[0.02]">
                                <div class="w-8 h-8 rounded-lg bg-brand-yellow/10 flex items-center justify-center mb-4">
                                    <svg class="w-4 h-4 text-brand-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/></svg>
                                </div>
                                <h4 class="font-bold uppercase text-xs mb-2">Diversified Risk</h4>
                                <p class="text-[11px] text-white/40 uppercase leading-relaxed">Exposure across construction, agriculture, and tech logistics reduces sector-specific volatility.</p>
                            </div>
                            <div class="p-6 rounded-xl border border-white/5 bg-white/[0.02]">
                                <div class="w-8 h-8 rounded-lg bg-brand-yellow/10 flex items-center justify-center mb-4">
                                    <svg class="w-4 h-4 text-brand-yellow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                                </div>
                                <h4 class="font-bold uppercase text-xs mb-2">Operational Integrity</h4>
                                <p class="text-[11px] text-white/40 uppercase leading-relaxed">Proprietary logistics and management software ensure full transparency and real-time tracking.</p>
                            </div>
                        </div>

                        <h3 class="text-white font-bold uppercase tracking-tight">Key Pillars of Growth</h3>
                        <ul class="list-none space-y-4 pl-0">
                            <li class="flex items-start gap-4">
                                <span class="text-brand-yellow font-black">01</span>
                                <div>
                                    <strong class="text-white block uppercase text-xs">Infrastructure Expansion</strong>
                                    <span class="text-white/40 text-sm">Scaling our physical distribution hubs to meet the rising demand in international trade routes.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="text-brand-yellow font-black">02</span>
                                <div>
                                    <strong class="text-white block uppercase text-xs">Digital Transformation</strong>
                                    <span class="text-white/40 text-sm">Deploying AI-driven procurement tools to optimize supply chains and reduce operational overhead by 20%.</span>
                                </div>
                            </li>
                            <li class="flex items-start gap-4">
                                <span class="text-brand-yellow font-black">03</span>
                                <div>
                                    <strong class="text-white block uppercase text-xs">Strategic Partnerships</strong>
                                    <span class="text-white/40 text-sm">Securing exclusive long-term supply contracts with top-tier global manufacturers and exporters.</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>