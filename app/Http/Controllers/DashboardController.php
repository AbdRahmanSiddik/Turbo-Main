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
            'peserta_kegiatan' => auth()->user()->pendaftarans()->with(['kegiatan', 'team'])->get(),
        ];

        return view('admin.dashboard.dashboard-view', $datas);
    }
}
