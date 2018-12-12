@if(function_exists('get_region_halland_breadcrumbs_pages'))
	@php($myBreadcrumbs = get_region_halland_breadcrumbs_pages())	
	@if(isset($myBreadcrumbs))
		<nav aria-label="Huvudnavigation" class="breadcrumbs container background-dark-blue relative mx-auto pl5 pr5 pt1 pb2 z1">
			<div class="pr2 pl2 pb1 pt2">
				<div class="px3">
					<div class="container mx-auto">
						<div class="clearfix mxn3">
							<nav class="col col-12">
								<ol class="breadcrumbs" aria-label="Länkstig" itemscope itemtype="http://schema.org/BreadcrumbList">
									@foreach ($myBreadcrumbs as $myBreadcrumb)
										<li class="breadcrumbs__item" @if ($loop->last) aria-current="page" @endif itemscope itemprop="itemListElement" itemtype="http://schema.org/ListItem">
											@if ($myBreadcrumb['url'])
												<a class="breadcrumbs__link text-white" href="{{ $myBreadcrumb['url'] }}">{!! $myBreadcrumb['name'] !!}</a>
											@else
												<span class="breadcrumbs__span text-white" itemprop="name">{!! $myBreadcrumb['name'] !!}</span>
											@endif
											<meta itemprop="position" content="{{ $loop->iteration }}" />
										</li>
									@endforeach
								</ol>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</nav>	
	@endif
@endif