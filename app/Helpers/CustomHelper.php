<?php

use App\Models\Kegiatan;

if (! function_exists('total_kegiatan')) {
    function total_kegiatan()
    {
        return Kegiatan::where('status', 'dimulai')->count();
    }
}
