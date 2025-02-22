<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AdminController;

Route::get('/', [MenuController::class, 'showMenu']);

Route::get('/admin/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminController::class, 'login'])->name('admin.login.submit');
Route::redirect('/admin', '/admin/login');

Route::middleware('admin.auth')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::post('/admin/logout', [AdminController::class, 'logout'])->name('admin.logout');

    // Plate Management Routes
    Route::get('/admin/plates', [AdminController::class, 'showPlates'])->name('admin.plates');
    Route::post('/admin/plates/add', [AdminController::class, 'addPlate'])->name('admin.plates.add');
    Route::post('/admin/plates/edit/{id}', [AdminController::class, 'editPlate'])->name('admin.plates.edit');
    Route::delete('/admin/plates/delete/{id}', [AdminController::class, 'deletePlate'])->name('admin.plates.delete');
});