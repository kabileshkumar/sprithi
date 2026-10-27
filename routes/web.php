<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about-us', [PageController::class, 'about'])->name('about');
Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
Route::post('/contact-us', [PageController::class, 'send'])->name('contact.send');
