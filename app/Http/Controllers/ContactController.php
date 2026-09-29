<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // 1. Simpan pesan ke database
        Contact::create($validated);

        // 2. Kirim email ke Gmail MREC
        try {
            Mail::to('mrec.telu@gmail.com')->send(new ContactFormMail($validated));
        } catch (\Exception $e) {
            // Jika SMTP diblokir ISP lokal, catat ke log tanpa menggagalkan pengiriman user
            Log::error('Gagal mengirim email SMTP Gmail: ' . $e->getMessage());
        }

        return redirect()->back()->with('status', 'Pesan Anda telah berhasil terkirim!');
    }
}