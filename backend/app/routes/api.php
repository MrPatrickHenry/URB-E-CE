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

Route::post('/mregister/', 'Auth\mRegisterController@CreateMUser');

Route::post('/newRiderID/{id}', 'ReportingController@newRiderID');

Route::group(['prefix' => 'v1'], function()
{
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');

    // v1 routes
    Route::POST('/profile/{id}/odometer', 'ReportingController@odometer');
Route::POST('/profile/{id}/ride/{rid}/sumamrydistance','ReportingController@summaryCreate');
Route::get('/profile/{id}', 'profileController@show');
Route::POST('/profile/{id}', 'profileController@update');
Route::get('/ride/summary/{id}', 'ReportingController@summaryShow');
Route::post('/ride/', 'ReportingController@store');
Route::get('/ride/yellowjacket', 'ReportingController@yellowJacket');
Route::get('/ride/summary/profile/{id}', 'ReportingController@summaryShow');
Route::post('/ride/sumamry/last/ride/user/{id}','ReportingController@LastRideShow');
Route::get('/user/{id}/ride/summary/map/{rid}','ReportingController@mapLatLong');
}
);

Route::group(['middleware' => ['api']], function () {
    Route::post('auth/login', 'ApiController@login');
    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('user', 'ApiController@getAuthUser');
    });
});


