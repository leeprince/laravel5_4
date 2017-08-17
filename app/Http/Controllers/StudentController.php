<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
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
    	//  - 自增指定值和额外列更新(慎用)
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

    	// 聚合函数
    	// 统计记录数
    	// $num = DB::table('student') -> count();
    	// var_dump($num);

    	// 数据集中某个字段取出最小值
    	/*$num = DB::table('student') -> min('age');
    	var_dump($num);*/

    	// 数据集中某个字段取出最大值
    	/*$num = DB::table('student') -> max('age');
    	var_dump($num);*/
    	
    	// 数据集中某个字段的总和
    	// $num = DB::table('student') -> sum('age');
    	// var_dump($num);

    	// 数据集中某个字段的平均值
    	$num = DB::table('student') -> avg('age');
    	var_dump($num);
    }

    public function ormQuery()
    {
    	// 查找 - 使用模型的all():查询表的所有记录
    	/*$all = Student::all();
    	dd($all);*/

    	// 查找 - 使用模型的find():条件查询一条记录
    	$find = Student::find(1);
    	// dd($find);
    	var_dump($find);

    	// 查找 - 使用模型的findOrFail():条件查找数据,没有即抛出异常
    	/*$findOrFail = Student::findOrFail(1);
    	// $findOrFailExption = Student::findOrFail(1000);//抛出异常
    	dd($findOrFail);
    	// var_dump($findOrFail);*/

    	// 查找 - 使用模型的get():查询表的所有记录
    	/*$get = Student::get();
    	dd($get);*/

    	// 查找 - 条件查询记录
    	/*$get = Student::where([
    			['id', '>=', 2],
    			['sex', true]
    		])
    		->orderBy('id','ASC')
    		->get();
    	dd($first);*/

    	// 查找 - 使用模型的first():条件查询记录
    	/*$first = Student::where([
    			['id', '>=', 2],
    			['sex', true]
    		])
    		->orderBy('id','ASC')
    		->first();
    	dd($first);*/

    	// 查找 - chunk();
    	/*echo "<pre>";
    	$chunk = Student::chunk(2, function($info){
    		var_dump($info);

    		// if(判断终止条件)
    		// {

    		// }
    	});*/

    	// 查找 - 使用模型的聚合函数
    	/*$count = Student::count();
    	echo $count;*/
    	/*$count = Student::where([
    			['id', '>=', 2],
    			['sex', true]
    		])
    		->count();
    	echo $count;*/

    	// 查找 - 使用模型 find() 方法
    	/*$info = Student::find(27);
    	// echo $info->created_at;
    	echo date('Y-m-d H:i:s', $info->created_at);*/

    	// 新增 - 使用模型 save() 新增数据
    	/*$student = new Student();
    	// -- 对象方式的 save()
    	// $student -> name = "leprince_9-8";
    	// $student -> age = "21";
    	// $student -> sex = true;
    	// -- 数组方式的 save()
    	$student['name'] = "leprince_9-8";
    	$student['age'] = 21;
    	$student['sex'] = true;
    	// dd($student);
    	$bool = $student -> save();
    	dd($bool);*/

    	// 新增 - 使用模型 create 方法保存一个新的模型。该方法返回被插入的模型实例, 你需要指定模型的 fillable 或 guarded 属性，因为所有 Eloquent 模型都通过批量赋值（Mass Assignment）进行保护。
    	/*$create  = Student::create([
    		'name' => 'leeprince_9-5',
    		'age' => '24',
    		'sex' => 0,
    	]);
    	dd($create);*/

    	// 新增 - firstOrCreate() 方法先尝试通过给定列/值对在数据库中查找记录，如果没有找到的话则通过给定属性创建一个新的记录。 firstOrNew 方法和 firstOrCreate 方法一样先尝试在数据库中查找匹配的记录，如果没有找到，则返回一个的模型实例。
    	/*$firstOrCreate = Student::firstOrCreate([
    		'name' => 'leeprince_9-6',
    		'age' => '24',
    		'sex' => 0,
    	]);
    	dd($firstOrCreate);*/

    	// 新增 - firstOrNew()
    	/*$firstOrNew = Student::firstOrNew([
    		'name' => 'leeprince_9-7',
    		'age' => '24',
    		'sex' => 0,
    	]);

    	$firstOrNew -> save();
    	dd($firstOrNew);*/

    	// 更新 -save();
    	/*$students = Student::find(31);
    	$students ->sex = true;
    	$students -> save();
    	echo $students;*/

    	// 更新 -update();
    	/*$update = Student::where([
    			['id', '>=', 40],
    			['sex', true]
    		])
    		->update([
    			'name' => 'leeprince_9-8'
    		]);
    	echo $update;*/

    	// 删除 - 通过模型删除
		/*$student = Student::find(40);
		$bool    = $student -> delete();
    	echo $bool;*/

    	// 删除 - 通过主键删除
    	/*// $id = Student::destroy(39);
    	$id = Student::destroy(32, 33, 34]);
    	$id = Student::destroy([36, 37, 38]);
    	echo $id;*/

    	// 删除 - 通过查询删除
    	// $bool = Student::where([
    	// 		['id', '>=', 30]
    	// 	])
    	// 	->delete();
    	// echo $bool;
    }

    // Blade 是 Laravel 提供的一个非常简单但很强大的模板引擎，不同于其他流行的 PHP 模板引擎，Blade 在视图中并不约束你使用 PHP 原生代码。所有的 Blade 视图都会被编译成原生 PHP 代码并缓存起来直到被修改，这意味着对应用的性能而言 Blade 基本上是零开销。Blade 视图文件使用 .blade.php 文件扩展并存放在 resources/views 目录下。
    public function bladeEngine()
    {
    	$name = 'leeprince_1';
    	$arr  = [
			[
				'idetify' => 'php',
				'exp'     => 100
			],
			[
				'idetify' => 'phpDev',
				'exp'     => 1000
			],

    	];

    	// $students = Student::get();
    	$students = [];
    	return view('student/bladeEngine',[
			'name'    => $name,
			'arr'     => $arr,
			'students' => $students,
    	]);
    }

    // 模板中的URL
    public function modelUrl()
    {
    	
    	return 'modelUrl';
    }
}