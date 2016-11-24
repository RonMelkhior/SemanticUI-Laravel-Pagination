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

        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            @if (is_string($element))
                <div class="disabled item">
                    {{ $element }}
                </div>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a class="active item">
                            {{ $page }}
                        </a>
                    @else
                        <a href="{{ $url }}" class="item">
                            {{ $page }}
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach

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
