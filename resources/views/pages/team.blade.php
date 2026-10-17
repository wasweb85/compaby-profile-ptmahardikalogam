@extends('layouts.app')

@section('title', 'Tim dan Manajemen — PT Mahardika Logam Persada')
@section('meta_description', 'Didukung tim yang profesional, kompeten, dan berintegritas dengan mengutamakan tanggung jawab, keselamatan, dan kualitas pelayanan.')

@section('content')
<!-- TIM -->
<div class="page on" id="tim">
  <section class="phero bg-visi">
    <h1>Tim dan manajemen</h1>
    <p>Didukung tim yang profesional, kompeten, dan berintegritas dengan mengutamakan tanggung jawab, keselamatan, dan kualitas pelayanan.</p>
  </section>
  <section class="sec dark">
    <div class="team">
      <figure><img src="{{ asset('assets/images/team-1.jpg') }}" alt="Komisaris Utama"><figcaption>Komisaris Utama</figcaption></figure>
      <figure><img src="{{ asset('assets/images/team-2.jpg') }}" alt="Komisaris"><figcaption>Komisaris</figcaption></figure>
      <figure><img src="{{ asset('assets/images/team-3.jpg') }}" alt="Direktur Utama"><figcaption>Direktur Utama</figcaption></figure>
      <figure><img src="{{ asset('assets/images/team-4.jpg') }}" alt="Direktur"><figcaption>Direktur</figcaption></figure>
    </div>
  </section>
  <section class="band">
    <h2>Ingin bekerja sama dengan kami?</h2>
    <a class="btn" href="{{ route('contact') }}">Hubungi kami</a>
  </section>
</div>
@endsection
