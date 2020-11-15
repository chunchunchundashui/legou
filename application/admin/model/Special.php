<?php
namespace app\admin\model;

use think\Model;

class Special extends Model
{
    protected $field = true;    //忽略special表字段
//    后置钩子函数
    protected static function init()
    {
        self::afterDelete(function ($special) {
            $specialId = $special->id;
            db('goods_spe')->where(array('spe_id'=>$specialId))->delete();
        });
    }
}
