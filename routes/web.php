<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/create', [PageController::class, 'create'])->name('create');
Route::get('/show', [PageController::class, 'show'])->name('show');
Route::get('/edit', [PageController::class, 'edit'])->name('edit');

Route::resource('comic', ComicController::class);