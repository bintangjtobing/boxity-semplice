<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('/')->group(function () {
    // Route::get('/{business_name}', [AdminAuthController::class, 'viewBusinessLanding'])->name('admin_view_businessLanding');
    Route::get('/register', [AdminAuthController::class, 'viewRegister'])->name('admin_view_register');
    Route::post('/register', [AdminAuthController::class, 'processRegister'])->name('admin_view_processRegister');
    Route::get('/login', [AdminAuthController::class, 'viewLogin'])->name('admin_view_login');
    Route::post('/login', [AdminAuthController::class, 'processLogin'])->name('admin_view_processLogin');
    Route::get('/logout', [AdminAuthController::class, 'processLogout'])->name('admin_view_processLogout');

    Route::namespace('Admin')->middleware(['admin'])->group(function () {
        Route::prefix('/dashboard')->group(function() {
            Route::get('/', [AdminDashboardController::class, 'view'])->name('dashboard_view_index');
            Route::post('/', [AdminDashboardController::class, 'create'])->name('dashboard_add_data');
        });
    });
});
