<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pesan Baru dari Website</title>
  <style>
    body {
      margin: 0;
      padding: 0;
      background-color: #0d1012;
      font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
      color: #e2e8f0;
      -webkit-font-smoothing: antialiased;
    }
    .wrapper {
      width: 100%;
      background-color: #0d1012;
      padding: 30px 15px;
      box-sizing: border-box;
    }
    .container {
      max-width: 600px;
      margin: 0 auto;
      background-color: #171b1e;
      border: 1px solid #2a3339;
      border-radius: 10px;
      overflow: hidden;
      box-shadow: 0 10px 25px rgba(0,0,0,0.4);
    }
    .header {
      background: linear-gradient(135deg, #101315 0%, #1c2328 100%);
      padding: 24px 30px;
      border-bottom: 2px solid #d0833f;
    }
    .brand-title {
      font-size: 20px;
      font-weight: 700;
      color: #ffffff;
      margin: 0;
      letter-spacing: 0.5px;
      text-transform: uppercase;
    }
    .brand-sub {
      font-size: 13px;
      color: #a0aec0;
      margin: 4px 0 0;
    }
    .body {
      padding: 30px;
    }
    .badge {
      display: inline-block;
      background-color: rgba(208, 131, 63, 0.15);
      color: #e08a4d;
      border: 1px solid rgba(208, 131, 63, 0.4);
      padding: 4px 12px;
      border-radius: 6px;
      font-size: 12px;
      font-weight: 600;
      text-transform: uppercase;
      margin-bottom: 20px;
    }
    .headline {
      font-size: 18px;
      font-weight: 600;
      color: #ffffff;
      margin: 0 0 20px;
      line-height: 1.4;
    }
    .data-table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 25px;
    }
    .data-table td {
      padding: 12px 14px;
      border-bottom: 1px solid #242c31;
      font-size: 14px;
      vertical-align: top;
    }
    .data-table td.label {
      width: 32%;
      color: #8fa3b0;
      font-weight: 500;
      background-color: #14171a;
    }
    .data-table td.value {
      color: #f7fafc;
      font-weight: 600;
    }
    .message-box {
      background-color: #121517;
      border-left: 4px solid #d0833f;
      padding: 16px 20px;
      border-radius: 0 6px 6px 0;
      margin-top: 10px;
      margin-bottom: 25px;
    }
    .message-box h4 {
      margin: 0 0 10px;
      color: #d0833f;
      font-size: 13px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .message-box p {
      margin: 0;
      color: #e2e8f0;
      font-size: 14.5px;
      line-height: 1.6;
      white-space: pre-wrap;
      word-break: break-word;
    }
    .btn-wrap {
      margin: 25px 0 10px;
      text-align: center;
    }
    .btn-wa {
      display: inline-block;
      background-color: #25D366;
      color: #ffffff !important;
      text-decoration: none;
      font-weight: 600;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 14px;
      margin-right: 8px;
    }
    .btn-email {
      display: inline-block;
      background-color: #d0833f;
      color: #ffffff !important;
      text-decoration: none;
      font-weight: 600;
      padding: 12px 24px;
      border-radius: 8px;
      font-size: 14px;
    }
    .footer {
      background-color: #101315;
      padding: 18px 30px;
      border-top: 1px solid #242c31;
      text-align: center;
      font-size: 12px;
      color: #718096;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <div class="container">
      <div class="header">
        <h1 class="brand-title">PT Mahardika Logam Persada</h1>
        <p class="brand-sub">Sistem Notifikasi Formulir Website</p>
      </div>
      <div class="body">
        <span class="badge">Inquiry Masuk</span>
        <h2 class="headline">Ada pesan / penawaran baru dari pengunjung website:</h2>
        
        <table class="data-table" role="presentation">
          <tr>
            <td class="label">Nama Pengirim</td>
            <td class="value">{{ $data['nama'] }}</td>
          </tr>
          <tr>
            <td class="label">Alamat Email</td>
            <td class="value"><a href="mailto:{{ $data['email'] }}" style="color: #63b3ed; text-decoration: none;">{{ $data['email'] }}</a></td>
          </tr>
          <tr>
            <td class="label">No. Telepon / WA</td>
            <td class="value">{{ $data['telepon'] }}</td>
          </tr>
          <tr>
            <td class="label">Perusahaan</td>
            <td class="value">{{ !empty($data['perusahaan']) ? $data['perusahaan'] : '-' }}</td>
          </tr>
          <tr>
            <td class="label">Waktu Pengiriman</td>
            <td class="value">{{ now()->setTimezone('Asia/Jakarta')->translatedFormat('d F Y, H:i') }} WIB</td>
          </tr>
        </table>

        <div class="message-box">
          <h4>Isi Pesan / Kebutuhan Material:</h4>
          <p>{{ $data['pesan'] }}</p>
        </div>

        @php
          $cleanPhone = preg_replace('/[^0-9]/', '', $data['telepon']);
          if (str_starts_with($cleanPhone, '0')) {
              $cleanPhone = '62' . substr($cleanPhone, 1);
          }
          $waUrl = 'https://wa.me/' . $cleanPhone . '?text=' . urlencode("Halo Bapak/Ibu " . $data['nama'] . ", terima kasih telah menghubungi PT Mahardika Logam Persada. Kami menindaklanjuti pesan Anda terkait: " . $data['pesan']);
        @endphp

        <div class="btn-wrap">
          <a href="{{ $waUrl }}" class="btn-wa" target="_blank">Balas via WhatsApp</a>
          <a href="mailto:{{ $data['email'] }}" class="btn-email">Balas via Email</a>
        </div>
      </div>
      <div class="footer">
        Email ini dikirim otomatis oleh sistem website resmi <b>PT Mahardika Logam Persada</b>.<br>
        Anda dapat langsung membalas email ini untuk terhubung dengan pengirim pesan.
      </div>
    </div>
  </div>
</body>
</html>
