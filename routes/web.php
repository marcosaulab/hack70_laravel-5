<?php

use App\Http\Controllers\ComicController;
use App\Http\Controllers\EditorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;

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


Route::get('/', [PublicController::class, 'showHomePage'])->name('home');

// Comics
Route::get('/comic/create', [ComicController::class, 'create'])->name('comic.create');

Route::post('/comic/store', [ComicController::class, 'store'])->name('comic.store');

Route::get('/comic/show/{id}', [ComicController::class, 'show'])->name('comic.show');


// Editors
Route::get('/editor/create', [EditorController::class, 'create'])->name('editor.create');

Route::post('/editor/store', [EditorController::class, 'store'])->name('editor.store');

Route::get('/editor/index', [EditorController::class, 'index'])->name('editor.index');