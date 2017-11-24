<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class show extends Controller
{
    public function index()
    {

		 $students=[
		  '0'=>[
		  	'name'=>"habib",
		  	'age'=>22
		  ],
		  '1'=>[
		  	'name'=>"sadman",
		  	'age'=>24
		  ],
		  '2'=>[
		  	'name'=>"siam",
		  	'age'=>21
		  ]
		 ];

		return view('student.student_details',compact('students'));

    }

    public function create()
    {
    	echo "hey";
    	return view('student.student_create');
    }
}
