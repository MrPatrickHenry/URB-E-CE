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


Route::group(['prefix' => 'apiLOGIN'], function()
{
    Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'AuthenticateController@authenticate');
});




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
