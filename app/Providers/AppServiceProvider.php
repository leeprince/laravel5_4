<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*如果你想要获取应用中每次 SQL 语句的执行，可以使用 listen 方法，该方法对查询日志和调试非常有用，你可以在服务提供者中注册查询监听器：*/
        // DB::listen(function ($query) {
        //     $query->sql;
        //     // $query->bindings;
        //     // $query->time;
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
