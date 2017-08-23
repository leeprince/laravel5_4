<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 数据填充
       /* 数据填充 - 1. 创建填充文件并完善填充文件(注意是: TeacherTableSeeder , 而不是 TeachersTableSeeder)
        	php artisan make:seeder	TeacherTableSeeder
        数据填充 - 执行填充文件 - 2. 执行单个填充文件
        	php artisan db:seed --class=TeacherTableSeeder
        数据填充 - 执行填充文件 - 2. 批量执行填充文件
        	php artisan db:seed*/
        DB::table('teachers')->insert([
        	['name'=> 'lee1', 'age'=> 18, 'sex'=> 1],
        	['name'=> 'lee2', 'age'=> 28, 'sex'=> 2],
        ]);
    }
}
