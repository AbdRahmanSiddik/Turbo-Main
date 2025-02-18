<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Pendaftaran;
use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TeamListController extends Controller
{
    public function index(Kegiatan $kegiatan)
    {
        $teams = User::role('peserta')->get();

        $data = [
            'title' => "Team Peserta",
            'peserta' => $teams,
            'teams' => Team::all()
        ];

        return view('admin.team-list.list-view', $data);
    }

    public function update(Request $request, User $user)
    {
        $team_id = $request->team;

        $user->profile()->updateOrCreate(
            ['user_id' => $user->id],
            ['team_id' => $team_id]
        );

        return redirect()->back()->with('success', 'Tim berhasil diperbarui.');
    }

    public function indexMentor(Kegiatan $kegiatan)
    {
        // Ambil data user yang sedang login
        $user = Auth::user();

        // Ambil tim yang dimiliki oleh mentor (pastikan user adalah mentor)
        $team = $user->team;

        // Ambil semua peserta yang terdaftar di kegiatan tersebut dan tergabung dalam tim mentor
        $peserta = Pendaftaran::where('kegiatan_id', $kegiatan->id_kegiatan)
            ->whereHas('peserta', function ($query) use ($team) {
                // Filter peserta yang berada dalam tim mentor
                $query->whereHas('profile', function ($query) use ($team) {
                    $query->where('team_id', $team->id_team);
                });
            })  // Load data user yang terdaftar
            ->get();

        // Hitung jumlah peserta yang terdaftar dan berada di tim ini
        $jumlahPeserta = $peserta->count();

        // Kirim data ke view
        return view('admin.team-list.mentor.list', [
            'title' => 'Peserta Kegiatan ' . $kegiatan->nama_kegiatan,
            'kegiatan' => $kegiatan,
            'peserta' => $peserta,
            'jumlahPeserta' => $jumlahPeserta
        ]);
    }

    public function myindex()
    {
        $user = auth()->user();
        $data = [
            'title' => 'Team Saya',
            'teams' => $user->team,
        ];
        return view('admin.team-saya.team', $data);
    }
}
