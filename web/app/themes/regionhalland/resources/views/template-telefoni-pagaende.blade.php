{{--
	Template Name: Telefoni - Pågående
--}}

@extends('layouts.app')

@section('content')
    
    <div class="py-6">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap items-stretch -mx-4 pt-4">
                
                @php($mySection = "telefoni-pagaende")
                @include('partials.menu')
                
                @php($myItems = get_region_halland_drift_info_telefoni_pagaende())
                @if(count($myItems) > 0)
                	@include('partials.list-header')
                    @include('partials.list-content')
                @endif

            </div>
        </div>
    </div>

@endsection