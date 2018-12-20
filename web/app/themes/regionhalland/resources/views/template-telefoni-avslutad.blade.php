{{--
	Template Name: Telefoni - Avslutad
--}}

@extends('layouts.app')

@section('content')
    
    <div class="py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-stretch -mx-4 pt-4">
                
                @php($mySection = "telefoni-avslutad")
                @include('partials.menu')
                
                <header class="hidden md:flex flex-wrap w-full pb-6 px-4">
                    <div class="w-full md:w-4/12 px-6">
                        <p class="text-sm">Information</p>
                    </div>
                    <div class="w-full md:w-2/12 px-6">
                        <p class="text-sm">Område</p>
                    </div>
                    <div class="w-full md:w-2/12 px-6">
                        <p class="text-sm">Start</p>
                    </div>
                    <div class="w-full md:w-2/12 px-6">
                        <p class="text-sm">Beräknat avslut</p>
                    </div>
                    <div class="w-full md:w-2/12 px-6">
                        <p class="text-sm">Status</p>
                    </div>
                </header>
                
                @php($myArea = "Avslutad")
                @php($myItems = get_region_halland_drift_info_telefoni_avslutad())   
                @if(count($myItems) > 0)
                	@include('partials.list-content')
                @endif

            </div>
        </div>
    </div>

@endsection