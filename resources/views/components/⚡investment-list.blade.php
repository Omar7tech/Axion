<?php

use App\Models\Investment;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;

new class extends Component {
    use WithPagination;

    public int $perPage = 9;

    #[Computed]
    public function investments()
    {
        return Investment::active()
            ->latest('created_at')
            ->paginate($this->perPage);
    }

    #[Computed]
    public function totalCount()
    {
        return Investment::active()->count();
    }
};
?>

<div>
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

    @if($this->investments->hasPages())
        <div class="mt-12">
            <div class="flex flex-col sm:flex-row items-center justify-between gap-6">
                {{-- Pagination Info --}}
                <div class="text-xs text-white/40 uppercase tracking-wider">
                    Showing <span class="text-brand-yellow font-bold">{{ $this->investments->firstItem() ?? 0 }}</span>
                    to <span class="text-brand-yellow font-bold">{{ $this->investments->lastItem() ?? 0 }}</span>
                    of <span class="text-brand-yellow font-bold">{{ $this->totalCount }}</span> investments
                </div>

                {{-- Pagination Links --}}
                <div class="flex items-center gap-2">
                    {{-- Previous Button --}}
                    @if($this->investments->onFirstPage())
                        <span class="px-4 py-2 border border-white/10 text-white/20 text-xs font-black uppercase cursor-not-allowed">
                            Previous
                        </span>
                    @else
                        <button wire:click="previousPage" wire:loading.attr="disabled"
                            class="px-4 py-2 border border-brand-yellow/30 text-brand-yellow text-xs font-black uppercase hover:bg-brand-yellow hover:text-black transition-all">
                            Previous
                        </button>
                    @endif

                    {{-- Page Numbers --}}
                    <div class="flex items-center gap-1">
                        @foreach(range(1, $this->investments->lastPage()) as $page)
                            @if($page === $this->investments->currentPage())
                                <span class="w-10 h-10 flex items-center justify-center bg-brand-yellow text-black font-black text-sm">
                                    {{ $page }}
                                </span>
                            @else
                                <button wire:click="gotoPage({{ $page }})"
                                    class="w-10 h-10 flex items-center justify-center border border-white/10 text-white/60 font-bold text-sm hover:border-brand-yellow/30 hover:text-brand-yellow transition-all">
                                    {{ $page }}
                                </button>
                            @endif
                        @endforeach
                    </div>

                    {{-- Next Button --}}
                    @if($this->investments->hasMorePages())
                        <button wire:click="nextPage" wire:loading.attr="disabled"
                            class="px-4 py-2 border border-brand-yellow/30 text-brand-yellow text-xs font-black uppercase hover:bg-brand-yellow hover:text-black transition-all">
                            Next
                        </button>
                    @else
                        <span class="px-4 py-2 border border-white/10 text-white/20 text-xs font-black uppercase cursor-not-allowed">
                            Next
                        </span>
                    @endif
                </div>
            </div>
        </div>
    @endif

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
