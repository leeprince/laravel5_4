<?php

namespace App\Http\Controllers;

use Validator;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


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
			'created_at' => '1503297244',
			'updated_at' => '1503297244',
    	]);
    	var_dump($id);*/

        // 3. 插入 - 批量
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

    	// 3. 插入 - 批量 - 自动维护created_at, updated_at 
    	/*$id = DB::table('student')
    			->insert([
		    		[
						'name'       => 'leeprince_3',
						'age'        => 23,
						'sex'        => 0,
		    		],
		    		[
						'name'       => 'leeprince_4',
						'age'        => 23,
						'sex'        => 0,
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

    // Eloquent ORM
    public function ormQuery()
    {
    	// 查找 - 使用模型的all():查询表的所有记录
    	/*$all = Student::all();
    	dd($all);*/

    	// 查找 - 使用模型的find():条件查询一条记录
    	/*$find = Student::find(1);
    	// dd($find);
    	var_dump($find);*/

    	// 查找 - 使用模型的findOrFail():条件查找数据,没有即抛出异常
    	/*$findOrFail = Student::findOrFail(1);
    	// $findOrFailExption = Student::findOrFail(1000);//抛出异常
    	dd($findOrFail);
    	// var_dump($findOrFail);*/

    	// 查找 - 使用模型的get():查询表的所有记录
    	/*$get = Student::get();
    	dd($get);*/

    	// 查找 - 条件查询记录 get()
    	/*$get = Student::where([
				['id', '>=', 100],
				['sex', true]
			])
			->orderBy('id','ASC')->get();
        if (count($get)) {
            dd($get);
        } else {
            echo '查询为空';
        }*/

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

    	// 新增 - 使用模型 create() 批量新增方法保存一个新的模型。该方法返回被插入的模型实例, 你需要指定模型的 fillable 或 guarded 属性，因为所有 Eloquent 模型都通过批量赋值（Mass Assignment）进行保护。
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

    	// 更新 - save();
    	/*$students = Student::find(31);
    	$students ->sex = true;
    	$students -> save();
    	echo $students;*/

    	// 更新 - update();
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
    	/*$bool = Student::destroy(18);
        echo $bool;*/
    	/*$bool = Student::destroy(32, 33, 34);
    	$bool = Student::destroy([36, 37, 38]);
    	echo $bool;*/

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

    // Controller - Request
    public function ctlRequest(Request $request)
    {
    	// 请求参数
    	/*$params = $request -> input('name');*/
    	/*$params = $request -> input('name', 'leeprince');
    	echo $params;*/

    	/*if($request -> has('name')){
    		echo $request -> input('name');
    	}else{
    		echo 'No params name';
    	}*/

    	/*$params = $request -> all();
    	print_r($params);*/

    	// 请求类型    	
    	/*$method = $request -> method();*/
    	/*$method = $request -> isMethod('GET');*/
    	/*$method = $request -> isMethod('POST');*/
    	/*$method = $request -> ajax();*/
    	$method = $request -> is('student/*');
    	var_dump($method);
    	
    }

    // Controller - Session;
    public function ctlSession1(Request $request){

    	// HTTP request session()
    	/*$request -> session() -> put('key1', 'value1');
    	$request -> session() -> put('key2', 'value2');
    	echo $sessionValue = $request -> session() -> get('key1');*/

    	// session()
    	/*session() -> put('key3', 'value3');
    	echo $sessionValue = session() -> get('key3');*/

    	// Session()
    	/*// - 存储到session
    	Session::put('key4', 'value4');
    	// - 获取 session 值
    	// echo Session::get('key4');
    	// - 获取 session 值, 不存在则使用默认值
    	echo Session::get('key5', 'default5');*/

    	// 以数组的形式存储数据
    	Session::put([
    		'key_1' => 'value_1',
    		'key_2' => 'value_2',
    	]);
    	echo Session::get('key_1');
    	// echo Session::get('key_2');

    	// 把数据放到 session 的数组中
    	/*Session::push('p_key', 'p_value1');
    	Session::push('p_key', 'p_value2');
    	$res = Session::get('p_key');
    	var_dump($res);*/

    	// 取出数据并删除
    	/*$res = Session::pull('p_key');
    	var_dump($res);*/

    	// 取出所有 session 中 key 的值
    	/*$res = Session::all();
    	var_dump($res);*/
    	
    	// 判断 session 中的某个 key 是否存在
    	// if (Session::has('p_key')){
    	// 	$res = Session::all();
    	// 	// var_dump($res);
    	// 	dd($res);
    	// }else{
    	// 	echo 'p_key no exist ';
    	// }

    	// 一次性 session 
    	/*Session::flash('p_key_1', 'value_1');
    	echo Session::get('p_key_1');*/


    	/*$res = Session::all();
    	print_r($res);
    	echo '<br>key1 - ' . Session::get('key1'). "<br>";
    	// 删除 session 中指定的 key 的值
    	Session::forget('key1');
    	echo "<br>key1 -" .Session::get('key1'). "<br>";

    	$res = Session::all();
    	print_r($res);*/

    	// 清空所有 session 
    	/*Session::flush();*/



    }

    public function ctlSession2(Request $request){

    	
    	
    }

    public function ctlResponse()
    {
    	// 响应 json 
    	/*$data = [
			'name'     => 'leprince',
			'identify' => 'php',
			'id'       => 12,
    	];
    	var_dump($data);
    	return response() -> json($data);*/

    	// 重定向 - redirect
    	// return redirect('ctlRedirect');

    	// - 重定向到一个新的 URL 并将数据存储到一次性 Session 中通常是同时完成的，为了方便，可以创建一个 RedirectResponse 实例然后在同一个方法链上将数据存储到 Session，这种方式在 action 之后存储状态信息时特别方便：
    	// return redirect('ctlRedirect') -> with([
    	// 	'errorCode' => 503,
    	// 	'msg' => 'redirect page - 一次性 Session'
    	// ]);

    	// - action()
    	/*return redirect()->action('StudentController@ctlResponseRedirect')
    			 -> with([
		    		'errorCode' => 503,
		    		'msg' => 'redirect page - 一次性 Session'
		    	]);*/

    	// - route
    	/*return redirect()->route('ctl_redirect')
    			 -> with([
		    		'errorCode' => 503,
		    		'msg' => 'redirect page - 一次性 Session'
		    	]);*/

    	// - back()
    	return redirect()->back();
    }

    public function ctlResponseRedirect()
    {
    	return 'ctlResponseRedirect - '. Session::get('msg', '暂无信息');
    	
    }

    public function mdwActivity0()
    {
    	return '活动即将开启, 敬请期待';
    }
    public function mdwActivity1()
    {
    	
    	return '活动正在进行中, 感谢您的参与';
    }
    public function mdwActivity2()
    {

    	return '活动已结束, 请继续关注我们';
    }

    public function index()
    {
        $students = Student::orderBy('id','ASC')->paginate(10);

        foreach( $students as &$student){
            $student->sex = $student->getSex($student['sex']);
        }
        // var_dump($students);
        // var_dump($sex);

        return view('student/index',[
            'students' => $students,
        ]);
    }

    public function formCreate(Request $request)
    {
        $student = new Student();
        $sex     = $student -> getSex();
        if ($request->isMethod('POST')){

            // 验证
            // 验证 - 通过控制器验证器验证
            /*$validate = $this -> validate($request, [
                'name' => 'required|min:2|max:20',
                'age'  => 'required|min:0|max:200|Integer',
                'sex'  => 'required|Integer',
            ],[
                'required' => ':attribute - 为必填项 !',
                'min'      => ':attribute - 长度不在范围内 !',
                'max'      => ':attribute - 长度不在范围内 !',
                'Integer'  => ':attribute - 必须为整数 !',
            ],[
                'name' => '姓名',
                'age'  => '年龄',
                'sex'  => '性别',
            ]);*/

            // 验证 - 通过手动创建验证器验证: 使用 Validator 类 \Validator::make()或者在头部: use Validator;
            $validator = Validator::make($request -> all(), [
                'name' => 'required|min:2|max:20',
                'age'  => 'required|min:0|max:200|integer',
                'sex'  => 'required|Integer',
            ],[
                'required' => ':attribute - 为必填项 !',
                'min'      => ':attribute - 长度不在范围内 !',
                'max'      => ':attribute - 长度不在范围内 !',
                'integer'  => ':attribute - 必须为整数 !',
            ],[
                'name' => '姓名',
                'age'  => '年龄',
                'sex'  => '性别',
            ]);

            if($validator -> fails()){
                // withInput :保留验证出现错误后输入框中的内容
                // withErrors :一次性 session 报错信息
                return redirect()->back()->withErrors($validator)->withInput();

            }


            $data = $request -> all();
            // var_dump($data);
            // dd($data);

            // 新增
            // 新增 - save() - 新增数据(推荐)
           /* $student = new Student;
            // - 对象形式赋值
            $student -> name = $data['name'];
            $student -> age = $data['age'];
            $student -> sex = $data['sex'];

            // - 数组形式赋值
            // $student['name'] = $data['name'];
            // $student['age']  = $data['age'];
            // $student['sex']  = $data['sex'];
            $bool = $student -> save();*/

            // 新增 - create():$fillable , guarded - 新增数据
            // $bool = Student::create($data);



            // 新增 - 查询构造器 获得自增 id
            $addData['name'] = $data['name'];
            $addData['age']  = $data['age'];
            $addData['sex'] = $data['sex'];
            $bool   = DB::table('student') -> insertGetId($addData);

            if ($bool){
                return redirect('student_index')->with('success', "添加成功! - $bool ");
            }else{
                return redirect('student_index')->with('fail', '添加失败 !');
            }


        }

        return view('student/create', [
            'sex' => $sex
        ]);
    }

    public function formUpdate(Request $request, $id = 0)
    {
        $infos = Student::find($id);
        $sex   = $infos -> getSex();
        // dd($infos);
        
        if(!$infos){
            return redirect('student_index');
        }

        $infos->sex = $infos->getSex($infos['sex']);

        if($request -> isMethod('POST')){

            // 验证
            // 验证 - 通过控制器验证器验证
            $validate = $this -> validate($request, [
                'name' => 'required|min:2|max:20',
                'age'  => 'required|min:0|max:200|integer',
                'sex'  => 'required|integer',
            ],[
                'required' => ':attribute - 为必填项 !',
                'min'      => ':attribute - 长度不在范围内 !',
                'max'      => ':attribute - 长度不在范围内 !',
                'integer'  => ':attribute - 必须为整数 !',
            ],[
                'name' => '姓名',
                'age'  => '年龄',
                'sex'  => '性别',
            ]);

            // 验证 - 通过手动创建验证器验证: 使用 Validator 类 \Validator::make()或者在头部: use Validator;
            /*$validator = Validator::make($request -> all(), [
                'name' => 'required|min:2|max:20',
                'age'  => 'required|min:0|max:200|integer',
                'sex'  => 'required|Integer',
            ],[
                'required' => ':attribute - 为必填项 !',
                'min'      => ':attribute - 长度不在范围内 !',
                'max'      => ':attribute - 长度不在范围内 !',
                'integer'  => ':attribute - 必须为整数 !',
            ],[
                'name' => '姓名',
                'age'  => '年龄',
                'sex'  => '性别',
            ]);

            if($validator -> fails()){
                // withInput :保留验证出现错误后输入框中的内容
                // withErrors :一次性 session 报错信息
                return redirect()->back()->withErrors($validator)->withInput();

            }*/

            $data = $request -> all();

            // 新增 - 使用模型 save() 新增数据
            $student = Student::find($id);
            // -- 对象方式的 save()
            // $student -> name = "leprince_9-8";
            // $student -> age = "21";
            // $student -> sex = true;
            // -- 数组方式的 save()
            $student['name'] = $data['name'];
            $student['age']  = $data['age'];
            $student['sex']  = $data['sex'];
            // dd($student);
            $bool = $student -> save();
            // dd($bool);//dd() 不同于 print_r(), var_dump() ;dd() 会终止程序输出

            if($bool){
                return redirect('student_index')->with('success', '更新成功! - '.$id);
            }else{
                return redirect()->back()->with('fail', "更新失败! - ".$id);
            }
        }
       
        return view('student/update', [
            'id'    => $id,
            'sex'   => $sex,
            'infos' => $infos,
        ]);
    }

    public function formDelete(Request $request, $id = 0)
    {
        if($request -> ajax())
        {
            $id = $request -> input('id');

            $bool = Student::destroy($id);

            if($bool){
                return response()->json([
                    'msg' => '用户: '.$id.' 删除成功! ',
                    'code'=> 200
                ]);
            }else{
                return response()->json([
                    'msg' => '[注意] 用户: '.$id.' 删除失败! ',
                    'code'=> 201
                ]);
            }
        }
    }

    public function formView(Request $request, $id = 0)
    {
        $students = Student::find($id);

        // $students['sex'] = $students->getSex($students['sex']);
        $students->sex = $students->getSex($students['sex']);

        return view('student/detail', [
            'students' => $students,
        ]);
    }

}