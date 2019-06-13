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
        {{-- Fliknavigation nivå 1 --}}
        <div class="center" style="position:relative; top: -3.6em;max-width: 1152px">
            <div class="rh-tabs">
                <ul class="rh-tabs-list" style="height: 3.6em;">
                    <li style="max-width:10em;" class="rh-tabs-list-item @if($sid == 1) rh-tabs-list-item--active @endif">
                        <p class="rh-tabs-list-item-text">
                            <a class="rh-link--navigation" href="./?oid={{$oid}}&sid=1">
                                @if($sid ==1 )
                                    <strong>Pågående</strong>
                                @else
                                    Pågående
                                @endif
                            </a>
                        </p>
                    </li>
                    <li style="max-width:10em;" class="rh-tabs-list-item @if($sid == 2) rh-tabs-list-item--active @endif">
                        <p class="rh-tabs-list-item-text">
                            <a class="rh-link--navigation" href="./?oid={{$oid}}&sid=2" class="">
                                @if($sid == 2 )
                                    <strong>Kommande</strong>
                                @else
                                    Kommande
                                @endif
                            </a>
                        </p>
                    </li>
                    <li style="max-width:10em;" class="rh-tabs-list-item @if($sid == 3) rh-tabs-list-item--active @endif">
                        <p class="rh-tabs-list-item-text">
                            <a class="rh-link--navigation" href="./?oid={{$oid}}&sid=3" class="">
                                @if($sid == 3 )
                                    <strong>Avslutade</strong>
                                @else
                                    Avslutade
                                @endif
                            </a>
                        </p>
                    </li>
                </ul>
            </div>

            {{-- Fliknavigation nivå 2 - container --}}
            <div class="mt3 mb2 rh-buttongroup">

                {{-- Fliknavigation nivå 2 - Fliken "Alla" --}}
                <div class="rh-buttongroup__button rh-buttongroup__button--left @if($oid == 1) rh-buttongroup__button--active @endif">

                            <a class="rh-buttongroup__button-text" href="./?oid=1&sid={{$sid}}">
                                @if($oid ==1 )
                                    <strong>Alla</strong>
                                @else
                                    Alla
                                @endif
                            </a>
                            <span class="rh-labels" style="color: white; background: #61A2D8">
                                @switch($sid)
                                    @case(1)
                                        {{ $myNumbers['alla-pagaende'] }}
                                    @break
                                    @case(2)
                                        {{ $myNumbers['alla-kommande'] }}
                                    @break
                                    @case(3)
                                        {{ $myNumbers['alla-avslutade'] }}
                                    @break
                                @endswitch
                            </span>

                    </div>

                    {{-- Fliknavigation nivå 2 - Fliken "IT/telefoni" --}}
                <div class="rh-buttongroup__button @if($oid == 2) rh-buttongroup__button--active @endif">

                            <a class="rh-buttongroup__button-text" href="./?oid=2&sid={{$sid}}">
                                @if($oid == 2 )
                                    <strong>IT/Telefoni</strong>
                                @else
                                    IT/Telefoni
                                @endif
                            </a>
                            <span class="rh-labels" style="color: white; background: #61A2D8">
                                @switch($sid)
                                    @case(1)
                                        {{ $myNumbers['it-telefoni-pagaende'] }}
                                    @break
                                    @case(2)
                                        {{ $myNumbers['it-telefoni-kommande'] }}
                                    @break
                                    @case(3)
                                        {{ $myNumbers['it-telefoni-avslutade'] }}
                                    @break
                                @endswitch
                            </span>

                    </div>

                    {{-- Fliknavigation nivå 2 - Fliken "Fastighet" --}}
                    <div class="rh-buttongroup__button rh-buttongroup__button--right @if($oid == 3) rh-buttongroup__button--active @endif">

                            <a class="rh-buttongroup__button-text" href="./?oid=3&sid={{$sid}}">
                                @if($oid ==3 )
                                    <strong>Fastighet</strong>
                                @else
                                    Fastighet
                                @endif
                            </a>
                            <span class="rh-labels" style="color: white; background: #61A2D8">
                                @switch($sid)
                                    @case(1)
                                        {{ $myNumbers['fastighet-pagaende'] }}
                                    @break
                                    @case(2)
                                        {{ $myNumbers['fastighet-kommande'] }}
                                    @break
                                    @case(3)
                                        {{ $myNumbers['fastighet-avslutade'] }}
                                    @break
                                @endswitch
                            </span>

                    </div>

            </div>

            <div class="" style="background: white;">
                
                @php($myItems = get_region_halland_drift_info($type))

                @php($myPagination = get_region_halland_array_pagination(count($myItems),10,'sida'))
                @php($i = $myPagination['start_item'])
           
                @if($myPagination['antal_items'] > 0)

                {{-- Rubrikrad, visa bara från tablet och uppåt --}}
                {{--
                    <header class="clearfix m2 hidden-sm" style="border-left:8px solid transparent">
                        <div class="col col-12 md-col-3">
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
                        <div class="col col-12 md-col-1">
                        </div>
                    </header>
                    --}}

                    <div class="p1">
                        <?php while ($i < $myPagination['end_item']) { ?>
                        <div class="p2 my2 rh-card">
                            {{-- Generating an ID for toggle button --}}
                            <?php $togglerID = uniqid();?>

                            <div class="clearfix">
                                <div class="col col-12 md-col-3">
                                    <h3 class="h2">{!! $myItems[$i]->post_title !!}</h3>
                                    @if($myItems[$i]->date_updated)
                                        Senast uppdaterad:<p class=""> {!! get_region_halland_drift_fix_date($myItems[$i]->date_updated) !!}</p> {{-- TODO: Does this take "uppföljning" into account? --}}
                                    @endif
                                    @if($sid == 1)

                                            @switch( $myItems[$i]->status )
                                                @case (1)
                                                    <p class="rh-labels mb2" style="background-color:#D10000; color:white;">Akut</p>
                                                    @break

                                                @case (2)
                                                     <p class="rh-labels mb2" style="background-color:yellow; color:black;">Enligt plan</p>
                                                    @break

                                                @case (3)
                                                    <p class="rh-labels mb2" style="background-color:#378A30;color:white;">Avslutad</p>
                                                    @break

                                            @endswitch

                                    @endif
                                </div>
                                <div class="col col-12 md-col-2">
                                    @if($myItems[$i]->omrade)
                                        @foreach ($myItems[$i]->omrade as $omrade)
                                            <strong>Område</strong>
                                            <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                        @endforeach
                                    @else
                                        <strong>Område</strong>
                                        <p>Ej angivet</p>
                                    @endif
                                </div>
                                <div class="col col-12 md-col-2">
                                    <strong>Start</strong>
                                    <p>{!! get_region_halland_drift_fix_date($myItems[$i]->start_time) !!}</p>
                                </div>
                                <div class="col col-12 md-col-2">
                                    <strong>Beräknat avslut</strong>
                                    <p>{!! get_region_halland_drift_fix_date($myItems[$i]->end_time) !!}</p>
                                </div>
                                <div class="col col-12 md-col-2">
                                    <strong>Uppdateringar</strong>
                                    <p>{{ count($myItems[$i]->follow_up) }}</p>
                                </div>

                                {{-- Toggle knapp --}}
                                <div class="col col-12 md-col-1">
                                    <button  id="{{$togglerID}}" class="rh-disturbance-card__toggle icon-plus" style="font-family: feather !important; background:white; font-size:1.6em; border: 0px solid transparent;"></button>
                                </div>

                                <div class="rh-disturbance-card__content" data-toggleID="{{$togglerID}}">
                                    <div class="col col-12">
                                        <strong>Beskrivning:</strong>
                                    </div>
                                    <div class="col col-12 p2 my2 rh-article" style="max-width: 65em; background: #F4F4F4; border:1px solid #D1D1D1;">
                                        <p>{!! wpautop($myItems[$i]->post_content) !!}</p>
                                        @if($oid == 2)
                                            Vid frågor kontakta Servicedesk 010-476 19 00
                                        @endif
                                    </div>
                                    @if ($myItems[$i]->follow_up)
                                        @foreach ($myItems[$i]->follow_up as $followUp)
                                        <div class="col col-12">
                                            <p><strong>Uppdatering:</strong><br>
                                            {{--<p>{{ $followUp['rubrik'] }}</p> --}}
                                            {{-- <p>{{ get_region_halland_drift_fix_date($followUp['time']) }}</p> --}}
                                            {{ $followUp['content'] }}</p>
                                        </div>
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                        <?php $i++; } ?>
                    </div>
                @else
                    @switch ($type)
                        @case(1)
                            <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga pågående driftstörningar</h2>
                        @break
                        @case(2)
                        <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga pågående driftstörningar inom IT/tele</h2>
                        @break
                        @case(3)
                        <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga pågående driftstörningar inom fastighet</h2>
                        @break
                        @case(4)
                        <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga kommande driftstörningar</h2>
                        @break
                        @case(5)
                        <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga kommande driftstörningar inom IT/telefoni </h2>
                        @break
                        @case(6)
                        <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga kommande driftstörningar inom fastighet</h2>
                        @break
                        @case(7)
                        <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga avslutade driftstörningar</h2>
                        @break
                        @case(8)
                        <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga avslutade driftstörningar inom IT/telefoni</h2>
                        @break
                        @case(9)
                        <h2 class="h3" style="border-bottom: 4px solid #004890">Det finns inga avslutade driftstörningar inom fastighet</h2>
                        @break
                    @endswitch

                @endif
            </div>
        </div>

        @if($showDeleted == 1)        
            @php($myItems = get_region_halland_drift_info(10))
            <div class="center" style="max-width:1152px;">
            <div class="p1">
                @foreach($myItems as $myItem)
                    <div class="p2 my2 rh-card center">
                        {{-- Generating an ID for toggle button --}}
                        <?php $togglerID = uniqid();?>

                        <div class="clearfix">
                            <div class="col col-12 md-col-3">
                                <h3 class="h2">{!! $myItem->post_title !!}</h3>
                                @if($myItem->date_updated)
                                    Senast uppdaterad:<p class=""> {!! get_region_halland_drift_fix_date($myItem->date_updated) !!}</p> {{-- TODO: Does this take "uppföljning" into account? --}}
                                @endif
                                @if($sid == 1)

                                    @switch( $myItem->status )
                                        @case (1)
                                        <p class="rh-labels mb2" style="background-color:#D10000; color:white;">Akut</p>
                                        @break

                                        @case (2)
                                        <p class="rh-labels mb2" style="background-color:yellow; color:black;">Enligt plan</p>
                                        @break

                                        @case (3)
                                        <p class="rh-labels mb2" style="background-color:#378A30;color:white;">Avslutad</p>
                                        @break

                                    @endswitch

                                @endif
                            </div>
                            <div class="col col-12 md-col-2">
                                @if($myItem->omrade)
                                    @foreach ($myItem->omrade as $omrade)
                                        <strong>Område</strong>
                                        <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                    @endforeach
                                @else
                                    <strong>Område</strong>
                                    <p>Ej angivet</p>
                                @endif
                            </div>
                            <div class="col col-12 md-col-2">
                                <strong>Start</strong>
                                <p>{!! get_region_halland_drift_fix_date($myItem->start_time) !!}</p>
                            </div>
                            <div class="col col-12 md-col-2">
                                <strong>Beräknat avslut</strong>
                                <p>{!! get_region_halland_drift_fix_date($myItem->end_time) !!}</p>
                            </div>
                            <div class="col col-12 md-col-2">
                                <strong>Uppdateringar</strong>
                                <p>{{ count($myItem->follow_up) }}</p>
                            </div>

                            {{-- Toggle knapp --}}
                            <div class="col col-12 md-col-1">
                                <button  id="{{$togglerID}}" class="rh-disturbance-card__toggle icon-plus" style="font-family: feather !important; font-size:1.6em; background: white; border: 0px solid transparent;"></button>
                            </div>

                            <div class="rh-disturbance-card__content" data-toggleID="{{$togglerID}}">
                                <div class="col col-12">
                                    <strong>Beskrivning:</strong>
                                </div>
                                <div class="col col-12 p2 my2 rh-article" style="max-width: 65em; background: #F4F4F4; border:1px solid #D1D1D1;">
                                    <p>{!! wpautop($myItem->post_content) !!}</p>
                                    @if($oid == 2)
                                        Vid frågor kontakta Servicedesk 010-476 19 00
                                    @endif
                                </div>
                                @if ($myItem->follow_up)
                                    @foreach ($myItem->follow_up as $followUp)
                                        <div class="col col-12">
                                            <p><strong>Uppdatering:</strong><br>
                                                {{--<p>{{ $followUp['rubrik'] }}</p> --}}
                                                {{-- <p>{{ get_region_halland_drift_fix_date($followUp['time']) }}</p> --}}
                                                {{ $followUp['content'] }}</p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            </div>
        @endif

        @if($myPagination['total_pages'] > 1)
            <div style="display:flex; justify-content: center;">
                @if($myPagination['antal_items'] == 1)
                    <h2 class="h3" style="border-bottom: 4px solid #004890">{{ $myPagination['antal_items'] }} driftstörning - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
                @else
                    <h2 class="h3" style="border-bottom: 4px solid #004890">{{ $myPagination['antal_items'] }} driftstörningar - sida {{ $myPagination['current_page'] }} av {{ $myPagination['total_pages'] }}</h2>
                @endif
                    </div>
            <div style="display:flex; justify-content: center;">
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
