<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\frontendController;
use App\Http\Controllers\ProductController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('user.index');
});
Route::get('/dashboard', function () {
    return view('admin.index');
});
Route::get('/show-product', [frontendController::class, 'showproduct']);
Route::get('/product-description/{id}', [frontendController::class, 'productdesc']);

Auth::routes();
Route::group(['middleware' => ["auth", "admin",]], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/category', [frontendController::class, 'category']);
    Route::get('/product', [frontendController::class, 'product']);

    // product route
    Route::post("/product-store", [ProductController::class, 'store']);
    Route::get("/product-delete/{id}", [ProductController::class, 'destroy']);
    Route::get("/product-edit/{id}", [ProductController::class, 'edit']);
    Route::post("/product-update/{id}", [ProductController::class, 'update']);

    // category route
    Route::post("/category-store", [CategoryController::class, 'store']);
    Route::get("/category-delete/{id}", [CategoryController::class, 'destroy']);
});
