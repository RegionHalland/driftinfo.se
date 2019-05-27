@extends('layouts.app')

@section('content')
    
    <?php

        $sid = 1;
        $oid = 1;
        $type = 0;
        $showDeleted = 0;

        if(isset($_GET["sid"])){
            $sid = $_GET["sid"];
        }
        if(isset($_GET["oid"])){
            $oid = $_GET["oid"];
        }

        if ($sid == 1 && $oid == 1) {
            $type = 1;
            $showDeleted = 1;
        }
        if ($sid == 1 && $oid == 2) {
            $type = 2;
        }
        if ($sid == 1 && $oid == 3) {
            $type = 3;
        }
        if ($sid == 2 && $oid == 1) {
            $type = 4;
        }
        if ($sid == 2 && $oid == 2) {
            $type = 5;
        }
        if ($sid == 2 && $oid == 3) {
            $type = 6;
        }
        if ($sid == 3 && $oid == 1) {
            $type = 7;
        }
        if ($sid == 3 && $oid == 2) {
            $type = 8;
        }
        if ($sid == 3 && $oid == 3) {
            $type = 9;
        }
 
    ?>

    @php($myNumbers = get_region_halland_drift_info_get_numbers())
    <?php var_dump($myNumbers); ?>
    
    @if($sid == 1)
        <a href="./?oid={{$oid}}&sid=1" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Pågående</a>
    @else
        <a href="./?oid={{$oid}}&sid=1" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline">Pågående</a>
    @endif

    @if($sid == 2)
        <a href="./?oid={{$oid}}&sid=2" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Kommande</a>
    @else
        <a href="./?oid={{$oid}}&sid=2" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline">Kommande</a>
    @endif
    
    @if($sid == 3)
        <a href="./?oid={{$oid}}&sid=3" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Avslutade</a>
    @else
        <a href="./?oid={{$oid}}&sid=3" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline">Avslutade</a>
    @endif

    <p></p>

    @if($oid == 1)
        <a href="./?oid=1&sid={{$sid}}" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Alla</a>
    @else
        <a href="./?oid=1&sid={{$sid}}" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline">Alla</a>
    @endif

    @if($oid == 2)
        <a href="./?oid=2&sid={{$sid}}" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">IT/Telefoni</a>
    @else
        <a href="./?oid=2&sid={{$sid}}" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline">IT/Telefoni</a>
    @endif

    @if($oid == 3)
        <a href="./?oid=3&sid={{$sid}}" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Fastighet</a>
    @else
        <a href="./?oid=3&sid={{$sid}}" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline">Fastighet</a>
    @endif
    

    <div class="py-6">
        <div class="container mx-auto px-4">
 
            <div class="flex flex-wrap items-stretch -mx-4 pt-4">
                
                @php($myItems = get_region_halland_drift_info($type))
                @php($myPagination = get_region_halland_array_pagination(count($myItems),10,'sida'))
                @php($i = $myPagination['start_item'])
           
                @if($myPagination['antal_items'] > 0)
                    <header class="hidden md:flex flex-wrap w-full pb-6 px-4">
                        <div class="w-full md:w-4/12 px-6">
                            <p class="text-sm">Information</p>
                        </div>
                        <div class="w-full md:w-2/12 px-6">
                            <p class="text-sm">Område</p>
                        </div>
                        <div class="w-full md:w-2/12 px-6">
                            <p class="text-sm">Start</p>
                        </div>
                        <div class="w-full md:w-2/12 px-6">
                            <p class="text-sm">Beräknat avslut</p>
                        </div>
                        <div class="w-full md:w-2/12 px-6">
                            <p class="text-sm">Status</p>
                        </div>
                    </header>
                    <span>
                        @if($myPagination['antal_items'] == 1)
                            <h2 class="mb1" style="border-bottom: 4px solid #378A30">{{ $myPagination['antal_items'] }} driftstörning - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
                        @else
                            <h2 class="mb1" style="border-bottom: 4px solid #378A30">{{ $myPagination['antal_items'] }} driftstörningar - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
                        @endif
                    </span>
                    
                    <div class="w-full px-4">
                        <?php while ($i < $myPagination['end_item']) { ?>
                        <div class="mb-4">
                            <div class="flex flex-wrap relative items-center w-full border py-6 overflow-hidden">
                                <span aria-hidden class="absolute h-full w-1 bg-red pin-t pin-l"></span>
                                <div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
                                    <h3 class="mb-1">{!! $myItems[$i]->post_title !!}</h3>
                                    @if($myItems[$i]->date_updated)
                                        <p class="text-sm text-grey-dark">Uppdaterad: {!! get_region_halland_drift_fix_date($myItems[$i]->date_updated) !!}</p>
                                    @endif
                                </div>
                                <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                    @foreach ($myItems[$i]->omrade as $omrade)
                                        <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                    @endforeach
                                </div>
                                <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                    <p>{!! get_region_halland_drift_fix_date($myItems[$i]->start_time) !!}</p>
                                </div>
                                <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                    <p>{!! get_region_halland_drift_fix_date($myItems[$i]->end_time) !!}</p>
                                </div>
                                <div class="w-full md:w-2/12 px-6 md:mb-0">
                                    <p class="{!! $myItems[$i]->status_class !!}">{!! $myItems[$i]->status_name !!}</p>
                                </div>
                                <div class="w-full md:w-12/12 px-6 md:mb-2 md:mt-6">
                                    <h5>Driftinformation</h5>
                                </div>
                                <div class="w-full md:w-12/12 px-6 md:mb-0">
                                    <p>{!! $myItems[$i]->post_content !!}</p>
                                </div>
                                @if ($myItems[$i]->all_follow_up)
                                    <div class="w-full md:w-12/12 px-6 md:mb-2 md:mt-6">
                                        <h5>Uppföljning</h5>
                                    </div>
                                    @foreach ($myItems[$i]->all_follow_up as $followUp)
                                    <div class="w-full md:w-12/12 px-6 md:mb-0">
                                        <p>{{ $followUp['rubrik'] }}</p>
                                        <p>{{ get_region_halland_drift_fix_date($followUp['time']) }}</p>
                                        <p>{{ $followUp['content'] }}</p><br>
                                    </div>
                                    @endforeach            
                                @endif
                            </div>
                        </div>
                        <?php $i++; } ?>
                    </div>
                @else
                    <h2 class="mb1" style="border-bottom: 4px solid #378A30">Det finns inga driftstörningar inom detta urval</h2>
                @endif
            </div>
        </div>

        @if($showDeleted == 1)        
            @php($myItems = get_region_halland_drift_info(10))
            <div class="w-full px-4">
                @foreach($myItems as $myItem)
                    <div class="mb-4">
                        <div class="flex flex-wrap relative items-center w-full border py-6 overflow-hidden">
                            <span aria-hidden class="absolute h-full w-1 bg-red pin-t pin-l"></span>
                            <div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
                                <h3 class="mb-1">{!! $myItem->post_title !!}</h3>
                                @if($myItem->date_updated)
                                    <p class="text-sm text-grey-dark">Uppdaterad: {!! get_region_halland_drift_fix_date($myItem->date_updated) !!}</p>
                                @endif
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                @foreach ($myItem->omrade as $omrade)
                                    <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                @endforeach
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                <p>{!! get_region_halland_drift_fix_date($myItem->start_time) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                <p>{!! get_region_halland_drift_fix_date($myItem->end_time) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 md:mb-0">
                                <p class="{!! $myItem->status_class !!}">{!! $myItem->status_name !!}</p>
                            </div>
                            <div class="w-full md:w-12/12 px-6 md:mb-2 md:mt-6">
                                <h5>Driftinformation</h5>
                            </div>
                            <div class="w-full md:w-12/12 px-6 md:mb-0">
                                <p>{!! $myItem->post_content !!}</p>
                            </div>
                            @if ($myItem->all_follow_up)
                                <div class="w-full md:w-12/12 px-6 md:mb-2 md:mt-6">
                                    <h5>Uppföljning</h5>
                                </div>
                                @foreach ($myItem->all_follow_up as $followUp)
                                <div class="w-full md:w-12/12 px-6 md:mb-0">
                                    <p>{{ $followUp['rubrik'] }}</p>
                                    <p>{{ get_region_halland_drift_fix_date($followUp['time']) }}</p>
                                    <p>{{ $followUp['content'] }}</p><br>
                                </div>
                                @endforeach            
                            @endif
                        </div>
                    </div>    
                @endforeach
            </div>
        @endif

        @if($myPagination['antal_items'] > 0)
            <div>
                <span><a class="rh-pagination-link rh-pagination-link-previous" style="line-height: 3;" href="./?sida={{ $myPagination['first_page'] }}&oid={{ $oid }}&sid={{ $sid }}"><<</a></span>
                <span><a class="rh-pagination-link" style="line-height: 3;" href="./?sida={{ $myPagination['prev_page'] }}&oid={{ $oid }}&sid={{ $sid }}"><</a></span>
                @foreach ($myPagination['start_end'] as $start_end)
                    @if($myPagination['current_page'] == $start_end['number'])
                        <strong><a class="rh-pagination-link" style="line-height: 3;background-color: #FCAF15;" href="./?sida={{ $start_end['number'] }}&oid={{ $oid }}&sid={{ $sid }}">{!! $start_end['number'] !!}</a></strong>
                    @else
                        <span><a class="rh-pagination-link"  style="line-height: 3;" href="./?sida={{ $start_end['number'] }}&oid={{ $oid }}&sid={{ $sid }}">{!! $start_end['number'] !!}</a></span>
                    @endif
                @endforeach
                <span><a class="rh-pagination-link"  style="line-height: 3;" href="./?sida={{ $myPagination['next_page'] }}&oid={{ $oid }}&sid={{ $sid }}">></a></span>
                <span><a class="rh-pagination-link rh-pagination-link-next"  style="line-height: 3;" href="./?sida={{ $myPagination['last_page'] }}&oid={{ $oid }}&sid={{ $sid }}">>></a></span>
            </div>
        @endif
    </div>

@endsection
