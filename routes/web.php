<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*************** Demo-start _leeprince-201708141640*/
// 基本路由
/*Route::get('route_basic_get', function(){
    return "laravel route_basic_get";
});
Route::post('route_basic_post', function(){
    return "laravel route_basic_post";
});*/

// 多请求路由
/*Route::match(['get', 'post'], 'route_match', function(){

    return "laravel route_match";
});*/

// 响应多种请求类型
/*Route::any('route_any', function(){

    return "laravel route_any";
});*/

// 路由参数
/*Route::get('route_params/{id}', function($id){

    return "route_params-id-{$id}";
});*/
// 1. 可选路由参数
/*Route::get('route_params_null/{name?}', function($name = null){

    return "route_params-name-{$name}";
});*/
// 2. 默认路由参数
/*Route::get('route_params_default/{name?}', function($name = 'leeprince'){

    return "route_params-name-{$name}";
});*/

// 正则约束
// 1. 默认可选单个参数
/*Route::get('route_where/{id?}', function($id = 0){

    return "raravel route_where-id:{$id}";
})->where('id', '[0-9]+');*/
// 2. 默认可选数组参数
/*Route::get('route_where_id_name/{id?}/{name?}', function($id = 0, $name = 'leeprince'){

    return "raravel route_where-id:{$id}-name:{$name}";
})->where(array('id' => '[0-9]+', 'name' => '[a-zA-Z]+'));*/

/*全局路由*/
//配置路径: app/Providers/RouteServiceProvider.php:27

/*命名路由*/
/*Route::get('route_no_name/profile', function(){
    return "laravel route_no_name";
});
Route::get('route_name/profile', function(){
    return route('profile')."-laravel route_name";
})->name('profile');*/
// 1. 为控制器操作指定路由
/*Route::get('route_name/url', 'RouteController@route_name')->name('route_name_url');*/
// 2. 为控制器操作指定路由, 并传递参数
/*Route::get('route_name_url_id/url/{id?}', 'RouteController@route_name_url_id')->name('route_name_url_id');*/

// 路由群组
// 1. 路由中间件
/*Route::group(array('middleware' => 'auth'), function(){

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('route_middleware_get', function(){
        return "laravel route_middleware_get";
    });
});*/
// 2. 路由前缀  路由前缀
/*Route::group(array('prefix' => 'member'), function(){

    Route::get('route_member_get', function(){
        return "laravel route_member_get";
    });
});*/

// 路由中输出视图
Route::get('/', function () {
    return view('welcome');
});


Route::get('member/info', 'MemberController@info');

// 原生 sql 
Route::get('student/sourceQuery', 'StudentController@sourceQuery');

// 查询构造器
Route::get('student/constructQuery', 'StudentController@constructQuery');

// Eloquent ORM
Route::get('student/ormQuery', 'StudentController@ormQuery');

// 模板引擎
Route::get('student/bladeEngine', 'StudentController@bladeEngine');

// 模板中URL
Route::get('student/modelUrl', 'StudentController@modelUrl')->name('model_url');

// controller - request
Route::get('student/ctlRequest', 'StudentController@ctlRequest');

// controller - session; 'web':D:\xampp\htdocs\laravel5_4\app\Http\Kernel.php-29;
Route::group(['middleware' => ['web']], function(){
    Route::any('student/ctlSession1', 'StudentController@ctlSession1');
    Route::any('student/ctlSession2', 'StudentController@ctlSession2');

    // controller - response
    Route::any('ctlResponse', 'StudentController@ctlResponse');
    Route::any('ctlRedirect', 'StudentController@ctlResponseRedirect')->name('ctl_redirect');
});


// controller - 请求, 响应, session,  Middleware ;定义中间件 -> 注册中间件; 活动宣传 -> 活动进行中 -> 活动已结束 
Route::any('mdwActivity0', 'StudentController@mdwActivity0');

Route::group(['middleware' => ['activity']], function(){

    Route::any('mdwActivity1', 'StudentController@mdwActivity1');
    Route::any('mdwActivity2', 'StudentController@mdwActivity2');
});

// 表单 - 静态资源管理, 模板布局, 分页
Route::get('student_index', 'StudentController@index');
Route::group(['middleware' => ['web']], function(){
    
    Route::any('student_create', 'StudentController@formCreate');// 有表单提交, 需要中间件防 CSRF 攻击
    Route::any('student_update/{id?}', 'StudentController@formUpdate', function ($id = 1){
        return '修改学生信息';
    });// 有表单提交, 需要中间件防 CSRF 攻击
});
Route::any('student_update/{id?}', 'StudentController@formUpdate', function ($id = 1){
    return '修改学生信息';
});// 有表单提交, 需要中间件防 CSRF 攻击

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
/**************** Demo-end _201708141640*/
