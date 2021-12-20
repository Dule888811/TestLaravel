<?php

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


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::get('/home', 'HomeController@index')->name('home');
Route::post('/ads/store', 'AdsController@store')->name('ads.store');
Route::namespace('Admin')->prefix('admin')->middleware('admin')->name('admin.')->group(function () {
    Route::get('main', 'MainController@index')->name('main');
    Route::get('user/{user_id}/', 'UserController@index')->name('user');
    Route::get('product/{product}', function (App\Product $product) {
        return view('/admin.product')->with(['product' => $product]);
    })->name('product');
    Route::post('search', 'ProductsController@search')->name('search');
});
