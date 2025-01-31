<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Http\Requests\KegiatanRequest as Request;

class KegiatanController extends Controller
{
    public function index()
    {
        return view('admin.kegiatan.kegiatan-view');
    }

    public function create()
    {
        //
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
