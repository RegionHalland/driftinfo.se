@extends('layouts.app')

@section('content') 	
  	
  	<!-- **************************** -->
	<!-- Content with grey background -->
	<!-- **************************** -->
	<div class="relative">
		
	</div>	
	
	<!-- ************ -->
	<!-- Page content -->
	<!-- ************ -->
	<div class="background-white">
		<div class="background-white">
			<div class="container mx-auto p4">
				<div class="m2 flex flex-wrap">
					
					<div class="col-12 lg-col-3">
					
						@include('partials.nav-sidebars')
						
						<div class="pt2">&nbsp;</div>

						@include('partials.content-nav')
					
					</div>
					
					<!-- ************ -->
					<!-- Page content -->
					<!-- ************ -->
					<div class="col-12 lg-col-9">
						<main class="ml4">
							
							<div>
								<h1>{{ the_title() }}</h1>
							</div>
							
							<div id="main">
								@while(have_posts()) @php(the_post())
									@include('partials.article')

										<br>
										@php($numbers = get_region_halland_drift_info_get_numbers())
										<?php var_dump($numbers); ?>
										<br>
										@php($test = get_region_halland_drift_info_pagaende_alla())
										<?php var_dump($test); ?>
									
									@include('partials.entry-meta')
								@endwhile
							</div>

						</main>
					</div>

				</div>
			</div>
		</div>	
	</div>

@endsection
