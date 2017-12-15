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

Route::get('/', function () {
    return view('welcome');
});

$router->post('/Modules/A6C/Photo/{imagename}','ModuleA6CController@postPhoto');
$router->get('/Modules/A6C/{imagename}','ModuleA6CController@getPhoto');
