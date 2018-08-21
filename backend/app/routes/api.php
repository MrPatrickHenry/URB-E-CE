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

Route::group(['prefix' => 'v1'], function()
{

	Route::get('/admin/users/','AdminController@UserDetails');
	Route::post('/mregister/', 'Auth\mRegisterController@CreateMUser');
	Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
	Route::post('authenticate', 'AuthenticateController@authenticate');
Route::post('/newRiderID/{id}', 'ReportingController@newRiderID');
    // v1 routes
//Profile
	Route::POST('/profile/{id}/odometer', 'ReportingController@odometer');
	Route::POST('/profile/{id}/ride/{rid}/sumamrydistance','ReportingController@summaryCreate');
	Route::GET('/profile/{id}', 'profileController@show');
	Route::POST('/profile/{id}', 'profileController@update');
	Route::POST('/profile/password/update{id}', 'profileController@update');
// GDPR
	Route::POST('/profile/gdpr/{id}', 'GdprController@update');
	Route::DELETE('/profile/gdpr/{id}','GdprController@destroy');

//RIDE
	Route::GET('/ride/summary/{id}', 'ReportingController@summaryShow');
	Route::post('/ride/', 'ReportingController@store');
	Route::GET('/ride/yellowjacket', 'ReportingController@yellowJacket');
	Route::GET('/ride/summary/profile/{id}', 'ReportingController@summaryShow');
	Route::POST('/ride/sumamry/last/ride/user/{id}','ReportingController@LastRideShow');
	Route::GET('/user/{id}/ride/summary/map/{rid}','ReportingController@mapLatLong');
}
);


//secured by login
Route::group(['middleware' => 'auth'], function()
{

	Route::GET('/gdpr/','GdprController@show');
	Route::get('/get/key/', 'profileController@publishersdkgen');
	Route::get('dashboard', function() {} );

	Route::get('/', function () {
		return view('welcome');
	});

});
//user auth and JWT for api 
	
Route::group(['middleware' => ['api']], function () {
		Route::post('auth/login', 'ApiController@login');
		Route::group(['middleware' => 'jwt.auth'], function () {
			Route::get('user', 'ApiController@getAuthUser');
		});
	});

