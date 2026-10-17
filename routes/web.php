<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/tentang', [PageController::class, 'about'])->name('about');
Route::get('/tim', [PageController::class, 'team'])->name('team');
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'send'])->name('contact.send');

if (app()->environment('local')) {
    Route::get('/email-preview', function () {
        return new \App\Mail\ContactMessageMail([
            'nama' => 'Budi Pratama, S.T.',
            'email' => 'budi.pratama@industribaja.co.id',
            'telepon' => '0812-3456-7890',
            'perusahaan' => 'PT Manufaktur Baja Nusantara',
            'pesan' => "Halo tim PT Mahardika Logam Persada,\n\nKami sedang membutuhkan pasokan rutin scrap tembaga kawat dan pipa stainless steel SUS 304 sekitar 15 ton per bulan untuk operasional pabrik kami di Cikarang.\n\nMohon informasi ketersediaan material dan surat penawaran harga resmi (quotation).\n\nTerima kasih.",
        ]);
    });
}
