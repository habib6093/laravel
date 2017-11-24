<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Students;

class student extends Controller
{
    //
    public function create()
    {
        echo "are you okey";
    	return view('student.student_create');
    }

    public function save_student(Request $request)
    {
    	 Students::create($request->all());
    	 //return "successful";
         //return $request->all();
         return view('student.student_create');
    }

    public function show()
    {
        return Students::all();
    }

    public function check(Request $request)
    {
        echo "hey";
        $pass=$request->input('password');

        $all_data=Students::all();

       foreach ($all_data as $key => $value) {
           echo $value->password."<br>";

           if(Hash::check('aiub2015sehop',$value->password)) {
             echo "matched<br>";
    // Right password
               }
       }
    }
}
