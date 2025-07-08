
@if ($paginator->hasPages())
<nav class="navigation posts-pagination">
    <div class="posts-page-links">
        @if ($paginator->onFirstPage())
        @else
        <a class="prev page-numbers" href="{{ $paginator->previousPageUrl() }}">
            <i class="far fac-angle-left"></i>
        </a>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                        @else
                            <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                        @endif
                    @endforeach
                @endif
        @endforeach

        @if ($paginator->hasMorePages())
        <a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}">
            <i class="far fac-angle-right"></i>
        </a>
        @else
        @endif

    </div>
</nav>
@endif


{{--
@if ($paginator->hasPages())
    <nav>
        <ul class="pagination justify-content-center">

            <!-- Botón "Anterior" -->
            @if ($paginator->onFirstPage())
                <li class="page-item disabled">
                    <span class="page-link"> < </span>
                </li>
            @else
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->previousPageUrl() }}" rel="prev"> < </a>
                </li>
            @endif

            <!-- Números de página -->
            @foreach ($elements as $element)
                <!-- "..." separador -->
                @if (is_string($element))
                    <li class="page-item disabled"><span class="page-link">{{ $element }}</span></li>
                @endif

                <!-- Links a páginas -->
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                            <li class="page-item active"><span class="page-link">{{ $page }}</span></li>
                        @else
                            <li class="page-item"><a class="page-link" href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            <!-- Botón "Siguiente" -->
            @if ($paginator->hasMorePages())
                <li class="page-item">
                    <a class="page-link" href="{{ $paginator->nextPageUrl() }}" rel="next"> > </a>
                </li>
            @else
                <li class="page-item disabled">
                    <span class="page-link"> > </span>
                </li>
            @endif
        </ul>
    </nav>
@endif
--}}