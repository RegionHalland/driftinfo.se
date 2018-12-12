@if(function_exists('get_region_halland_nav_sidebar'))
	@php($mySidebars = get_region_halland_nav_sidebar()) 
	@if(isset($mySidebars) && !empty($mySidebars['page_children']))
	<div>
		<nav class="sidebar-nav">
			<ul class="sidebar-nav__list">
				<li class="sidebar-nav__item active">
					<span class="sidebar-nav__label">{{ $mySidebars['current_page']->post_title }}</span>
					@if (!empty($mySidebars['page_children']))
						<ul class="sidebar-nav__sublist" aria-label="Navigation till undersidor">
							@foreach ($mySidebars['page_children'] as $myChild)
								<li class="sidebar-nav__item">
									<a class="sidebar-nav__link" href="{{ $myChild->url }}">{{ $myChild->post_title }}</a>
								</li>
							@endforeach
						</ul>
					@endif
				</li>
			</ul>
		</nav>
	</div>
	@endif
@endif
	