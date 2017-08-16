<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends  Model
{
	// 定义关联表名, 默认是该模型类的复数,即该类中默认的表名为:students
    protected $table = 'student';

    // 定义关联表的主键, 默认是id,
   	protected $primaryKey = 'id';

   	// 是否使用 laravel 自动管理的数据列(字段)created_at 和updated_at的时间戳;
    public $timestamps = true;

    // 自动管理的数据列的时间格式设置
    protected function getDateFormat()
    {
    	// 注意数据库中的数据类型;
    	// return date('Y-m-d');
    	// return date('Y-m-d H:i:s');
    	return time();
    }
    // protected function asDateFormat($val)
    // {
    // 	return time($val);
    // }

}