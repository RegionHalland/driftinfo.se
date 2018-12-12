@if(function_exists('check_region_halland_cookie_notice'))
	@php($checkCookieNotice = check_region_halland_cookie_notice())
	@if ($checkCookieNotice == false)
		@php($myCookieNotice = get_region_halland_cookie_notice())	
		<div id="cookie-notice" class="relative background-light-blue p3 z4">
			<div class="container mx-auto">
				<div class="clearfix mxn3">
					<div class="cookie-notice__container">
						<div class="cookie-notice__text-container px3">
							<svg class="icon mr1" viewBox="0 0 8 8">
								{!! get_region_halland_icon('info') !!}
							</svg>
							<span class="h5">{!! $myCookieNotice['message'] !!}</span>
						</div>
						<div class="cookie-notice__btn-container px3">
							<button id="cookie-consent" class="btn btn-primary">
								{!! $myCookieNotice['button'] !!}
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	@endif
@endif