<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends  Model
{
	// 定义关联表名, 默认是该模型类的复数,即该类中默认的表名为:students
    protected $table = 'student';

    // 定义关联表的主键, 默认是id,
   	protected $primaryKey = 'id';

   	// 是否使用 laravel 自动管理的数据列(字段) created_at 和 updated_at 的格式化时间;
    public $timestamps = false;

    // 如果你需要自定义用于存储时间戳的字段名称，可以在模型中设置 CREATED_AT 和 UPDATED_AT 常量：
    const CREATED_AT = 'created_at';
	const UPDATED_AT = 'updated_at';

    // 性别
    const SEX_BOY  = '男'; //男
    const SEX_GIRL = '女'; //女

    // 批量赋值白名单
    protected $fillable = ['name', 'age', 'sex'];

    // 序列化
    // 序列化为数组 或者 Json 中隐藏属性
    protected $hidden = ['sex'];

    // 序列化 - $visible 属性来定义模型数组和 JSON 显示的属性白名单; 当隐藏属性和白名单同时存在时,不会显示
    // protected $visible = ['name', 'sex', 'age'];

    // 序列化 - 追加到模型数组表单的访问器
    protected $appends = ['is_admin'];

    // 批量赋值黑名单
    // protected $guarded = ['guarded_field'];

    // 保存数据时, 不使用 laravel 自动管理的数据列的时间格式设置, 自定义存储数据库的时间格式
    protected function getDateFormat()
    {
    	// 注意数据库中的数据类型;
    	// return date('Y-m-d');
    	// return date('Y-m-d H:i:s');
    	return time();
    }

    // 不使用 laravel 自动转化的时间格式, 保留输出的时间类型
    protected function asDateTime($val)
    {
    	return $val;
    }

    // 性别
    public function getSex($bool = null)
    {
        $sexArray = [
            0 => self::SEX_BOY,
            1 => self::SEX_GIRL,
        ];

        if($bool !== null){
            return ($bool)? self::SEX_GIRL : self::SEX_BOY;
        }

        return $sexArray;
    }

    /**
    * 为用户获取管理员标识
    *
    * @return bool
    */
    public function getIsAdminAttribute()
    {
        return $this->attributes['admin'] = "yes";
    }

}