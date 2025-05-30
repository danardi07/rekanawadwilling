<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\HomestayController;
use App\Http\Controllers\ContactController;

// HALAMAN WELCOME (akses ke '/')
Route::get('/', function () {
    return view('welcome'); // resources/views/welcome.blade.php
});

// HALAMAN HOME (landing page utama)
Route::get('/home', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');

// HALAMAN PUBLIK LAINNYA
Route::get('/layanan', [PageController::class, 'layanan'])->name('layanan');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/property', [PageController::class, 'property'])->name('property');
Route::get('/homestay', [PageController::class, 'homestay'])->name('homestay');

// HALAMAN CONTACT
Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/debug-log', function() {
    return nl2br(file_get_contents(storage_path('logs/laravel.log')));
});


Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

// HALAMAN ADMIN (CRUD)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('property', PropertyController::class);
    Route::resource('homestay', HomestayController::class);
});
