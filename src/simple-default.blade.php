@if ($paginator->hasPages())
    <div class="ui pagination menu">
        {{-- Previous Page Link --}}
        @if ($paginator->onFirstPage())
            <div class="disabled icon item">
                <i class="left chevron icon"></i>
            </div>
        @else
            <a href="{{ $paginator->previousPageUrl() }}" rel="prev" class="icon item">
                <i class="left chevron icon"></i>
            </a>
        @endif

        {{-- Next Page Link --}}
        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" rel="prev" class="icon item">
                <i class="right chevron icon"></i>
            </a>
        @else
            <div class="disabled icon item">
                <i class="right chevron icon"></i>
            </div>
        @endif
    </div>
@endif
