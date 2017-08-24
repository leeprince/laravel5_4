<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FileUploadController extends Controller
{
	public function upload(Request $request)
	{
		if($request -> isMethod('POST'))
		{
			/*var_dump($_FILES);
			echo '<br><br><br><br>';*/

			$file = $request -> file('file');
			// print_r($file);
			// dd($file);

			if($file -> isValid()){
				/*D:\xampp\htdocs\laravel5_4\vendor\symfony\http-foundation\File\UploadedFile.php
				namespace Symfony\Component\HttpFoundation\File;*/
				// 原文件名
				$originName = $file -> getClientOriginalName();
				// 扩展名
				$ext = $file -> getClientOriginalExtension();
				// MimeType
				$MimeType = $file -> getClientMimeType();
				// 文件大小
				$size = $file -> getClientSize();
				// 临时的绝对路径
				$readPath = $file -> getRealPath();
				// 错误
				$error = $file -> getError();
				// 错误信息
				$errorMessage = $file -> getErrorMessage();

				echo "
				originName:$originName <br>
				ext:$ext <br> 
				MimeType:$MimeType <br> 
				size:$size <br> 
				readPath:$readPath <br>
				error:$error <br> 
				errorMessage:$errorMessage <br> 
				"; 

				$maxSize = 1024*1024*1;
				$typeArray = ['jpg','JPG', 'jpeg', 'png'];
				if($size >= $maxSize){
					return '文件大小限制';
				}
				if(!in_array($ext, $typeArray)){
					return '文件类型限制';
				}

				// $fileName = date('YmdHis').'_'.uniqid().'.'.$ext;
				$fileName = date('YmdHis').'_'.$originName;

				$bool = Storage::disk('uploads')->put($fileName, file_get_contents($readPath));
				// var_dump($bool);

				if($bool){
					$msg = '图片上传成功';
				}else{	
					$msg = '图片上传失败';
				}

				// 重定向
				// return redirect()->back()->with('msg', $msg);
				// 返回视图渲染
				return view('fileupload/upload', [
					'msg' => $msg,
				]); 
			}

			// dd($file);
		}

		return view('fileupload/upload');
	}
}
