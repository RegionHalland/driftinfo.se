@extends('layouts.app')

@section('content')

    {{-- Hämta URL-parametrar och förbered data --}}
    <?php

        $sid = 1;
        $oid = 1;
        $type = 0;
        $showDeleted = 0;

        if(isset($_GET["sid"])){
            $sid = $_GET["sid"];
        }
        if(isset($_GET["oid"])){
            $oid = $_GET["oid"];
        }

        if($sid == 1)
            switch ($oid) {
                case 1:
                    $type = 1;
                    $showDeleted = 1;
                    break;
                case 2:
                    $type = 2;
                    break;
                case 3:
                    $type = 3;
                    break;
            }
        elseif($sid == 2)
            switch ($oid) {
                case 1:
                    $type = 4;
                    break;
                case 2:
                    $type = 5;
                    break;
                case 3:
                    $type = 6;
                    break;
            }
        elseif($sid == 3)
            switch ($oid) {
                case 1:
                    $type = 7;
                    break;
                case 2:
                    $type = 8;
                    break;
                case 3:
                    $type = 9;
                    break;
            }
    ?>

    @php($myNumbers = get_region_halland_drift_info_get_numbers())
<main id="main">
    <div class="mx-auto" style="max-width: 1440px;">
        <div class="center" style="position:relative; top: -3.6em;max-width: 1152px">
            @include('partials.navigation.tabs-level1')
            @include('partials.navigation.tabs-level2')

            <div style="background: white;">
                
                @php($myItems = get_region_halland_drift_info($type))
                @php($myPagination = get_region_halland_array_pagination(count($myItems),10,'sida'))
                @php($i = $myPagination['start_item'])
           
                @if($myPagination['antal_items'] > 0)

                    {{-- Rubrikrad, visa bara från tablet och uppåt --}}
                    @include('partials.content.column-headlines-row')

                    <div class="p1">
                        <?php while ($i < $myPagination['end_item']) { ?>
                            @include('partials.content.data-card-current')
                        <?php $i++; } ?>
                    </div>
                @else
                    @include('partials.content.message-no-disturbances')
                @endif
            </div>
        </div>

        {{-- Här visas passerade driftstörningar --}}
        @if($showDeleted == 1)        
            @php($myItems = get_region_halland_drift_info(10))
            <div class="center" style="max-width:1152px;">
                <div class="p1">
                    @foreach($myItems as $myItem)
                        @include('partials.content.data-card-deleted')
                    @endforeach
                </div>
            </div>
        @endif

        {{-- Paginering --}}
        @if($myPagination['total_pages'] >= 2)
            @include('partials.pagination.pagination')
        @endif
    </div>
</main>

@endsection
