<?php

use App\Http\Livewire\Home\Profile\Address;
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
Route::get('/user/profile/addresses/{id}', [App\Http\Controllers\Home\ProfileController::class, 'getCities']);

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');

//---------------------------------------Authentication---------------------------------------//
Route::get('/register', App\Http\Livewire\Home\Users\Register::class)->name('register');
Route::get('/login', App\Http\Livewire\Home\Users\Login::class)->name('login');
Route::post('/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('logout');
Route::get('/verify-mobile/{id}', App\Http\Livewire\Home\Users\VerifyMobile::class)->name('verify.mobile');
Route::get('/forget-password', App\Http\Livewire\Home\Users\ForgetPassword::class)->name('forget-password');
Route::get('/verify-mobile-forget/{id}', App\Http\Livewire\Home\Users\ForgetVerifyPassword::class)->name('verify.forget.password');
Route::get('/change-password/{code}', App\Http\Livewire\Home\Users\ChangePassword::class)->name('change.password');

//---------------------------------------Profile For Users---------------------------------------//
Route::post('/addresses', [App\Http\Controllers\Home\ProfileController::class,'store'])->middleware('auth')->name('addresses.store');

Route::group(['namespace' => 'App\Http\Livewire\Home\Profile', 'prefix' => 'user/profile', 'middleware' => 'auth'], function () {
    Route::get('/addresses', Address::class)->name('user.address');

    Route::get('/', Index::class)->name('user.profile');

});

//---------------------------------------Products---------------------------------------//
Route::get('/product/{slug}','App\Http\Controllers\Home\Products\ProductController@single')->name('product.single');

//---------------------------------------Add to Cart---------------------------------------//
Route::post('/product/cart/add','App\Http\Controllers\Home\Products\CartController@add')->name('product.add.cart');
Route::post('/product/cart/addPrices','App\Http\Controllers\Home\Products\CartController@addPrices')->name('product.add.cart.prices');
// \Auth::routes();

Route::get('/cart/index','App\Http\Controllers\Home\Products\CartController@orders')->name('orders.index');

//---------------------------------------Payments---------------------------------------//
Route::get('/product/{id}/purchase','App\Http\Controllers\Home\PurchaseController@purchase')->name('product.purchase');
Route::get('/product/{id}/purchase/result','App\Http\Controllers\Home\PurchaseController@result')->name('product.result');
//---------------------------------------vendor---------------------------------------//
Route::patch('/profile/vendor/{user}/request','App\Http\Controllers\Home\ProfileController@vendor')->name('vendor.request');
Route::get('/profile/vendor/product','App\Http\Controllers\Home\ProfileController@product')->name('vendor.product.get');
Route::post('/profile/vendor/product','App\Http\Controllers\Home\ProfileController@productPost')->name('vendor.product.post');
Route::post('/profile/vendor/payments/request','App\Http\Controllers\Home\ProfileController@paymentsRequest')->name('vendor.payments.request');
Route::get('/profile/vendor/payments','App\Http\Controllers\Home\ProfileController@paymentsList')->name('vendor.payments.list');

//---------------------------------------search---------------------------------------//
Route::post('/search','App\Http\Controllers\HomeController@search')->name('search');

