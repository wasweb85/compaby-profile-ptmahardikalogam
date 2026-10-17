# PT Mahardika Logam Persada — Company Profile Website

Website profil perusahaan resmi untuk **PT Mahardika Logam Persada**, bergerak di bidang perdagangan logam, pengadaan material industri, serta pengelolaan aset industri (besi, tembaga, aluminium, stainless steel, kabel, trafo, dan pembongkaran gedung).

Dibangun menggunakan **Laravel**, mengutamakan performa loading cepat, struktur kode bersih, desain responsif, serta keamanan terintegrasi.

---

## 🚀 Fitur Utama

- **Desain Modern & Responsif**: Optimal di semua ukuran layar (Desktop, Laptop, Tablet, dan Smartphone / 375px–1920px).
- **Performa Tinggi**: Aset gambar dioptimasi (`public/assets/images/`), CSS dan JS mandiri tanpa framework berat tambahan (tanpa bloatware).
- **Halaman Lengkap**:
  - **Beranda (`/`)**: Hero banner, katalog material logam (*swatches*), keunggulan perusahaan, profil kemitraan, dan *call-to-action*.
  - **Tentang Kami (`/tentang`)**: Siapa kami, visi dan misi, nilai-nilai perusahaan, dan rekam jejak perjalanan usaha.
  - **Tim & Manajemen (`/tim`)**: Struktur dewan komisaris dan direksi perusahaan.
  - **Hubungi Kami (`/kontak`)**: Informasi kontak (email, telepon, alamat kantor), tombol chat WhatsApp & email, peta lokasi kantor, serta formulir pesan & penawaran material.
- **Formulir Kontak Aman**: Dilengkapi proteksi CSRF (`@csrf`), validasi server-side (`ContactRequest`), dan penanganan pesan sukses/gagal.
- **Interaksi Halus**: Header dengan efek *blur glassmorphism* dinamis, *hero parallax*, dan menu drawer navigasi mobile.

---

## 🛠️ Teknologi yang Digunakan

- **Backend**: Laravel 12 (PHP 8.3+)
- **Templating**: Laravel Blade (Layouts, Partials, Pages)
- **Frontend**: Vanilla CSS3 (Custom Properties / Design Tokens), Vanilla JavaScript (ES6)
- **Tipografi**: Google Fonts (*Barlow Condensed* & *Barlow*)
- **Pengujian**: PHPUnit Feature Tests

---

## 💻 Panduan Instalasi Lokal

1. **Clone repository**:
   ```bash
   git clone https://github.com/wasweb85/compaby-profile-ptmahardikalogam.git
   cd compaby-profile-ptmahardikalogam
   ```

2. **Install dependensi PHP**:
   ```bash
   composer install
   ```

3. **Salin file lingkungan (.env)**:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Jalankan server pengembangan**:
   ```bash
   php artisan serve
   ```
   Buka di browser: `http://127.0.0.1:8000`

5. **Menjalankan Automated Tests**:
   ```bash
   php artisan test
   ```

---

## 📄 Lisensi & Hak Cipta

© 2026 PT Mahardika Logam Persada. Seluruh hak cipta dilindungi.
