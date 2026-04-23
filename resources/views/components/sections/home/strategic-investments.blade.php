@php
    $hasInvestments = \App\Models\Investment::active()->exists();
@endphp

@if($hasInvestments)
<section class="py-20 relative overflow-hidden bg-gradient-to-b from-[#0a0a0a] via-[#050505] to-[#050505]">
    {{-- GLOW EFFECTS --}}
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
        {{-- Top Glow --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[600px] h-[400px] bg-brand-yellow/5 blur-[120px] rounded-full"></div>

        {{-- Side Glows --}}
        <div class="absolute top-1/3 left-0 w-[300px] h-[300px] bg-brand-yellow/3 blur-[100px] rounded-full -translate-x-1/2"></div>
        <div class="absolute top-1/3 right-0 w-[300px] h-[300px] bg-brand-yellow/3 blur-[100px] rounded-full translate-x-1/2"></div>

        {{-- Accent Lines --}}
        <div class="absolute top-0 left-0 w-full h-px bg-gradient-to-r from-transparent via-brand-yellow/30 to-transparent"></div>
    </div>

    <div class="container mx-auto px-6 lg:px-10 relative z-10">
        {{-- SIMPLE TITLE --}}
        <div class="mb-16 text-center">
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-black uppercase tracking-tighter text-white">
                Strategic <span class="text-brand-yellow">Investments</span>
            </h2>
        </div>

        <livewire:investment-list :limit="3" />
    </div>
</section>
@endif
