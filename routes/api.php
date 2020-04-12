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
Route::middleware('APIToken')->get('/index','API\FlimsController@index');
// Route::middleware('auth:api')->get('/index','API\FlimsController@index');
// Route::get('/index','API\FlimsController@index');

// Route::post('/auth/token', 'Auth\LoginController@auth');
//  Route::middleware('auth:api')->post('/login','AuthController@postLogin');

// post('/register','AuthController@postRegister')

