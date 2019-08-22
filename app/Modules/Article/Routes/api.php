<?php


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

Route::get('articles', 'ArticleController@index');
Route::get('article/{id}', 'ArticleController@show');
Route::put('article/{id}', 'ArticleController@update');
Route::post('articles', 'ArticleController@store');
Route::delete('article/{id}', 'ArticleController@destroy');