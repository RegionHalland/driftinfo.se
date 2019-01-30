@php($myNumbers = get_region_halland_drift_info_get_numbers())
<div class="w-full px-4 mb-4">
    @if ($mySection == "it-pagaende")
        <a href="{!! env('WP_HOME') !!}/it-pagaende/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">IT Pågående ({!! $myNumbers['Pagaende-IT'] !!})</a>
    @else
        <a href="{!! env('WP_HOME') !!}/it-pagaende/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">IT Pågående ({!! $myNumbers['Pagaende-IT'] !!})</a>
    @endif
    @if ($mySection == "it-kommande")
        <a href="{!! env('WP_HOME') !!}/it-kommande/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">IT Kommande ({!! $myNumbers['Kommande-IT'] !!})</a>
    @else
        <a href="{!! env('WP_HOME') !!}/it-kommande/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline">IT Kommande ({!! $myNumbers['Kommande-IT'] !!})</a>
    @endif
    @if ($mySection == "it-avslutad")
        <a href="{!! env('WP_HOME') !!}/it-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">IT Avslutade ({!! $myNumbers['Avslutad-IT'] !!})</a>
    @else
        <a href="{!! env('WP_HOME') !!}/it-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">IT Avslutade ({!! $myNumbers['Avslutad-IT'] !!})</a>
    @endif
    @if ($mySection == "telefoni-pagaende")
        <a href="{!! env('WP_HOME') !!}/telefoni-pagaende/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Telefoni Pågående ({!! $myNumbers['Pagaende-Telefoni'] !!})</a>
    @else
        <a href="{!! env('WP_HOME') !!}/telefoni-pagaende/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Telefoni Pågående ({!! $myNumbers['Pagaende-Telefoni'] !!})</a>
    @endif
    @if ($mySection == "telefoni-kommande")
        <a href="{!! env('WP_HOME') !!}/telefoni-kommande/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Telefoni Kommande ({!! $myNumbers['Kommande-Telefoni'] !!})</a>
    @else
        <a href="{!! env('WP_HOME') !!}/telefoni-kommande/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Telefoni Kommande ({!! $myNumbers['Kommande-Telefoni'] !!})</a>
    @endif
    @if ($mySection == "telefoni-avslutad")
        <a href="{!! env('WP_HOME') !!}/telefoni-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Telefoni Avslutade ({!! $myNumbers['Avslutad-Telefoni'] !!})</a>
    @else
        <a href="{!! env('WP_HOME') !!}/telefoni-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Telefoni Avslutade ({!! $myNumbers['Avslutad-Telefoni'] !!})</a>
    @endif
    @if ($mySection == "fastighet-pagaende")
        <a href="{!! env('WP_HOME') !!}/fastighet-pagaende/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Fastighet Pågående ({!! $myNumbers['Pagaende-Fastighet'] !!})</a>
    @else
        <a href="{!! env('WP_HOME') !!}/fastighet-pagaende/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Fastighet Pågående ({!! $myNumbers['Pagaende-Fastighet'] !!})</a>
    @endif
    @if ($mySection == "fastighet-kommande")
        <a href="{!! env('WP_HOME') !!}/fastighet-kommande/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Fastighet Kommande ({!! $myNumbers['Kommande-Fastighet'] !!})</a>
    @else
        <a href="{!! env('WP_HOME') !!}/fastighet-kommande/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Fastighet Kommande ({!! $myNumbers['Kommande-Fastighet'] !!})</a>
    @endif
    @if ($mySection == "fastighet-avslutad")
        <a href="{!! env('WP_HOME') !!}/fastighet-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Fastighet Avslutade ({!! $myNumbers['Avslutad-Fastighet'] !!})</a>    
    @else
        <a href="{!! env('WP_HOME') !!}/fastighet-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Fastighet Avslutade ({!! $myNumbers['Avslutad-Fastighet'] !!})</a>    
    @endif
</div>