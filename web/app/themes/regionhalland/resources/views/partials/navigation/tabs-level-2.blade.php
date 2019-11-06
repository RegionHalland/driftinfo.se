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
        <span class="rh-labels" style="color: white; background: #004890;">
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
        <span class="rh-labels" style="color: white; background: #004890;">
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
        <span class="rh-labels" style="color: white; background: #004890;">
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