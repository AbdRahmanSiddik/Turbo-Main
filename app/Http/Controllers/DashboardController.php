<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $datas = [
            'title' => 'Dashboard',
            'kegiatans' => Kegiatan::get(),
            'peserta_kegiatan' => auth()->user()->pendaftarans()->with(['kegiatan'])->get(),
            'peserta' => User::role('peserta')->get(),
            'teams' => Team::all(),
            'operators' => User::role('operator')->get(),
        ];

        return view('admin.dashboard.dashboard-view', $datas);
    }
}
