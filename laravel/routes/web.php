<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return redirect()->route('about'); // Перенаправление на маршрут 'about'
});

Route::get('/about', function () {
    return view('about');})->name('about');

Route::get('/resume', function () {
    return view('resume');})->name('resume');

Route::get('/about', [AboutController::class, 'index'])->name('about');