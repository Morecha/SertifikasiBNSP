<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{DashboardController, UserController, RoleController,
                            ArtikelController, EventController, GaleryController, KlienController};

Route::get('/', function () {
    return view('welcome');
});

Route::group([
	'middleware' => 'auth',
	'prefix' => 'admin',
	'as' => 'admin.'
], function(){
	Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logs', [DashboardController::class, 'activity_logs'])->name('logs');
	Route::post('/logs/delete', [DashboardController::class, 'delete_logs'])->name('logs.delete');

    // Artikel
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
	Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('artikel.create');
	Route::post('/artikel/create', [ArtikelController::class, 'store'])->name('artikel.create');
	Route::get('/artikel/{id}/edit', [ArtikelController::class, 'edit'])->name('artikel.edit');
	Route::post('/artikel/{id}/update', [ArtikelController::class, 'update'])->name('artikel.update');
	Route::post('/artikel/{id}/delete', [ArtikelController::class, 'destroy'])->name('artikel.delete');

    // Event
    Route::get('/event', [EventController::class, 'index'])->name('event');
	Route::get('/event/create', [EventController::class, 'create'])->name('event.create');
	Route::post('/event/create', [EventController::class, 'store'])->name('event.create');
	Route::get('/event/{id}/edit', [EventController::class, 'edit'])->name('event.edit');
	Route::post('/event/{id}/update', [EventController::class, 'update'])->name('event.update');
	Route::post('/event/{id}/delete', [EventController::class, 'destroy'])->name('event.delete');

    // Galery
    Route::get('/galery', [GaleryController::class, 'index'])->name('galery');
	Route::get('/galery/create', [GaleryController::class, 'create'])->name('galery.create');
	Route::post('/galery/create', [GaleryController::class, 'store'])->name('galery.create');
	Route::get('/galery/{id}/edit', [GaleryController::class, 'edit'])->name('galery.edit');
	Route::post('/galery/{id}/update', [GaleryController::class, 'update'])->name('galery.update');
	Route::post('/galery/{id}/delete', [GaleryController::class, 'destroy'])->name('galery.delete');

    // Klien
    Route::get('/klien', [KlienController::class, 'index'])->name('klien');
	Route::get('/klien/create', [KlienController::class, 'create'])->name('klien.create');
	Route::post('/klien/create', [KlienController::class, 'store'])->name('klien.create');
	Route::get('/klien/{id}/edit', [KlienController::class, 'edit'])->name('klien.edit');
	Route::post('/klien/{id}/update', [KlienController::class, 'update'])->name('klien.update');
	Route::post('/klien/{id}/delete', [KlienController::class, 'destroy'])->name('klien.delete');

	// Settings menu
	Route::view('/settings', 'admin.settings')->name('settings');
	Route::post('/settings', [DashboardController::class, 'settings_store'])->name('settings');

	// Profile menu
	Route::view('/profile', 'admin.profile')->name('profile');
	Route::post('/profile', [DashboardController::class, 'profile_update'])->name('profile');
	Route::post('/profile/upload', [DashboardController::class, 'upload_avatar'])
		->name('profile.upload');

	// Member menu
	Route::get('/member', [UserController::class, 'index'])->name('member');
	Route::get('/member/create', [UserController::class, 'create'])->name('member.create');
	Route::post('/member/create', [UserController::class, 'store'])->name('member.create');
	Route::get('/member/{id}/edit', [UserController::class, 'edit'])->name('member.edit');
	Route::post('/member/{id}/update', [UserController::class, 'update'])->name('member.update');
	Route::post('/member/{id}/delete', [UserController::class, 'destroy'])->name('member.delete');

	// Roles menu
	Route::get('/roles', [RoleController::class, 'index'])->name('roles');
	Route::get('/roles/create', [RoleController::class, 'create'])->name('roles.create');
	Route::post('/roles/create', [RoleController::class, 'store'])->name('roles.create');
	Route::get('/roles/{id}/edit', [RoleController::class, 'edit'])->name('roles.edit');
	Route::post('/roles/{id}/update', [RoleController::class, 'update'])->name('roles.update');
	Route::post('/roles/{id}/delete', [RoleController::class, 'destroy'])->name('roles.delete');

});


require __DIR__.'/auth.php';
