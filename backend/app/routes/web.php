<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

header('Access-Control-Allow-Origin:  *');
header('Access-Control-Allow-Methods:  POST, GET, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers:  Content-Type, X-Auth-Token, Origin, Authorization');

Route::post('/api/v1/ride/{id}/user/{rid}/long/{long}/lat/{lat}/alt/{alt}/accuracy/{accuracy}/altaccuracy/{altaccuracy}/heading/{heading}/speed/{speed}/timestamp/{timestamp}', 'ReportingController@store');

// Admin routes 

Route::group(['middleware' => 'auth'], function()
{

    Route::get('/get/key/', 'profileController@publishersdkgen');

    Route::get('dashboard', function() {} );

Route::get('/orders', function () {
    return view('orders');
});

});
