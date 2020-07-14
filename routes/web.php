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

Route::group(['middleware' => 'iplimit'], function () {
    Route::resource('/admin','AdminController');
});

Route::get('/contact', 'ContactController@index')->name('contact.index');

//確認ページ
Route::post('/contact/confirm', 'ContactController@confirm')->name('contact.confirm');

//送信完了ページ
Route::post('/contact/thanks', 'ContactController@send')->name('contact.send');

Route::get('welcome/{name?}', function($name = "ゲスト") {
    Mail::send('mails.welcome', ['name' => $name], function($message) {
        $message->to('user@example.com')->subject('Welcome');
    });

    return "Welcome メッセージを $name に送りました";
});

Route::view('/temp', 'temp.index');