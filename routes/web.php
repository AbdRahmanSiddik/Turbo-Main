<?php

use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TeamController;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UsersManagement;
use App\Http\Controllers\RolePermissionController;

// start nanda
Route::middleware('guest')->group(function () {
    Route::view('/login', 'auth.login')->name('login');
    Route::view('/register', 'auth.register')->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.action');
    Route::post('/login', [AuthController::class, 'login']);

    // Start Rofi
    Route::controller(LandingController::class)->group(function () {
        Route::get('/', 'home')->name('home');
        Route::get('/tentangkami', 'tentangkami')->name('tentangkami');
        Route::get('/kgiatan', 'kegiatan')->name('kegiatan');
        Route::get('/servis', 'servis')->name('servis');
        Route::get('/kontak', 'kontak')->name('kontak');
        Route::post('/kontak/send', 'send')->name('contact.send');
        Route::get('/faq', 'faq')->name('faq');
    });
    // End Rofi
});

Route::middleware(['auth', 'role_permission'])->group(function () {
    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard')
        ->middleware('permission:view dashboard');

    // Manajemen Role
    Route::get('/roles', [RoleController::class, 'index'])
        ->name('roles.index')
        ->middleware('permission:view roles');
    Route::post('/roles/store', [RoleController::class, 'store'])
        ->name('roles.store')
        ->middleware('permission:create role');
    Route::post('/roles/{id}/update', [RoleController::class, 'update'])
        ->name('roles.update')
        ->middleware('permission:update role');
    Route::get('/roles/destroy/{id}', [RoleController::class, 'destroy'])
        ->name('roles.destroy')
        ->middleware('permission:delete role');

    // Manajemen Permissions
    Route::get('/permissions', [PermissionController::class, 'index'])
        ->name('permissions.index')
        ->middleware('permission:view permissions');
    Route::post('/permissions/store', [PermissionController::class, 'storePermission'])
        ->name('permissions.store')
        ->middleware('permission:create permission');
    Route::post('/permissions/{id}/update', [PermissionController::class, 'updatePermission'])
        ->name('permissions.update')
        ->middleware('permission:update permission');
    Route::get('/permissions/destroy/{id}', [PermissionController::class, 'destroyPermission'])
        ->name('permissions.destroy')
        ->middleware('permission:delete permission');

    // Manajemen Kegiatan (Rafi)
    Route::get('/kegiatan', [KegiatanController::class, 'index'])
        ->name('kegiatan.index')
        ->middleware('permission:view kegiatan');
    Route::get('/kegiatan/create', [KegiatanController::class, 'create'])
        ->name('kegiatan.create')
        ->middleware('permission:create kegiatan');
    Route::post('/kegiatan/create', [KegiatanController::class, 'store'])
        ->name('kegiatan.store')
        ->middleware('permission:create kegiatan');
    Route::get('/kegiatan/edit/{kegiatan}', [KegiatanController::class, 'edit'])
        ->name('kegiatan.edit')
        ->middleware('permission:update kegiatan');
    Route::post('/kegiatan/edit/{kegiatan}', [KegiatanController::class, 'update'])
        ->name('kegiatan.update')
        ->middleware('permission:update kegiatan');
    Route::get('/kegiatan/delete/{kegiatan}', [KegiatanController::class, 'destroy'])
        ->name('kegiatan.destroy')
        ->middleware('permission:delete kegiatan');

    // Manajemen Tim (Muqtafi)
    Route::get('/team', [TeamController::class, 'index'])
        ->name('team.index')
        ->middleware('permission:view team');
    Route::post('/team/store', [TeamController::class, 'store'])
        ->name('team.store')
        ->middleware('permission:create team');
    Route::post('/team/update/{id}', [TeamController::class, 'update'])
        ->name('team.update')
        ->middleware('permission:update team');
    Route::post('/team/destroy/{id}', [TeamController::class, 'destroy'])
        ->name('team.destroy')
        ->middleware('permission:delete team');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    // profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    Route::post('/profile/{user}', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/foto/{user}', [ProfileController::class, 'foto'])->name('foto.update');
    Route::get('/profile/password', [ProfileController::class, 'index'])->name('profile.password');
    Route::post('/profile/password/{user}', [ProfileController::class, 'changePassword'])->name('change.password');
});

// end nanda

// septa
Route::middleware(['auth', 'role:peserta', 'role_permission'])->group(function () {
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
    Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('kegiatan.daftar');
    Route::get('/detail/pendaftaran/{kegiatan}', [PendaftaranController::class, 'detail'])->name('detail.pendaftaran');
    Route::post('/detail/pendaftaran/{id}', [PendaftaranController::class, 'update'])->name('update.tim');
});


// rofi
