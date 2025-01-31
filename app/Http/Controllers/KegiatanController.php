<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Http\Requests\KegiatanRequest as Request;

class KegiatanController extends Controller
{
    public function index()
    {
        $data = [
            'title' => 'Kegiatan'
        ];

        return view('admin.kegiatan.kegiatan-view', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Kegiatan'
        ];

        return view('admin.kegiatan.kegiatan-create', $data);
    }

    public function store(Request $request)
    {
        //
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
