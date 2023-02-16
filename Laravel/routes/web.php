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

// ログイン画面
Route::get('/home', 'HomeController@index')->name('home');

// 一覧画面の表示
Route::get('/main', 'ProductController@productMainView')->name('main');

// 商品情報詳細画面
// Route::get('/info', 'ProductController@productInfoView')->name('info');


// 商品情報編集画面
Route::get('/edit', 'ProductController@productEditView')->name('edit');

// sale
Route::get('/sales', 'ProductController@productSalesView')->name('sales');



// 登録画面の表示
Route::get('/register', 'ProductController@productRegisterView')->name('register');
// 登録処理 post
Route::post('/register', 'ProductController@productPost')->name('product_insert');


// 削除ボタン
Route::post('/delete/{id}', 'ProductController@productDelete')->name('delete');

// 詳細画面表示（詳細ボタン）
// Route::post('/show/{id}', 'ProductController@productShow')->name('show');
Route::get('/show/{id}', 'ProductController@productShow')->name('show');
