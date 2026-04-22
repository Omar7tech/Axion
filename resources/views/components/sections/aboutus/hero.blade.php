<section class="relative min-h-[60vh] md:min-h-[70vh] flex items-end px-4 sm:px-6 lg:px-20 pb-12 md:pb-20 overflow-hidden">
    {{-- Background Image with Split Gradient --}}
    <div class="absolute inset-0 z-0">
        <img src="{{ asset('covers/aboutus.png') }}" class="w-full h-full object-cover grayscale">
        {{-- Technical Grid Pattern --}}
        <div class="absolute inset-0 opacity-20 bg-[radial-gradient(#ffffff33_1px,transparent_1px)] [background-size:20px_20px]"></div>
        <div class="absolute inset-0 bg-gradient-to-t from-brand-black via-brand-black/40 to-transparent"></div>
        <div class="absolute inset-0 bg-gradient-to-r from-brand-black/80 to-transparent"></div>
    </div>

    <div class="container mx-auto max-w-7xl relative z-10 w-full">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-end">
            
            {{-- Title Column --}}
            <div class="lg:col-span-8">
                <div class="flex items-center gap-3 mb-4 md:mb-6 overflow-hidden">
                    <span class="w-6 md:w-8 h-[1px] bg-brand-yellow"></span>
                    <span class="text-[8px] md:text-[9px] font-black uppercase tracking-[0.5em] md:tracking-[0.8em] text-brand-yellow animate-pulse shrink-0">System Origin</span>
                </div>
                
                {{-- Responsive Fonts: text-5xl (Mobile), text-7xl (Tablet), text-9xl (Desktop) --}}
                <h1 class="text-5xl sm:text-7xl md:text-8xl lg:text-9xl font-black uppercase tracking-tighter leading-[0.9] md:leading-[0.75] break-words">
                    Axion<br/>
                    <span class="text-transparent" style="-webkit-text-stroke: 1px rgba(255,255,255,0.8);">Holdings.</span>
                </h1>
            </div>

            {{-- Subtitle Column --}}
            <div class="lg:col-span-4 lg:pb-4">
                <div class="max-w-xs md:max-w-none">
                    <p class="text-[10px] md:text-xs lg:text-sm font-bold uppercase tracking-widest leading-relaxed border-l-2 border-brand-yellow pl-4 md:pl-6 opacity-80">
                        A partner focused on stable and reliable supply chains, production efficiency, and systemic growth.
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</section>