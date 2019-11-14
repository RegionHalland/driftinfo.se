<?php
  $headers = array(
    'Cache-Control' => 'no-cache, no-store, must-revalidate',
    'Pragma' => 'no-cache',
    'Expires' => 'Mon, 26 Jul 1997 05:00:00 GMT',
  );

  foreach ($headers as $headerType => $headerValue) {
      header($headerType . ': ' . $headerValue);
  }
?>
<!doctype html>
<html lang="sv-se" data-server="{!! env('SITE_SERVER') !!}" data-version="1.5.0" style="height: 101%">
  @include('partials.sitewide.html-head')
  <body style="height: 101%" @php body_class() @endphp>
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
        @include('partials.navigation.arrow-up')
    </footer>
  </body>
</html>