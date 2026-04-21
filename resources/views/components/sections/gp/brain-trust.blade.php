<section class="py-20 bg-[#050505] border-t border-white/5 overflow-x-scroll">
    <div class="container mx-auto px-6 lg:px-20 mb-12">
        <div class="max-w-2xl">
            <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white mb-4">
                Our <span class="italic font-serif text-brand-yellow">Collective.</span>
            </h2>
            <p class="text-sm text-white/40 tracking-wide uppercase">The people behind the vision.</p>
        </div>
    </div>

    <div class="flex overflow-x-auto no-scrollbar gap-6 px-6 lg:px-20 pb-10 snap-x snap-mandatory scroll-smooth">
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
        <div class="snap-center min-w-[75vw] md:min-w-[380px] group relative bg-[#0a0a0a] aspect-[4/5] overflow-hidden rounded-lg transition-all duration-500 border border-white/5 hover:border-white/20">
            
            <img 
                src="https://picsum.photos/800/1000?grayscale&random={{ $index }}" 
                alt="{{ $member['name'] }}"
                class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700 ease-in-out"
            >
            
            <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/20 to-transparent"></div>
            
            <div class="absolute bottom-0 left-0 w-full p-8 md:p-10">
                <span class="text-brand-yellow text-[10px] font-bold uppercase tracking-widest mb-2 block">
                    {{ $member['role'] }}
                </span>
                <h4 class="text-2xl md:text-3xl font-bold text-white tracking-tight leading-tight">
                    {{ $member['name'] }}
                </h4>
                
                <div class="w-0 group-hover:w-12 h-[1px] bg-white/30 mt-6 transition-all duration-500"></div>
            </div>
        </div>
        @endforeach
    </div>
</section>
