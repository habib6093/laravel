<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class fileController extends Controller
{
    public function upload()
    {
       // echo phpinfo();
    	return view('file.upload');
    }

    public function save(request $request)
    {


     $rules=[
          'file'=>'max:100000',

     ];
     $validator = Validator::make($request->all(),$rules);

  //echo "string";
        //$this->validate($request,['file'=>'required|mimes:jpeg,bmp,png|size:10000']);

        

    	//if($request->hasFile('file'))
   if(!($validator->fails()))
    	{



	    //	$m=$request->file('file')->store('public');
            $m=Storage::putFile('public',$request->file('file'));
	        echo $m."<br>";

	        $n=Storage::url($m);

	        echo "is: $n<br>";

            $name=$request->file('file')->getClientOriginalName();
            echo "file name is: $name";

            $type=$request->file('file')->getMimeType();
            echo "type is: ".$type;

            //return Storage::allFiles('public');
            if(strpos($type, 'video') !== false)
            {
                return view('file.showVideoFile',compact('n'));
            }
            else
	    	  return view('file.showFile',compact('n')); //for image
        }
        else
        {
        	echo "no file selected";
        }

    }
}
