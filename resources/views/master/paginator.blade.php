@if ($paginator->hasPages())
<ul class="pagination justify-content-center">
    @if ($paginator->onFirstPage())
    <li class="page-item disabled">
        <a class="page-link text-decoration-none" href="#" tabindex="-1"><i class="bi bi-chevron-left"></i></a>
    </li>
    @else
    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">
            <i class="bi bi-chevron-left"></i></a>
    </li>
    @endif

    @foreach ($elements as $element)
    @if (is_string($element))
    <li class="page-item disabled">{{ $element }}</li>
    @endif

    @if (is_array($element))
    @foreach ($element as $page => $url)
    @if ($page == $paginator->currentPage())
    <li class="page-item active">
        <a class="page-link text-decoration-none">{{ $page }}</a>
    </li>
    @else
    <li class="page-item">
        <a class="page-link text-decoration-none" href="{{ $url }}">{{ $page }}</a>
    </li>
    @endif
    @endforeach
    @endif
    @endforeach 

    @if ($paginator->hasMorePages())
    <li class="page-item">
        <a class="page-link text-decoration-none" href="{{ $paginator->nextPageUrl() }}" rel="next"><i class="bi bi-chevron-right"></i></a>
    </li>
    @else
    <li class="page-item disabled">
        <a class="page-link text-decoration-none" href="#"><i class="bi bi-chevron-right"></i></a>
    </li>
    @endif
</ul>
@endif