<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WelcomeController::class, 'index'])->name('welcome.index');

/* DASHBOARD */
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

/* USER */
Route::post('/login', [UserController::class, 'doLogin'])->name('user.dologin');
Route::get('/logout', [UserController::class, 'doLogout'])->name('user.dologout');
Route::get('/login', [WelcomeController::class, 'index'])->name('login');

Route::get('/perfil', [UserController::class, 'profile'])->name('profile.index')->middleware('auth');
Route::put('/perfil/edit', [UserController::class, 'edit'])->name('profile.edit')->middleware('auth');