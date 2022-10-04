<?php

use App\Models\Gallery;
use App\Models\Lunch;
use App\Models\Popular;
use App\Models\Slideshow;
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
    $galleries = Gallery::take(6)->latest()->get();
    $slideshows = Slideshow::all()->sortBy('priority');
    $lunches = Lunch::all();
    $populars = Popular::all();
    return view('welcome', compact('galleries', 'slideshows', 'lunches', 'populars'));
})->name('home');

Route::get('/gallery', function () {
    $galleries = Gallery::all();
    return view('gallery', compact('galleries'));
})->name('gallery');

Route::get('/contact-us', function () {
    return view('contact');
})->name('contact');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

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
});

require __DIR__ . '/auth.php';
