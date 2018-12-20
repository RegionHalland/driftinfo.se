@php($myNumbers = get_region_halland_drift_info_get_numbers())
<div class="w-full px-4 mb-4">
    @if ($mySection == "it-akut")
        <a href="http://stage-drift.local/it-akut/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">IT Akut ({!! $myNumbers['Pagaende-IT'] !!})</a>
    @else
        <a href="http://stage-drift.local/it-akut/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">IT Akut ({!! $myNumbers['Pagaende-IT'] !!})</a>
    @endif
    @if ($mySection == "it-planerad")
        <a href="http://stage-drift.local/it-planerad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">IT Planerade ({!! $myNumbers['Planerad-IT'] !!})</a>
    @else
        <a href="http://stage-drift.local/it-planerad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline">IT Planerade ({!! $myNumbers['Planerad-IT'] !!})</a>
    @endif
    @if ($mySection == "it-avslutad")
        <a href="http://stage-drift.local/it-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">IT Avslutade ({!! $myNumbers['Avslutad-IT'] !!})</a>
    @else
        <a href="http://stage-drift.local/it-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">IT Avslutade ({!! $myNumbers['Avslutad-IT'] !!})</a>
    @endif
    @if ($mySection == "telefoni-akut")
        <a href="http://stage-drift.local/telefoni-akut/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Telefoni Akut ({!! $myNumbers['Pagaende-Telefoni'] !!})</a>
    @else
        <a href="http://stage-drift.local/telefoni-akut/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Telefoni Akut ({!! $myNumbers['Pagaende-Telefoni'] !!})</a>
    @endif
    @if ($mySection == "telefoni-planerad")
        <a href="http://stage-drift.local/telefoni-planerad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Telefoni Planerade ({!! $myNumbers['Planerad-Telefoni'] !!})</a>
    @else
        <a href="http://stage-drift.local/telefoni-planerad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Telefoni Planerade ({!! $myNumbers['Planerad-Telefoni'] !!})</a>
    @endif
    @if ($mySection == "telefoni-avslutad")
        <a href="http://stage-drift.local/telefoni-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Telefoni Avslutade ({!! $myNumbers['Avslutad-Telefoni'] !!})</a>
    @else
        <a href="http://stage-drift.local/telefoni-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Telefoni Avslutade ({!! $myNumbers['Avslutad-Telefoni'] !!})</a>
    @endif
    @if ($mySection == "fastighet-akut")
        <a href="http://stage-drift.local/fastighet-akut/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Fastighet Akut ({!! $myNumbers['Pagaende-Fastighet'] !!})</a>
    @else
        <a href="http://stage-drift.local/fastighet-akut/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Fastighet Akut ({!! $myNumbers['Pagaende-Fastighet'] !!})</a>
    @endif
    @if ($mySection == "fastighet-planerad")
        <a href="http://stage-drift.local/fastighet-planerad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Fastighet Planerade ({!! $myNumbers['Planerad-Fastighet'] !!})</a>
    @else
        <a href="http://stage-drift.local/fastighet-planerad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Fastighet Planerade ({!! $myNumbers['Planerad-Fastighet'] !!})</a>
    @endif
    @if ($mySection == "fastighet-avslutad")
        <a href="http://stage-drift.local/fastighet-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline bg-blue-light">Fastighet Avslutade ({!! $myNumbers['Avslutad-Fastighet'] !!})</a>    
    @else
        <a href="http://stage-drift.local/fastighet-avslutad/" class="inline-block px-4 py-2 border rounded border-blue text-blue-dark no-underline ">Fastighet Avslutade ({!! $myNumbers['Avslutad-Fastighet'] !!})</a>    
    @endif
</div>