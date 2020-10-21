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

Route::get('/', function () {
    return redirect(\route('dashboard'));
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [\App\Http\Controllers\SiteController::class,'dashboard'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->resource('student',\App\Http\Controllers\StudentController::class);
Route::middleware(['auth:sanctum', 'verified'])->resource('group',\App\Http\Controllers\GroupController::class);
Route::middleware(['auth:sanctum', 'verified'])->get('joinForm',[\App\Http\Controllers\StudentController::class,'joinFrom'])->name('join.form');
Route::middleware(['auth:sanctum', 'verified'])->post('join',[\App\Http\Controllers\StudentController::class,'join'])->name('join.store');
Route::middleware(['auth:sanctum', 'verified'])->post('remove',[\App\Http\Controllers\StudentController::class,'remove'])->name('join.remove');

