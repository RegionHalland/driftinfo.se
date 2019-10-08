<!doctype html>
<html lang="sv-se" data-server="{!! env('SITE_SERVER') !!}" data-version="1.2.0">
  @include('partials.sitewide.html-head')
  <body @php body_class() @endphp>
    <header>
      @include('partials.sitewide.jump-to-content')
      @include('partials.messages.cookie-notice')
      @include('partials.sitewide.site-header')
    </header>
    <main id="main">
      @yield('content')
    </main>
    <footer>
      @include('partials.sitewide.site-footer')
    </footer>
  </body>
</html>