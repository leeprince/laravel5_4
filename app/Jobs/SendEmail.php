<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Mail;
use Log;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $email;

    // 最大失败次数, 测试时可以调大点数值, 方便查看数据库验证整个过程
    public $tries = 10;

    // 超时
    public $timeout = 60;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($email)
    {
        $this->email = $email;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        // 发送邮件添加到队列中, 正常发送
        /*Mail::raw('队列测试中的邮件内容', function($message){
            $message->to($this->email);
            $message->subject("队列测试中的邮件主题");
        });*/

        // 发送邮件添加到队列中 - 失败发送, 测试失败任务: $message -> $messages
        /*Mail::raw('队列测试中的邮件内容', function($messages){
            $message->to($this->email);
            $message->subject("队列测试中的邮件主题");
        });*/

        // 编写日志文件到队列中
        Log::info('这是队列日志文件记录 - mail:'.$this->email);
    }
}
