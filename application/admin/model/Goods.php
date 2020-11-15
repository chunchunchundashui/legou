<?php
namespace app\admin\model;

use think\Model;

class Goods extends Model
{
    protected $field = true;    //忽略goods表字段
//    后置钩子函数
    protected static function init()
    {
        self::afterInsert(function ($goods) {
            $data = input('post.');
            $goodsId = $goods->id;
            if ($_FILES['photo']) {
                $goods->upload($goodsId);
            }
//            判断专题是否存在
            if (isset($data['specialId'])) {
                foreach ($data['specialId'] as $k => $v) {
                    db('goods_spe')->insert(array('goods_id'=>$goodsId,'spe_id'=>$v));
                }
            }
        });

        self::beforeUpdate(function ($goods) {
            $data = input('post.');
            $goodsId = $goods->id;
            if ($_FILES['photo']) {
                $goods->upload($goodsId);
            }
//            修改专题id
            if (isset($data['specialId'])) {
                db('goods_spe')->where(array('goods_id' => $goodsId))->delete();
                foreach ($data['specialId'] as $k => $v) {
                    db('goods_spe')->insert(array('goods_id'=>$goodsId,'spe_id'=>$v));
                }
            }else {
                db('goods_spe')->where(array('goods_id' => $goodsId))->delete();
            }
        });
    }

//    多文件上传
    public function upload($goodsId){
        // 获取表单上传文件
        $files = request()->file('photo');
        foreach($files as $file){
            // 移动到框架应用根目录/public/uploads/ 目录下
            $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads' . DS . 'photo');
            if($info){
                // 输出 42a79759f284b767dfcb2a0197904287.jpg
                $imgSrc = date('Ymd').'/'.$info->getFilename();
                db('photos')->insert(['goods_id' => $goodsId, 'img_src' => $imgSrc]);
            }else{
                // 上传失败获取错误信息
                echo $file->getError();
            }
        }
    }
}
