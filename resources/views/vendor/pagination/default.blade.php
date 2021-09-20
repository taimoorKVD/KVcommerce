@if ($paginator->hasPages())
    <nav class="navigation align-center">
        {{-- Pagination Elements --}}
        @foreach ($elements as $element)
            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <a href="javascript:void(0)" class="page-numbers bg-border-color current active"
                           aria-current="page">
                                <span>
                                    {{ $page }}
                                </span>
                        </a>
                    @else
                        <a href="{{ $url }}" class="page-numbers bg-border-color">
                                <span>
                                    {{ $page }}
                                </span>
                        </a>
                    @endif
                @endforeach
            @endif
        @endforeach
    </nav>
@endif
