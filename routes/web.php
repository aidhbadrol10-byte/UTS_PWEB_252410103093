<?php
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'login']);
Route::get('/login', [PageController::class, 'login'])->name('login');
Route::get('/dashboard', [PageController::class, 'dashboard']);
Route::get('/profile', [PageController::class, 'profile']);
Route::get('/pengelolaan', [PageController::class, 'pengelolaan']);
