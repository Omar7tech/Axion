<div class="bg-[#020202] text-white min-h-screen">
    {{-- HERO WITH COVER IMAGE --}}
    <section class="relative h-[60vh] md:h-[70vh] flex items-end overflow-hidden">
        {{-- Cover Image Background --}}
        <div class="absolute inset-0 z-0">
            <img src="{{ $this->coverImage }}" alt="{{ $investment->project_name }}"
                class="w-full h-full object-cover {{ $this->hasCoverImage ? '' : 'opacity-20' }}">
            <div class="absolute inset-0 bg-gradient-to-t from-[#020202] via-[#020202]/70 to-transparent"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:32px_32px]"></div>
        </div>

        {{-- Hero Content --}}
        <div class="container mx-auto max-w-6xl px-6 lg:px-20 pb-16 relative z-10">
            <div class="space-y-6">
                @if($investment->investment_amount)
                    <div class="inline-flex items-center gap-3 px-4 py-2 bg-brand-yellow text-black rounded-full">
                        <span class="text-[10px] font-black uppercase tracking-wider">Investment</span>
                        <span class="text-lg font-black">${{ number_format($investment->investment_amount, 0) }}</span>
                    </div>
                @endif

                <h1 class="text-4xl md:text-6xl lg:text-7xl font-black uppercase tracking-tight leading-tight">
                    {{ $investment->project_name }}
                </h1>

                @if($investment->project_description)
                    <p class="text-lg md:text-xl text-white/80 max-w-3xl font-medium italic">
                        {{ $investment->project_description }}
                    </p>
                @endif

                <div class="flex items-center gap-4 text-sm text-white/50">
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span class="uppercase tracking-wider">{{ $investment->created_at->format('F Y') }}</span>
                    </div>
                    <span class="w-px h-4 bg-white/20"></span>
                    <div class="flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full {{ $investment->is_active ? 'bg-green-500' : 'bg-red-500' }}"></span>
                        <span class="uppercase tracking-wider">{{ $investment->is_active ? 'Active' : 'Inactive' }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- GALLERY SECTION --}}
    @if($this->hasGallery)
        <section class="py-12 px-6 lg:px-20 border-t border-white/5">
            <div class="container mx-auto max-w-6xl">
                <h3 class="text-xs font-black uppercase tracking-widest text-brand-yellow mb-6">Project Gallery</h3>
                <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
                    @foreach($this->galleryImages as $media)
                        <div class="relative aspect-square overflow-hidden rounded-lg group cursor-pointer border border-white/10 hover:border-brand-yellow/40 transition-all">
                            <img src="{{ $media->getUrl('webp') }}" alt="{{ $investment->project_name }}"
                                class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                            <div class="absolute inset-0 bg-black/0 group-hover:bg-black/20 transition-all"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    {{-- CONTENT SECTION --}}
    @if($investment->project_content)
        <section class="py-16 px-6 lg:px-20 border-t border-white/5">
            <div class="container mx-auto max-w-4xl">
                <div class="prose prose-invert prose-lg max-w-none">
                    <h2 class="text-2xl md:text-3xl font-black uppercase tracking-tight text-white mb-8">Project Details</h2>
                    <div class="text-white/70 leading-relaxed">
                        {!! $investment->project_content !!}
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- CTA SECTION --}}
    <section class="py-16 px-6 lg:px-20 border-t border-white/5">
        <div class="container mx-auto max-w-6xl">
            <div class="p-12 rounded-2xl bg-gradient-to-br from-brand-yellow/10 to-transparent border border-brand-yellow/20 text-center">
                <h3 class="text-3xl md:text-4xl font-black uppercase tracking-tight mb-4">Interested in This Investment?</h3>
                <p class="text-white/60 mb-8 max-w-2xl mx-auto">
                    Contact our investment team to learn more about this opportunity and how you can be part of our growth.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a wire:navigate href="{{ route('contact-us') }}"
                        class="inline-flex items-center justify-center gap-3 px-8 py-4 bg-brand-yellow text-black font-black uppercase text-sm tracking-wider hover:bg-brand-yellow/90 transition-all">
                        Contact Investment Team
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                        </svg>
                    </a>
                    <a wire:navigate href="{{ route('investments') }}"
                        class="inline-flex items-center justify-center gap-3 px-8 py-4 border-2 border-white/20 text-white font-black uppercase text-sm tracking-wider hover:border-brand-yellow/40 hover:text-brand-yellow transition-all">
                        View All Investments
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>