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


Route::get('show',"show@index");

#Route::get('create',"show@create");

Route::post('create_student',function(){
  return "student created";
  
});


Route::get('create',"student@create");

Route::post('create',"student@save_student");
Route::get('list',"student@show");

Route::get('password',"student@check");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::get('/upload_file',"fileController@upload");
Route::post('/save_file',"fileController@save");

