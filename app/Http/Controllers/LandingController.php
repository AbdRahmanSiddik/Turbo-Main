<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

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
    public function faq()
    {
        return view('landing.faq');
    }
}
