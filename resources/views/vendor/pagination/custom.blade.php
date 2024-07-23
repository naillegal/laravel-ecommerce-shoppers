@if ($paginator->hasPages())
    <div class="row" data-aos="fade-up">
        <div class="col-md-12 text-center">
            <div class="site-block-27">
                <ul class="pagination">
                    {{-- Previous Page Link --}}
                    @if ($paginator->onFirstPage())
                        <li><span>&lt;</span></li>
                    @else
                        <li><a href="{{ $paginator->previousPageUrl() }}">&lt;</a></li>
                    @endif

                    {{-- Pagination Elements --}}
                    @foreach ($elements as $element)
                        {{-- "Three Dots" Separator --}}
                        @if (is_string($element))
                            <li class="active"><span>{{ $element }}</span></li>
                        @endif

                        {{-- Array Of Links --}}
                        @if (is_array($element))
                            @foreach ($element as $page => $url)
                                @if ($page == $paginator->currentPage())
                                    <li class="active"><span>{{ $page }}</span></li>
                                @else
                                    <li><a href="{{ $url }}">{{ $page }}</a></li>
                                @endif
                            @endforeach
                        @endif
                    @endforeach

                    {{-- Next Page Link --}}
                    @if ($paginator->hasMorePages())
                        <li><a href="{{ $paginator->nextPageUrl() }}">&gt;</a></li>
                    @else
                        <li><span>&gt;</span></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endif
