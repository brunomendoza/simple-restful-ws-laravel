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

// Route::get("customer", function() {
//   return "Hello, World";
// });

Route::get("customer", "CustomerController@index");

Route::get("customer/{customer}", "CustomerController@show");

Route::post("customer", "CustomerController@store");

Route::put("customer/{customer}", "CustomerController@update");

Route::delete("customer/{customer}", "CustomerController@delete");
