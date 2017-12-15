<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ModuleA6CController extends Controller
{
   

    public function getPhoto(Request $request,$imagename)
	{
		
		if(file_exists('public/Modules/A6C/'.$imagename))
		{
          return redirect('public/Modules/A6C/'.$imagename);
	 
		}
		else
			
           return redirect('public/Modules/A6C/'.'null.jpg');
    }

	public function postPhoto(Request $request,$imagename)
	{
		$photoFile = $request->file('photo');
     
		if($request->hasFile("photo"))
		
			$photoFile->move('public/Modules/A6C', $imagename);
 }



}