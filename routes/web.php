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

Route::get('/', function () {
    return view('welcome');
});

/*************** Demo-start _leeprince-201708141640*/
/*基本路由*/
Route::get('route_basic_get', function(){
    return "laravel route_basic_get";
});
Route::post('route_basic_post', function(){
    return "laravel route_basic_post";
});

/*多请求路由*/
Route::match(['get', 'post'], 'route_match', function(){

    return "laravel route_match";
});
// -响应多种请求类型
Route::any('route_any', function(){

    return "laravel route_any";
});

/*路由参数*/
Route::get('route_params/{id}', function($id){

    return "route_params-id-{$id}";
});
// -可选路由参数
Route::get('route_params_null/{name?}', function($name = null){

    return "route_params-name-{$name}";
});
// -默认路由参数
Route::get('route_params_default/{name?}', function($name = 'leeprince'){

    return "route_params-name-{$name}";
});

/*正则约束*/
// -默认可选单个参数
Route::get('route_where/{id?}', function($id = 0){

    return "raravel route_where-id:{$id}";
})->where('id', '[0-9]+');
// -默认可选数组参数
Route::get('route_where/{id?}/{name?}', function($id = 0, $name = 'leeprince'){

    return "raravel route_where-id:{$id}-name:{$name}";
})->where(array('id' => '[0-9]+', 'name' => '[a-zA-Z]+'));

/*全局路由*/
//配置路径: app/Providers/RouteServiceProvider.php:27

/*命名路由*/
Route::get('route_no_name/profile', function(){
    return "laravel route_no_name";
});
Route::get('route_name/profile', function(){
    return route('profile')."-laravel route_name";
})->name('profile');
// -为控制器操作指定路由
Route::get('route_name/profile', 'NewsController@index')->name('profile');

Route::get('new/index', 'NewsController@index');

Route::get('new/add', 'NewsController@add');

/**************** Demo-end _201708141640*/