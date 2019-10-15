
<div class="rh-tabs">

    <ul class="rh-tabs-list" style="height: 3.6em;">
        
        <li style="max-width:11em;" class="rh-tabs-list-item @if($oid == 1) rh-tabs-list-item--active @endif">
            <p class="rh-tabs-list-item-text">
                <a class="rh-link--navigation" href="./?oid=1&sid={{$sid}}">
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
            </p>
        </li>

        <li style="max-width:11em;" class="rh-tabs-list-item @if($oid == 2) rh-tabs-list-item--active @endif">
            <p class="rh-tabs-list-item-text">
                <a class="rh-link--navigation" href="./?oid=2&sid={{$sid}}">
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
            </p>
        </li>

        <li style="max-width:11em;" class="rh-tabs-list-item @if($oid == 3) rh-tabs-list-item--active @endif">
            <p class="rh-tabs-list-item-text">
                <a class="rh-link--navigation" href="./?oid=3&sid={{$sid}}">
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
            </p>
        </li>

    </ul>
</div>