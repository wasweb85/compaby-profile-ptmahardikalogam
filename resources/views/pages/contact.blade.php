@extends('layouts.app')

@section('title', 'Hubungi Kami — PT Mahardika Logam Persada')
@section('meta_description', 'Hubungi PT Mahardika Logam Persada untuk kerja sama bisnis dan kebutuhan pengadaan material industri.')

@section('content')
<!-- KONTAK -->
<div class="page on" id="kontak">
  <section class="phero bg-nilai">
    <h1>Hubungi kami</h1>
    <p>Untuk kerja sama bisnis dan kebutuhan pengadaan material industri.</p>
  </section>
  <section class="sec dark">
    <div class="split" style="align-items:start">
      <div class="info">
        <div><small>Email</small><a href="mailto:mahardikalogampersada@gmail.com">mahardikalogampersada@gmail.com</a></div>
        <div><small>Telepon / WhatsApp</small><a href="tel:+6282174026509">0821 7402 6509</a> &amp; <a href="tel:+6285719110360">0857 1911 0360</a></div>
        <div><small>Alamat</small><a href="https://maps.app.goo.gl/3yRVkeu5CFMVJeU77" target="_blank" rel="noopener">Buaran I RT 003 RW 008, Kel. Jatinegara, Kec. Cakung, Jl. Pengarengan No. 95, Jakarta Timur 13930</a></div>
      </div>
      <div>
        <h2>Ceritakan kebutuhan Anda</h2>
        <p style="margin-top:16px">Kirim pesan lewat WhatsApp untuk permintaan penawaran, pengadaan material, atau pembongkaran dan pengelolaan aset industri.</p>
        <div class="btns">
          <a class="btn p" href="https://wa.me/6282174026509" target="_blank" rel="noopener">Chat WhatsApp</a>
          <a class="btn" href="mailto:mahardikalogampersada@gmail.com">Kirim email</a>
        </div>

        <div class="contact-form-wrap" id="formulir-kontak">
          <h3 class="contact-form-title">Formulir Pesan &amp; Penawaran</h3>
          <p class="contact-form-sub">Anda juga dapat mengirimkan pesan langsung kepada tim kami melalui formulir di bawah ini.</p>

          @if(session('success'))
            <div class="alert-success" role="alert">
              <b>Pesan Terkirim!</b>
              {{ session('success') }}
            </div>
          @endif

          <form action="{{ route('contact.send') }}" method="POST" class="contact-form">
            @csrf
            <div class="form-row">
              <div class="form-group">
                <label for="nama">Nama Lengkap <span class="req">*</span></label>
                <input type="text" id="nama" name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}" placeholder="Contoh: Budi Santoso" required>
                @error('nama')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="email">Alamat Email <span class="req">*</span></label>
                <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="nama@perusahaan.com" required>
                @error('email')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="form-row">
              <div class="form-group">
                <label for="telepon">No. Telepon / WhatsApp <span class="req">*</span></label>
                <input type="tel" id="telepon" name="telepon" class="form-control @error('telepon') is-invalid @enderror" value="{{ old('telepon') }}" placeholder="08xxxxxxxxxx" required>
                @error('telepon')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="perusahaan">Nama Perusahaan (Opsional)</label>
                <input type="text" id="perusahaan" name="perusahaan" class="form-control @error('perusahaan') is-invalid @enderror" value="{{ old('perusahaan') }}" placeholder="PT / CV / Instansi">
                @error('perusahaan')
                  <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
            </div>

            <div class="form-group">
              <label for="pesan">Pesan / Kebutuhan Material <span class="req">*</span></label>
              <textarea id="pesan" name="pesan" rows="4" class="form-control @error('pesan') is-invalid @enderror" placeholder="Tuliskan spesifikasi kebutuhan logam, tonase, atau pertanyaan Anda..." required>{{ old('pesan') }}</textarea>
              @error('pesan')
                <div class="invalid-feedback">{{ $message }}</div>
              @enderror
            </div>

            <button type="submit" class="btn p form-submit-btn">Kirim Pesan Sekarang</button>
          </form>
        </div>
      </div>
    </div>
  </section>
  <section class="sec light">
    <div class="split loc">
      <a class="map" href="https://maps.app.goo.gl/3yRVkeu5CFMVJeU77" target="_blank" rel="noopener" aria-label="Buka lokasi kami di Google Maps">
        <svg viewBox="0 0 400 300" preserveAspectRatio="xMidYMid slice" aria-hidden="true">
          <rect width="400" height="300" fill="#e3e8ea"/>
          <g fill="#d3dadd"><rect x="20" y="20" width="90" height="70"/><rect x="130" y="20" width="70" height="70"/><rect x="240" y="30" width="130" height="60"/><rect x="20" y="120" width="90" height="60"/><rect x="240" y="120" width="60" height="60"/><rect x="320" y="120" width="60" height="60"/><rect x="20" y="215" width="110" height="65"/><rect x="150" y="215" width="90" height="65"/><rect x="260" y="215" width="110" height="65"/></g>
          <path d="M0 102 H400" stroke="#a9d3e6" stroke-width="8"/>
          <g stroke="#fff" stroke-linecap="round" fill="none"><path d="M118 0 V300" stroke-width="11"/><path d="M218 0 V300" stroke-width="14"/><path d="M0 195 H400" stroke-width="12"/><path d="M0 60 H400 M0 150 H400" stroke-width="5"/><path d="M310 0 V300" stroke-width="5"/></g>
          <g transform="translate(170 125)"><path d="M14 38 C4 24 0 18 0 12 A14 14 0 1 1 28 12 C28 18 24 24 14 38Z" fill="#d6402f"/><circle cx="14" cy="12" r="5" fill="#7a1d13"/></g>
        </svg>
        <div class="mc"><b>PT Mahardika Logam Persada</b>Jl. Pengarengan No. 95, Cakung, Jakarta Timur 13930<br><span>Buka di Maps</span></div>
      </a>
      <div>
        <p class="kick">Lokasi kami</p>
        <h2>Hubungi kami dimanapun Anda berada</h2>
        <h3 style="margin-top:36px">Kantor pusat</h3>
        <p>PT Mahardika Logam Persada</p>
        <p>Buaran I RT 003 RW 008, Kel. Jatinegara, Kec. Cakung</p>
        <p>Jl. Pengarengan No. 95</p>
        <p>Jakarta Timur 13930</p>
        <a class="link" href="https://maps.app.goo.gl/3yRVkeu5CFMVJeU77" target="_blank" rel="noopener">Buka di Google Maps</a>
      </div>
    </div>
  </section>
</div>
@endsection
