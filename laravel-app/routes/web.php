<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostsController;

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
    return view('home');
});

Route::get('products', [
    ProductController::class,
    'index'
])->name('products');

Route::get('products/{id}', [
    ProductController::class,
    'detail'
])->where('id', '[0-9]+');


Route::get('pages', [
    PagesController::class,
    'index'
])->name('pages');

Route::get('about', [
    PagesController::class,
    'about'
]);

Route::get('posts', [
    PostsController::class,
    'index'
]);
