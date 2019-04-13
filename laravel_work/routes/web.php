<?php

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

// paiza演習（オススメお店紹介）
Route::get('/shops', 'ShopController@index')->name('shop.list');
Route::get('/shop/new', 'ShopController@create')->name('shop.new');
Route::post('/shop', 'ShopController@store')->name('shop.store');
Route::get('/shop/edit/{id}', 'ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}', 'ShopController@update')->name('shop.update');

Route::get('/shop/{id}', 'ShopController@show')->name('shop.detail');
Route::delete('/shop/{id}', 'ShopController@destroy')->name('shop.destroy');

// ToDoリスト演習
//Route::get('/', function(){return redirect('/tasks');});
Route::get('/tasks', 'TaskController@index');
Route::post('/tasks', 'TaskController@store');
Route::delete('/tasks/{id}', 'TaskController@destroy');

// 掲示板演習
Route::get('/posts', 'PostsController@index')->name('post.list');
Route::resource('posts', 'PostsController', ['only' => ['create', 'store']]);
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show']]);
Route::resource('comments', 'CommentsController', ['only' => ['store']]);
Route::resource('posts', 'PostsController', ['only' => ['create', 'store', 'show', 'edit', 'update', 'destroy']]);

// お問合せフォーム
Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/confirm', 'ContactController@confirm')->name('confirm');
Route::post('contact/sent', 'ContactController@sent')->name('sent');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
