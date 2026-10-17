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
  <section class="sec dark">
    <h2>Material yang kami tangani</h2>
    <p class="lead">Dari logam dasar sampai pembongkaran gedung, satu mitra untuk kebutuhan industri Anda.</p>
    <div class="sw">
      <div class="m1">Besi</div>
      <div class="m2">Tembaga</div>
      <div class="m3">Aluminium</div>
      <div class="m4">Stainless Steel</div>
      <div class="m5">Kabel</div>
      <div class="m6">Trafo</div>
      <div class="m7"><span>Pembongkaran Gedung</span></div>
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
      <img src="{{ asset('assets/images/warehouse.jpg') }}" alt="Gudang material pipa baja">
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
