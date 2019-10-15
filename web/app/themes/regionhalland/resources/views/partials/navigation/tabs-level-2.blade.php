
<div class="mt3 mb2 rh-buttongroup">

    {{-- Fliknavigation nivå 2 - Fliken "Alla" --}}
    <div class="rh-buttongroup__button rh-buttongroup__button--left @if($sid == 1) rh-buttongroup__button--active @endif">

        <a class="rh-buttongroup__button-text" href="./?oid={{$oid}}&sid=1">
            @if($sid ==1 )
                <strong>Pågående</strong>
            @else
                Pågående
            @endif
        </a>
        <span class="rh-labels" style="color: white; background: #004890;">
            @switch($oid)
                @case(1)
                {{ $myNumbers['alla-pagaende'] }}
                @break
                @case(2)
                {{ $myNumbers['it-telefoni-pagaende'] }}
                @break
                @case(3)
                {{ $myNumbers['fastighet-pagaende'] }}
                @break
            @endswitch
        </span>
    </div>
    
     <div class="rh-buttongroup__button rh-buttongroup__button--left @if($sid == 2) rh-buttongroup__button--active @endif">

        <a class="rh-buttongroup__button-text" href="./?oid={{$oid}}&sid=2" class="">
            @if($sid == 2 )
                <strong>Kommande</strong>
            @else
                Kommande
            @endif
        </a>
        <span class="rh-labels" style="color: white; background: #004890;">
            @switch($oid)
                @case(1)
                {{ $myNumbers['alla-kommande'] }}
                @break
                @case(2)
                {{ $myNumbers['it-telefoni-kommande'] }}
                @break
                @case(3)
                {{ $myNumbers['fastighet-kommande'] }}
                @break
            @endswitch
        </span>
      </div>        
      
     <div class="rh-buttongroup__button rh-buttongroup__button--left @if($sid == 3) rh-buttongroup__button--active @endif">

        <a class="rh-buttongroup__button-text" href="./?oid={{$oid}}&sid=3" class="">
            @if($sid == 3 )
                <strong>Avslutade</strong>
            @else
                Avslutade
            @endif
        </a>
        <span class="rh-labels" style="color: white; background: #004890;">
            @switch($oid)
                @case(1)
                {{ $myNumbers['alla-avslutade'] }}
                @break
                @case(2)
                {{ $myNumbers['it-telefoni-avslutade'] }}
                @break
                @case(3)
                {{ $myNumbers['fastighet-avslutade'] }}
                @break
            @endswitch
        </span>
      </div>        
</div>