<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;

use Illuminate\Support\Facades\Route;

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

    Route::get('roles', [RoleController::class, 'index'])->name('roles.index');
    Route::post('roles/store', [RoleController::class, 'store'])->name('roles.store');
    Route::post('/roles/{id}/update', [RoleController::class, 'update'])->name('roles.update');
    Route::get('/roles/destroy/{id}', [RoleController::class, 'destroy'])->name('roles.destroy');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::get('permissions', [PermissionController::class, 'index'])->name('permissions.index');
    Route::post('permissions/store', [PermissionController::class, 'storePermission'])->name('permissions.store');
    Route::post('permissions/{id}/update', [PermissionController::class, 'updatePermission'])->name('permissions.update');
    Route::get('permissions/destroy/{id}', [PermissionController::class, 'destroyPermission'])->name('permissions.destroy');
});

// end nanda

// septa

// rofi

// muqtafi
Route::get('/team', [TeamController::class, 'index'])->name('team.index');
Route::post('/team/store', [TeamController::class, 'store'])->name('team.store');
Route::get('/team/update/{token}', [TeamController::class, 'update'])->name('team.update');
Route::post('/team/destroy/{token}', [TeamController::class, 'destroy'])->name('team.destroy');

