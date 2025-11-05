<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/board', function () {
    return view('board');
});

Route::get('/volunteering', function () {
    return view('volunteering');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/terms', function () {
    return view('terms');
});

Route::get('/open-source', function () {
    return view('open-source');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
