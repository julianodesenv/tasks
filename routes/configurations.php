<?php

//CONFIGURATIONS
Route::group(['prefix' => 'configuration', 'as' => 'configuration.', 'namespace' => 'App\Http\Controllers\Configuration'], function () {
    //USER ROLE
    Route::group(['prefix' => 'user-role', 'as' => 'user-role.', 'namespace' => 'User'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'UserRoleController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'UserRoleController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'UserRoleController@store']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'UserRoleController@edit']);
        Route::put('update/{id}', ['as' => 'update', 'uses' => 'UserRoleController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'UserRoleController@destroy']);
    });

    //USERS
    Route::group(['prefix' => 'user', 'as' => 'user.', 'namespace' => 'User'], function () {
        Route::get('', ['as' => 'index', 'uses' => 'UserController@index']);
        Route::get('create', ['as' => 'create', 'uses' => 'UserController@create']);
        Route::post('store', ['as' => 'store', 'uses' => 'UserController@store']);
        Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'UserController@edit']);
        Route::put('update/{id}', ['as' => 'update', 'uses' => 'UserController@update']);
        Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'UserController@destroy']);
        Route::get('active/{id}', ['as' => 'active', 'uses' => 'UserController@active']);
        Route::get('destroyFile/{id?}/{name?}', ['as' => 'destroyFile', 'uses' => 'UserController@destroyFile']);

        //PASSWORD
        Route::group(['prefix' => 'password', 'as' => 'password.'], function () {
            Route::get('{id}', ['as' => 'edit', 'uses' => 'UserPasswordController@edit']);
            Route::put('update/{id}', ['as' => 'update', 'uses' => 'UserPasswordController@update']);
            Route::get('generatePassword/{id}', ['as' => 'generatePassword', 'uses' => 'UserPasswordController@generatePassword']);
        });

        //SECTOR
        Route::group(['prefix' => 'sector', 'as' => 'sector.'], function () {
            Route::get('{id}', ['as' => 'index', 'uses' => 'UserSectorController@index']);
            Route::post('store', ['as' => 'store', 'uses' => 'UserSectorController@store']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'UserSectorController@destroy']);
        });

        //MANAGER
        Route::group(['prefix' => 'manager', 'as' => 'manager.'], function () {
            Route::get('{id}', ['as' => 'index', 'uses' => 'UserManagerController@index']);
            Route::post('store', ['as' => 'store', 'uses' => 'UserManagerController@store']);
            Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'UserManagerController@destroy']);
        });

    });

});
