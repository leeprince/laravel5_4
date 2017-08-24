<?php 

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Support\Facades\Log;

/**
*  调试及错误日志
*/
class ErrorController extends Controller
{
	public function debug()
	{
		// 调试模式
		// 配置路径: config/app.php 和 .evn 中的APP_DEBUG 调试模式:true;false
		return view('no_exist_page');
	}

	public function http()
	{
		// HTTP 异常
		$student = Student::where([
					['id', 100],
					['age', '>=', 18]
				])
				->get();
		if (count($student)) {
			dd($student);
		} else {
			// 文件路径: D:\xampp\htdocs\laravel5_4\vendor\laravel\framework\src\Illuminate\Foundation\Exceptions\views\503.blade.php
			// return abort(503);

			// 自定义 http 异常文件
			// 文件路径: D:\xampp\htdocs\laravel5_4\resources\views\errors\404.blade.php
			return abort(404);
		}
	}

	public function log()
	{
		// 错误及日志文件
		// Log::info('这是 info 信息 !');

		// Log::warning('这是 warning 警告 !');

		// Log::debug('这是 debug 调试 !');

		// Log::error('这是 error 错误信息 !');
		Log::error('这是 error 错误信息 !', ['id'=>400, 'msg'=>'leepirnce_error_test']);
	}
}
