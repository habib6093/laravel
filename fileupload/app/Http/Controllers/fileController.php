<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class fileController extends Controller
{
    public function upload()
    {
    	return view('file.upload');
    }

    public function save(request $request)
    {
    	if($request->hasFile('file'))
    	{

	    //	$m=$request->file('file')->store('public');
            $m=Storage::putFile('public',$request->file('file'));
	        echo $m."<br>";

	        $n=Storage::url($m);

	        echo "is: $n<br>";
            
            //return Storage::allFiles('public');
	    	return view('file.showFile',compact('n'));
        }
        else
        {
        	echo "no file selected";
        }

    }
}
