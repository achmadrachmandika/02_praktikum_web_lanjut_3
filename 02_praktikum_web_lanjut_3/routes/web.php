<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProgramController;
use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index']);

Route::prefix('category')->group(function () {
    Route::get('marbel-edu-games', [ProductController::class, 'eduGames']);
    Route::get('marbel-and-friends-kids-games', [ProductController::class, 'kidsGames']);
    Route::get('riri-story-books', [ProductController::class, 'storyBooks']);
    Route::get('kolak-kids-games', [ProductController::class, 'kidsSongs']);
});

Route::get('news/{slug?}', [NewsController::class, 'show']);

Route::prefix('program')->group(function () {
    Route::get('karir', [ProgramController::class, 'karir']);
    Route::get('magang', [ProgramController::class, 'magang']);
    Route::get('kunjungan-industri', [ProgramController::class, 'kunjungan']);
});


Route::get('about-us', [AboutController::class, 'about']);
Route::resource('contact-us', ContactController::class)->only('store');
