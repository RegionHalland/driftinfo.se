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
    


    <div class="mx-auto" style="max-width: 1440px;">


        <div class="m2 p2" style="background-color: #F4F4F4; border:1px solid grey">
            <div class="rh-tabs">
                <ul class="rh-tabs-list">
                    <li class="rh-tabs-list-item">
                        <p class="rh-tabs-list-item-text">
                            @if($sid == 1)
                                <a href="./?oid={{$oid}}&sid=1" class="">Pågående</a>
                            @else
                                <a href="./?oid={{$oid}}&sid=1" class="">Pågående</a>
                            @endif
                        </p>
                        <span class="rh-labels">{{ $myNumbers['alla-pagaende'] }}</span>
                    </li>
                    <li class="rh-tabs-list-item">
                        <p class="rh-tabs-list-item-text">
                            @if($sid == 2)
                                <a href="./?oid={{$oid}}&sid=2" class="">Kommande</a>
                            @else
                                <a href="./?oid={{$oid}}&sid=2" class="">Kommande</a>
                            @endif
                        </p>

                    </li>
                    <li class="rh-tabs-list-item">
                        <p class="rh-tabs-list-item-text">
                            @if($sid == 3)
                                <a href="./?oid={{$oid}}&sid=3" class="">Avslutade</a>
                            @else
                                <a href="./?oid={{$oid}}&sid=3" class="">Avslutade</a>
                            @endif
                        </p>

                    </li>
                </ul>
            </div>

            @if($oid == 1)
                <a href="./?oid=1&sid={{$sid}}" class="">Alla</a>
            @else
                <a href="./?oid=1&sid={{$sid}}" class="">Alla</a>
            @endif

            @if($oid == 2)
                <a href="./?oid=2&sid={{$sid}}" class="">IT/Telefoni</a>
            @else
                <a href="./?oid=2&sid={{$sid}}" class="">IT/Telefoni</a>
            @endif

            @if($oid == 3)
                <a href="./?oid=3&sid={{$sid}}" class="">Fastighet</a>
            @else
                <a href="./?oid=3&sid={{$sid}}" class="">Fastighet</a>
            @endif

            <div class="m2 p2" style="background: white; border: 1px solid grey">
                
                @php($myItems = get_region_halland_drift_info($type))
                @php($myPagination = get_region_halland_array_pagination(count($myItems),10,'sida'))
                @php($i = $myPagination['start_item'])
           
                @if($myPagination['antal_items'] > 0)


                    <header class="clearfix m2 p2 hidden-sm">
                        <div class="col col-12 md-col-4">
                            <strong>Information</strong>
                        </div>
                        <div class="col col-12 md-col-2">
                            <strong>Område</strong>
                        </div>
                        <div class="col col-12 md-col-2">
                            <strong>Start</strong>
                        </div>
                        <div class="col col-12 md-col-2">
                            <strong>Beräknat avslut</strong>
                        </div>
                        <div class="col col-12 md-col-2">
                            <strong>Uppdateringar</strong>
                        </div>
                    </header>

                    <div class="">
                        <?php while ($i < $myPagination['end_item']) { ?>
                        <div class="m2 p2" style="border-left: 8px solid #61A2D8; border-top: 1px solid grey; border-bottom: 1px solid grey; border-right: 1px solid grey;">


                            <div class="clearfix">
                                <div class="col col-12 md-col-4">
                                    <h3 class="">{!! $myItems[$i]->post_title !!}</h3>
                                    @if($myItems[$i]->date_updated)
                                        <p class="">Uppdaterad: {!! get_region_halland_drift_fix_date($myItems[$i]->date_updated) !!}</p>
                                    @endif
                                </div>
                                <div class="col col-12 md-col-2">
                                    @foreach ($myItems[$i]->omrade as $omrade)
                                        <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                    @endforeach
                                </div>
                                <div class="col col-12 md-col-2">
                                    <p>{!! get_region_halland_drift_fix_date($myItems[$i]->start_time) !!}</p>
                                </div>
                                <div class="col col-12 md-col-2">
                                    <p>{!! get_region_halland_drift_fix_date($myItems[$i]->end_time) !!}</p>
                                </div>
                                <div class="col col-12 md-col-2">
                                   .
                                </div>
                                <div class="col col-12">
                                    <p class="rh-labels">{!! $myItems[$i]->status_name !!}</p>
                                </div>
                                <div class="col col-12">
                                    <strong>Beskrivning:</strong>
                                </div>
                                <div class="col col-12 p2" style="background: #F4F4F4; border:1px solid #D1D1D1;">
                                    <p>{!! $myItems[$i]->post_content !!}</p>
                                </div>
                                @if ($myItems[$i]->all_follow_up)
                                    <div class="">
                                        <h5>Uppföljning</h5>
                                    </div>
                                    @foreach ($myItems[$i]->all_follow_up as $followUp)
                                    <div class="">
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
                    <h2 class="" style="border-bottom: 4px solid #378A30">Det finns inga driftstörningar inom detta urval</h2>
                @endif
            </div>
        </div>

        @if($showDeleted == 1)        
            @php($myItems = get_region_halland_drift_info(10))
            <div class="">
                @foreach($myItems as $myItem)
                    <div class="">
                        <div class="">

                            <div class="">
                                <h3 class="">{!! $myItem->post_title !!}</h3>
                                @if($myItem->date_updated)
                                    <p class="">Uppdaterad: {!! get_region_halland_drift_fix_date($myItem->date_updated) !!}</p>
                                @endif
                            </div>
                            <div class="">
                                @foreach ($myItem->omrade as $omrade)
                                    <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                @endforeach
                            </div>
                            <div class="">
                                <p>{!! get_region_halland_drift_fix_date($myItem->start_time) !!}</p>
                            </div>
                            <div class="">
                                <p>{!! get_region_halland_drift_fix_date($myItem->end_time) !!}</p>
                            </div>
                            <div class="">
                                <p class="{!! $myItem->status_class !!}">{!! $myItem->status_name !!}</p>
                            </div>
                            <div class="">
                                <h5>Driftinformation</h5>
                            </div>
                            <div class="">
                                <p>{!! $myItem->post_content !!}</p>
                            </div>
                            @if ($myItem->all_follow_up)
                                <div class="">
                                    <h5>Uppföljning</h5>
                                </div>
                                @foreach ($myItem->all_follow_up as $followUp)
                                <div class="">
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
            <span>
                        @if($myPagination['antal_items'] == 1)
                    <h2 class="" style="border-bottom: 4px solid #378A30">{{ $myPagination['antal_items'] }} driftstörning - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
                @else
                    <h2 class="" style="border-bottom: 4px solid #378A30">{{ $myPagination['antal_items'] }} driftstörningar - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
                @endif
                    </span>
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
