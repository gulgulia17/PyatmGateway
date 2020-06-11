<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'IndexController@product');
Route::get('product', 'IndexController@product')->name('product');

Auth::routes();
Route::get('admin', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin');
Route::post('admin', 'Auth\AdminLoginController@adminLogin');
Route::post('adminlogout', 'Auth\AdminLoginController@logout')->name('adminlogout');

Route::group(['middleware' => ['web', 'auth',]], function () {
    Route::get('home', 'HomeController@index')->name('Home');
    Route::get('checkout', 'IndexController@checkOut')->name('checkout');
    Route::get('cart', 'IndexController@cart')->name('cart');

    Route::post('payment','PaytmController@index')->name('payment');
    Route::post('paymentstatus','PaytmController@status')->name('status');
});

Route::group(['middleware' => ['web', 'auth:admin']], function () {
    Route::group(['prefix' => 'admin'], function () {
        Route::get('dashboard', 'AdminController@index');
    });
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
