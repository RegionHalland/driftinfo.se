{{--
	Template Name: Fastiget - Avslutad
--}}

@extends('layouts.app')

@section('content')
    
    <div class="py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-stretch -mx-4 pt-4">
                
                @php($mySection = "fastighet-avslutad")
                @include('partials.menu')
                
                @php($myArea = "Avslutad")
                @php($myItems = get_region_halland_drift_info_fastighet_avslutad())   
                @if(count($myItems) > 0)
                	@include('partials.list-header')
                    @include('partials.list-content')
                @endif

            </div>
        </div>
    </div>

@endsection