<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ReviewController;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    return redirect(\route('books.index'));
});

Route::resource('books', BookController::class)
    ->only(['index', 'show']);

Route::resource('books.reviews', ReviewController::class)
    ->scoped(['review' => 'book'])
    ->only(['create']);

Route::post('books/{book}/reviews', [ReviewController::class, 'store'])
    ->middleware('throttle:reviews')
    ->name('books.reviews.store');
