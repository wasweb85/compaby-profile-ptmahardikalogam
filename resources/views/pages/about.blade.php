@extends('layouts.app')

@section('title', 'Tentang Kami — PT Mahardika Logam Persada')
@section('meta_description', 'PT Mahardika Logam Persada bergerak di bidang perdagangan logam, pengadaan material industri, serta pengelolaan aset industri dengan legalitas NIB resmi terverifikasi.')

@section('content')
<!-- TENTANG -->
<div class="page on" id="tentang">
  <section class="phero bg-about">
    <h1>Tentang kami</h1>
    <p>Hadir untuk memenuhi kebutuhan industri melalui perdagangan logam, pengadaan material, dan pengelolaan aset industri.</p>
  </section>

  <!-- Navigasi Breadcrumbs -->
  <nav class="breadcrumb-nav" aria-label="Breadcrumb">
    <ol class="breadcrumb-list">
      <li class="breadcrumb-item"><a class="breadcrumb-link" href="{{ route('home') }}">Beranda</a></li>
      <li class="breadcrumb-item"><span class="breadcrumb-current" aria-current="page">Tentang Kami</span></li>
    </ol>
  </nav>

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

  <!-- LEGALITAS & PERIZINAN BERUSAHA -->
  <section class="sec dark" id="legalitas">
    <span class="legal-badge">Legalitas &amp; Izin Resmi</span>
    <h2>Legalitas Perusahaan</h2>
    <p class="lead">PT Mahardika Logam Persada beroperasi secara legal dan resmi di bawah hukum Negara Republik Indonesia, memiliki izin usaha berbasis risiko terverifikasi dengan nomor induk terdaftar.</p>

    <div class="legal-grid">
      <div class="legal-card">
        <div class="legal-icon">
          <svg viewBox="0 0 24 24"><path d="M12 2L3 7v6c0 5.55 3.84 10.74 9 12 5.16-1.26 9-6.45 9-12V7l-9-5z"></path><path d="M9 12l2 2 4-4"></path></svg>
        </div>
        <h4>Nomor Induk Berusaha (NIB)</h4>
        <div class="legal-number">1410260052481</div>
        <p class="legal-desc">Perizinan Berusaha Berbasis Risiko yang diterbitkan resmi oleh Menteri Investasi dan Hilirisasi / Kepala BKPM Republik Indonesia.</p>
      </div>

      <div class="legal-card">
        <div class="legal-icon">
          <svg viewBox="0 0 24 24"><rect x="3" y="4" width="18" height="16" rx="2"></rect><line x1="7" y1="8" x2="17" y2="8"></line><line x1="7" y1="12" x2="17" y2="12"></line><line x1="7" y1="16" x2="13" y2="16"></line></svg>
        </div>
        <h4>NPWP Badan Usaha</h4>
        <div class="legal-number">1000000011527288</div>
        <p class="legal-desc">Terdaftar sebagai Wajib Pajak Badan resmi pada Direktorat Jenderal Pajak, Kementerian Keuangan Republik Indonesia.</p>
      </div>

      <div class="legal-card">
        <div class="legal-icon">
          <svg viewBox="0 0 24 24"><path d="M3 21h18"></path><path d="M5 21V7l8-4v18"></path><path d="M19 21V11l-6-3"></path><path d="M9 9v.01"></path><path d="M9 12v.01"></path><path d="M9 15v.01"></path><path d="M9 18v.01"></path></svg>
        </div>
        <h4>Status Badan Hukum</h4>
        <div class="legal-number">PT (PMDN)</div>
        <p class="legal-desc">Perseroan Terbatas dengan status Penanaman Modal Dalam Negeri (PMDN) dan kualifikasi usaha resmi terdaftar.</p>
      </div>

      <div class="legal-card">
        <div class="legal-icon">
          <svg viewBox="0 0 24 24"><circle cx="12" cy="12" r="10"></circle><path d="M12 6v6l4 2"></path></svg>
        </div>
        <h4>Sertifikasi &amp; Tanda Tangan Elektronik</h4>
        <div class="legal-number">BSrE - BSSN</div>
        <p class="legal-desc">Dokumen perizinan telah tersertifikasi secara elektronik oleh Balai Sertifikasi Elektronik (BSrE - BSSN) dan terintegrasi sistem OSS.</p>
      </div>
    </div>

    <!-- KBLI -->
    <div class="kbli-wrap">
      <div class="kbli-header">
        <div>
          <h3>Klasifikasi Baku Lapangan Usaha (KBLI 2025)</h3>
          <p>Daftar bidang usaha resmi yang terdaftar dan telah disetujui dalam lampiran izin usaha PT Mahardika Logam Persada:</p>
        </div>
      </div>

      <div class="kbli-list">
        <div class="kbli-item">
          <span class="kbli-code">46799</span>
          <div class="kbli-info">
            <h5>Perdagangan Besar Produk Lainnya YTDL</h5>
            <span>Perdagangan besar scrap logam, besi, tembaga, aluminium, stainless steel, dan material industri lainnya.</span>
          </div>
        </div>

        <div class="kbli-item">
          <span class="kbli-code">46632</span>
          <div class="kbli-info">
            <h5>Perdagangan Besar Sepeda Motor Bekas</h5>
            <span>Kegiatan perdagangan besar kendaraan dan unit sepeda motor bekas.</span>
          </div>
        </div>

        <div class="kbli-item">
          <span class="kbli-code">25991</span>
          <div class="kbli-info">
            <h5>Industri Brankas, Filling Kantor, dan Sejenisnya</h5>
            <span>Fabrikasi dan industri perlengkapan kantor serta tempat penyimpanan logam.</span>
          </div>
        </div>

        <div class="kbli-item">
          <span class="kbli-code">46901</span>
          <div class="kbli-info">
            <h5>Perdagangan Besar Grosir/Perkulakan Swalayan</h5>
            <span>Perdagangan besar berbagai macam barang dengan sistem pelayanan mandiri.</span>
          </div>
        </div>

        <div class="kbli-item">
          <span class="kbli-code">46902</span>
          <div class="kbli-info">
            <h5>Perdagangan Besar Selain di Grosir Swalayan</h5>
            <span>Perdagangan besar perkulakan tradisional aneka komoditas barang.</span>
          </div>
        </div>

        <div class="kbli-item">
          <span class="kbli-code">46339</span>
          <div class="kbli-info">
            <h5>Perdagangan Besar Makanan &amp; Minuman Lainnya</h5>
            <span>Distribusi dan pengadaan bahan konsumsi dan kebutuhan pendukung industri.</span>
          </div>
        </div>

        <div class="kbli-item">
          <span class="kbli-code">46209</span>
          <div class="kbli-info">
            <h5>Perdagangan Besar Hasil Pertanian &amp; Hewan Hidup Lainnya</h5>
            <span>Pengadaan dan perdagangan komoditas pertanian dan hasil alam lainnya.</span>
          </div>
        </div>
      </div>

      <div class="legal-actions">
        <a class="legal-btn-doc" href="{{ asset('documents/NIB-PT-Mahardika-Logam-Persada.pdf') }}" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
          Unduh Dokumen NIB Resmi (PDF)
        </a>
        <a class="legal-btn-doc" href="{{ asset('documents/Company-Profile-PT-Mahardika-Logam-Persada.pdf') }}" target="_blank" rel="noopener">
          <svg viewBox="0 0 24 24"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
          Unduh Company Profile (PDF)
        </a>
      </div>
    </div>
  </section>

  <section class="sec light">
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
  <section class="sec dark">
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
  <section class="sec light">
    <h2>Perjalanan perusahaan</h2>
    <div class="tl">
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
  <section class="band">
    <h2>Butuh pengadaan material industri?</h2>
    <a class="btn" href="{{ route('contact') }}">Hubungi kami</a>
  </section>
</div>
@endsection
