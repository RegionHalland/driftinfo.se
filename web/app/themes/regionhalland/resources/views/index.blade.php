@extends('layouts.app')

@section('content')
    
    <div class="py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-stretch -mx-4 pt-4">
                
                @php($mySection = "")
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
                
                @php($myPagaendeAlla = get_region_halland_drift_info_pagaende_alla())   
                @if(count($myPagaendeAlla) > 0)
                <div class="w-full px-4">
                    @foreach ($myPagaendeAlla as $pagande)
                    <div class="mb-4">
                        <div class="flex flex-wrap relative items-center w-full border py-6 overflow-hidden">
                            <span aria-hidden class="absolute h-full w-1 bg-red pin-t pin-l"></span>
                            <div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
                                <h3 class="mb-1">{!! $pagande->post_title !!}</h3>
                                <p class="text-sm text-grey-dark">Skapad: {!! get_region_halland_drift_fix_date($pagande->post_date) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                @foreach ($pagande->omrade as $omrade)
                                    <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                @endforeach
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                <p>{!! get_region_halland_drift_fix_date($pagande->start_time) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                <p>{!! get_region_halland_drift_fix_date($pagande->end_time) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 md:mb-0">
                                <p class="inline-flex py-1 p-3 rounded-full bg-red text-white">Akut</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @php($myPlaneradeAlla = get_region_halland_drift_info_planerade_alla())
                @if(count($myPlaneradeAlla) > 0)
                <div class="w-full px-4">
                    @foreach ($myPlaneradeAlla as $planerade)
                    <div class="mb-4">
                        <div class="flex flex-wrap relative items-center w-full border py-6 overflow-hidden">
                            <span aria-hidden class="absolute h-full w-1 bg-red pin-t pin-l"></span>
                            <div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
                                <h3 class="mb-1">{!! $planerade->post_title !!}</h3>
                                <p class="text-sm text-grey-dark">Skapad: {!! get_region_halland_drift_fix_date($planerade->post_date) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                @foreach ($planerade->omrade as $omrade)
                                    <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                @endforeach
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                <p>{!! get_region_halland_drift_fix_date($planerade->start_time) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                <p>{!! get_region_halland_drift_fix_date($planerade->end_time) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 md:mb-0">
                                <p class="inline-flex py-1 p-3 rounded-full bg-orange">Planerad</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif

                @php($myAvslutadeAlla = get_region_halland_drift_info_avslutade_alla())
                @if(count($myAvslutadeAlla) > 0)
                <div class="w-full px-4">
                    @foreach ($myAvslutadeAlla as $avslutade)
                    <div class="mb-4">
                        <div class="flex flex-wrap relative items-center w-full border py-6 overflow-hidden">
                            <span aria-hidden class="absolute h-full w-1 bg-red pin-t pin-l"></span>
                            <div class="w-full md:w-4/12 px-6 mb-3 md:mb-0">
                                <h3 class="mb-1">{!! $avslutade->post_title !!}</h3>
                                <p class="text-sm text-grey-dark">Skapad: {!! get_region_halland_drift_fix_date($avslutade->post_date) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                @foreach ($avslutade->omrade as $omrade)
                                    <p>{!! get_region_halland_drift_omrade_namn($omrade) !!}</p>
                                @endforeach
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                <p>{!! get_region_halland_drift_fix_date($avslutade->start_time) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 mb-3 md:mb-0">
                                <p>{!! get_region_halland_drift_fix_date($avslutade->end_time) !!}</p>
                            </div>
                            <div class="w-full md:w-2/12 px-6 md:mb-0">
                                <p class="inline-flex py-1 p-3 rounded-full bg-green text-white">Avslutad</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endif


            </div>
        </div>
    </div>

@endsection
