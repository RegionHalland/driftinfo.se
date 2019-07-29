<!doctype html>
<html lang="sv-se" data-server="{!! env('SITE_SERVER') !!}" data-version="1.0.0">
  @include('partials.sitewide.jump-to-content')
  @include('partials.messages.cookie-notice')
  @include('partials.sitewide.html-head')
  <body @php body_class() @endphp>
    @include('partials.sitewide.site-header')
    @yield('content')
    @include('partials.sitewide.site-footer')
  </body>
</html>