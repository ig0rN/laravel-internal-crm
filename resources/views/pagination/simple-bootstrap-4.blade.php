@if ($paginator->hasPages())
    <div class="container">
        <div class="row justify-content-center">

            <ul class="pagination">
                {{-- Previous Page Link --}}
                @if ($paginator->onFirstPage())
                    <li class="page-item disabled" style="width: 150px;"><span class="page-link" style="color: rgba(228, 100, 98, 0.9);">@lang('pagination.previous')</span></li>
                @else
                    <li class="page-item" style="width: 150px;"><a class="page-link" style="color: rgba(228, 100, 98, 0.9);" href="{{ $paginator->previousPageUrl() }}" rel="prev">@lang('pagination.previous')</a></li>
                @endif

                {{-- Next Page Link --}}
                @if ($paginator->hasMorePages())
                    <li class="page-item" style="width: 130px;"><a class="page-link" style="color: rgba(228, 100, 98, 0.9);" href="{{ $paginator->nextPageUrl() }}" rel="next">@lang('pagination.next')</a></li>
                @else
                    <li class="page-item disabled" style="width: 130px;"><span class="page-link" style="color: rgba(228, 100, 98, 0.9);">@lang('pagination.next')</span></li>
                @endif
            </ul>

        </div>
    </div>
@endif
