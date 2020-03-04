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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/trucks/create_truck','TrucksController@create');
Route::post("/store","TrucksController@store");
Route::get("/trucks/view_truck","TrucksController@index");
Route::get("/trucks/edit_truck/{id}","TrucksController@edit"); 
// Route::get("/trucks/edit_truck/?{id}",function(){
//     return $id;
// });     
Route::get("/trucks/show_truck/{id}","TrucksController@show");

