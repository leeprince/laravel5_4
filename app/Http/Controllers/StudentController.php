<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
	// 原生 SQL查询
    public function info()
    {
		// return 'studentController@info';

		$currentDate = date('Y-m-d, H:i:s');

    	// 原生 SQL查询-SELECT
        $db = DB::select('SELECT * FROM student');
        var_dump($db);
        dd($db);

    	// 原生 SQL查询-INSERT
    	// 占位符 ? 进行参数绑定;
  /*  	$bool = DB::insert('INSERT INTO student(name, age, sex, created_at, updated_at) VALUES (?, ?, ?, ?, ?)',[
			'lpname',
			18,
			1,
			'2017-08-14 17:33:57',
			'2017-08-15 17:33:57',
    	]);*/
    	// 命名进行参数绑定
   /* 	$bool = DB::insert("INSERT INTO student(name, age, sex, created_at, updated_at) VALUES (:name, :age, :sex, :created_at, :updated_at)",[
			':name'       => 'lpname1',
			':age'        => 18,
			':sex'        => 0,
			':created_at' => '2017-08-14 17:33:57',
			':updated_at' => '2017-08-15 14:33:57',
    	]);
    	var_dump($bool);*/

    	// 原生 SQL查询-UPDATE
    	/*$bool = DB::update('UPDATE student SET name = :name, updated_at = :updated_at WHERE id = :id',[
			':name'       => 'leeprince_1',
			':updated_at' => $currentDate,
			':id'         => 6,
    	]);
    	var_dump($bool);*/

    	// 原生 SQL查询-DELECT
    	// $bool = DB::delete('DELETE FROM student WHERE id = :id',[
    	// 	':id' => 7,
    	// ]);
    	// var_dump($bool);

    	// 数据库事务
    	/*DB::transaction(function(){
    		$bool = DB::insert("INSERT INTO student(name, age, sex, created_at, updated_at) VALUES (:name, :age, :sex, :created_at, :updated_at)",[
				':name'       => 'leeprince_2-3',
				':age'        => 23,
				':sex'        => 1,
				':created_at' => '2017-08-14 17:33:57',
				':updated_at' => '2017-08-16 17:33:57',
	    	]);

    		$bool = DB::update('UPDATE student SET name = :name, updated_at = :updated_at WHERE id = :id',[
				':name'       => 'leeprince_1-3',
				':updated_at' => '2017-08-16 00:33:57',
				':id'         => 6,
	    	]);

    	});*/

    }

    // 查询构造器
    public function constructQuery()
    {
    	$currentDate = date('Y-m-d, H:i:s');

    	// 插入
    	// 1. 插入-单条数据
    	/*$bool = DB::table('student')->insert([
			'name'       => 'leeprince_3',
			'age'        => 23,
			'sex'        => 0,
			'created_at' => '2017-08-14 17:33:57',
			'updated_at' => '2017-08-16 00:33:57',
    	]);
    	var_dump($bool);*/
    	// 2. 插入-获得自增id
    	/*$id = DB::table('student')->insertGetId([
			'name'       => 'leeprince_3-1',
			'age'        => 23,
			'sex'        => 0,
			'created_at' => '2017-08-14 17:33:57',
			'updated_at' => '2017-08-16 00:33:57',
    	]);
    	var_dump($id);*/
    	// 3. 插入-批量
    	/*$id = DB::table('student')
    			->insert([
		    		[
						'name'       => 'leeprince_3-2',
						'age'        => 23,
						'sex'        => 0,
						'created_at' => '2017-08-14 17:33:57',
						'updated_at' => '2017-08-16 00:33:57',
		    		],
		    		[
						'name'       => 'leeprince_3-3',
						'age'        => 23,
						'sex'        => 0,
						'created_at' => '2017-08-14 17:33:57',
						'updated_at' => '2017-08-16 00:33:57',
		    		],
		    		
		    	]);
    	var_dump($id);*/

    	// 更新
    	// 1. 更新-单条数据
    	/*$num = DB::table('student')
				->where([
					'id' => 8
				])
				->update([
					'name' => 'lpname_1',
					'age'  => 22
				]);

    	var_dump($num);*/
    	// 更新-多条数据
    	/*$num = DB::table('student')
				->where('age', '>=', 30)
				->update([
					'name' => 'lpname_1',
				]);

    	var_dump($num);*/
		// 更新-多条数据
   /* 	$num = DB::table('student')
				->where([
					['age', '>=', 30],
				])
				->update([
					'name' => 'lpname_1',
				]);

    	var_dump($num);*/

    	// 自增/自减-自增-自增指定值-自增指定值和额外列更新(慎用)-按条件自增指定值和额外列更新
    	// $num = DB::table('student')->increment('age');
    	// $num = DB::table('student')->increment('age', 2);
    	// $num = DB::table('student')->decrement('age', 5, ['name' => 'leeprince']);
    	/*$num = DB::table('student')->where(['name' => 'leeprince'])->decrement('age', 5, ['sex' => 1]);
    	var_dump($num);*/

    	// 删除-条件删除
    	/*$num = DB::table('student')->where(['id' => 17])->delete();
    	var_dump($num);*/
    	// 删除-删除该表所有列的值,没有返回值(慎用)
    	/*DB::table('student')->truncate();*/

    }
}