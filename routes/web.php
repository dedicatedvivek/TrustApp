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
Route::middleware(['auth'])->group(function () 
{
	Route::get('/', function () {
    return view('welcome');

});
});

Route::get("newapplicant",function(){

	return view ('new_applicant');
});

Route::get("listapplicant",function(){

	return view ('list_applicant');
});

Route::get("transaction",function(){

	return view ('transaction');
});



Route::post("store",'application@store');

Route::post("/insert","Controller@insert");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
