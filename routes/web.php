<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// ------------------------------- ROUTES WITHOUT AUTH -------------------------------------------------------
// ------------------------------- PAGE ROUTES ---------------------------------------------------------------
Route::get('/', [PostController::class, 'index'])->middleware('visitor')->name('index');
Route::get('/articulo/{slug}', [PostController::class, 'search'])->name('search');
Route::get('/categoria/{category}', [PostController::class, 'category'])->name('category');
// ------------------------------- ROUTES AUTH ---------------------------------------------------------------
// ------------------------------- DASHBOARD -----------------------------------------------------------------
Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth'])->name('dashboard');
// ------------------------------- POST CONTROL --------------------------------------------------------------
Route::get('/post', [PostController::class, 'postcreate'])->middleware(['auth'])->name('postcreate');
Route::get('/add-post', [PostController::class, 'show'])->middleware(['auth'])->name('show');


Route::get('/test', function () {
    return 'Prueba main';
});

require __DIR__.'/auth.php';
