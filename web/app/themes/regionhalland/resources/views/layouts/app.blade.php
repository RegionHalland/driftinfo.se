<!doctype html>
<html>
  @include('partials.cookie-notice')
  @include('partials.head')
  <body @php body_class() @endphp>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
  </body>
</html>