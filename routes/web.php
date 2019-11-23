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

Route::get('/viewImport', [ 
    'uses' => 'ImportController@viewImport',
    'as' => 'viewImport'
    ]);

Route::get('/viewData', [ 
    'uses' => 'AllDataController@getAllData',
    'as' => 'viewData'
    ]);

Route::get('Delete/{tblimportid}', [
    'as' => 'Delete',
    'uses' => 'DeleteController@delete',
]);

Route::post('Update/{tblimportid}', [
    'as' => 'Update',
    'uses' => 'UpdateController@store',
]);

Route::get('viewUpdate/{tblimportid}', [
    'as' => 'viewUpdate',
    'uses' => 'UpdateController@update',
]);


Route::get('import', 'ImportController@import'); 
Route::post('import', 'ImportController@parseImport'); 

/* Route::get('/', function () {
    return view('welcome');
});



    
*/ 