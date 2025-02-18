<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Http\Requests\PendaftaranRequest as Request;
use App\Models\Kegiatan;
use App\Models\Team;
use Illuminate\Support\Str;

class PendaftaranController extends Controller
{
    public function index()
    {
        $data = [
            'kegiatan' => Kegiatan::all(),
            'title' => 'Pendaftaran'
        ];
        return view('admin.pendaftaran.pendaftaran-view', $data);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        Pendaftaran::create([
            'peserta_id' => $request->peserta_id,
            'kegiatan_id' => $request->kegiatan_id,
            'token_pendaftaran' => Str::random(12),
        ]);

        return redirect('/pendaftaran')->with('success', 'Anda berhasil mendaftar kegiatan!');
    }

    public function show()
    {
        //
    }

    public function detail(Kegiatan $kegiatan)
    {
        $data = [
            'kegiatan' => $kegiatan,
            'tim' => Team::all(),
            'title' => 'Detail Pendaftaran'
        ];
        return view('admin.pendaftaran.detail-pendaftaran', $data);
    }

    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $tim = $request->tim;
        Pendaftaran::where('token_pendaftaran', $id)->update([
            'team_id' => $tim,
        ]);
        $pendaftaran = Pendaftaran::with('kegiatan')->where('token_pendaftaran', $id)->first();

        return redirect('/detail/pendaftaran/'.$pendaftaran->kegiatan->token_kegiatan)->with('success', 'Tim Berhasil ditambahkan!');
    }

    public function destroy(Pendaftaran $pendaftaran)
    {
        // dd($pendaftaran);
        Pendaftaran::where('token_pendaftaran', $pendaftaran->token_pendaftaran)->delete();
        return redirect()->back()->with('success', 'Pendaftar Berhasil Dihapus');
    }

    public function diterima(Request $request, Pendaftaran $pendaftaran)
    {
        $status = $request->status;
        $pendaftaran->update(['status' => $status]);

        return redirect()->back()->with('success', 'Status berhasil diupdate');
    }
}
