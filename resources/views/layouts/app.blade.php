<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>@yield('title', 'PT Mahardika Logam Persada — Perdagangan Logam & Aset Industri')</title>
  <meta name="description" content="@yield('meta_description', 'PT Mahardika Logam Persada menyediakan perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.')">

  <!-- Favicon & Mobile Touch Icons -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ asset('site.webmanifest') }}">
  <meta name="theme-color" content="#101315">

  <!-- Local Self-hosted Fonts Preload (Barlow & Barlow Condensed - 0 Render-blocking) -->
  <link rel="preload" href="{{ asset('assets/fonts/barlow-condensed-700.woff2') }}" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="{{ asset('assets/fonts/barlow-400.woff2') }}" as="font" type="font/woff2" crossorigin>

  <!-- Preload Hero LCP Image for instant first paint -->
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-bg-hd.webp') }}" type="image/webp">

  <!-- Main Stylesheet (Cache-busted v2.5) -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v=2.5">
  @stack('styles')
</head>
<body>
  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Main JavaScript (Deferred, Cache-busted v2.5) -->
  <script src="{{ asset('assets/js/main.js') }}?v=2.5" defer></script>
  @stack('scripts')
</body>
</html>
