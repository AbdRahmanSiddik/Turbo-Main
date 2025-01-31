<?php

use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersManagement;
use App\Http\Controllers\RolePermissionController;

// rafi
// nanda

Route::middleware('guest')->group(function () {
    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan.index');
    Route::view('/', 'auth.login')->name('login');
    Route::view('/register', 'auth.register');
    Route::post('/login', [AuthController::class, 'login']);
});

// start nanda
Route::middleware(['auth', 'role_permission'])->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard.dashboard-view');
    })->name('dashboard');

    Route::get('roles', [UsersManagement::class, 'index'])->name('roles.index');
    Route::post('roles/store', [UsersManagement::class, 'store'])->name('roles.store');
    Route::post('roles/update/{id}', [UsersManagement::class, 'update'])->name('roles.update');
    Route::delete('roles/destroy/{id}', [UsersManagement::class, 'destroy'])->name('roles.destroy');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// end nanda

// septa

// rofi

// muqtafi
