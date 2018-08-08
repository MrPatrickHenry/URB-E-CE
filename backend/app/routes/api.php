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

Route::post('/v1/mregister/', 'Auth\mRegisterController@CreateMUser');

Route::post('/v1/newRiderID/{id}', 'ReportingController@newRiderID');

Route::group(['prefix' => 'v1'], function()
{
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');
});

Route::group(['middleware' => ['api']], function () {
    Route::post('auth/login', 'ApiController@login');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('user', 'ApiController@getAuthUser');
    });
});

Route::POST('/v1/profile/{id}/odometer', 'ReportingController@odometer');

Route::POST('/v1/profile/{id}/ride/{rid}/sumamrydistance','ReportingController@summaryCreate');

Route::get('/v1/profile/{id}', 'profileController@show');

Route::POST('/v1/profile/{id}', 'profileController@update');

Route::get('/v1/ride/summary/{id}', 'ReportingController@summaryShow');

Route::post('/v1/ride/', 'ReportingController@store');

Route::get('/v1/ride/yellowjacket', 'ReportingController@yellowJacket');

Route::get('/v1/ride/summary/profile/{id}', 'ReportingController@summaryShow');

Route::post('/v1/ride/sumamry/last/ride/{id}','ReportingController@LastRideShow');
