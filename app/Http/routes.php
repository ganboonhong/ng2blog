<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('test', function(){
    return view('test');
});

Route::group(['prefix' => 'admin'], function(){

    Route::group(['prefix' => 'function_type'],function(){

        Route::get('/','AdminFunctionTypeController@index');

        Route::post('/','AdminFunctionTypeController@store');

        Route::get('create', ['uses' => 'AdminFunctionTypeController@create', 'as' => 'create']);

        Route::get('destroy/{id}',
                    [   'uses' => 'AdminFunctionTypeController@destroy',
                        'as'   => 'function_type_destroy'])
                        ->where('id', '[0-9]+');

        Route::post('delete_multiple_items',
            [   'uses'  => 'AdminFunctionTypeController@deleteMultipleItems',
                'as'    => 'delete_multiple_items'
            ]);

        Route::get('edit/{id}',
                    [   'uses' => 'AdminFunctionTypeController@edit',
                        'as'   => 'function_type_edit'])
                        ->where('id', '[0-9]+');

        Route::post('update/{id}',
                    [   'uses'  => 'AdminFunctionTypeController@update',
                        'as'    => 'function_type_update'])
                        ->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'function'],function(){

        Route::get('/','AdminFunctionController@index');

        Route::post('/','AdminFunctionController@store');

        Route::get('create',
                    [   'uses' => 'AdminFunctionController@create', 'as' => 'create']);

        Route::post('delete_multiple_items',
            [   'uses'  => 'AdminFunctionController@deleteMultipleItems',
                'as'    => 'delete_multiple_items'
            ]);

        Route::get('destroy/{id}',
                    [   'uses' => 'AdminFunctionController@destroy',
                        'as'   => 'function_destroy'])
                        ->where('id', '[0-9]+');

        Route::get('edit/{id}',
                    [   'uses' => 'AdminFunctionController@edit',
                        'as'   => 'function_edit'])
                        ->where('id', '[0-9]+');

        Route::post('update/{id}',
                    [   'uses'  => 'AdminFunctionController@update',
                        'as'    => 'function_update'])
                        ->where('id', '[0-9]+');
    });

    Route::group(['prefix' => 'homepage'], function(){

        Route::get('/',
             [   'uses'  => 'HomepageController@index',
                 'as'    => 'homepage'
             ]
        );

        Route::get('/login', 'HomepageController@login_page');

    });

    Route::group(['prefix' => 'user'], function(){
        Route::post ('/', 'UserController@store');
        Route::get  ('/create', 'UserController@create');
    });
});
