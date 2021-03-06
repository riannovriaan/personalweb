<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\IndexController::class, 'index']);

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::resource('experiences', App\Http\Controllers\ExperienceController::class)->middleware('auth');
Route::resource('educations', App\Http\Controllers\EducationController::class)->middleware('auth');
Route::resource('abouts', App\Http\Controllers\AboutController::class)->middleware('auth');
Route::resource('contacts', App\Http\Controllers\ContactController::class)->middleware('auth');
Route::resource('portofolios', App\Http\Controllers\PortofolioController::class)->middleware('auth');
