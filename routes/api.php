<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// 会員登録
Route::post('/register', 'Auth\RegisterController@register')->name('register');
// ログイン
Route::post('/login', 'Auth\LoginController@login')->name('login');
// ログアウト
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
// ログインユーザー
Route::get('/user', function () {
    return Auth::user();
})->name('user');


// 写真投稿
Route::post('/photos', 'PhotoController@create')->name('photo.create');

// 写真一覧
Route::get('/photos', 'PhotoController@index')->name('photo.index');
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();npm install eslint babel-eslint --save-dev
// });

// 写真ダウンロード
Route::get('/photos/{photo}/download', 'PhotoController@download');
// 写真詳細
Route::get('/photos/{id}', 'PhotoController@show')->name('photo.show');
// コメント
Route::post('/photos/{photo}/comments', 'PhotoController@addComment')->name('photo.comment');
