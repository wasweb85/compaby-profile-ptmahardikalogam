<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>@yield('title', 'PT Mahardika Logam Persada — Perdagangan Logam & Aset Industri')</title>
  <meta name="description" content="@yield('meta_description', 'PT Mahardika Logam Persada menyediakan perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.')">

  <!-- Google Fonts: Barlow Condensed & Barlow (Non-blocking with Preload) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700&family=Barlow:wght@400;500;600&display=swap">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700&family=Barlow:wght@400;500;600&display=swap" media="print" onload="this.media='all'">
  <noscript>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@500;600;700&family=Barlow:wght@400;500;600&display=swap">
  </noscript>

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
