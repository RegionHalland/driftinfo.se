@if(function_exists('get_region_halland_prepare_the_content'))
	@php(get_region_halland_prepare_the_content())
@endif
<article @php(post_class('article'))>
	@php(the_content())
</article>