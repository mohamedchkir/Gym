<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\StatistqueController;
use App\Http\Controllers\ContactUsController;

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

                // Route for user Profile
                Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
                Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
                Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



                // route for  statistiques
                Route::get('/dashboard',[StatistqueController::class, 'index']);


                // store product
                Route::get('/store', [ProductController::class, 'storeProduct'])->name('store');

                // cart product
                Route::get('/cart/{id}', [ProductController::class, 'cart'])->name('cart');

                //show cart product and comment info
                Route::post('/ratings/store', [RatingController::class, 'store'])->name('ratings.store');
                Route::get('/ratings/show/{productId}', [RatingController::class, 'showRating'])->name('ratings.show');

                // Route for Switch status
                Route::Post('/switch/{id}', [UserController::class, 'switchStatus']);

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
                Route::get('comments', [RatingController::class, 'adminComments']);
                Route::delete('/comment/{comment}', [RatingController::class, 'deleteComment'])->name('comment.destroy');

                // Route for user
                Route::get('users', [UserController::class, 'index']);
                Route::post('/user', [UserController::class, 'store']);
                Route::put('/user/{user}', [UserController::class, 'update']);
                Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
                Route::get('/user/{id}', [UserController::class, 'show']);

                // Route for admins
                Route::get('admins', [UserController::class, 'admins']);

                // Route for coaches
                Route::get('coaches', [UserController::class, 'coaches']);




});



                // route for error404
// Route::fallback(function () {
//     return view('error404');

// });


                // contact us route
// Route::post('/contact', [ContactUsController::class, 'index'])->name('contact');
// Route::get('contact',[ContactUsController::class, 'contact'])->name('page.contact');
Route::get('/sendMessage',[ContactUsController::class, 'index'])->name('send.message');





require __DIR__.'/auth.php';
