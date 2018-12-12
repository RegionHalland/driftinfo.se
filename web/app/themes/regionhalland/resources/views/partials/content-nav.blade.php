@if(function_exists('get_region_halland_find_on_page'))
	@php($myNavs = get_region_halland_find_on_page())
	@if(isset($myNavs) && count($myNavs) > 0)
		@php($id = uniqid())
		<div id="content-nav-placeholder"></div>
		<nav class="content-nav-container rh-get-sticky" id="content-nav-container">
			<div class="content-nav">
				<h4 id="{{ $id }}">Hitta på sidan</h4>
				<ul class="content-nav__list" itemscope itemtype="http://schema.org/ItemList" aria-labelledby="{{ $id }}">
					@foreach ($myNavs as $myNav)
						<li class="content-nav__item" itemprop="itemListElement">
							<a class="content-nav__link" href="#{{ $myNav['slug'] }}" data-pointstoid="{{ $myNav['slug'] }}">{!! $myNav['content'] !!}</a>
							<meta itemprop="position" content="{{ $loop->iteration }}" />
						</li>
					@endforeach
				</ul>
			</div>
		</nav>
	@endif
@endif