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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//URLの作成
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/main', 'ProductController@productMainView')->name('main');

// Route::get('/product', 'ProductController@productView');

Route::get('/info', 'ProductController@productInfoView')->name('info');

Route::get('/sales', 'ProductController@productSalesView')->name('sales');

// 入力
Route::get('/register', 'ProductController@productRegisterView')->name('register');
// データ受け取り
Route::post('/register', 'ProductController@productPostView')->name('post');

// 