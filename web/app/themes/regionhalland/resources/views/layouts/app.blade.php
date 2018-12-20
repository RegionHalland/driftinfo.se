<!doctype html>
<html>
  @include('partials.head')
  <body @php body_class() @endphp>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
  </body>
</html>