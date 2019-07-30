@php($checkCookieNotice = check_region_halland_cookie_notice())
@if ($checkCookieNotice == false)
	@php($cookie_notice = get_region_halland_cookie_notice())
	<div style="background-color: rgba(108,162,213,0.3);">
		<div class="rh-cookie mx-auto" style="max-width:1440px;">
			<span class="rh-cookie-icon"></span>
			<p class="rh-cookie-description">
				{!! $cookie_notice['message'] !!}
			</p>
			<button id="cookie-consent" style="font-size:1em; background-color: #004890;width:13ex;" class="rh-button rh-button--primary cookie-button" aria-label="Acceptera cookies och dölj meddelandet" role="button">{!! $cookie_notice['button'] !!}</button>
		</div>
	</div>
@endif