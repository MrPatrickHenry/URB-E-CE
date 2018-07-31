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

Route::group(['middleware' => ['api','cors']], function () {
    Route::post('auth/login', 'ApiController@login');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('user', 'ApiController@getAuthUser');
    });
});





Route::get('/v1/sumamrydistance','ReportingController@summaryCreate');

Route::get('/v1/profile/{id}', 'profileController@show');

Route::get('/v1/ride/summary/{id}', 'ReportingController@summaryShow');


Route::post('/v1/ride/', 'ReportingController@store');
