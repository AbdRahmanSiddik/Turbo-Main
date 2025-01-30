<?php

use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('admin.dashboard.dashboard-view');
});

// rafi
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
// nanda




// start nanda
Route::get('login', [AuthController::class, 'login'])->name('login');
// end nanda

// septa

// rofi

