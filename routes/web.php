<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CVController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PersonalDataController;
use App\Http\Controllers\SEOController;
use App\Http\Controllers\SocialMediaController;
use Illuminate\Support\Facades\Route;

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


Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::middleware('role:1,2,3,4,5,6')->group(function () {
        Route::prefix('personal_data')->group(function () {
            Route::get('list', [PersonalDataController::class, 'index'])->name('pd.index');
            Route::post('update', [PersonalDataController::class, 'update'])->name('pd.update');
        });
        Route::prefix('social_media')->group(function () {
            Route::get('list', [SocialMediaController::class, 'index'])->name('sm.index');
            Route::post('update', [SocialMediaController::class, 'update'])->name('sm.update');
        });
        Route::prefix('cv')->group(function () {
            Route::get('list', [CVController::class, 'index'])->name('cv.index');
            Route::post('update', [CVController::class, 'update'])->name('cv.update');
        });
        Route::prefix('seo')->group(function () {
            Route::get('list', [SEOController::class, 'index'])->name('seo.index');
            Route::post('update', [SEOController::class, 'update'])->name('seo.update');
        });
    });
});