<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MobilePagesController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WebController;
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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', [MobilePagesController::class,'index']); 
// Route::post('login', [App\Http\Controllers\Api\AuthController::class,'login']); 
// Route::controller(AuthController::class)->group(function () {
//     Route::post('login', 'login');

// });
Route::controller(WebController::class)->group(function () {
    Route::get('/', 'landing');

});
Route::controller(ProductController::class)->group(function () {
    Route::post('product', 'createProduct');
    Route::get('product/{id}', 'updateProduct');
    Route::post('product/{id}', 'deleteProduct');
    Route::get('product', 'index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
