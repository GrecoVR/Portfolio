<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\ContactMessageController;

// Public routes
Route::get('/', [PublicController::class, 'home'])->name('public.home');
Route::get('/about', [PublicController::class, 'about'])->name('public.about');
Route::get('/projects', [PublicController::class, 'projects'])->name('public.projects');
Route::get('/contact', [PublicController::class, 'contact'])->name('public.contact');
Route::post('/contact', [ContactMessageController::class, 'store'])->name('contact.store');

// Admin routes
