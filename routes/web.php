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

Route::get('/', [\App\Http\Controllers\SiteController::class, 'index'])->name('index');
Route::get('/shops', [\App\Http\Controllers\SiteController::class, 'shops'])->name('shops');
Route::get('/basket', [\App\Http\Controllers\SiteController::class, 'basket'])->name('basket');

Route::get('/shop/{id}', [\App\Http\Controllers\SiteController::class, 'catalogPage'])->name('page');
Route::get('/restaurant/{id}',[\App\Http\Controllers\SiteController::class, 'restaurantPage'])->name('restaurant');

Route::get('/login', [\App\Http\Controllers\SiteController::class, 'login'])->name('login');
Route::get('/register', [\App\Http\Controllers\SiteController::class, 'register'])->name('register');
Route::post('/login', [\App\Http\Controllers\SiteController::class, 'post_login'])->name('post_login');
Route::post('/register', [\App\Http\Controllers\SiteController::class, 'post_register'])->name('post_register');
Route::get('/logout', [\App\Http\Controllers\SiteController::class, 'logout'])->name('logout');

Route::get('/basket/index', 'BasketController@index')->name('basket.index');
Route::get('/basket/checkout', 'BasketController@checkout')->name('basket.checkout');
Route::post('/basket/add/{id}', 'BasketController@add')
    ->where('id', '[0-9]+')
    ->name('basket.add');
