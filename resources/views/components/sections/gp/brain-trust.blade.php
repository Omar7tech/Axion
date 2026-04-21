<section class="py-32 bg-black border-t border-white/5 overflow-hidden">
    <div class="container mx-auto px-6 lg:px-20 mb-16 flex justify-between items-end">
        <h2 class="text-6xl font-black uppercase tracking-tighter">The Brain <span class="text-brand-yellow italic">Trust.</span></h2>
        <div class="hidden md:block h-px flex-1 mx-20 bg-white/10"></div>
        <p class="text-[10px] font-black text-white/30 uppercase tracking-[0.4em]">Section: Leaders</p>
    </div>

    <div class="flex overflow-x-auto no-scrollbar gap-px bg-white/10 px-6 lg:px-20 border-y border-white/10">
        @php
            $team = [
                ['Michael Harrington', 'CEO', '801'],
                ['Daniel Whitmore', 'COO', '802'],
                ['Sarah Mitchell', 'QA Lead', '803'],
                ['Personnel_ID', 'Reserved', '804']
            ];
        @endphp

        @foreach($team as $m)
        <div class="min-w-[400px] group relative bg-black aspect-[3/4] overflow-hidden flex-1 hover:flex-[1.5] transition-all duration-[1s]">
            <img src="https://picsum.photos/800/1000?grayscale&random={{ $m[2] }}" class="w-full h-full object-cover opacity-20 blur-sm group-hover:opacity-100 group-hover:blur-none group-hover:scale-105 transition-all duration-[1s]">
            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/20 to-transparent"></div>
            <div class="absolute bottom-10 left-10">
                <p class="text-brand-yellow text-[9px] font-black uppercase tracking-[0.4em] mb-2">{{ $m[1] }}</p>
                <h4 class="text-3xl font-black uppercase tracking-tighter text-white">{{ $m[0] }}</h4>
            </div>
        </div>
        @endforeach
    </div>
</section>
