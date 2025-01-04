<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TestimonialController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return redirect()->route('about'); // Перенаправление на маршрут 'about'
});

Route::get('/about', function () {
    return view('about');})->name('about');

Route::get('/resume', function () {
    return view('resume');})->name('resume');
    
Route::get('/contact', function () {
    return view('contact');})->name('contact');

Route::get('/video', function () {
    return view('video');})->name('video');


    
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::post('/contact', [ContactController::class, 'store']);
