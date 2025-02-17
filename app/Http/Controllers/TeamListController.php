<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Team;
use Illuminate\Http\Request;

class TeamListController extends Controller
{
    public function index(Kegiatan $kegiatan)
    {
        $teams = Team::whereHas('kegiatan', function ($query) use ($kegiatan) {
            $query->where('token_kegiatan', $kegiatan->token_kegiatan);
        })
        ->where('mentor_id', auth()->user()->id)
        ->get();

        $data = [
            'title' => "List Team",
            'teams' => $teams,
        ];

        return view('admin.team-list.list-view', $data);
    }
}
