@if($myPagination['total_pages'] >= 1)
    <div class="pb2" style="display:flex; justify-content: center;">
        @if($myPagination['antal_items'] == 1)
            <h2 class="h3" style="border-bottom: 4px solid #004890">{{ $myPagination['antal_items'] }} driftstörning - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
        @else
            <h2 class="h3" style="border-bottom: 4px solid #004890">{{ $myPagination['antal_items'] }} driftstörningar - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
        @endif
    </div>
    <div class="rh-pagination pb3" style="display:flex; justify-content: center;">
        <span><a class="rh-pagination-link rh-pagination-group rh-pagination-link-previous" href="./?sida={{ $myPagination['first_page'] }}&oid={{ $oid }}&sid={{ $sid }}"><<</a></span>
        <span><a class="rh-pagination-link rh-pagination-group" href="./?sida={{ $myPagination['prev_page'] }}&oid={{ $oid }}&sid={{ $sid }}"><</a></span>
        @foreach ($myPagination['start_end'] as $start_end)
            @if($myPagination['current_page'] == $start_end['number'])
                <strong><a class="rh-pagination-link rh-pagination-group rh-pagination-link--current" href="./?sida={{ $start_end['number'] }}&oid={{ $oid }}&sid={{ $sid }}">{!! $start_end['number'] !!}</a></strong>
            @else
                <span><a class="rh-pagination-link rh-pagination-group" href="./?sida={{ $start_end['number'] }}&oid={{ $oid }}&sid={{ $sid }}">{!! $start_end['number'] !!}</a></span>
            @endif
        @endforeach
        <span><a class="rh-pagination-link rh-pagination-group" href="./?sida={{ $myPagination['next_page'] }}&oid={{ $oid }}&sid={{ $sid }}">></a></span>
        <span><a class="rh-pagination-link rh-pagination-group rh-pagination-link-next" href="./?sida={{ $myPagination['last_page'] }}&oid={{ $oid }}&sid={{ $sid }}">>></a></span>
    </div>
@endif



