<section class="relative min-h-[70vh] flex items-end px-6 lg:px-20 pb-20">
    {{-- Background Image with Split Gradient --}}
    <div class="absolute inset-0 z-0">
        <img src="https://picsum.photos/1920/1080?grayscale&random=101" class="w-full h-full object-cover">
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
                    <span class="text-[9px] font-black uppercase tracking-[0.8em] text-brand-yellow animate-pulse">System Origin</span>
                </div>
                <h1 class="text-7xl md:text-9xl font-black uppercase tracking-tighter leading-[0.75]">
                    Axion<br/><span class="text-transparent stroke-white stroke-1" style="-webkit-text-stroke: 1px white;">Holdings.</span>
                </h1>
            </div>
            <div class="lg:col-span-4 lg:pb-4">
                <p class="text-xs md:text-sm font-bold uppercase tracking-widest leading-relaxed border-l-2 border-brand-yellow pl-6 opacity-80">
                    A partner focused on stable and reliable supply chains, production efficiency, and systemic growth.
                </p>
            </div>
        </div>
    </div>
</section>
