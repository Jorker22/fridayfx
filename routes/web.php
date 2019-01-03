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

Route::get('/admin', function () {
    return view('admin');
});


Route::post('/insert','Controller@insert');
Route::post('/insert2','Controller@insertsd');
Route::post('/insert3','Controller@insert3');
Route::post('/insert4','Controller@insert4');
Route::post('/insert5','Controller@insert5');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/edit/{id}',['as' => 'edit', 'uses' => 'HomeController@edit']); 
Route::get('/update/{id}',['as' => 'update', 'uses' => 'HomeController@update']); 
//Route::get('attendance/{id}', ['as' => 'user.attendance', 'uses' => 'UserController@attendance']);