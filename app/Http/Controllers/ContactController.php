<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Mail\ContactMessageMail;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Throwable;

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

        // Log contact submission for persistent backup
        Log::info('Formulir kontak PT Mahardika Logam Persada diterima:', [
            'nama' => $validated['nama'],
            'email' => $validated['email'],
            'telepon' => $validated['telepon'],
            'perusahaan' => $validated['perusahaan'] ?? '-',
            'pesan' => $validated['pesan'],
            'ip' => $request->ip(),
            'timestamp' => now()->toDateTimeString(),
        ]);

        // Send email notification to company inbox
        $recipient = config('mail.admin_address', 'mahardikalogampersada@gmail.com');

        try {
            Mail::to($recipient)->send(new ContactMessageMail($validated));
        } catch (Throwable $e) {
            Log::error('Gagal mengirim email kontak: '.$e->getMessage(), [
                'recipient' => $recipient,
                'data' => $validated,
            ]);
        }

        return redirect()
            ->route('contact')
            ->with('success', 'Terima kasih! Pesan Anda telah kami terima. Tim PT Mahardika Logam Persada akan segera menghubungi Anda.');
    }
}
