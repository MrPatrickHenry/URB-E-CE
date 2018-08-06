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


// Admin routes 
Route::get('/admin', function () {
    return view('admin');
});

Route::get('/dcalc', 'ReportingController@DistanceCalculator');


Route::group(['middleware' => 'auth'], function()
{

    Route::get('/get/key/', 'profileController@publishersdkgen');

    Route::get('dashboard', function() {} );

Route::get('/', function () {
    return view('welcome');
});

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
