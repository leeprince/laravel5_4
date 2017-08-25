<?php 

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmail;

class QueueController extends Controller
{
	// 推送任务到队列中
	public function push()
	{
		dispatch(new SendEmail('leeprince@foxmail.com'));
	}
}