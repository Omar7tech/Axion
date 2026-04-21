{{-- ===================== 03. THE 11 DIVISIONS BENTO (DENSE) ===================== --}}
<section class="py-20">
    <div class="container mx-auto px-6 lg:px-10">
        <div class="mb-12 text-center">
            <h2 class="text-4xl lg:text-5xl font-black uppercase tracking-tighter">Core Divisions</h2>
            <p class="text-white/30 uppercase tracking-[0.4em] text-[9px] mt-2 font-bold italic">Bridging industries and borders through technology</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @php
            $divs = [
                ['01', 'Agriculture Expansion', 'Feeding the world through smart farming.', 'Modern farming solutions enhancing productivity.'],
                ['02', 'Technology & AI', 'Engineering tomorrow\'s intelligence.', 'Driving innovation through automation and AI.'],
                ['03', 'Construction & Real Estate', 'Building the infrastructure of a world.', 'Infrastructure growth and industrial execution.'],
                ['04', 'Logistics & Supply Chain', 'Moving goods, connecting continents.', 'Reliable transportation and distribution.'],
                ['05', 'Finance & Investment', 'Global demand meets trading.', 'Efficient exchange of goods and services.'],
                ['06', 'Equipment & Automotive', 'Driving next-generation vehicles.', 'Reliability, durability, and performance.'],
                ['07', 'Medical & Pharma', 'Advancing health through science.', 'Safe, effective, and high-quality products.'],
                ['08', 'AXION Logistics', 'Reliability at global speed.', 'Transportation and operational excellence.'],
                ['09', 'AXION Energy', 'Your energy market gateway.', 'Reliable sourcing and resource trading.'],
                ['10', 'AXION Trade Finance', 'Powering world markets.', 'Efficiency across global commercial networks.'],
                ['11', 'AXION Digital', 'The digital economy gateway.', 'Cutting-edge digital platform solutions.']
            ];
            @endphp

            @foreach($divs as $index => $d)
            <div class="relative min-h-[280px] p-8 border border-white/10 overflow-hidden group flex flex-col justify-between transition-all duration-500 hover:border-brand-yellow/60">

                {{-- Background Image with Overlay --}}
                <div class="absolute inset-0 z-0 transition-transform duration-700 group-hover:scale-110">
                    <img src="https://picsum.photos/600/800?random={{ $index }}" alt="{{ $d[1] }}" class="w-full h-full object-cover opacity-30 grayscale group-hover:grayscale-0 transition-all">
                    <div class="absolute inset-0 bg-gradient-to-br from-black via-black/80 to-transparent"></div>
                </div>

                {{-- Content --}}
                <div class="relative z-10">
                    <span class="text-brand-yellow font-black tracking-widest text-[10px]">{{ $d[0] }}</span>
                    <h4 class="text-xl font-black uppercase mt-3 mb-2 tracking-tight">{{ $d[1] }}</h4>
                    <p class="text-[10px] text-white/90 font-bold uppercase tracking-tight mb-3 italic leading-tight">{{ $d[2] }}</p>
                    <p class="text-[11px] text-white/50 leading-relaxed max-w-[90%]">{{ $d[3] }}</p>
                </div>

                <div class="relative z-10 flex items-center justify-between mt-8">
                    <a href="#" class="text-[9px] font-black uppercase tracking-[0.2em] text-brand-yellow group-hover:translate-x-2 transition-transform">Learn more —</a>
                    <div class="h-[1px] flex-grow ml-4 bg-white/10 group-hover:bg-brand-yellow/30 transition-colors"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
