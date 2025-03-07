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
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\UsersManagement;
use App\Http\Controllers\RolePermissionController;
use App\Http\Controllers\TeamListController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VerificationController;

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

Route::middleware('auth')->group(function () {
    Route::controller(VerificationController::class)->group(function () {
        Route::get('/email/verify', 'show')->name('verification.notice');
        Route::post('/email/verify/otp', 'verifyOtp')->name('verification.verifyOtp');
        Route::get('/email/resend', 'resend')->name('verification.resend');
    });
});

Route::middleware(['verified','auth', 'role_permission'])->group(function () {
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

    // user
    Route::get('/user/{role}', [UserController::class, 'index'])->name('view.user')->middleware('permission:view user');
    Route::post('/user/create', [UserController::class, 'create'])->name('user.create')->middleware('permission:create user');
    Route::delete('/user/destroy/{user}', [UserController::class, 'destroy'])->name('user.destroy')->middleware('permission:delete user');
    Route::post('/user/update/{user}', [UserController::class, 'update'])->name('user.update')->middleware('permission:update user');

    // team list for mentor
    Route::get('team/list', [TeamListController::class, 'index'])->name('team.list')->middleware('permission:view team_list');
    Route::post('/detail/list/{user}', [TeamListController::class, 'update'])->name('update.tim')->middleware('permission:add team_peserta');
    Route::get('team/list/{kegiatan}', [TeamListController::class, 'indexMentor'])->name('team.list.mentor')->middleware('permission:view list-team-saya');
    Route::get('team/saya', [TeamListController::class, 'myindex'])->name('team.saya')->middleware('permission:view team-saya');

    // status pendaftaran
    Route::post('status/{pendaftaran}', [PendaftaranController::class, 'diterima'])->name('status.pendaftaran')->middleware('permission:update status-pendaftaran');

    // septa start
    Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran')->middleware('permission:view pendaftaran');
    Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('kegiatan.daftar')->middleware('permission:create pendaftaran');
    Route::get('/detail/pendaftaran/{kegiatan}', [PendaftaranController::class, 'detail'])->name('detail.pendaftaran')->middleware('permission:view list-pendaftaran');
    Route::get('/pendaftaran/hapus/{pendaftaran}', [PendaftaranController::class, 'destroy'])->name('delete.pendaftaran')->middleware('permission:delete pendaftaran');
    // septa end
});

// end nanda

// septa


// rofi
