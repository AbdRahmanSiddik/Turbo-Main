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
        // dd($request->all());

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
        $kegiatan->thumbnail = $nama_file;
        $kegiatan->status = $status;
        $kegiatan->save();

        $file->move('img/kegiatan', $nama_file);
        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan');
    }

    public function show(Kegiatan $kegiatan)
    {
        //
    }

    public function edit(Kegiatan $kegiatan)
    {
        $data = [
            'title' => 'Edit Kegiatan',
            'kegiatan' => $kegiatan,
        ];

        return view('admin.kegiatan.kegiatan-edit', $data);
    }

    public function update(Request $request, Kegiatan $kegiatan)
    {
        // dd($request->all());

        // Periksa apakah ada file yang diunggah
        if ($request->hasFile('thumbnail')) {
            // Hapus file lama jika ada
            if ($kegiatan->thumbnail && file_exists(public_path('img/kegiatan/' . $kegiatan->thumbnail))) {
                unlink(public_path('img/kegiatan/' . $kegiatan->thumbnail));
            }

            $token = uniqid();

            // Simpan file baru
            $file = $request->file('thumbnail');
            $nama_file = $token . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('img/kegiatan'), $nama_file);

            // Simpan nama file ke database
            $kegiatan->thumbnail = $nama_file;
        }

        // Tentukan status berdasarkan tanggal
        $tanggalHariIni = date('Y-m-d');
        if ($tanggalHariIni < $request->tanggal_mulai) {
            $status = 'akan_datang';
        } elseif ($tanggalHariIni > $request->tanggal_akhir) {
            $status = 'selesai';
        } else {
            $status = 'dimulai';
        }

        // Update data kegiatan
        $kegiatan->update([
            'token_kegiatan' => Str::random(16),
            'nama_kegiatan' => $request->nama_kegiatan,
            'tanggal_mulai' => $request->tanggal_mulai,
            'tanggal_akhir' => $request->tanggal_akhir,
            'deskripsi' => $request->deskripsi,
            'status' => $status,
        ]);

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui');
    }

    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}
