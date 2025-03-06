<?php

use App\Http\Controllers\JaderController;
use Illuminate\Support\Facades\Route;

Route::get('/', [JaderController::class, 'homepage'])->name('homepage');
Route::get('/competenze', [JaderController::class,'competenze'])->name('competenze');
Route::get('/about', [JaderController::class,'about'])->name('about');

Route::get('/contact', [JaderController::class,'contact'])->name('contact');
Route::post('/sendmail', [JaderController::class,'sendmail'])->name('sendmail');