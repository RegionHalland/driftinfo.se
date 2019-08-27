<div class="p1">
    <?php while ($i < $myPagination['end_item']) { ?>
        <div class="p2 mb2 rh-card">
            {{-- Generating an ID for toggle button --}}
            <?php $togglerID = uniqid();?>

            <div class="clearfix">
                <div class="col col-12 sm-col-4">
                    <h2 class="h2">{!! $myItems[$i]->post_title !!}</h2>
                    @if($myItems[$i]->date_updated)
                        Senast uppdaterad:<p class=""> {!! get_region_halland_drift_fix_date($myItems[$i]->date_updated) !!}</p> {{-- TODO: Does this take "uppföljning" into account? --}}
                    @endif
                    @if($sid == 1)
                        @switch( $myItems[$i]->status )
                            @case (1)
                                <p class="rh-labels mb2" style="background-color:#D10000; color:white;">Akut</p>
                                @break

                            @case (2)
                                <p class="rh-labels mb2" style="background-color:#FF8C00; color:black;">Enligt plan</p>
                                @break

                            @case (3)
                                <p class="rh-labels mb2" style="background-color:#378A30;color:white;">Avslutad</p>
                                @break
                        @endswitch
                    @endif
                </div>
                <div class="col col-12 sm-col-2">
                    @if($myItems[$i]->omrade)
                        @foreach ($myItems[$i]->omrade as $omrade)
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
                    @if(get_region_halland_drift_fix_date($myItems[$i]->start_time))
                        <p>{!! get_region_halland_drift_fix_date($myItems[$i]->start_time) !!}</p>
                    @else
                        -
                    @endif
                </div>
                <div class="col col-12 sm-col-2">
                    <strong class="only-sm">Beräknat avslut</strong>
                    @if(get_region_halland_drift_fix_date($myItems[$i]->end_time))
                        <p>{!! get_region_halland_drift_fix_date($myItems[$i]->end_time) !!}</p>
                    @else
                        -
                    @endif
                </div>
                <div class="col col-12 sm-col-1">
                    <strong class="only-sm">Uppdateringar</strong>
                    @if(count($myItems[$i]->follow_up) > 0)
                        <p>{{ count($myItems[$i]->follow_up) }}</p>
                    @else
                        -
                    @endif
                </div>
                {{-- En fix för att sista elementet i griden hamnade på ny rad i vissa webbläsare --}}
                <div class="col col-12 sm-col-1">
                    &nbsp;
                </div>

                {{-- Toggle knapp --}}
                <div class="col col-12 md-col-12 p1 flex justify-between" style="align-items: center; max-width: 65em; color: black; background: #E4E4E4;">
                    <span class="pl1"><strong>Beskrivning</strong></span><button id="{{$togglerID}}" aria-label="Expandera informationen om {!! $myItems[$i]->post_title !!}" class="rh-disturbance-card__toggle icon-plus" style="font-family: feather !important; background:white; font-size:1.4em; width:1.5em; height: 1.5em; border-radius: 50%; border: 0px solid transparent;"></button>
                </div>

                {{-- Information om driftstörningen--}}
                <div class="rh-disturbance-card__content" data-toggleID="{{$togglerID}}">
                    <div class="col col-12 p2 mb2 rh-article" style="background: #F4F4F4;max-width: 65em; border:1px solid #D1D1D1;">
                        <p>{!! wpautop($myItems[$i]->post_content) !!}</p>
                        @if ($myItems[$i]->follow_up)
                            @foreach ($myItems[$i]->follow_up as $followUp)
                                <div class="col col-12">
                                    <p><strong>Uppdatering {{$loop -> iteration}}:</strong><br>
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
    <?php $i++; } ?>
</div>