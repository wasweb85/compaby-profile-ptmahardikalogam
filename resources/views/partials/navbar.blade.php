<header id="hd">
  <a class="logo" href="{{ route('home') }}" aria-label="Beranda">
    <img src="{{ asset('assets/images/logo.png') }}" alt="Logo PT Mahardika Logam Persada" width="67" height="34">
    <span class="nm">PT Mahardika<br>Logam Persada</span>
  </a>
  <button id="mb" aria-label="Buka menu" aria-expanded="false">☰</button>
  <nav id="nv">
    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'on' : '' }}" data-p="beranda">Beranda</a>
    <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'on' : '' }}" data-p="tentang">Tentang Kami</a>
    <a href="{{ route('team') }}" class="{{ request()->routeIs('team') ? 'on' : '' }}" data-p="tim">Tim</a>
    <a class="cta {{ request()->routeIs('contact*') ? 'on' : '' }}" href="{{ route('contact') }}" data-p="kontak">Hubungi Kami</a>
  </nav>
</header>
