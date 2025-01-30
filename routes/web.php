<?php

use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard.dashboard-view');
});

// rafi
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
// nanda





// septa

// rofi

