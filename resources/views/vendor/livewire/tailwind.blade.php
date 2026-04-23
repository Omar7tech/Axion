@php
if (! isset($scrollTo)) {
    $scrollTo = 'body';
}

$scrollIntoViewJsSnippet = ($scrollTo !== false)
    ? <<<JS
       (\$el.closest('{$scrollTo}') || document.querySelector('{$scrollTo}')).scrollIntoView()
    JS
    : '';
@endphp

<div>
    @if ($paginator->hasPages())
        <nav role="navigation" aria-label="Pagination Navigation" class="flex flex-col sm:flex-row items-center justify-between gap-6 mt-12">
            {{-- Mobile: Previous/Next Only --}}
            <div class="flex justify-between w-full sm:hidden gap-3">
                <span class="flex-1">
                    @if ($paginator->onFirstPage())
                        <span class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white/30 bg-[#050505] border border-white/10 cursor-not-allowed transition-all duration-300">
                            {!! __('pagination.previous') !!}
                        </span>
                    @else
                        <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50">
                            {!! __('pagination.previous') !!}
                        </button>
                    @endif
                </span>

                <span class="flex-1">
                    @if ($paginator->hasMorePages())
                        <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.before" class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50">
                            {!! __('pagination.next') !!}
                        </button>
                    @else
                        <span class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white/30 bg-[#050505] border border-white/10 cursor-not-allowed transition-all duration-300">
                            {!! __('pagination.next') !!}
                        </span>
                    @endif
                </span>
            </div>

            {{-- Desktop: Full Pagination --}}
            <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between w-full">
                {{-- Results Info --}}
                <div>
                    <p class="text-[11px] text-white/50 leading-5 uppercase tracking-wide font-bold">
                        <span>{!! __('Showing') !!}</span>
                        <span class="text-brand-yellow font-black">{{ $paginator->firstItem() }}</span>
                        <span>{!! __('to') !!}</span>
                        <span class="text-brand-yellow font-black">{{ $paginator->lastItem() }}</span>
                        <span>{!! __('of') !!}</span>
                        <span class="text-brand-yellow font-black">{{ $paginator->total() }}</span>
                        <span>{!! __('results') !!}</span>
                    </p>
                </div>

                {{-- Page Numbers --}}
                <div>
                    <span class="relative z-0 inline-flex rtl:flex-row-reverse gap-2">
                        {{-- Previous Page Button --}}
                        <span>
                            @if ($paginator->onFirstPage())
                                <span aria-disabled="true" aria-label="{{ __('pagination.previous') }}">
                                    <span class="relative inline-flex items-center justify-center w-10 h-10 text-sm font-black text-white/30 bg-[#050505] border border-white/10 cursor-not-allowed transition-all duration-300" aria-hidden="true">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                            @else
                                <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" class="relative inline-flex items-center justify-center w-10 h-10 text-sm font-black text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50" aria-label="{{ __('pagination.previous') }}">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @endif
                        </span>

                        {{-- Page Number Links --}}
                        @foreach ($elements as $element)
                            {{-- Separator Dots --}}
                            @if (is_string($element))
                                <span aria-disabled="true">
                                    <span class="relative inline-flex items-center justify-center w-10 h-10 text-sm font-black text-white/50 bg-[#050505] border border-white/10 cursor-default transition-all duration-300">{{ $element }}</span>
                                </span>
                            @endif

                            {{-- Page Numbers --}}
                            @if (is_array($element))
                                @foreach ($element as $page => $url)
                                    <span wire:key="paginator-{{ $paginator->getPageName() }}-page{{ $page }}">
                                        @if ($page == $paginator->currentPage())
                                            <span aria-current="page">
                                                <span class="relative inline-flex items-center justify-center w-10 h-10 text-sm font-black text-[#050505] bg-brand-yellow border border-brand-yellow cursor-default transition-all duration-300">{{ $page }}</span>
                                            </span>
                                        @else
                                            <button type="button" wire:click="gotoPage({{ $page }}, '{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" class="relative inline-flex items-center justify-center w-10 h-10 text-sm font-black text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50" aria-label="{{ __('Go to page :page', ['page' => $page]) }}">
                                                {{ $page }}
                                            </button>
                                        @endif
                                    </span>
                                @endforeach
                            @endif
                        @endforeach

                        {{-- Next Page Button --}}
                        <span>
                            @if ($paginator->hasMorePages())
                                <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}.after" class="relative inline-flex items-center justify-center w-10 h-10 text-sm font-black text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50" aria-label="{{ __('pagination.next') }}">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                    </svg>
                                </button>
                            @else
                                <span aria-disabled="true" aria-label="{{ __('pagination.next') }}">
                                    <span class="relative inline-flex items-center justify-center w-10 h-10 text-sm font-black text-white/30 bg-[#050505] border border-white/10 cursor-not-allowed transition-all duration-300" aria-hidden="true">
                                        <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </span>
                            @endif
                        </span>
                    </span>
                </div>
            </div>
        </nav>
    @endif
</div>
