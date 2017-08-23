<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // 数据迁移
        // 新建迁移文件
        /*新建迁移文件 -  新建一个 teachers 迁移文件 . --table 和 --create 参数可以指定数据库表, 以及迁移文件是否要建立新的数据表
            php artisan make:migration create_teachers_table --create=teachers  
        新建迁移文件 - 生成模型是生成迁移文件
            php artisan make:model Teachers -m*/
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('age')->unsigned()->default(0);
            $table->integer('sex')->unsigned()->default(0);
            // $table->integer('create_time')->default(0);
            // $table->integer('update_time')->default(0);
            $table->timestamps();// 包含 laravel 自动维护的两个字段(列) created_at, updated_at

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
