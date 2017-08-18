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

		// 逻辑
		if( time() < strtotime("2027-10-20 23:59:59") ){
					return redirect('mdwActivity0');
		}
		return $response;


	}
}

