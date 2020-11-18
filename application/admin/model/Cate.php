<?php
namespace app\admin\model;

use think\Model;

class Cate extends Model
{

//    获取子栏目
    public function getChildren($id)
    {
        $data = self::select();
        return $this->_getChildren($data, $id);
    }

    private function _getChildren($data, $id)
    {
        static $arr = array();
        foreach ($data as $k => $v) {
            if ($v['pid'] == $id) {
                $arr[] = $v['id'];
                $this->_getChildren($data, $v['id']);
            }
        }
        return $arr;
    }
}
