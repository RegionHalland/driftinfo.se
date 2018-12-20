<div class="w-full px-4">
    @foreach ($myItems as $myItem)
    <div class="mb-4">
        <div class="flex flex-wrap relative items-center w-full border py-6 overflow-hidden">
            <span aria-hidden class="absolute h-full w-1 bg-red pin-t pin-l"></span>
            <div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
                <h3 class="mb-1">{!! $myItem->post_title !!}</h3>
                <p class="text-sm text-grey-dark">Skapad: {!! get_region_halland_drift_fix_date($myItem->post_date) !!}</p>
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
                @if ($myArea == "Akut")
                    <p class="inline-flex py-1 p-3 rounded-full bg-red text-white">Akut</p>
                @endif
                @if ($myArea == "Planerad")
                    <p class="inline-flex py-1 p-3 rounded-full bg-orange">Planerad</p>
                @endif
                @if ($myArea == "Avslutad")
                    <p class="inline-flex py-1 p-3 rounded-full bg-green text-white">Avslutad</p>
                @endif            
            </div>
        </div>
    </div>
    @endforeach
</div>
                