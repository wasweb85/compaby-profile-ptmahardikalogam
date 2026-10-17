<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    /**
     * Display the contact page.
     */
    public function index(): View
    {
        return view('pages.contact');
    }

    /**
     * Handle incoming contact form submission.
     */
    public function send(ContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Log contact submission for follow-up
        Log::info('Formulir kontak PT Mahardika Logam Persada diterima:', [
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'telepon' => $validated['telepon'],
            'perusahaan' => $validated['perusahaan'] ?? '-',
            'pesan' => $validated['pesan'],
            'ip' => $request->ip(),
            'timestamp' => now()->toDateTimeString(),
        ]);

        return redirect()
            ->route('contact')
            ->with('success', 'Terima kasih! Pesan Anda telah kami terima. Tim PT Mahardika Logam Persada akan segera menghubungi Anda.');
    }
}
