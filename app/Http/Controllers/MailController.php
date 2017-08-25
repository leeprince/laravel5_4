<?php 

namespace  App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
	public function send()
	{
		// 发送纯文本格式邮件
		/*Mail::raw('邮件内容写在这里', function($message){
			// 发件人, 配置文件已配置, 可以在这里修改发件人
			// $message->from('leeprincehz@163.com', 'leeprince163');
			// 主题
			$message->subject('这是邮件主题');
			// 收件人
			$message->to('leeprince@foxmail.com');
			// 收件人 - 批量
			// $message->to(['leeprince@foxmail.com','leeprince_spare@foxmail.com']);
			// 抄送
			// $message->cc('leeprince_spare@foxmail.com');
			// 抄送 - 批量
			$message->cc(['leeprince_img@fomxail.com','leeprince_spare@foxmail.com']);
		});*/

		// 发送含样式格式邮件
		Mail::send('mail/send', [
			'name'=>'leeprince', 'content'=>'这是里 laravel 使用 163 邮件功能测试'
		],function($message){
			$message->subject('这是邮件主题');
			// 收件人
			$message->to('leeprince@foxmail.com');
			// 收件人 - 批量
			// $message->to(['leeprince@foxmail.com','leeprince_spare@foxmail.com']);
			// 抄送
			// $message->cc('leeprince_spare@foxmail.com');
			// 抄送 - 批量
			$message->cc(['leeprince_img@foxmail.com','leeprince_spare@foxmail.com']);
		});
	}
}
