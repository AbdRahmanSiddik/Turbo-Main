<?php

use App\Http\Controllers\KegiatanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UsersManagement;

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

    Route::get('/users', [UsersManagement::class, 'users']);
    Route::get('/roles', [UsersManagement::class, 'roles']);
    Route::post('/roles', [UsersManagement::class, 'storeRole']);
    Route::put('/roles/{role}', [UsersManagement::class, 'updateRole']);
    Route::delete('/roles/{role}', [UsersManagement::class, 'deleteRole']);
    Route::get('/permissions', [UsersManagement::class, 'permissions']);
    Route::post('/permissions', [UsersManagement::class, 'storePermission']);
    Route::put('/permissions/{permission}', [UsersManagement::class, 'updatePermission']);
    Route::delete('/permissions/{permission}', [UsersManagement::class, 'deletePermission']);
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

// end nanda

// septa

// rofi

// muqtafi


