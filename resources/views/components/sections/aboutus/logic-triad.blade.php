<section class="relative min-h-[90vh] flex items-center bg-black overflow-hidden border-y border-white/5 px-6 lg:px-20 py-24">
    
    {{-- Background Geometric Matrix --}}
    <div class="absolute inset-0 z-0 opacity-20 bg-[linear-gradient(45deg,#111_25%,transparent_25%),linear-gradient(-45deg,#111_25%,transparent_25%),linear-gradient(45deg,transparent_75%,#111_75%),linear-gradient(-45deg,transparent_75%,#111_75%)] [background-size:20px_20px] [background-position:0_0,0_10px,10px_-10px,-10px_0px]"></div>

    <div class="container mx-auto max-w-7xl relative z-10">
        <div class="flex flex-col md:flex-row md:divide-x divide-white/5 items-stretch min-h-[600px] border border-white/5">
            
            {{-- Monolith Card Wrapper --}}
            @php
                $monoliths = [
                    ['Consistency', 'Standardized workflows are at the core of our operations, ensuring precision from first batch to last.', '201', 'C', '01'],
                    ['Reliability', 'By minimizing variation, we maintain performance that meets the highest global standards.', '202', 'R', '02'],
                    ['Trust', 'Founders and backers engage confidently, valuing our fairness and systemic discipline.', '203', 'T', '03']
                ];
            @endphp

            @foreach($monoliths as $item)
            <div class="flex-1 p-16 flex flex-col justify-between group relative overflow-hidden transition-all duration-[1000ms] cubic-bezier(0.23, 1, 0.32, 1) hover:flex-[1.8] cursor-crosshair">
                
                {{-- The "Sleeping" Background Image --}}
                <div class="absolute inset-0 z-0 overflow-hidden">
                    <img src="https://picsum.photos/1200/1600?grayscale&random={{ $item[2] }}" 
                         class="w-full h-full object-cover saturate-0 brightness-[0.4] blur-[4px] opacity-40 scale-110 transition-all duration-[1200ms] group-hover:saturate-100 group-hover:brightness-100 group-hover:blur-none group-hover:opacity-80 group-hover:scale-100">
                    
                    {{-- Darkening Gradient --}}
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/60 to-transparent"></div>
                </div>

                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-8 overflow-hidden">
                        <span class="w-8 h-[1px] bg-brand-yellow/40 group-hover:bg-brand-yellow group-hover:w-12 transition-all duration-700"></span>
                        <span class="text-[9px] font-black uppercase tracking-[0.8em] text-brand-yellow/60 group-hover:text-brand-yellow group-hover:tracking-tighter transition-all duration-700">Axion Logic.{{ $item[4] }}</span>
                    </div>
                    
                    <h3 class="text-6xl font-black uppercase tracking-tighter text-white group-hover:text-brand-yellow transition-colors duration-500 leading-[0.85]">
                        @if($item[0] == 'Consistency') Consis<br/>tency @elseif($item[0] == 'Reliability') Reliabi<br/>lity @else {{ $item[0] }} @endif
                    </h3>
                </div>

                <div class="relative z-10 pt-10 border-t border-white/10 mt-10">
                    <p class="text-[11px] font-black uppercase tracking-[0.3em] text-white/40 leading-relaxed group-hover:text-white transition-colors duration-700 max-w-xs">
                        {{ $item[1] }}
                    </p>
                    {{-- Ghost Letter --}}
                    <span class="text-[120px] font-black text-white/[0.04] absolute bottom-[-50px] right-[-30px] select-none group-hover:text-brand-yellow/[0.08] group-hover:rotate-12 transition-all duration-1000">{{ $item[3] }}</span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>
