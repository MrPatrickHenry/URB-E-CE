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

// outdoorrouter 
Route::get('/asset/management/stream/{sdkkey}/{sdkID}/date/{datetime}/location/{country}/device/{device}/system/{os}/pegi/{pegi}', 'AssetsController@stream');


Route::get('/ml/image/', function () {
    return view('classify');
});


Route::get('/privacy', function () {
    return view('privacy');
});


Route::get('/matchup', function () {
    return view('matchup');
});
Route::post('/listen/', 'AssetsController@listen');

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

// Admin routes 
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()

{
Route::get('/adminOnlyPage/', 'HomeController@admin');
});

Route::get('/', function () {
    return view('welcome');
});

//
//
// AUTHED ROUTES
//
//

Route::group(['middleware' => 'auth'], function()
{

    Route::get('/get/key/', 'profileController@publishersdkgen');

    Route::get('dashboard', function() {} );

Route::get('/orders', function () {
    return view('orders');
});

Route::get('/profile/show/{id}', 'profileController@show');


Route::get('/{id}/orders/view/','OrdersController@show');

Route::get('/publisher/sdkgen/', function () {
    return view('apikeys');
});

Route::get('/statements', function () {
    return view('statements');
});


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/bug', function () {
    return view('bug');
});

Route::get('/reporting', function () {
    return view('reporting');
});

Route::get('/contracts', function () {
    return view('contracts');
});
Route::get('/billing', function () {
    return view('billing');
});

Route::get('/assets/management/uploads', function () {
    return view('upload');
});

Route::get('/assets/', function () {
    return view('assetsView');
});

Route::get('assets/management/view/{id}', function () {
    return view('assets');
});

Route::post('profile','profileController@update');


// Private API !!! these should be in api.php under the auth

//   orders

Route::post('order','OrdersController@store');

//Payment

Route::post('/newcharge', 'CheckoutController@Charge');
Route::post('/charge', 'CheckoutController@Charge');


Route::get('/subscribe', function () {
    return view('subscribe');
});
Route::post('/subscribe_process', 'CheckoutController@subscribe_process');

Route::get('/invoices/{uid}', 'InvoiceController@index');

Route::get('/generate/invoices/', 'InvoiceController@createInvoice');

Route::get('/invoice/details/{invoice_id}', 'InvoiceController@indexDetails');


// asset mangement
//CREATE
Route::post('/asset/upload', 'AssetUploadController@store');

//READ
Route::get('/asset/management', 'AssetsController@show');
// Route::get('/asset/management/stream/{sdkID}/', 'AssetsController@stream');

//Update
Route::post('/asset/management/{asset_id}', 'AssetsController@edit');


//Update
Route::post('/asset/management/{asset_id}', 'AssetsController@delete');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('hometmp');


