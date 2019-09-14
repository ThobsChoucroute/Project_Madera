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

/*
|--------------------------------------------------------------------------
| Component Type Routes
|--------------------------------------------------------------------------
*/
Route::get('/component_types', 'ComponentTypeController@index');
Route::post('/component_type', 'ComponentTypeController@store');
Route::get('/component_type/{componentType}', 'ComponentTypeController@show');
Route::put('/component_type/{componentType}', 'ComponentTypeController@update');
Route::delete('/component_type/{componentType}', 'ComponentTypeController@destroy');

/*
|--------------------------------------------------------------------------
| Component Routes
|--------------------------------------------------------------------------
*/
Route::get('/components', 'ComponentController@index');
Route::post('/component', 'ComponentController@store');
Route::get('/component/{component}', 'ComponentController@show');
Route::put('/component/{component}', 'ComponentController@update');
Route::delete('/component/{component}', 'ComponentController@destroy');