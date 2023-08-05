<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HeadLineController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\SlideImageController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'login'])->name('login');
Route::post('login', [LoginController::class, 'authenticate'])->name('login.confirm');


// Backend Routes
Route::group(['middleware' => 'auth'], function () {
    //All routes here
    Route::get('logout', [LoginController::class, 'logout'])->name('logout');

    Route::prefix('admin')->group(function () {

        Route::get('/dashboard', [AdminDashboardController::class, 'dashboard'])->name('dashboard');
        Route::get('/dashboard-content', [AdminDashboardController::class, 'content'])->name('dashboard-content');
        Route::get('/all', [HeadLineController::class, 'index'])->name('headline');
        Route::get('/create', [HeadLineController::class, 'create'])->name('create_headline');
        Route::post('/store', [HeadLineController::class, 'store'])->name('store_headline');

        // Banner Route
        Route::get('/banner', [BannerController::class, 'index'])->name('banner');
        Route::get('/create/banner', [BannerController::class, 'create'])->name('banner-upload');
        //slide image
        Route::resource('slide', SlideImageController::class);
    });
});
Route::get('/', [FrontendController::class, 'showdata']);
