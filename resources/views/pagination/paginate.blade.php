<div class="">
    <div class=" text-center">
        <div class="block-27">
            <ul>
                @if ($paginator->onFirstPage())
                    <li class="disabled"><span>&lt;</span></li>
                @else
                    <li><a href="{{ $paginator->previousPageUrl() }}">&lt;</a></li>
                @endif

                @for ($page = 1; $page <= $paginator->lastPage(); $page++)
                    @if ($page == $paginator->currentPage())
                        <li class="active"><span>{{ $page }}</span></li>
                    @else
                        <li><a href="{{ $paginator->url($page) }}">{{ $page }}</a></li>
                    @endif
                @endfor

                @if ($paginator->hasMorePages())
                    <li><a href="{{ $paginator->nextPageUrl() }}">&gt;</a></li>
                @else
                    <li class="disabled"><span>&gt;</span></li>
                @endif
            </ul>
        </div>
    </div>
</div>
