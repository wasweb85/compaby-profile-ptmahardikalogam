<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>@yield('title', 'PT Mahardika Logam Persada — Perdagangan Logam & Aset Industri')</title>
  <meta name="description" content="@yield('meta_description', 'PT Mahardika Logam Persada menyediakan perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.')">

  <!-- Local Self-hosted Fonts Preload (Barlow & Barlow Condensed - 0 Render-blocking) -->
  <link rel="preload" href="{{ asset('assets/fonts/barlow-condensed-700.woff2') }}" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="{{ asset('assets/fonts/barlow-400.woff2') }}" as="font" type="font/woff2" crossorigin>

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  @stack('styles')
</head>
<body>
  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Main JavaScript (Deferred) -->
  <script src="{{ asset('assets/js/main.js') }}" defer></script>
  @stack('scripts')
</body>
</html>
