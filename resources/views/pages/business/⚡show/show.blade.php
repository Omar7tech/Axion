<div class="bg-[#020202] text-white selection:bg-brand-yellow selection:text-black">
    
    {{-- COMPACT HERO --}}
    <section class="relative h-[50vh] flex items-end pb-12 px-6 lg:px-20 overflow-hidden">
        {{-- Background with Subtle Gradient Overlay --}}
        <div class="absolute inset-0 z-0">
            @if($business->hasMedia('cover'))
                <img src="{{ $business->getFirstMediaUrl('cover', 'webp') }}" class="w-full h-full object-cover grayscale opacity-30">
            @else
                <img src="{{ asset('covers/aboutus.png') }}" class="w-full h-full object-cover grayscale opacity-20">
            @endif
            
            {{-- Tailwind Patterns & Gradients --}}
            <div class="absolute inset-0 bg-gradient-to-t from-[#020202] via-[#020202]/40 to-transparent"></div>
            <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#ffffff33_1px,transparent_1px)] [background-size:16px_16px]"></div>
        </div>

        <div class="container mx-auto max-w-6xl relative z-10">
            <div class="space-y-4">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full border border-white/10 bg-white/5 backdrop-blur-md">
                    <span class="w-1.5 h-1.5 rounded-full bg-brand-yellow"></span>
                    <span class="text-[9px] font-black uppercase tracking-widest text-white/70">Division {{ $business->id }}</span>
                </div>
                <h1 class="text-4xl md:text-6xl font-black uppercase tracking-tight leading-tight">
                    {{ $business->title }}
                </h1>
            </div>
        </div>
    </section>

    {{-- REFINED CONTENT GRID --}}
    <section class="py-16 px-6 lg:px-20 border-t border-white/5 bg-[#020202]">
        <div class="container mx-auto max-w-6xl">
            <div class="grid lg:grid-cols-12 gap-12 items-start">
                
                {{-- Side Info --}}
                <div class="lg:col-span-4 space-y-8">
                    @if($business->description)
                        <div class="p-8 rounded-2xl bg-gradient-to-br from-white/[0.03] to-transparent border border-white/5 shadow-2xl">
                            <h3 class="text-[10px] font-bold uppercase tracking-widest text-brand-yellow mb-4">Strategic Overview</h3>
                            <p class="text-base text-white/70 leading-relaxed font-medium">
                                {{ $business->description }}
                            </p>
                        </div>
                    @endif

                    {{-- Dynamic Stats or Indicators --}}
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 rounded-xl border border-white/5 bg-white/[0.01]">
                            <span class="block text-[9px] text-white/30 uppercase tracking-widest mb-1">Status</span>
                            <span class="text-xs font-bold text-white/90">Operational</span>
                        </div>
                        <div class="p-4 rounded-xl border border-white/5 bg-white/[0.01]">
                            <span class="block text-[9px] text-white/30 uppercase tracking-widest mb-1">Region</span>
                            <span class="text-xs font-bold text-white/90">Global</span>
                        </div>
                    </div>
                </div>

                {{-- Detailed Content --}}
                <div class="lg:col-span-8">
                    <div class="relative p-1 md:p-8 rounded-3xl">
                        {{-- Subtle background glow pattern --}}
                        <div class="absolute inset-0 opacity-20 bg-[linear-gradient(to_right,#80808012_1px,transparent_1px),linear-gradient(to_bottom,#80808012_1px,transparent_1px)] bg-[size:24px_24px]"></div>
                        
                        <div class="relative prose prose-invert prose-sm md:prose-base max-w-none 
                                    prose-p:text-white/50 prose-p:leading-relaxed
                                    prose-headings:text-white prose-headings:font-bold prose-headings:tracking-tight
                                    prose-strong:text-brand-yellow prose-strong:font-black
                                    prose-ul:space-y-2 prose-li:text-white/50">
                            {!! $business->content !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- COMPACT CTA --}}
    <footer class="py-12 border-t border-white/5 px-6 lg:px-20 bg-[#010101]">
        <div class="container mx-auto max-w-6xl flex flex-col md:flex-row justify-between items-center gap-8">
            <div class="text-center md:text-left">
                <p class="text-xs font-bold uppercase tracking-[0.3em] text-white/20 mb-1">Axion Ecosystem</p>
                <p class="text-sm font-medium text-white/60">Industrial Solutions & Trade</p>
            </div>
            
            <a href="{{ route('business.index') }}" 
               class="inline-flex items-center gap-4 px-6 py-3 rounded-xl bg-white/5 border border-white/10 text-xs font-black uppercase tracking-widest hover:bg-brand-yellow hover:text-black transition-all duration-300">
                <span>View All Divisions</span>
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
            </a>
        </div>
    </footer>
</div>