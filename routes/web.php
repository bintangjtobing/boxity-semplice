<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;

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
Route::get('/register', [AdminAuthController::class, 'viewRegister'])->name('admin_view_register');
Route::post('/register', [AdminAuthController::class, 'processRegister'])->name('admin_view_processRegister');

Route::prefix('/{business_name}')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'viewLogin'])->name('admin_view_login');
});
