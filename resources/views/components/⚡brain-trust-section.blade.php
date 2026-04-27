<?php

use App\Models\BrainTrust;
use Livewire\Component;

new class extends Component {
    public function with(): array
    {
        $team = BrainTrust::all();

        return [
            'team' => $team,
            'hasTeam' => $team->isNotEmpty(),
        ];
    }
};
?>

<div>
    @if($hasTeam)
    <section class="py-20 bg-[#050505] border-t border-white/5">
        <div class="container mx-auto px-6 lg:px-20 mb-12">
            <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-6 mb-8">
                <div class="max-w-2xl">
                    <h2 class="text-4xl md:text-6xl font-bold tracking-tight text-white mb-4">
                        Brain Trust.
                    </h2>
                    <p class="text-sm text-white/40 tracking-wide uppercase">The people behind the vision.</p>
                </div>

                <!-- Navigation Buttons -->
                <div class="flex items-center gap-2 shrink-0 md:ml-auto">
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
            </div>
        </div>

        <div class="relative overflow-hidden">
            <div class="swiper brain-trust-swiper w-full pb-10">
                <div class="swiper-wrapper">
                    @foreach($team as $index => $member)
                    <div class="swiper-slide" wire:key="brain-trust-{{ $member->id }}">
                        <div class="group relative bg-[#0a0a0a] aspect-square overflow-hidden rounded-xl transition-all duration-500 border border-white/5 hover:border-white/20 hover:shadow-2xl hover:shadow-brand-yellow/5">
                            
                            @php
                                $imageUrl = $member->hasMedia('cover') 
                                    ? $member->getFirstMediaUrl('cover', 'webp') 
                                    : asset('covers/aboutus.png');
                            @endphp
                            
                            <img 
                                src="{{ $imageUrl }}" 
                                alt="{{ $member->name }}"
                                class="w-full h-full object-cover opacity-60 group-hover:opacity-100 group-hover:scale-105 transition-all duration-700 ease-in-out"
                            >
                            
                            <div class="absolute inset-0 bg-linear-to-t from-black/95 via-black/30 to-transparent"></div>
                            
                            <div class="absolute bottom-0 left-0 w-full p-6 md:p-8">
                                <span class="text-brand-yellow text-[10px] font-bold uppercase tracking-widest mb-2 block">
                                    {{ $member->role }}
                                </span>
                                <h4 class="text-xl md:text-2xl font-bold text-white tracking-tight leading-tight">
                                    {{ $member->name }}
                                </h4>
                                
                                <div class="w-0 group-hover:w-12 h-[1px] bg-white/30 mt-4 transition-all duration-500"></div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Centered Progress Bar -->
            <div class="mt-10 max-w-[200px] mx-auto">
                <div class="h-1 bg-white/10 rounded-full">
                    <div id="bt-progress" class="h-full bg-brand-yellow rounded-full transition-all duration-300" style="width: {{ 100 / max($team->count(), 1) }}%"></div>
                </div>
            </div>
        </div>
    </section>
    @endif
</div>
