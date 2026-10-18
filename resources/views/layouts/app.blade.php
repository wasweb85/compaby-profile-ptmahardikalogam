<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title>@yield('title', 'PT Mahardika Logam Persada — Perdagangan Logam & Aset Industri')</title>
  <meta name="description" content="@yield('meta_description', 'PT Mahardika Logam Persada menyediakan perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.')">

  <link rel="canonical" href="{{ url()->current() }}">

  <!-- Favicon & Mobile Touch Icons (Google Search & Multi-device Compliant) -->
  <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="48x48" href="{{ asset('favicon-48x48.png') }}">
  <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('favicon-96x96.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon-16x16.png') }}">
  <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}">
  <link rel="manifest" href="{{ asset('site.webmanifest') }}">
  <meta name="theme-color" content="#101315">

  <!-- Open Graph / Facebook / WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('title', 'PT Mahardika Logam Persada — Perdagangan Logam & Aset Industri')">
  <meta property="og:description" content="@yield('meta_description', 'PT Mahardika Logam Persada menyediakan perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.')">
  <meta property="og:image" content="{{ asset('android-chrome-512x512.png') }}">
  <meta property="og:site_name" content="PT Mahardika Logam Persada">
  <meta property="og:locale" content="id_ID">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary">
  <meta name="twitter:title" content="@yield('title', 'PT Mahardika Logam Persada — Perdagangan Logam & Aset Industri')">
  <meta name="twitter:description" content="@yield('meta_description', 'PT Mahardika Logam Persada menyediakan perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.')">
  <meta name="twitter:image" content="{{ asset('android-chrome-512x512.png') }}">

  <!-- Schema.org JSON-LD Structured Data for Google Knowledge Graph & Logo -->
  <script type="application/ld+json">
  {!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => [
      [
        '@type' => 'Organization',
        '@id' => url('/') . '#organization',
        'name' => 'PT Mahardika Logam Persada',
        'alternateName' => ['Mahardika Logam', 'PT Mahardika Logam'],
        'url' => url('/'),
        'logo' => [
          '@type' => 'ImageObject',
          '@id' => url('/') . '#logo',
          'url' => asset('android-chrome-512x512.png'),
          'caption' => 'Logo PT Mahardika Logam Persada',
          'width' => 512,
          'height' => 512,
        ],
        'image' => asset('android-chrome-512x512.png'),
        'description' => 'Perusahaan terpercaya di bidang perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.',
        'address' => [
          '@type' => 'PostalAddress',
          'streetAddress' => 'Buaran I RT 003 RW 008, Kel. Jatinegara, Kec. Cakung, Jl. Pengarengan No. 95',
          'addressLocality' => 'Jakarta Timur',
          'addressRegion' => 'DKI Jakarta',
          'postalCode' => '13930',
          'addressCountry' => 'ID',
        ],
        'contactPoint' => [
          [
            '@type' => 'ContactPoint',
            'telephone' => '+62-821-7402-6509',
            'contactType' => 'sales',
            'availableLanguage' => ['Indonesian'],
          ],
          [
            '@type' => 'ContactPoint',
            'telephone' => '+62-857-1911-0360',
            'contactType' => 'customer service',
            'availableLanguage' => ['Indonesian'],
          ],
        ],
      ],
      [
        '@type' => 'WebSite',
        '@id' => url('/') . '#website',
        'url' => url('/'),
        'name' => 'PT Mahardika Logam Persada',
        'publisher' => [
          '@id' => url('/') . '#organization',
        ],
        'inLanguage' => 'id-ID',
      ],
    ],
  ], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE) !!}
  </script>

  <!-- Local Self-hosted Fonts Preload (Barlow & Barlow Condensed - 0 Render-blocking) -->
  <link rel="preload" href="{{ asset('assets/fonts/barlow-condensed-700.woff2') }}" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="{{ asset('assets/fonts/barlow-400.woff2') }}" as="font" type="font/woff2" crossorigin>

  <!-- Preload Hero LCP Image for instant first paint -->
  <link rel="preload" as="image" href="{{ asset('assets/images/hero-bg-hd.webp') }}" type="image/webp">

  <!-- Main Stylesheet (Cache-busted v3.1) -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}?v=3.1">
  @stack('styles')
</head>
<body>
  @include('partials.navbar')

  <main>
    @yield('content')
  </main>

  @include('partials.footer')

  <!-- Main JavaScript (Deferred, Cache-busted v3.0) -->
  <script src="{{ asset('assets/js/main.js') }}?v=3.0" defer></script>
  @stack('scripts')
</body>
</html>
