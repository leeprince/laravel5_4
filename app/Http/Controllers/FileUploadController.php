<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
	public function upload(Request $request)
	{
		if($request -> isMethod('POST'))
		{
			// var_dump($_FILES);
			$file = $request -> file('file');
			print_r($file);
			// dd($file);

			if($file -> isValid())
			{
				$fileType = $request -> getClientOrigin();
			}
		}

		return view('fileupload/upload');
	}
}
