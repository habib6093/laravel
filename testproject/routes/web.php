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



Route::get('/about', function () {
	
    return "Hello world ".(5+4);
});

Route::get('/data',function()
{
	 $data=20;
	 $name="Jashim";
	 $list=DB::table('task')->get();
	// $list['habib']="is a good boy";
	// $list['sohan']="is very genius";
	// $list['sadman']="is pationate about startups";
     return view('data', compact('data','name','list'));
});



Route::get('/show',function()
{
	 
	 $list=DB::table('task')->latest()->get();

     return $list;
});

Route::get('/show/{no}',function($no)
{
	 
	 $list=DB::table('task')->find($no);

     dd($list);
});



Route::get('show',"show@index");
