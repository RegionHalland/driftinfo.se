@if(function_exists('get_region_halland_tree_first_level'))
    @php($myFrontNavs = get_region_halland_tree_first_level()) 
    @if(isset($myFrontNavs))
        <ul class="flex flex-wrap p3 background-white" aria-label="Huvudnavigation">
            @foreach ($myFrontNavs as $myFrontNav)    
                <li class="col-12 md-col-4 lg-col-4">
                    <div class="p3">
                        <span class="center strong">
                            <svg class="icon-badge icon-badge--md mr1" viewBox="0 0 8 8">
                                {!! get_region_halland_icon('chevron-right') !!}
                            </svg>
                            <a href="{{ get_page_link($myFrontNav->ID) }}" style="vertical-align: middle; color: #004B93">{{ $myFrontNav->post_title }}</a>
                        </span>
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
@endif