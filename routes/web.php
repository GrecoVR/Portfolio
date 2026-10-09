<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

// Public routes
Route::get('/', [PublicController::class, 'home'])->name('public.home');
Route::get('/about', [PublicController::class, 'about'])->name('public.about');
Route::get('/projects', [PublicController::class, 'projects'])->name('public.projects');
Route::get('/contact', [PublicController::class, 'contact'])->name('public.contact');

// Admin routes
