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

// api приложения noqueue
Route::resource('v1/malls', 'Api\v1\MallController');
Route::resource('v1/cafes', 'Api\v1\FoodCourtController');
Route::resource('v1/orders', 'Api\v1\OrderController');