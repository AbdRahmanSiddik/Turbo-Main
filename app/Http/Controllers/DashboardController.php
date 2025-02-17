<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $datas = [
            'title' => 'Dashboard',
            'kegiatans' => Kegiatan::get(),
            'peserta_kegiatan' => Kegiatan::whereHas('pendaftaran', function ($query) {
                $query->where('peserta_id', auth()->user()->id);
            })->get(),
        ];

        return view('admin.dashboard.dashboard-view', $datas);
    }
}
