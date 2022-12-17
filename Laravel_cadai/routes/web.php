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

// URLを作成する
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', 'ProductController@productMainView')->name('main');

// Route::get('/product', 'ProductController@productView');

Route::get('/info', 'ProductController@productInfoView')->name('info');

Route::get('/register', 'ProductController@productRegisterView')->name('register');

Route::get('/sales', 'ProductController@productSalesView')->name('sales');

Route::post('/register', 'ProductController@productRegisterView');
