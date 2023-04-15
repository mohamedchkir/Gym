<?php

use App\Http\Controllers\MaterialController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('maindash');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

                // Route for product
Route::get('/product', [ProductController::class, 'index']);
Route::post('/product', [ProductController::class, 'store']);
Route::put('/product/{product}', [ProductController::class, 'update']);
Route::delete('/product/{product}', [ProductController::class, 'destroy'])->name('product.destroy');
Route::get('/product/{id}', [ProductController::class, 'show']);

               // Route for material
Route::get('materials', [MaterialController::class, 'index']);
Route::post('/material', [MaterialController::class, 'store']);
Route::put('/material/{material}', [MaterialController::class, 'update']);
Route::delete('/material/{material}', [MaterialController::class, 'destroy'])->name('material.destroy');
Route::get('/material/{id}', [MaterialController::class, 'show']);

                // Route for comment
Route::get('comments', [CommentController::class, 'index']);
Route::post('/comment', [CommentController::class, 'store']);
Route::put('/comment/{comment}', [CommentController::class, 'update']);
Route::delete('/comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');
Route::get('/comment/{id}', [CommentController::class, 'show']);

                // Route for user
Route::get('users', [UserController::class, 'index']);
Route::post('/user', [UserController::class, 'store']);
Route::put('/user/{user}', [UserController::class, 'update']);
Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
Route::get('/user/{id}', [UserController::class, 'show']);

                // route for error404
Route::fallback(function () {
    return view('error404');

});

                // route for statistique
Route::get('/dashboard',[UserController::class, 'statistiques']);

require __DIR__.'/auth.php';
