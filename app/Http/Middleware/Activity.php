<?php 

namespace App\Http\Middleware;

use Closure;

class Activity
{
	public function handle($request, Closure $next)
	{
		// 逻辑 
		/*if( time() < strtotime("2017-10-20 23:59:59") ){
			return redirect('mdwActivity0');
		}

		return $next($request);*/


		$response = $next($request);

		$startTime = strtotime('2007-10-20 23:59:59');

		// 逻辑
		if( time() < $startTime ){
			return redirect('mdwActivity0');
		}
		return $response;
	}
}

