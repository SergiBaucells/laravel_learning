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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/',"PagesController@start");
//Route::get('/start',"PagesController@start");
//Route::get('/about',"PagesController@about");
//Route::get('/contact',"PagesController@contact");
//Route::get('/foro',"PagesController@foro");

Route::resource("post","Example3Controller");