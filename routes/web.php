<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UsersideController;


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



// Non-Admin User Routes
Route::get('/', [UsersideController::class, 'index']);
Route::get('/blog', [UsersideController::class, 'blog']);
Route::get('/blog/{id}', [UsersideController::class, 'show']);
Route::get('/contact', [UsersideController::class, 'contact']);
Route::get('/about', [UsersideController::class, 'about']);

// Admin Level Routes
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
	Route::get('articles', [BlogController::class, 'index'])->name('articles');
	Route::get('articles/create', [BlogController::class, 'create'])->name('articles.create');
	Route::post('articles', [BlogController::class, 'store']);
	Route::get('articles/{id}', [BlogController::class, 'show']);
	Route::delete('articles/{id}', [BlogController::class, 'destroy']);
	Route::get('articles/{id}/edit', [BlogController::class, 'edit']);
	Route::patch('articles/{id}', [BlogController::class, 'update']);
});