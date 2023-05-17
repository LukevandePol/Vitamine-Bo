@if ($paginator->hasPages())
    <nav class="d-flex align-items-center justify-content-between">
        <p class="small text-muted m-0">
            {!! __('Toont') !!}
            <span class="fw-semibold">{{ $paginator->firstItem() }}</span>
            {!! __('van') !!}
            <span class="fw-semibold">{{ $paginator->lastItem() }}</span>
            {!! __('de') !!}
            <span class="fw-semibold">{{ $paginator->total() }}</span>
            {!! __('resultaten') !!}
        </p>
        <ul class="pagination d-flex justify-content-between">
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.previous')">
                    <i class="fa-solid fa-chevron-left"></i>
                </li>
            @else
                <li>
                    <a href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">
                        <i class="fa-solid fa-chevron-left"></i>
                    </a>
                </li>
            @endif

            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                    <li class="disabled" aria-disabled="true"><span>{{ $element }}</span></li>
                @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="active" aria-current="page"><span>{{ $page }}</span></li>
                        @else
                            <li><a class="text-black-50" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
                <li>
                    <a href="{{ $paginator->nextPageUrl() }}" rel="next" aria-label="@lang('pagination.next')">
                        <i class="fa-solid fa-chevron-right"></i>
                    </a>
                </li>
            @else
                <li class="disabled" aria-disabled="true" aria-label="@lang('pagination.next')">
                    <span aria-hidden="true">
                        <i class="fa-solid fa-chevron-right"></i>
                    </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
