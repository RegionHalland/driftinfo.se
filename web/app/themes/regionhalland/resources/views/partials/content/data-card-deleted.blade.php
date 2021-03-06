@if($showDeleted == 1)
    @php($myItems = get_region_halland_drift_info(10))
    <div class="center" style="max-width:1152px;">
        <div class="p1">
            @foreach($myItems as $myItem)
                <div class="p2 my2 rh-card">
                    {{-- Generating an ID for toggle button --}}
                    <?php $togglerID = uniqid();?>

                    <div class="clearfix">
                        <div class="col col-12 sm-col-4">
                            <h2 class="h2">{!! $myItem->post_title !!}</h2>
                            @if($myItem->date_updated)
                                Senast uppdaterad:<p class=""> {!! get_region_halland_drift_fix_date($myItem->date_updated) !!}</p>
                            @endif
                            <p class="rh-labels mb2" style="background-color:#378A30;color:white;">Avslutad</p>
                        </div>
                        <div class="col col-12 sm-col-2">
                            @if($myItem->omrade)
                                @foreach ($myItem->omrade as $omrade)
                                    <strong class="only-sm">Område</strong>
                                    <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                @endforeach
                            @else
                                <strong class="only-sm">Område</strong>
                                <p>Ej angivet</p>
                            @endif
                        </div>
                        <div class="col col-12 sm-col-2">
                            <strong class="only-sm">Start</strong>
                            @if(get_region_halland_drift_fix_date($myItem->start_time))
                                <p>{!! get_region_halland_drift_fix_date($myItem->start_time) !!}</p>
                            @else
                                -
                            @endif
                        </div>
                        <div class="col col-12 sm-col-2">
                            <strong class="only-sm">Beräknat avslut</strong>
                            @if(get_region_halland_drift_fix_date($myItem->end_time))
                                <p>{!! get_region_halland_drift_fix_date($myItem->end_time) !!}</p>
                            @else
                                -
                            @endif
                        </div>
                        <div class="col col-12 sm-col-1">
                            <strong class="only-sm">Uppdateringar</strong>
                            @if(count($myItem->follow_up) > 0)
                                <p>{{ count($myItem->follow_up) }}</p>
                            @else
                                -
                            @endif
                        </div>

                        {{-- En fix för att sista elementet i griden hamnade på ny rad i vissa webbläsare --}}
                        <div class="col col-12 sm-col-1">
                            &nbsp;
                        </div>

                        {{-- Toggle knapp --}}
                        <div class="col col-12 md-col-12 p1 flex justify-between" style="align-items: center; color: black; max-width:65em; background: #E4E4E4;">
                            <span class="pl1"><strong>Beskrivning</strong></span><button id="{{$togglerID}}" aria-label="Expandera informationen om {!! $myItems[$i]->post_title !!}" class="rh-disturbance-card__toggle icon-plus" style="font-family: feather !important; background:white; font-size:1.4em; width:1.5em; height: 1.5em; border-radius: 50%; border: 0px solid transparent;"></button>
                        </div>

                        {{-- Information om driftstörningen--}}
                        <div class="rh-disturbance-card__content" data-toggleID="{{$togglerID}}">
                            <div class="col col-12 p2 mb2 rh-article" style="background: #F4F4F4;max-width: 65em; border:1px solid #D1D1D1;">
                                <p>{!! wpautop($myItem->post_content) !!}</p>
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

                                @if($oid == 2)
                                    Vid frågor kontakta Servicedesk 010-476 19 00
                                @endif

                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif