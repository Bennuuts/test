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


Route::resource('startstop', 'StartStopController');
Route::get('startstop', 'StartStopController@show');
Route::post('startstop', 'StartStopController@start');


//Route::resource('measures', 'MeasureController');
//Route::get('measures', 'MeasureController@show');
//Route::post('measures', 'MeasureController@store');
//Route::put('measures/{measure}', 'MeasureController@update');
//Route::delete('measures/{measure}', 'MeasureController@delete');




