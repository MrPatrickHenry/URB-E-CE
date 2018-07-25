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


Route::post('/api/v1/ride/', 'ReportingController@store');

// Admin routes 

Route::group(['middleware' => 'auth'], function()
{

    Route::get('/get/key/', 'profileController@publishersdkgen');

    Route::get('dashboard', function() {} );

Route::get('/orders', function () {
    return view('orders');
});

});
