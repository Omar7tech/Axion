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
        <nav role="navigation" aria-label="Pagination Navigation" class="flex justify-between gap-3 mt-12">
            <span class="flex-1">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <span class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white/30 bg-[#050505] border border-white/10 cursor-not-allowed transition-all duration-300">
                        {!! __('pagination.previous') !!}
                    </span>
                @else
                    @if(method_exists($paginator,'getCursorName'))
                        <button type="button" dusk="previousPage" wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->previousCursor()->encode() }}" wire:click="setPage('{{$paginator->previousCursor()->encode()}}','{{ $paginator->getCursorName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50">
                                {!! __('pagination.previous') !!}
                        </button>
                    @else
                        <button type="button" wire:click="previousPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="previousPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50">
                                {!! __('pagination.previous') !!}
                        </button>
                    @endif
                @endif
            </span>

            <span class="flex-1">
                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    @if(method_exists($paginator,'getCursorName'))
                        <button type="button" dusk="nextPage" wire:key="cursor-{{ $paginator->getCursorName() }}-{{ $paginator->nextCursor()->encode() }}" wire:click="setPage('{{$paginator->nextCursor()->encode()}}','{{ $paginator->getCursorName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50">
                                {!! __('pagination.next') !!}
                        </button>
                    @else
                        <button type="button" wire:click="nextPage('{{ $paginator->getPageName() }}')" x-on:click="{{ $scrollIntoViewJsSnippet }}" wire:loading.attr="disabled" dusk="nextPage{{ $paginator->getPageName() == 'page' ? '' : '.' . $paginator->getPageName() }}" class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white bg-[#050505] border border-white/10 hover:border-brand-yellow/60 hover:text-brand-yellow focus:outline-none transition-all duration-300 data-loading:opacity-50">
                                {!! __('pagination.next') !!}
                        </button>
                    @endif
                @else
                    <span class="relative inline-flex items-center justify-center w-full px-6 py-3 text-[10px] font-black uppercase tracking-[0.2em] text-white/30 bg-[#050505] border border-white/10 cursor-not-allowed transition-all duration-300">
                        {!! __('pagination.next') !!}
                    </span>
                @endif
            </span>
        </nav>
    @endif
</div>
