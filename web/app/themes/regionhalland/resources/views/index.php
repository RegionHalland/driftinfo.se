@extends('layouts.app')

@section('content')
    
    @php($allaPagande    = get_region_halland_drift_info_alla_pagaende())   
    @php($allaPlanerade  = get_region_halland_drift_info_alla_planerade())   
    @php($allaAvslutade  = get_region_halland_drift_info_alla_avslutade())   
    
    <div class="container mx-auto pl4 pr4 pb1 pt0">
            <div class="m4">
                <div class="container mx-auto">
                    <div class="flex flex-wrap">
                        <div class="col-12 lg-col-4">
                            <div class="pb3 pl3 pr3 pt0">
                                <div class="mb2">
                                    <div><strong>Alla</strong> - Pågående - Planerade - Avslutade</div>
                                </div>
                                <div class="mb2">
                                    <div><strong>Alla</strong> - IT - Telefoni - Fastighet</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb3 ml3">
                    <h2>Pågående</h1>
                </div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap">
                        <div class="col-12 lg-col-4">
                            <div class="pb3 pl3 pr3 pt0">
                                <div id="myAttributeAccordian">
                                    @foreach ($allaPagande as $pagande)
                                    <div class="myAttributeAccordian-toggle center background-grey border-radius p1 mb2" style="cursor:default;">
                                        {!! $pagande->post_title !!}
                                    </div>
                                    <div class="myAttributeAccordian-content">
                                        {!! $pagande->post_content !!}
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb3 ml3">
                    <h2>Planerade</h1>
                </div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap">
                        <div class="col-12 lg-col-4">
                            <div class="pb3 pl3 pr3 pt0">
                                @foreach ($allaPlanerade as $planerade)
                                <div>{!! $planerade->post_title !!}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pb3 ml3">
                    <h2>Avslutade</h1>
                </div>
                <div class="container mx-auto">
                    <div class="flex flex-wrap">
                        <div class="col-12 lg-col-4">
                            <div class="pb3 pl3 pr3 pt0">
                                @foreach ($allaAvslutade as $avslutade)
                                <div>{!! $avslutade->post_title !!}</div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
