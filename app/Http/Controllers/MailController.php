<?php 

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	public function send()
	{
		Mail::raw('邮件内容写在这里', function($message){
			$message->from('leeprincehz@163.com', 'leeprince163');
			$message->subject('这是邮件主题');
			$message->to('leeprince@foxmail.com');
		});
	}
}
