{{--
	Template Name: Fastiget - Planerad
--}}

@extends('layouts.app')

@section('content')
    
    <div class="py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-stretch -mx-4 pt-4">
                
                @php($mySection = "fastighet-planerad")
                @include('partials.menu')
                
                @php($myArea = "Planerad")
                @php($myItems = get_region_halland_drift_info_fastighet_planerad())   
                @if(count($myItems) > 0)
                	@include('partials.list-header')
                    @include('partials.list-content')
                @endif

            </div>
        </div>
    </div>

@endsection