<?php

use App\Http\Controllers\AuthController;
<<<<<<< HEAD
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\RoleController;

use Illuminate\Support\Facades\Route;
=======
use App\Http\Controllers\UsersManagement;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\TeamController;
>>>>>>> 38e368f7931362b1e725c9900339e6695890f1eb

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
Route::get('/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
Route::post('/team/destroy{id}', [TeamController::class, 'destroy'])->name('team.destroy');

