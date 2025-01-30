<?php

use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;



// rafi
Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('admin.dashboard.dashboard-view');
    });
    Route::get('/kegiatan/{kegiatan}', [KegiatanController::class, 'index'])->name('kegiatan.index');
    Route::get('login', [AuthController::class, 'login'])->name('login');
});

// start nanda
Route::middleware(['auth', 'role_permission'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard.dashboard-view');
    })->name('dashboard');

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

// end nanda

// septa

// rofi
