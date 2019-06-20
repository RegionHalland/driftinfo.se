<!doctype html>
<html data-server="{!! env('SITE_SERVER') !!}" data-version="1.0.0">
  @include('partials.cookie-notice')
  @include('partials.head')
  <body @php body_class() @endphp>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
  </body>
</html>