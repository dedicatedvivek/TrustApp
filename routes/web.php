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
    return view('test');

});
});

Route::get("home",function(){

	return view ('home');
});



Route::get("newapplicant",function(){

	return view ('new_applicant');
});

Route::get("listapplicant",function(){

	return view ('list_applicant');
});
Route::get("bank",function(){

	return view ('bank');
});
Route::get("new_bank",function(){

	return view ('new_bank');
});
Route::get("saving",function(){

	return view ('saving');
});
Route::get("new_saving",function(){

	return view ('new_saving');
});

Route::get("transaction",function(){

	return view ('transaction');
});
Route::get("new_fd",function(){

	return view ('new_fd');
});
Route::get("new_expense",function(){

	return view ('new_expense');
});


Route::post("store",'application@store');

Route::post("/insert","Controller@insert");

Route::post("/update","UpdateController@update");

Route::post("/insertbank","BanksController@insertbank");

Route::post("/insertsaving","SavingsController@insertsaving");

Route::post("/insertfd","FDController@insertfd");

Route::get("list_bank",function(){

	return view ('list_bank');
});

Route::get("list_savings",function(){

	 return view ('list_savings');
 });


Route::get("ajax",function(){

	 return view ('ajax');
 });




Route::post("/insertexpense","ExpenseController@insertexpense");


Auth::routes();

#Route::get('/home', 'HomeController@index')->name('home');
