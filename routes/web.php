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

Route::get('/', 'HomeController@home')->name('home');

//Route::get('/contact', 'HomeController@contact')->name('contact');
Route::resource('/posts', 'PostController')
    ->except(['destroy']);

Route::resource('/admin','AdminController',['except' => ['show']])->middleware('iplimit');

Route::group(['prefix' => 'contact', 'as' => 'contact.'],function(){
    Route::get('/', 'ContactController@index')->name('index');
    //確認ページ
    Route::post('/confirm', 'ContactController@confirm')->name('confirm');
    //送信完了ページ
    Route::post('/thanks', 'ContactController@send')->name('send');
});

Route::get('welcome/{name?}', function($name = "ゲスト") {
    Mail::send('mails.welcome', ['name' => $name], function($message) {
        $message->to('user@example.com')->subject('Welcome');
    });

    return "Welcome メッセージを $name に送りました";
});

Route::view('/temp', 'temp.index');