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

// トップ
Route::get('/', 'PostsController@index');
// 作成画面
Route::get('/posts/create', 'PostsController@create');
// 詳細画面
Route::get('/posts/show/{post}', 'PostsController@show');
// 編集
Route::get('/posts/edit/{post}', 'PostsController@edit');


// 保存
Route::post('/posts/store', 'PostsController@store');
// 更新
Route::post('/posts/update/{post}', 'PostsController@update');
// 削除
Route::post('/posts/destroy/{post}', 'PostsController@destroy');

// comments
// 保存
Route::post('/comments/store', 'CommentsController@store');
// 削除
Route::post('/comments/destory/{comment}', 'CommentsController@destory');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
