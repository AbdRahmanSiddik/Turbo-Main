<?php

use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('admin.dashboard.dashboard-view');
});

// rafi
<<<<<<< HEAD
Route::get('/kegiatan/{kegiatan}', [])->name('kegiatan.show');
=======
Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
// nanda



>>>>>>> ba35c9f2f494845aa2ad8958b15734f7645efe51

// start nanda
Route::get('login', [AuthController::class, 'login'])->name('login');
// end nanda

// septa

// rofi

