@if(function_exists('get_region_halland_get_page_news_A'))
	@php($myNews = get_region_halland_get_page_news_A(3))	
	@if(isset($myNews))
		<div class="container mx-auto pl4 pr4 pb1 pt0">
			<div class="m4">
				<div class="pb3 ml3">
					<h2>Nyheter</h1>
				</div>
				<div class="container mx-auto">
					<div class="flex flex-wrap">
						@foreach ($myNews as $myNyhet)
						<div class="col-12 lg-col-4">
							<div class="pb3 pl3 pr3 pt0">
								<div class="mb2 small">
									{!! $myNyhet->image !!}
								</div>
								<div class="pb2">
									<h2 class="h4"><a href="{{ $myNyhet->url }}">{{ $myNyhet->post_title }}</a></h2 class="h3">
								</div>
								<div class="h5 pb3">{{ $myNyhet->description }}</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	@endif
@endif