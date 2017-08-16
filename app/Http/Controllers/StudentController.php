<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;


class StudentController extends Controller
{
	// 原生 SQL查询
    public function sourceQuery()
    {
		// return 'studentController@info';

		$currentDate = date('Y-m-d, H:i:s');

    	// 原生 SQL查询-SELECT
        $db = DB::select('SELECT * FROM student');
        var_dump($db);
        dd($db);

    	// 原生 SQL查询-INSERT
    	// - 占位符 ? 进行参数绑定;
  /*  	$bool = DB::insert('INSERT INTO student(name, age, sex, created_at, updated_at) VALUES (?, ?, ?, ?, ?)',[
			'lpname',
			18,
			1,
			'2017-08-14 17:33:57',
			'2017-08-15 17:33:57',
    	]);*/

    	// - 命名进行参数绑定
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
		// 更新-数组条件多条数据
    	/*$num = DB::table('student')
				->where([
					['age', '>=', 30],
					['id', '>=', 15]
				])
				->update([
					'name' => 'leeprince_9',
				]);

    	var_dump($num);*/

    	// 自增/自减 
    	// - 自增
    	// $num = DB::table('student')->increment('age');
    	// - 自增指定值
    	// $num = DB::table('student')->increment('age', 2);
    	//  -自增指定值和额外列更新(慎用)
    	// $num = DB::table('student')->decrement('age', 5, ['name' => 'leeprince']);
    	// - 按条件自增指定值和额外列更新
    	/*$num = DB::table('student')->where(['name' => 'leeprince'])->decrement('age', 5, ['sex' => 1]);
    	var_dump($num);*/

    	// 删除 - 条件删除
    	/*$num = DB::table('student')->where(['id' => 17])->delete();
    	var_dump($num);*/
    	// 删除-删除该表所有列的值,没有返回值(慎用)
    	/*DB::table('student')->truncate();*/

    	// 查询
    	// get():返回结果集
    	/*$info = DB::table('student')->get();
    	dd($info);*/
    	// get():按条件返回结果集
    	/*$info = DB::table('student')
			->where('id', '>=', 1)
    		->get();
    	dd($info);*/

    	// get():按数组条件返回结果集
    	/*$info = DB::table('student')
			->where([
				['id', '>=', 1],
				['age', '>=', 30],
			])
    		->get();
    	dd($info);*/

    	// get():按数组条件返回结果集
    	/*$info = DB::table('student')
			->where([
				['id', '>=', 1],
				['age', 30],
			])
    		->get();
    	dd($info);*/

    	// select:返回指定的字段
    	/*$info = DB::table('student')
    		->select('id', 'name', 'sex')
			->where([
				['id', '>=', 1],
			])
    		->get();
    	dd($info);*/

    	// first():返回一行数据
    	/*$info = DB::table('student')
    		->where('name', 'leeprince')
    		->first();
    	dd($info);*/

    	/*$info = DB::table('student')
    		->where(['name' => 'leeprince'])
    		->first();
    	dd($info);*/

    	/*$info = DB::table('student')
    		->where(['name' => 'leeprince', 'id' => 1])
    		->first();
    	dd($info);*/

    	// where:使用查询构建器上的 where 方法可以添加 where 子句到查询中，调用where 最基本的方法需要传递三个参数，第一个参数是列名，第二个参数是任意一个数据库系统支持的操作符，第三个参数是该列要比较的值
    	/*$info = DB::table('student')
			->where([
				['id', '>=', 1],
				['age', 30],
			])
    		->get();
    	dd($info);*/

    	// - whereBetween
    	/*$info = DB::table('student')
    		->whereBetween ('age', [20,30])
    		->get();
    	dd($info);*/

    	// - whereIn
    	/*$info = DB::table('student')
    		->whereIn ('id', [1, 3, 10, 18])
    		->orderBy('id')
    		->get();
    	dd($info);*/

    	// - whereDate
    	/*$info = DB::table ('student')
    		->whereDate ('created_at', '2017-08-14')
    		->orderBy('id')
    		->get();
    	dd($info);*/

    	// - whereMonth 
    	/*$info = DB::table ('student')
    		->whereMonth ('created_at', 7)
    		->orderBy('id')
    		->get();
    	dd($info);*/

    	// - 在返回数组中为列值指定自定义的键(该键必须为该表的其他字段名, 否则报错)
    	/*$infos = DB::table('student')
    			->where([
    				['id', '>', '1']
    			])
    			->pluck('name', 'id');
    	dd($infos);*/

    	// chunk: 注意该方法必须加入orderBy()排序,否则报错; 该方法一次获取结果集的一小块，然后传递每一小块数据到闭包函数进行处理，该方法在编写处理大量数据库记录的 Artisan 命令的时候非常有用
    	/*echo '<pre>';
    	$infos = DB::table('student')->orderBy('id')->chunk(2, function($infos) {
    		var_dump($infos);

    		if(终止条件)
    		{
				return false;
    		}
    	});*/
    }

    public function ormQuery()
    {
    	
    }
}