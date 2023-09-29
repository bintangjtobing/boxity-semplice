<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController as AdminAuthController;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\MarketplaceController as AdminMarketplaceController;
use App\Http\Controllers\Admin\SocialMediaSiteController as AdminSocialMediaSiteController;
use App\Http\Controllers\Admin\ProductController as AdminProductController;
use App\Http\Controllers\Admin\ContactController as AdminContactController;
use App\Http\Controllers\Admin\TestimoniController as AdminTestimoniController;

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
    Route::post('/logout', [AdminAuthController::class, 'processLogout'])->name('admin_view_processLogout');

    Route::namespace('Admin')->middleware(['admin'])->group(function () {
        Route::prefix('/dashboard')->group(function() {
            Route::get('/', [AdminDashboardController::class, 'view'])->name('dashboard_view_index');
            Route::post('/', [AdminDashboardController::class, 'create'])->name('dashboard_add_data');
        });

        Route::prefix('/business-marketplace')->group(function() {
            Route::get('/', [AdminMarketplaceController::class, 'view'])->name('business-marketplace_view_index');
            Route::get('/data', [AdminMarketplaceController::class, 'data'])->name('business-marketplace_view_data');
            Route::get('/add', [AdminMarketplaceController::class, 'addView'])->name('business-marketplace_add_view');
            Route::get('/edit/{id}', [AdminMarketplaceController::class, 'editView'])->name('business-marketplace_edit_view');
            Route::post('/add', [AdminMarketplaceController::class, 'addPost'])->name('business-marketplace_add_post');
            Route::patch('/edit/{id}', [AdminMarketplaceController::class, 'update'])->name('business-marketplace_edit_patch');
            Route::delete('/delete/{id}', [AdminMarketplaceController::class, 'delete'])->name('business-marketplace_delete');
        });

        Route::prefix('/social-media-site')->group(function() {
            Route::get('/', [AdminSocialMediaSiteController::class, 'view'])->name('social-media-site_view_index');
            Route::get('/data', [AdminSocialMediaSiteController::class, 'data'])->name('social-media-site_view_data');
            Route::get('/add', [AdminSocialMediaSiteController::class, 'addView'])->name('social-media-site_add_view');
            Route::get('/edit/{id}', [AdminSocialMediaSiteController::class, 'editView'])->name('social-media-site_edit_view');
            Route::post('/add', [AdminSocialMediaSiteController::class, 'addPost'])->name('social-media-site_add_post');
            Route::patch('/edit/{id}', [AdminSocialMediaSiteController::class, 'update'])->name('social-media-site_edit_patch');
            Route::delete('/delete/{id}', [AdminSocialMediaSiteController::class, 'delete'])->name('social-media-site_delete');
        });

        Route::prefix('/product')->group(function() {
            Route::get('/', [AdminProductController::class, 'view'])->name('product_view_index');
            Route::get('/data', [AdminProductController::class, 'data'])->name('product_view_data');
            Route::get('/add', [AdminProductController::class, 'addView'])->name('product_add_view');
            Route::get('/edit/{id}', [AdminProductController::class, 'editView'])->name('product_edit_view');
            Route::post('/add', [AdminProductController::class, 'addPost'])->name('product_add_post');
            Route::patch('/edit/{id}', [AdminProductController::class, 'update'])->name('product_edit_patch');
            Route::delete('/delete/{id}', [AdminProductController::class, 'delete'])->name('product_delete');
        });

        Route::prefix('/business-contact')->group(function() {
            Route::get('/', [AdminContactController::class, 'view'])->name('business-contact_view_index');
            Route::patch('/', [AdminContactController::class, 'update'])->name('business-contact_edit_patch');
        });

        Route::prefix('/testimoni')->group(function() {
            Route::get('/', [AdminTestimoniController::class, 'view'])->name('testimoni_view_index');
            Route::get('/data', [AdminTestimoniController::class, 'data'])->name('testimoni_view_data');
            Route::get('/add', [AdminTestimoniController::class, 'addView'])->name('testimoni_add_view');
            Route::get('/edit/{id}', [AdminTestimoniController::class, 'editView'])->name('testimoni_edit_view');
            Route::post('/add', [AdminTestimoniController::class, 'addPost'])->name('testimoni_add_post');
            Route::patch('/edit/{id}', [AdminTestimoniController::class, 'update'])->name('testimoni_edit_patch');
            Route::delete('/delete/{id}', [AdminTestimoniController::class, 'delete'])->name('testimoni_delete');
        });
    });
});
