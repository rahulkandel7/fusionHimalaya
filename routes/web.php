<?php

use App\Http\Controllers\FrontendController;
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

Route::get('/', [FrontendController::class, 'home'])->name('home');

Route::get('/gallery', [FrontendController::class, 'gallery'])->name('gallery');

Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');

Route::get('/reservation', [FrontendController::class, 'reservation'])->name('reservation');

Route::get('/dashboard', [FrontendController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');

Route::post('/make-reservation', [FrontendController::class, 'makeReservation'])->name('make-reservation');

Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::resource('slideshows', \App\Http\Controllers\Admin\SlideshowController::class);
    Route::post('/slideshows/delete', [\App\Http\Controllers\Admin\SlideshowController::class, 'delete'])->name('slideshows.delete');

    Route::resource('galleries', \App\Http\Controllers\Admin\GalleryController::class);
    Route::post('/galleries/delete', [\App\Http\Controllers\Admin\GalleryController::class, 'delete'])->name('galleries.delete');

    Route::resource('lunches', \App\Http\Controllers\Admin\LunchController::class);
    Route::post('/lunches/delete', [\App\Http\Controllers\Admin\LunchController::class, 'delete'])->name('lunches.delete');

    Route::resource('populars', \App\Http\Controllers\Admin\PopularController::class);
    Route::post('/populars/delete', [\App\Http\Controllers\Admin\PopularController::class, 'delete'])->name('populars.delete');

    Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
    Route::post('/categories/delete', [\App\Http\Controllers\Admin\CategoryController::class, 'delete'])->name('categories.delete');

    Route::resource('cartes', \App\Http\Controllers\Admin\CateController::class);
    Route::post('/cartes/delete', [\App\Http\Controllers\Admin\CateController::class, 'delete'])->name('cartes.delete');

    Route::get('/reservations', [\App\Http\Controllers\FrontendController::class, 'fetchReservations'])->name('reservations.index');
    Route::get('/reservations/confirm/{id}', [\App\Http\Controllers\FrontendController::class, 'confirm'])->name('reservations.confirm');
    Route::get('/reservations/cancel/{id}', [\App\Http\Controllers\FrontendController::class, 'cancel'])->name('reservations.cancel');
});

require __DIR__ . '/auth.php';
