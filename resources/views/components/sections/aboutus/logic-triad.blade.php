<section class="relative min-h-screen flex items-center bg-black overflow-hidden border-y border-white/5 px-4 sm:px-6 lg:px-20 py-12 md:py-24">
    
    {{-- Background Geometric Matrix --}}
    <div class="absolute inset-0 z-0 opacity-10 md:opacity-20 bg-[linear-gradient(45deg,#111_25%,transparent_25%),linear-gradient(-45deg,#111_25%,transparent_25%),linear-gradient(45deg,transparent_75%,#111_75%),linear-gradient(-45deg,transparent_75%,#111_75%)] [background-size:20px_20px] [background-position:0_0,0_10px,10px_-10px,-10px_0px]"></div>

    <div class="container mx-auto max-w-7xl relative z-10">
        {{-- Changed from flex-row to grid on mobile --}}
        <div class="grid grid-cols-1 md:flex md:divide-x divide-white/5 items-stretch min-h-[auto] md:min-h-[600px] border border-white/5">
            
            @php
                $monoliths = [
                    ['Consistency', 'Standardized workflows are at the core of our operations, ensuring precision from first batch to last.', '201', 'C', '01'],
                    ['Reliability', 'By minimizing variation, we maintain performance that meets the highest global standards.', '202', 'R', '02'],
                    ['Trust', 'Founders and backers engage confidently, valuing our fairness and systemic discipline.', '203', 'T', '03']
                ];
            @endphp

            @foreach($monoliths as $item)
            {{-- Flexible height for mobile, fixed logic for desktop --}}
            <div class="flex-1 p-8 sm:p-12 md:p-16 flex flex-col justify-between group relative overflow-hidden transition-all duration-[1000ms] ease-[cubic-bezier(0.23,1,0.32,1)] md:hover:flex-[1.8] cursor-crosshair border-b md:border-b-0 border-white/5 last:border-b-0">
                
                {{-- Background Image --}}
                <div class="absolute inset-0 z-0 overflow-hidden">
                    <img src="https://picsum.photos/1200/1600?grayscale&random={{ $item[2] }}" 
                         class="w-full h-full object-cover saturate-0 brightness-[0.4] blur-[4px] opacity-40 scale-110 transition-all duration-[1200ms] group-hover:saturate-100 group-hover:brightness-100 group-hover:blur-none group-hover:opacity-80 group-hover:scale-100">
                    
                    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 md:via-black/60 to-transparent"></div>
                </div>

                <div class="relative z-10">
                    <div class="flex items-center gap-4 mb-6 md:mb-8 overflow-hidden">
                        <span class="w-8 h-[1px] bg-brand-yellow/40 group-hover:bg-brand-yellow group-hover:w-12 transition-all duration-700"></span>
                        <span class="text-[8px] md:text-[9px] font-black uppercase tracking-[0.4em] md:tracking-[0.8em] text-brand-yellow/60 group-hover:text-brand-yellow group-hover:tracking-tighter transition-all duration-700">
                            Axion Logic.{{ $item[4] }}
                        </span>
                    </div>
                    
                    {{-- Titles: text-4xl on mobile, text-6xl on desktop --}}
                    <h3 class="text-4xl sm:text-5xl md:text-6xl font-black uppercase tracking-tighter text-white group-hover:text-brand-yellow transition-colors duration-500 leading-[0.9] md:leading-[0.85] break-words">
                        {{ $item[0] }}
                    </h3>
                </div>

                <div class="relative z-10 pt-8 md:pt-10 border-t border-white/10 mt-8 md:mt-10">
                    <p class="text-[10px] md:text-[11px] font-black uppercase tracking-[0.2em] md:tracking-[0.3em] text-white/40 leading-relaxed group-hover:text-white transition-colors duration-700 max-w-xs">
                        {{ $item[1] }}
                    </p>
                    
                    {{-- Ghost Letter: Smaller on mobile to prevent overflow --}}
                    <span class="text-[80px] md:text-[120px] font-black text-white/[0.04] absolute bottom-[-30px] md:bottom-[-50px] right-[-10px] md:right-[-30px] select-none group-hover:text-brand-yellow/[0.08] group-hover:rotate-12 transition-all duration-1000">
                        {{ $item[3] }}
                    </span>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>