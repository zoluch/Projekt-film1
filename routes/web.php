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
    return view('home');
});

Route::post('/videos', 'VideosController@store');
Route::get('/videos', 'VideosController@index');
Route::get('/videos/create', 'VideosController@create');
//id musi byc ostatnie, bo nie znajdzie innych stron
Route::get('/videos/{id}', 'VideosController@show');

Route::group(['middleware'=>['web']],function() {
	Route::resource('videos','VideosController');
	Route::auth();
});

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
