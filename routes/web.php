<?php

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


Route::group(['prefix' => 'pizza'], function () {
    Route::get('/', ['as' => 'app.pizza.index', 'uses' => 'PMPizzaOrderController@index']);
    Route::get('/create', ['uses' => 'PMPizzaOrderController@create']);
    Route::post('/create', ['as' => 'app.pizzaOrders.create', 'uses' => 'PMPizzaOrderController@store']);
    Route::get('/{id}', ['uses' => 'PMPizzaOrderController@show']);
});

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'pizzaOrders'], function () {
        Route::get('/', ['as' => 'app.pizzaOrders.index', 'uses' => 'PMPizzaOrderController@adminIndex']);
        Route::get('/create', ['uses' => 'PMPizzaOrderController@adminCreate']);
        Route::post('/create', ['as' => 'app.pizzaOrders.create', 'uses' => 'PMPizzaOrderController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPizzaOrderController@adminShow']);
            Route::get('/edit', ['as' => 'app.pizzaOrders.edit', 'uses' => 'PMPizzaOrderController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPizzaOrderController@adminUpdate']);
            Route::delete('/', ['as' => 'app.pizzaOrders.delete', 'uses' => 'PMPizzaOrderController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'cheese'], function () {
        Route::get('/', ['as' => 'app.cheese.index', 'uses' => 'PMCheeseController@adminIndex']);
        Route::get('/create', ['uses' => 'PMCheeseController@adminCreate']);
        Route::post('/create', ['as' => 'app.cheese.create', 'uses' => 'PMCheeseController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMCheeseController@adminShow']);
            Route::get('/edit', ['as' => 'app.cheese.edit', 'uses' => 'PMCheeseController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMCheeseController@adminUpdate']);
            Route::delete('/', ['as' => 'app.cheese.delete', 'uses' => 'PMCheeseController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'ingredients'], function () {
        Route::get('/', ['as' => 'app.ingredients.index', 'uses' => 'PMIngredientsController@adminIndex']);
        Route::get('/create', ['uses' => 'PMIngredientsController@adminCreate']);
        Route::post('/create', ['as' => 'app.ingredients.create', 'uses' => 'PMIngredientsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMIngredientsController@adminShow']);
            Route::get('/edit', ['as' => 'app.ingredients.edit', 'uses' => 'PMIngredientsController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMIngredientsController@adminUpdate']);
            Route::delete('/', ['as' => 'app.ingredients.delete', 'uses' => 'PMIngredientsController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'pad'], function () {
        Route::get('/', ['as' => 'app.pad.index', 'uses' => 'PMPadController@adminIndex']);
        Route::get('/create', ['as' => 'app.pad.create', 'uses' => 'PMPadController@adminCreate']);
        Route::post('/create', ['uses' => 'PMPadController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPadController@adminShow']);
            Route::get('/edit', ['as' => 'app.pad.edit', 'uses' => 'PMPadController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPadController@adminUpdate']);
            Route::delete('/', ['as' => 'app.pad.delete', 'uses' => 'PMPadController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'permissions'], function () {
        Route::get('/', ['as' => 'app.permissions.index', 'uses' => 'PMPermissionsController@adminIndex']);
        Route::get('/create', ['as' => 'app.permissions.create', 'uses' => 'PMPermissionsController@adminCreate']);
        Route::post('/create', ['uses' => 'PMPermissionsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMPermissionsController@adminShow']);
            Route::get('/edit', ['as' => 'app.permissions.edit', 'uses' => 'PMPermissionsController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMPermissionsController@adminUpdate']);
            Route::delete('/', ['as' => 'app.permissions.delete', 'uses' => 'PMPermissionsController@adminDestroy']);
        });
    });
    Route::group(['prefix' => 'roles'], function () {
        Route::get('/', ['as' => 'app.roles.index', 'uses' => 'PMRolesController@adminIndex']);
        Route::get('/create', ['as' => 'app.roles.create', 'uses' => 'PMRolesController@adminCreate']);
        Route::post('/create', ['uses' => 'PMRolesController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMRolesController@adminShow']);
            Route::get('/edit', ['as' => 'app.roles.edit', 'uses' => 'PMRolesController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMRolesController@adminUpdate']);
            Route::delete('/', ['as' => 'app.roles.delete', 'uses' => 'PMRolesController@admindeStroy']);
        });
    });
    Route::group(['prefix' => 'users'], function () {
        Route::get('/', ['as' => 'app.user.index', 'uses' => 'PMUsersController@adminIndex']);
        Route::get('/create', ['as' => 'app.user.create', 'uses' => 'PMUsersController@adminCreate']);
        Route::post('/create', ['uses' => 'PMUsersController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {
            Route::get('/', ['uses' => 'PMUsersController@adminShow']);
            Route::get('/edit', ['as' => 'app.user.edit', 'uses' => 'PMUsersController@adminEdit']);
            Route::post('/edit', ['uses' => 'PMUsersController@adminUpdate']);
            Route::delete('/', ['as' => 'app.user.delete', 'uses' => 'PMUsersController@adminDestroy']);
        });
    });
});


