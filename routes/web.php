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
})->name('top');

// ユーザ認証のルーティング
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/photos/upload', 'PhotosController@showPhotoUploadForm')->name('photo_upload');

// ログイン状態で表示されるようにmiddlewareを使用している
// Route::middleware('auth')
//     ->group(function () {
//         Route::get('/photos/upload', 'PhotosController@showPhotoUploadForm')->name('photo_upload');
//     });