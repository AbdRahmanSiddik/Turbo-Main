<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// rafi
Route::get('/kegiatan/{kegiatan}', [])->name('kegiatan.show');

// start nanda
Route::get('login', [AuthController::class, 'login'])->name('login');
// end nanda

// septa

// rofi

