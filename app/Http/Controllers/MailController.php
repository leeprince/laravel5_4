<?php 

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	public function send()
	{
		Mail::raw('邮件内容写在这里', function($message){
			$message->from('leprincehz@163.com', 'leeprince163');
			$message->subject('邮件主题写在这里');
			$message->to('leeprince@foxmail.com');
		});
	}
}
