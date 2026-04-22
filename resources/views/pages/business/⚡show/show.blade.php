<div>
    {{-- HERO SECTION --}}
    <section class="relative min-h-[70vh] flex items-end px-6 lg:px-20 pb-20">
        {{-- Background Image with Split Gradient --}}
        <div class="absolute inset-0 z-0">
            @if($business->hasMedia('cover'))
                <img src="{{ $business->getFirstMediaUrl('cover', 'webp') }}" class="w-full h-full object-cover grayscale">
            @else
                <img src="{{ asset('covers/aboutus.png') }}" class="w-full h-full object-cover grayscale">
            @endif
            {{-- Technical Grid Pattern --}}
            <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#ffffff33_1px,transparent_1px)] [background-size:20px_20px]"></div>
            <div class="absolute inset-0 bg-gradient-to-t from-brand-black via-brand-black/40 to-transparent"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-brand-black/80 to-transparent"></div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-12 gap-8 items-end">
                <div class="lg:col-span-8">
                    <div class="flex items-center gap-3 mb-6 overflow-hidden">
                        <span class="w-8 h-[1px] bg-brand-yellow"></span>
                        <span class="text-[9px] font-black uppercase tracking-[0.8em] text-brand-yellow animate-pulse">Core Business</span>
                    </div>
                    <h1 class="text-6xl md:text-8xl font-black uppercase tracking-tighter leading-[0.85]">
                        {{ $business->title }}
                    </h1>
                </div>
                <div class="lg:col-span-4 lg:pb-4">
                    @if($business->subtitle)
                        <p class="text-xs md:text-sm font-bold uppercase tracking-widest leading-relaxed border-l-2 border-brand-yellow pl-6 opacity-80">
                            {{ $business->subtitle }}
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- CONTENT SECTION --}}
    <section class="relative min-h-[60vh] bg-[#080808] py-24 px-6 lg:px-20 overflow-hidden">
        {{-- Background Geometric Pattern --}}
        <div class="absolute inset-0 z-0">
            <div class="absolute inset-0 opacity-[0.15]"
                 style="background-image: radial-gradient(circle at 2px 2px, #ffffff 1px, transparent 0);
                        background-size: 40px 40px;">
            </div>
        </div>

        <div class="container mx-auto max-w-7xl relative z-10">
            <div class="grid lg:grid-cols-12 gap-16">

                {{-- Left: Description --}}
                @if($business->description)
                <div class="lg:col-span-5">
                    <div class="space-y-6">
                        <div class="flex items-center gap-4">
                            <div class="h-[1px] w-12 bg-brand-yellow"></div>
                            <span class="text-brand-yellow text-[10px] font-black uppercase tracking-[0.4em]">Overview</span>
                        </div>
                        <p class="text-lg leading-relaxed text-white/80">
                            {{ $business->description }}
                        </p>
                    </div>
                </div>
                @endif

                {{-- Right: Content --}}
                @if($business->content)
                <div class="lg:col-span-7">
                    <div class="relative bg-white/[0.03] backdrop-blur-3xl border border-white/10 p-10 lg:p-12 rounded-2xl shadow-[0_50px_100px_rgba(0,0,0,0.5)]">
                        <div class="absolute -top-6 -left-6 text-8xl font-black text-brand-yellow/10 select-none">"</div>
                        <div class="prose prose-invert prose-sm max-w-none relative z-10">
                            <div class="text-sm leading-relaxed text-white/70 space-y-4">
                                {!! nl2br(e($business->content)) !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                {{-- Full Width if only one exists --}}
                @if($business->description && !$business->content)
                    {{-- Already handled in left column --}}
                @elseif(!$business->description && $business->content)
                    <div class="lg:col-span-12">
                        <div class="relative bg-white/[0.03] backdrop-blur-3xl border border-white/10 p-10 lg:p-16 rounded-2xl shadow-[0_50px_100px_rgba(0,0,0,0.5)]">
                            <div class="prose prose-invert max-w-none">
                                <div class="text-base leading-relaxed text-white/80 space-y-4">
                                    {!! nl2br(e($business->content)) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </section>

    {{-- CTA / BACK SECTION --}}
    <section class="py-20 bg-brand-black border-t border-white/5 px-6 lg:px-20">
        <div class="container mx-auto max-w-7xl">
            <div class="flex flex-col md:flex-row items-center justify-between gap-8">
                <div class="space-y-2">
                    <h3 class="text-3xl font-black uppercase tracking-tighter">Explore More</h3>
                    <p class="text-xs text-white/50 uppercase tracking-widest">Discover our other core businesses</p>
                </div>
                <a href="{{ route('business.index') }}"
                   class="group flex items-center gap-4 px-8 py-4 border-2 border-brand-yellow text-brand-yellow font-black uppercase text-xs tracking-[0.2em] transition-all duration-300 hover:bg-brand-yellow hover:text-black">
                    <span>View All Businesses</span>
                    <svg class="w-4 h-4 transition-transform group-hover:translate-x-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>