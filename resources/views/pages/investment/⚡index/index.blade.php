<div class="bg-[#020202] text-white selection:bg-brand-yellow selection:text-black">
    
    

    {{-- ACTIVE INVESTMENTS --}}
    <section class="py-16 px-6 lg:px-20 border-t border-white/5 bg-[#020202]">
        <div class="container mx-auto max-w-7xl">
            <div class="mb-12 text-center">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
                    Active <span class="text-brand-yellow">Investment Opportunities</span>
                </h2>
                <p class="text-white/50 text-sm uppercase tracking-wider">Explore our current portfolio of strategic investments</p>
            </div>

            {{-- Investment Grid --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($this->investments as $index => $investment)
                    <x-investment-card :investment="$investment" :index="$index + ($this->investments->currentPage() - 1) * $this->investments->perPage()" />
                @empty
                    <div class="col-span-full text-center py-20">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/5 mb-6">
                            <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-black uppercase tracking-tight text-white/40 mb-2">No Active Investments</h3>
                        <p class="text-sm text-white/30">Check back soon for new investment opportunities.</p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            {{ $this->investments->links() }}

            {{-- Loading Indicator --}}
            <div wire:loading class="fixed inset-0 bg-black/50 backdrop-blur-sm flex items-center justify-center z-50">
                <div class="bg-black border border-brand-yellow/30 px-8 py-6 rounded-lg">
                    <div class="flex items-center gap-4">
                        <svg class="animate-spin h-6 w-6 text-brand-yellow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                        </svg>
                        <span class="text-brand-yellow font-black uppercase text-sm tracking-wider">Loading...</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
</div>