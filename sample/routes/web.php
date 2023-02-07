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

# 入力画面
Route::get('request/', [
    'uses' => 'InsertDemoController@getIndex',
    'as' => 'insert.index'
]);

# 確認画面
Route::post('request/confirm', [
    'uses' => 'InsertDemoController@confirm',
    'as' => 'insert.confirm'
]);
