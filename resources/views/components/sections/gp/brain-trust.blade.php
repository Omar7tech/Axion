<section class="py-20 bg-[#050505] border-t border-white/5">
    <div class="container mx-auto px-6 lg:px-20 mb-12">
        <div class="max-w-2xl">
            <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white mb-4">
                Brain Trust.
            </h2>
            <p class="text-sm text-white/40 tracking-wide uppercase">The people behind the vision.</p>
        </div>
    </div>

    <div class="px-6 lg:px-20">
        <div class="swiper brain-trust-swiper pb-12">
            <div class="swiper-wrapper">
                @php
                    // Simulated dynamic list of 10 members
                    $team = [
                        ['name' => 'Michael Harrington', 'role' => 'Founder'],
                        ['name' => 'Daniel Whitmore', 'role' => 'Operations'],
                        ['name' => 'Sarah Mitchell', 'role' => 'Design'],
                        ['name' => 'Alex Reed', 'role' => 'Development'],
                        ['name' => 'Elena Rossi', 'role' => 'Marketing'],
                        ['name' => 'Julian Banks', 'role' => 'Strategy'],
                        ['name' => 'Sophia Chen', 'role' => 'Product'],
                        ['name' => 'Marcus Thorne', 'role' => 'Finance'],
                        ['name' => 'Isabella Hart', 'role' => 'Relations'],
                        ['name' => 'Personnel_ID', 'role' => 'Open Position'],
                    ];
                @endphp

                @foreach($team as $index => $member)
                <div class="swiper-slide">
                    <div class="group relative bg-[#0a0a0a] aspect-[4/5] overflow-hidden rounded-lg transition-all duration-500 border border-white/5 hover:border-white/20">
                        
                        <img 
                            src="https://picsum.photos/800/1000?grayscale&random={{ $index }}" 
                            alt="{{ $member['name'] }}"
                            class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700 ease-in-out"
                        >
                        
                        <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
                        
                        <div class="absolute bottom-0 left-0 w-full p-6 md:p-8">
                            <span class="text-brand-yellow text-[10px] font-bold uppercase tracking-widest mb-2 block">
                                {{ $member['role'] }}
                            </span>
                            <h4 class="text-xl md:text-2xl font-bold text-white tracking-tight leading-tight">
                                {{ $member['name'] }}
                            </h4>
                            
                            <div class="w-0 group-hover:w-12 h-[1px] bg-white/30 mt-4 transition-all duration-500"></div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Navigation Controls -->
        <div class="flex items-center justify-between mt-4">
            <div class="flex items-center gap-3">
                <button id="bt-prev" class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white/10 hover:border-white/40 transition-all duration-300 active:scale-95">
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button id="bt-next" class="w-10 h-10 md:w-12 md:h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white/10 hover:border-white/40 transition-all duration-300 active:scale-95">
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>

            <!-- Progress Bar -->
            <div class="flex items-center gap-3">
                <div class="w-24 md:w-32 h-1 bg-white/10 rounded-full overflow-hidden">
                    <div id="bt-progress" class="h-full bg-brand-yellow w-0 transition-all duration-400 ease-out"></div>
                </div>
            </div>
        </div>
    </div>
</section>
