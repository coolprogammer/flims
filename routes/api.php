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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login','API\AuthController@login');
Route::post('/register','API\AuthController@register');
Route::get('/logout','API\AuthController@logout');
Route::middleware('APIToken')->get('/flims','API\FlimsController@index');
Route::middleware('APIToken')->post('/saveComment','API\CommentController@saveComment');
Route::middleware('APIToken')->post('/saveFlim','API\FlimsController@saveFlim');
Route::middleware('APIToken')->get('/showFlim','API\FlimsController@showFlim');
