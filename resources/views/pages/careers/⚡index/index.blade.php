<div class="bg-[#050505] text-white selection:bg-brand-yellow selection:text-black">
    
    {{-- ACTIVE CAREERS --}}
    <section class="py-16 px-6 lg:px-20 border-t border-white/5 bg-[#050505]">
        <div class="container mx-auto max-w-7xl">
            <div class="mb-12 text-center">
                <h2 class="text-3xl md:text-5xl font-black uppercase tracking-tight text-white mb-4">
                    Join Our <span class="text-brand-yellow">Team</span>
                </h2>
                <p class="text-white/50 text-sm uppercase tracking-wider">Explore career opportunities at Axion</p>
            </div>

            {{-- Loading Spinner --}}
            <div wire:loading class="flex items-center justify-center min-h-[400px] w-full">
                <div class="flex flex-col items-center gap-3">
                    <svg class="animate-spin h-10 w-10 text-brand-yellow" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <span class="text-xs text-white/50 uppercase tracking-wider">Loading careers...</span>
                </div>
            </div>

            {{-- Career Grid --}}
            <div wire:loading.remove class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @forelse($this->careers as $index => $career)
                    <x-career-card :career="$career" :index="$index + ($this->careers->currentPage() - 1) * $this->careers->perPage()" />
                @empty
                    <div class="col-span-full text-center py-20">
                        <div class="inline-flex items-center justify-center w-20 h-20 rounded-full bg-white/5 mb-6">
                            <svg class="w-10 h-10 text-white/20" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-black uppercase tracking-tight text-white/40 mb-2">No Open Positions</h3>
                        <p class="text-sm text-white/30">Check back soon for new career opportunities.</p>
                    </div>
                @endforelse
            </div>

            {{-- Pagination --}}
            {{ $this->careers->links() }}
        </div>
    </section>

</div>