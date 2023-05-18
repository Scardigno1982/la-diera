<?php

use Illuminate\Http\Request;

<<<<<<< HEAD
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

// Route::post('user/register', 'APIRegisterController@register');
// Route::post('user/login', 'APILoginController@login');

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('jwt.auth')->get('users', function(Request $request) {
//     return auth()->user();
// });

=======
>>>>>>> 07bcfe95e60f8acf1b514932b3bb4927995de898

Route::resource('indicadores', 'IndicadorController');