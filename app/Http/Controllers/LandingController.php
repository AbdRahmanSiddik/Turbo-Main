<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Kegiatan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class LandingController extends Controller
{
    public function home()
    {
        $data = [
            'kegiatan' => Kegiatan::latest()->take(3)->get(),
        ];
        return view('landing.home', $data);
    }

    public function tentangkami()
    {
        return view('landing.tentangkami');
    }

    public function kegiatan()
    {
        $data = [
            'kegiatan' => Kegiatan::get(),
        ];
        return view('landing.kegiatan', $data);
    }

    public function servis()
    {
        return view('landing.servis');
    }

    public function kontak()
    {
        return view('landing.kontak');
    }

    public function send(Request $request)
    {
        // Validasi input
        $request->validate(
            [
                'name' => 'required|string|max:50',
                'email' => 'required|email',
                'phone' => 'required|digits_between:10,15',
                'subject' => 'required|string|max:50',
                'message' => 'required|string',
            ],
            [
                'name.required' => 'Nama Lengkap wajib diisi.',
                'name.string' => 'Nama Lengkap harus berupa teks.',
                'name.max' => 'Nama Lengkap tidak boleh lebih dari 50 karakter.',

                'email.required' => 'Email wajib diisi.',
                'email.email' => 'Format email tidak valid.',

                'phone.required' => 'Nomor HP wajib diisi.',
                'phone.digits_between' => 'Nomor HP harus terdiri dari 10 hingga 15 digit.',

                'subject.required' => 'Subjek wajib diisi.',
                'subject.string' => 'Subjek harus berupa teks.',
                'subject.max' => 'Subjek tidak boleh lebih dari 50 karakter.',

                'message.required' => 'Pesan wajib diisi.',
                'message.string' => 'Pesan harus berupa teks.',
            ],
        );

        // Kirim email ke admin
        Mail::to(env('MAIL_TO_ADDRESS', 'turbo.mainn@gmail.com'))->send(new ContactMail($request->all()));

        return back()->with('success', 'Pesan Anda berhasil dikirim! Kami akan segera menghubungi Anda.');
    }
    public function faq()
    {
        return view('landing.faq');
    }
}
