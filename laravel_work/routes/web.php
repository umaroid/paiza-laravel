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
    return redirect('/articles');
});

// paiza演習(一行掲示板)
Route::get('/articles', 'ArticleController@index')->name('article.list');
Route::get('/article/new', 'ArticleController@create')->name('article.new');
Route::post('/article', 'ArticleController@store')->name('article.store');

Route::get('/article/edit/{id}', 'ArticleController@edit')->name('article.edit');
Route::post('/article/update/{id}', 'ArticleController@update')->name('article.update');

Route::get('/article/{id}', 'ArticleController@show')->name('article.show');
Route::delete('/article/{id}', 'ArticleController@destroy')->name('article.delete');

// ToDoリスト演習
//Route::get('/', function(){return redirect('/tasks');});
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::delete('/tasks/{id}', 'TaskController@destroy');

// お問合せフォーム
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/confirm', 'ContactController@confirm')->name('confirm');
Route::post('contact/sent', 'ContactController@sent')->name('sent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
