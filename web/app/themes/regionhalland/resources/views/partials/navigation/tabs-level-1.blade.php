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