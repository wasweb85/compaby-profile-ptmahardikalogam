@extends('layouts.app')

@section('title', 'Tentang Kami — PT Mahardika Logam Persada')
@section('meta_description', 'PT Mahardika Logam Persada bergerak di bidang perdagangan logam, pengadaan material industri, serta pengelolaan aset industri.')

@section('content')
<!-- TENTANG -->
<div class="page on" id="tentang">
  <section class="phero bg-about">
    <h1>Tentang kami</h1>
    <p>Hadir untuk memenuhi kebutuhan industri melalui perdagangan logam, pengadaan material, dan pengelolaan aset industri.</p>
  </section>

  <section class="sec light">
    <div class="split">
      <div>
        <h2>Siapa kami</h2>
        <p style="margin-top:16px">PT Mahardika Logam Persada bergerak di bidang perdagangan logam, pengadaan material industri, serta pengelolaan aset industri, meliputi besi, tembaga, aluminium, stainless steel, kabel, trafo, dan pembongkaran gedung.</p>
        <p style="margin-top:14px">Kami mengutamakan profesionalisme, integritas, keselamatan kerja, dan efisiensi untuk kemitraan jangka panjang.</p>
      </div>
      <img src="{{ asset('assets/images/warehouse.jpg') }}" alt="Gudang material pipa baja" width="1100" height="734" loading="lazy">
    </div>
  </section>

  <section class="sec dark">
    <h2>Visi dan misi</h2>
    <div class="grid g2">
      <div class="col">
        <h3>Visi</h3>
        <p>Menjadi perusahaan perdagangan logam dan pengelolaan aset industri yang terpercaya, unggul, dan berdaya saing tinggi di tingkat nasional.</p>
      </div>
      <div class="col">
        <h3>Misi</h3>
        <ul class="mis">
          <li>Menyediakan perdagangan logam dan material industri berkualitas.</li>
          <li>Melaksanakan pembongkaran serta pengelolaan aset industri secara aman dan profesional.</li>
          <li>Membangun kemitraan berintegritas dan berkelanjutan.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="sec light">
    <h2>Nilai-nilai perusahaan</h2>
    <div class="grid g2">
      <div class="col">
        <h3>Integritas dan profesionalisme</h3>
        <p>Menjunjung tinggi kejujuran, transparansi, dan tanggung jawab dalam setiap kegiatan usaha.</p>
      </div>
      <div class="col">
        <h3>Kualitas dan keselamatan</h3>
        <p>Mengutamakan kualitas pekerjaan, keselamatan kerja, dan efisiensi.</p>
      </div>
    </div>
  </section>

  <section class="sec dark">
    <h2>Perjalanan perusahaan</h2>
    <div class="tl" style="--paper:#1a1f22">
      <div>
        <h3>Pengembangan usaha</h3>
        <p>Dari perdagangan berbagai jenis logam hingga pembongkaran dan pengelolaan aset industri.</p>
      </div>
      <div>
        <h3>Komitmen jangka panjang</h3>
        <p>Membangun kemitraan dan nilai tambah bagi setiap mitra bisnis.</p>
      </div>
    </div>
  </section>

  <section class="sec light" id="legalitas">
    <h2>Legalitas perusahaan</h2>
    <p class="lead">PT Mahardika Logam Persada beroperasi secara sah dengan perizinan resmi berbasis risiko yang terdaftar di Republik Indonesia.</p>
    <div class="grid g2">
      <div class="col">
        <h3>Nomor Induk Berusaha (NIB)</h3>
        <p><strong style="color:var(--copper);font-family:monospace;font-size:16px">1410260052481</strong> — Diterbitkan resmi oleh Kementerian Investasi dan Hilirisasi / Kepala BKPM melalui Sistem OSS Berbasis Risiko.</p>
      </div>
      <div class="col">
        <h3>NPWP Perusahaan</h3>
        <p><strong style="color:var(--copper);font-family:monospace;font-size:16px">1000000011527288</strong> — Terdaftar sebagai Wajib Pajak Badan resmi pada Direktorat Jenderal Pajak Kementerian Keuangan RI.</p>
      </div>
      <div class="col">
        <h3>Bentuk &amp; Status Badan Hukum</h3>
        <p><strong>Perseroan Terbatas (PT)</strong> — Status Penanaman Modal Dalam Negeri (PMDN) dengan kualifikasi kegiatan usaha resmi.</p>
      </div>
      <div class="col">
        <h3>Bidang Usaha Utama (KBLI)</h3>
        <p><strong>46799 (Perdagangan Besar Produk Lainnya YTDL)</strong> — Mencakup perdagangan besar scrap logam, material industri, dan pengelolaan aset industri.</p>
      </div>
    </div>
  </section>

  <section class="band">
    <h2>Butuh pengadaan material industri?</h2>
    <a class="btn" href="{{ route('contact') }}">Hubungi kami</a>
  </section>
</div>
@endsection
