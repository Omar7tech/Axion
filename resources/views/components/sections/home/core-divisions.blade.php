@php
    $hasBusinesses = \App\Models\Business::exists();
@endphp

@if($hasBusinesses)
<section class="py-20 relative overflow-hidden bg-[#050505]">
    {{-- THE "BLUEPRINT DOT" PATTERN --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        {{-- Clean Dot Grid Matrix --}}
        <div class="absolute inset-0 opacity-[0.15]"
             style="background-image: radial-gradient(circle at 2px 2px, #ffffff 1px, transparent 0);
                    background-size: 40px 40px;
                    [mask-image:linear-gradient(to_bottom,black_5%,transparent_80%)]">
        </div>

        {{-- Top Perimeter Accent --}}
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-brand-yellow/30 to-transparent"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-10 relative z-10">
        {{-- ENHANCED TITLE SECTION --}}
        <div class="mb-20 relative flex flex-col items-center">
            <h2 class="text-5xl lg:text-7xl font-black uppercase tracking-tighter leading-none flex flex-col items-center">
                <span class="text-white">Core</span>
                <span class="text-transparent italic" style="-webkit-text-stroke: 1.5px rgba(230,177,46,0.8);">Businesses</span>
            </h2>
            <div class="mt-6 flex items-center gap-4">
                <div class="h-px w-8 bg-white/20"></div>
                <div class="w-2 h-2 rotate-45 border border-brand-yellow"></div>
                <div class="h-px w-8 bg-white/20"></div>
            </div>
        </div>

        <livewire:business-list :limit="3" />
    </div>
</section>
@endif