<?php 

namespace  App\Http\Controllers;

use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{

	public function setCache()
	{
		// 设置缓存值
		// 设置缓存值 - put() 设置缓存键值
		Cache::put('key_1', 'val_1', 10);

		// 设置缓存值 - add() 不存在缓存时则设置,返回 true ;存在时不设置, 返回 false; 
		/*$bool = Cache::add('key_2', 'val_2', 1);
		var_dump($bool);*/

		// 设置缓存值 - forever() forever 方法用于持久化存储数据到缓存，这些值必须通过 forget 方法手动从缓存中移除：
		// Cache::forever('key_3', 'val_3');

		// 移除缓存值
		// 移除缓存值 - forget() 使用 Cache 门面上的 forget 方法从缓存中移除缓存项数据：
		// Cache::forget('key_2');

		//移除缓存值 - flush() 使用 flush 方法清除所有缓存
		// Cache::flush();
		
	}

	public function getCache()
	{
		// 获取缓存值
		// 获取缓存值 - get() 获取缓存键对应的值
		// $val = Cache::store('file')->get('key_1');
		$val = Cache::get('key_1', "default_val_1"); // 默认是file
		$val = Cache::get('key_2', "default_val_2");
		$val = Cache::get('key_2.1', "default_val_2.1");
		$val = Cache::get('key_3', "default_val_3");

		// 获取缓存值 - pull() 如果你需要从缓存中获取缓存项然后删除，你可以使用 pull 方法，和 get 方法一样，如果缓存项不存在的话返回 null
		$val = Cache::pull('key_1');

		$val = Cache::get('key_3', "default_val_3");
		
		echo $val;
	}
}

