<div x-data="{ open: false, activeImg: '' }" class="bg-[#020202] text-white min-h-screen selection:bg-brand-yellow selection:text-black">
    
    {{-- LIGHTBOX MODAL --}}
    <template x-teleport="body">
        <div x-show="open" 
             x-transition:enter="transition ease-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition ease-in duration-200"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="fixed inset-0 z-[100] flex items-center justify-center bg-black/95 backdrop-blur-sm p-4 md:p-10"
             @keydown.escape.window="open = false"
             style="display: none;">
            
            <button @click="open = false" class="absolute top-6 right-6 text-white/50 hover:text-white transition-colors">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
            </button>

            <img :src="activeImg" class="max-w-full max-h-full object-contain rounded shadow-2xl border border-white/10" @click.away="open = false">
        </div>
    </template>

    {{-- HERO SECTION --}}
    <section class="relative min-h-[50vh] md:min-h-[60vh] flex items-end overflow-hidden">
        <div class="absolute inset-0 z-0">
            <img src="{{ $this->coverImage }}" alt="{{ $investment->project_name }}"
                class="w-full h-full object-cover {{ $this->hasCoverImage ? '' : 'opacity-10' }}">
            <div class="absolute inset-0 bg-gradient-to-t from-[#020202] via-[#020202]/80 to-transparent"></div>
            <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:40px_40px]"></div>
        </div>

        <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 pb-12 relative z-10">
            <div class="max-w-4xl space-y-4 md:space-y-6">
                @if($investment->investment_amount)
                    <div class="inline-flex items-center gap-2 px-3 py-1.5 bg-brand-yellow text-black rounded-sm shadow-xl shadow-brand-yellow/10">
                        <span class="text-[9px] font-black uppercase tracking-tighter border-r border-black/20 pr-2">Total Funding</span>
                        <span class="text-base md:text-xl font-black">${{ number_format($investment->investment_amount, 0) }}</span>
                    </div>
                @endif

                <h1 class="text-3xl sm:text-5xl md:text-7xl font-black uppercase tracking-tighter leading-[0.95] break-words">
                    {{ $investment->project_name }}
                </h1>

                @if($investment->project_description)
                    <p class="text-base md:text-lg text-white/70 max-w-2xl font-medium leading-snug">
                        <span class="text-brand-yellow/80 mr-2">—</span>{{ $investment->project_description }}
                    </p>
                @endif

                <div class="flex items-center gap-4 text-[10px] font-bold uppercase tracking-widest text-white/40">
                    <div class="flex items-center gap-1.5">
                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                        </svg>
                        <span>{{ $investment->created_at->format('M Y') }}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- MAIN GRID LAYOUT --}}
    <div class="container mx-auto max-w-6xl px-4 sm:px-6 lg:px-8 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
            
            {{-- LEFT: CONTENT --}}
            <div class="lg:col-span-8 space-y-12">
                @if($investment->project_content)
                    <div class="space-y-6">
                        <h2 class="text-xl md:text-2xl font-black uppercase tracking-tighter border-b border-white/10 pb-4">Strategy & Execution</h2>
                        <article class="prose prose-invert prose-lg max-w-none
                            prose-headings:text-white prose-headings:font-bold prose-headings:tracking-tight
                            prose-h1:text-3xl prose-h1:mb-4 prose-h1:mt-8
                            prose-h2:text-2xl prose-h2:mb-3 prose-h2:mt-6
                            prose-h3:text-xl prose-h3:mb-2 prose-h3:mt-5
                            prose-h4:text-lg prose-h4:mb-2 prose-h4:mt-4
                            prose-p:text-white/70 prose-p:leading-relaxed prose-p:mb-4
                            prose-a:text-brand-yellow prose-a:no-underline hover:prose-a:underline prose-a:font-medium
                            prose-strong:text-white prose-strong:font-bold
                            prose-em:text-white/80 prose-em:italic
                            prose-ul:list-disc prose-ul:pl-6 prose-ul:mb-4 prose-ul:text-white/70
                            prose-ol:list-decimal prose-ol:pl-6 prose-ol:mb-4 prose-ol:text-white/70
                            prose-li:mb-2 prose-li:text-white/70
                            prose-blockquote:border-l-4 prose-blockquote:border-brand-yellow prose-blockquote:pl-4 prose-blockquote:italic prose-blockquote:text-white/60
                            prose-code:text-brand-yellow prose-code:bg-white/5 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-code:text-sm
                            prose-pre:bg-white/5 prose-pre:border prose-pre:border-white/10 prose-pre:rounded-lg prose-pre:p-4
                            prose-img:rounded-lg prose-img:border prose-img:border-white/10
                            prose-hr:border-white/10 prose-hr:my-8
                            prose-table:border-collapse prose-table:w-full
                            prose-thead:border-b prose-thead:border-white/20
                            prose-th:text-left prose-th:p-3 prose-th:font-bold prose-th:text-white
                            prose-td:p-3 prose-td:border-b prose-td:border-white/10 prose-td:text-white/70">
                            {!! $investment->project_content !!}
                        </article>
                    </div>
                @endif

                {{-- GALLERY WITH ALPINE TRIGGER --}}
                @if($this->hasGallery)
                    <div class="space-y-6">
                        <h3 class="text-xs font-black uppercase tracking-[0.2em] text-brand-yellow">Visual Documentation</h3>
                        <div class="grid grid-cols-2 sm:grid-cols-3 gap-3">
                            @foreach($this->galleryImages as $media)
                                <div @click="activeImg = '{{ $media->getUrl('webp') }}'; open = true" 
                                     class="relative aspect-[4/3] overflow-hidden rounded group bg-white/5 border border-white/5 cursor-zoom-in">
                                    <img src="{{ $media->getUrl('webp') }}" alt="{{ $investment->project_name }}"
                                        class="w-full h-full object-cover transition-all duration-700 group-hover:scale-105 group-hover:opacity-80">
                                    {{-- Hover Overlay Icon --}}
                                    <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity bg-black/20">
                                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/></svg>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endif
            </div>

            {{-- RIGHT: STICKY CTA CARD --}}
            <aside class="lg:col-span-4">
                <div class="sticky top-25 p-8 rounded-xl bg-white/[0.03] border border-white/10 backdrop-blur-md">
                    <h3 class="text-xl font-black uppercase tracking-tight mb-3">Next Phase</h3>
                    <p class="text-xs text-white/50 leading-relaxed mb-6">
                        Join the ecosystem driving {{ $investment->project_name }}. Contact our team for detailed metrics and participation terms.
                    </p>
                    
                    <div class="flex flex-col gap-3">
                        <a wire:navigate href="{{ route('contact-us') }}"
                            class="flex items-center justify-center gap-3 px-6 py-4 bg-brand-yellow text-black font-black uppercase text-xs tracking-widest hover:translate-y-[-2px] transition-all active:translate-y-0 shadow-xl shadow-brand-yellow/10">
                            Inquire Now
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                            </svg>
                        </a>
                        <a wire:navigate href="{{ route('investments') }}"
                            class="flex items-center justify-center gap-3 px-6 py-4 border border-white/10 text-white font-black uppercase text-xs tracking-widest hover:bg-white/5 transition-all">
                            Browse All
                        </a>
                    </div>

                    <div class="mt-6 pt-6 border-t border-white/5 flex items-center gap-3 opacity-30 grayscale">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75 11.25 15 15 9.75m-3-7.036A11.959 11.959 0 0 1 3.598 6 11.99 11.99 0 0 0 3 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285Z" />
                        </svg>
                        <span class="text-[9px] uppercase tracking-widest">Verified Opportunity</span>
                    </div>
                </div>
            </aside>
        </div>
    </div>
</div>