<?php
namespace app\admin\model;

use think\Model;

class Banner extends Model
{
//    每次通过模型的方式读取到数据库的数据 就会执行下面这个方法
//    public function get**Attr($value)   **表示当前表的字段进行操作必须是驼峰命名法    $value每次读取字段的值
//    {
//
//    }
    public function getImgSrcAttr($value)
    {
        return config('queue.baseurl').$value;
    }
}
