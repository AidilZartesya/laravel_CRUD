<?php

use Illuminate\Support\Facades\Route;

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

//Route::get('/', 'HomeController@home');

//Route::get('/register', 'AuthController@register');

//Route::post('/welcome', 'AuthController@welcome_post');

Route::get('/',function(){
	return view('items.tabel');
});

Route::get('/items','ItemController@index');
Route::get('/items/create','ItemController@create');
Route::post('/items','ItemController@store');

Route::get('/pertanyaan','PertanyaanController@index');
Route::get('/pertanyaan/create','PertanyaanController@create');
Route::post('/pertanyaan','PertanyaanController@store');

Route::get('/pertanyaan/{id}','PertanyaanController@show');
Route::get('/pertanyaan/{id}/edit','PertanyaanController@edit');
Route::put('/pertanyaan/{id}','PertanyaanController@update');
Route::delete('/pertanyaan/{id}','PertanyaanController@destroy');

Route::get('/jawaban','JawabanController@index');
Route::get('/jawaban/create','JawabanController@create');
Route::post('/jawaban','JawabanController@store');

Route::get('/jawaban/{id}','JawabanController@show');
Route::get('/jawaban/{id}/edit','JawabanController@edit');
Route::put('/jawaban/{id}','JawabanController@update');
Route::delete('/jawaban/{id}','JawabanController@destroy');


/*Route::get('/data-tables',function(){
	return view('items.data-tabel');
});

Route::get('/items/create',function(){
	return view('items.create');
}); */
//Route::get('/welcome', 'AuthController@welcome');