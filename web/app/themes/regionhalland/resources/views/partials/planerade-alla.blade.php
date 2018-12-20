@if(function_exists('get_region_halland_drift_info_planerade_alla'))
    @php($myPlaneradeAlla = get_region_halland_drift_info_planerade_alla())   
    @if(count($myPlaneradeAlla) > 0)
        <div class="col-12 lg-col-6 h6 strong">
            <div class="pl3">
                Rubrik
            </div>
        </div>
        <div class="col-12 lg-col-2 h6 strong">
            Område
        </div>
        <div class="col-12 lg-col-2 h6 strong">
            Start
        </div>
        <div class="col-12 lg-col-2 mb3 h6 strong">
            Beräknat avslut
        </div>
        @foreach ($myPlaneradeAlla as $planerade)
            <div class="col-12 lg-col-6">
                <div class="pl3 border">
                    <h2 class="h4">{!! $planerade->post_title !!}</h5>
                    <span class="h6">Skapad: {!! get_region_halland_drift_fix_date($planerade->post_date) !!}</span>
                </div>
            </div>
            <div class="col-12 lg-col-2">
                @foreach ($planerade->omrade as $omrade)
                    <span class="h6">{!! get_region_halland_drift_omrade_namn($omrade) !!}</span><br>
                @endforeach
            </div>
            <div class="col-12 lg-col-2">
                <span class="h6">{!! get_region_halland_drift_fix_date($planerade->start_time) !!}</span>
            </div>
            <div class="col-12 lg-col-2 mb2">
                <span class="h6">{!! get_region_halland_drift_fix_date($planerade->end_time) !!}</span>
            </div>
            <div class="col-12 lg-col-12 mb2">
                <div class="pl3 border">
                    <span class="h6">{!! $planerade->post_content !!}</span>
                </div>
            </div>
            <div class="col-12 lg-col-12 mb4">
                <div class="pl3 border">
                    <span class="h6 italic">{!! $planerade->follow_up !!}</span>
                </div>
            </div>
        @endforeach
    @else
        <div class="pl3 h6">Det finns inga planerade driftstörningar</div>
    @endif
@endif