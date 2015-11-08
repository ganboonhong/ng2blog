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

        Route::get('create', ['uses' => 'AdminFunctionTypeController@create', 'as' => 'create']);

        Route::post('/','AdminFunctionTypeController@store');

        Route::get('/','AdminFunctionTypeController@index');
    });

    Route::group(['prefix' => 'function'],function(){

        Route::get('create',
                    ['uses' => 'AdminFunctionController@create', 'as' => 'create']);

        Route::post('/','AdminFunctionController@store');

        Route::post('/update/{id}',
                    ['uses'  => 'AdminFunctionController@update',
                     'as'    => 'function_update'])
                    ->where('id', '[0-9]+');

        Route::get('/','AdminFunctionController@index');

        Route::get('edit/{id}',
                    ['uses' => 'AdminFunctionController@edit',
                     'as'   => 'function_edit'])
                    ->where('id', '[0-9]+');
    });
});
