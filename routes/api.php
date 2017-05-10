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
Route::group(['prefix' => '/v1'], function () {
    Route::group(['prefix' => 'pizza'], function () {
        Route::get('/', ['as' => 'app.pizzaOrders.index', 'uses' => 'PMPizzaOrderController@apiIndex']);
        Route::get('/create', ['uses' => 'PMPizzaOrderController@create']);
        Route::post('/create', ['as' => 'api.pizzaOrders.create', 'uses' => 'PMPizzaOrderController@store']);
        Route::get('/{id}', ['uses' => 'PMPizzaOrderController@show']);
    });
});