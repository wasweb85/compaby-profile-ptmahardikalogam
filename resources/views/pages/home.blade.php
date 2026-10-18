@extends('layouts.app')

@section('title', 'PT Mahardika Logam Persada — Perdagangan Logam & Aset Industri')
@section('meta_description', 'PT Mahardika Logam Persada menyediakan perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.')

@section('content')
<!-- BERANDA -->
<div class="page on" id="beranda">
  <section class="hero bg-hero">
    <h1>Mitra terpercaya perdagangan logam</h1>
    <p>PT Mahardika Logam Persada menyediakan perdagangan logam, pengadaan material industri, dan pengelolaan aset industri.</p>
    <div class="btns">
      <a class="btn p" href="{{ route('contact') }}">Hubungi kami</a>
      <a class="btn" href="{{ route('about') }}">Kenali perusahaan</a>
    </div>
  </section>

  <!-- BAR LEGALITAS & KREDIBILITAS RESMI -->
  <aside class="trust-bar" aria-label="Informasi Legalitas Perusahaan">
    <div class="trust-grid">
      <div class="trust-item">
        <div class="trust-item-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z"></path><path d="M9 12l2 2 4-4"></path></svg>
        </div>
        <div class="trust-item-text">
          <b>NIB Resmi Terbit</b>
          <span>1410260052481</span>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-item-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"></rect><line x1="7" y1="8" x2="17" y2="8"></line><line x1="7" y1="12" x2="17" y2="12"></line><line x1="7" y1="16" x2="13" y2="16"></line></svg>
        </div>
        <div class="trust-item-text">
          <b>NPWP Badan Usaha</b>
          <span>1000000011527288</span>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-item-icon">
          <svg viewBox="0 0 24 24"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-3"></path></svg>
        </div>
        <div class="trust-item-text">
          <b>Badan Hukum Resmi</b>
          <span>PT (PMDN) Berizin OSS</span>
        </div>
      </div>
      <div class="trust-item">
        <div class="trust-item-icon">
          <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
        </div>
        <div class="trust-item-text">
          <b>Legalitas Terverifikasi</b>
          <a href="{{ route('about') }}#legalitas" style="color:var(--copper);text-decoration:underline;font-size:13px">Lihat Detail Izin &rsaquo;</a>
        </div>
      </div>
    </div>
  </aside>

  <section class="sec dark">
    <h2>Material yang kami tangani</h2>
    <p class="lead">Dari logam dasar sampai pembongkaran gedung, satu mitra untuk kebutuhan industri Anda.</p>
    <div class="sw">
      <div class="sw-card">
        <picture>
          <source srcset="{{ asset('assets/images/material-besi.webp') }}" type="image/webp">
          <img src="{{ asset('assets/images/material-besi.jpg') }}" alt="Material Besi" width="600" height="630" loading="lazy" decoding="async">
        </picture>
        <span class="sw-title">Besi</span>
      </div>
      <div class="sw-card">
        <picture>
          <source srcset="{{ asset('assets/images/material-tembaga.webp') }}" type="image/webp">
          <img src="{{ asset('assets/images/material-tembaga.jpg') }}" alt="Material Tembaga" width="600" height="630" loading="lazy" decoding="async">
        </picture>
        <span class="sw-title">Tembaga</span>
      </div>
      <div class="sw-card">
        <picture>
          <source srcset="{{ asset('assets/images/material-aluminium.webp') }}" type="image/webp">
          <img src="{{ asset('assets/images/material-aluminium.jpg') }}" alt="Material Aluminium" width="600" height="630" loading="lazy" decoding="async">
        </picture>
        <span class="sw-title">Aluminium</span>
      </div>
      <div class="sw-card">
        <picture>
          <source srcset="{{ asset('assets/images/material-stainless.webp') }}" type="image/webp">
          <img src="{{ asset('assets/images/material-stainless.jpg') }}" alt="Material Stainless Steel" width="600" height="630" loading="lazy" decoding="async">
        </picture>
        <span class="sw-title">Stainless Steel</span>
      </div>
      <div class="sw-card">
        <picture>
          <source srcset="{{ asset('assets/images/material-kabel.webp') }}" type="image/webp">
          <img src="{{ asset('assets/images/material-kabel.jpg') }}" alt="Material Kabel" width="600" height="630" loading="lazy" decoding="async">
        </picture>
        <span class="sw-title">Kabel</span>
      </div>
      <div class="sw-card">
        <picture>
          <source srcset="{{ asset('assets/images/material-trafo.webp') }}" type="image/webp">
          <img src="{{ asset('assets/images/material-trafo.jpg') }}" alt="Material Trafo" width="600" height="630" loading="lazy" decoding="async">
        </picture>
        <span class="sw-title">Trafo</span>
      </div>
      <div class="sw-card">
        <picture>
          <source srcset="{{ asset('assets/images/material-bongkar.webp') }}" type="image/webp">
          <img src="{{ asset('assets/images/material-bongkar.jpg') }}" alt="Layanan Pembongkaran Gedung" width="600" height="630" loading="lazy" decoding="async">
        </picture>
        <span class="sw-title">Pembongkaran Gedung</span>
      </div>
    </div>
  </section>
  <section class="sec light">
    <h2>Keunggulan kami</h2>
    <div class="grid g3">
      <div class="col">
        <h3>Pelayanan profesional</h3>
        <p>Layanan perdagangan logam dan pengadaan material industri sesuai kebutuhan pelanggan.</p>
      </div>
      <div class="col">
        <h3>Terpercaya dan andal</h3>
        <p>Tanggung jawab, ketepatan, dan efisiensi dalam setiap pekerjaan.</p>
      </div>
      <div class="col">
        <h3>Integritas dan keselamatan</h3>
        <p>Kejujuran, profesionalisme, dan keselamatan kerja di setiap proyek.</p>
      </div>
    </div>
  </section>
  <section class="sec dark">
    <div class="split">
      <picture class="split-pic">
        <source media="(max-width: 900px)" srcset="{{ asset('assets/images/warehouse-hd.webp') }}" type="image/webp">
        <source srcset="{{ asset('assets/images/warehouse-full.webp') }}" type="image/webp">
        <img class="split-img" src="{{ asset('assets/images/warehouse.jpg') }}" alt="Gudang material pipa baja" width="1100" height="734" loading="lazy">
      </picture>
      <div>
        <h2>Dibangun untuk kemitraan jangka panjang</h2>
        <p style="margin-top:16px">Kami mengutamakan profesionalisme, integritas, keselamatan kerja, dan efisiensi dalam setiap kerja sama.</p>
        <a class="link" href="{{ route('about') }}">Selengkapnya tentang kami</a>
      </div>
    </div>
  </section>
  <section class="band">
    <h2>Butuh pengadaan material industri?</h2>
    <a class="btn" href="{{ route('contact') }}">Hubungi kami</a>
  </section>
</div>
@endsection
