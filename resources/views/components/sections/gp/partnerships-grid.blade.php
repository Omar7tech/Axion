<section class="py-12 md:py-24 px-4 lg:px-20 bg-[#050505]">
    <div class="container mx-auto max-w-7xl">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-4">

            {{-- 01: Strategic Supplier Partnerships --}}
            <div class="lg:col-span-8 group relative border border-white/5 transition-all duration-700 hover:border-brand-yellow/50">
                <div class="relative p-8 md:p-12 overflow-hidden min-h-[320px] md:min-h-[400px] flex flex-col justify-between">
                    {{-- Grayscale background image --}}
                    <div class="absolute inset-0 grayscale" style="background-image: url('/covers/strategic-supplier.jpg'); background-size: cover; background-position: center;"></div>
                    {{-- Dark overlay --}}
                    <div class="absolute inset-0 bg-[#050505]/85 group-hover:bg-[#050505]/75 transition-all duration-700"></div>
                    
                    {{-- Content --}}
                    <div class="relative z-10">
                        <span class="text-[9px] font-black text-brand-yellow uppercase tracking-widest">Division: Supply_Chain</span>
                        {{-- Responsive Font Size: text-3xl on mobile, text-5xl on desktop --}}
                        <h3 class="text-3xl md:text-5xl font-black uppercase tracking-tighter mt-4 max-w-full md:max-w-md break-words">
                            Strategic Supplier Partnerships
                        </h3>
                    </div>
                    
                    <p class="relative z-10 text-xs md:text-sm text-white/40 uppercase tracking-tight max-w-lg leading-loose group-hover:text-white transition-colors mt-6">
                        AXION builds strong relationships with trusted suppliers to ensure consistent access to high-quality materials and equipment.
                    </p>
                    
                    {{-- Adjusted background number size for mobile --}}
                    <div class="absolute -right-6 -bottom-6 md:-right-10 md:-bottom-10 text-[100px] md:text-[180px] font-black text-white/[0.02] select-none group-hover:text-brand-yellow/[0.03] transition-all z-10">01</div>
                </div>
            </div>

            {{-- 02: Manufacturing Collaborations --}}
            <div class="lg:col-span-4 bg-brand-yellow p-8 md:p-12 flex flex-col justify-between text-black relative group overflow-hidden">
                <h3 class="text-xl md:text-2xl font-black uppercase tracking-tighter relative z-10">Manufacturing Collaborations</h3>
                <p class="text-[10px] md:text-[11px] font-bold uppercase leading-relaxed mb-8 mt-4 relative z-10">
                    Selected manufacturing partners to maintain strict quality control and production standards.
                </p>
                <div class="text-7xl md:text-9xl font-black tracking-tighter opacity-10 absolute -right-4 -bottom-4 group-hover:scale-110 transition-transform">02</div>
            </div>

            @php
                $nodes = [
                    ['Logistics & Distribution Alliances', 'These alliances improve supply chain efficiency, reduce delays, and maintain stability.', '03'],
                    ['Technology & Innovation Partnerships', 'Collaborate with technology partners to enhance innovation and process optimization.', '04']
                ];
            @endphp

            @foreach($nodes as $node)
            <div class="lg:col-span-6 group relative border border-white/5 p-8 md:p-12 flex flex-col gap-6 md:gap-8 hover:bg-white/[0.02] transition-all duration-500">
                <div class="flex justify-between items-start gap-4">
                    <h3 class="text-2xl md:text-3xl font-black uppercase tracking-tighter break-words">{{ $node[0] }}</h3>
                    <div class="text-[10px] font-mono text-white/20 group-hover:text-brand-yellow transition-colors shrink-0">{{ $node[2] }}</div>
                </div>
                <p class="text-[10px] md:text-xs text-white/40 uppercase tracking-widest leading-relaxed">
                    {{ $node[1] }}
                </p>
                <div class="mt-auto h-px w-full bg-white/5 relative overflow-hidden">
                    <div class="absolute inset-0 bg-brand-yellow -translate-x-full group-hover:translate-x-0 transition-transform duration-1000"></div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>