<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Http\Requests\KegiatanRequest as Request;
use Illuminate\Support\Str;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kegiatan',
            'kegiatan' => Kegiatan::get(),
            'no' => 1,
        ];

        return view('admin.kegiatan.kegiatan-view', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kegiatan',
        ];

        return view('admin.kegiatan.kegiatan-create', $data);
    }

    public function store(Request $request)
    {
        dd($request->all());

        $file = $request->file('thumbnail');

        $token = uniqid();
        $nama_file = $token . "." . $file->getClientOriginalExtension();

        if (date('Y-m-d') < $request->tanggal_mulai) {
            $status = 'akan_datang';
        } else if (date('Y-m-d') > $request->tanggal_akhir) {
            $status = 'selesai';
        } else {
            $status = 'dimulai';
        }

        $kegiatan = new Kegiatan();
        $kegiatan->token_kegiatan = Str::random(16);
        $kegiatan->nama_kegiatan = $request->nama_kegiatan;
        $kegiatan->tanggal_mulai = $request->tanggal_mulai;
        $kegiatan->tanggal_akhir = $request->tanggal_akhir;
        $kegiatan->deskripsi = $request->deskripsi;
        $kegiatan->thumbnail = $request->thumbnail;
        $kegiatan->status = $status;
        $kegiatan->save();

        $file->move('foto-kegiatan', $nama_file);
        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function show(Kegiatan $kegiatan)
    {
        //
    }

    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        // Kegiatan::where('id', '')->update(['kolom' => 'isinya']);

    }

    public function destroy(Kegiatan $kegiatan) {}
}
