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

Route::get('/', function(){
    return view('welcome');
});
Route::post('/insert','insertC@store');
Route::get('/insert','insertC@gestion');
Route::get('/pdf1','insertC@print');
Route::get('/voirD','insertC@voirD');
Route::get('/dec_ant','insertC@dec_ant');


?>