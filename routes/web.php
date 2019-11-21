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

Route::get('/', [ 
    'uses' => 'IndexController@viewIndex',
    'as' => 'index'
    ]);

Route::get('/import', [ 
    'uses' => 'ImportController@viewImport',
    'as' => 'viewImport'
    ]);
/* Route::get('/', function () {
    return view('welcome');
});



    
*/ 