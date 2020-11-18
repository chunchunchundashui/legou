<?php
namespace app\api\controller;

class Cate
{
    //    获取顶级分类接口
    public function getTopCate()
    {
        $topCateRes = db('cate')->field('id, cate_name')->where('pid',0)->order('sort DESC')->select();
        return json($topCateRes);
    }

//    获取当前栏目信息
    public function getCateInfo($id)
    {
        $cateInfo = model('cate')->field('id, cate_name, thumb')->find($id);
        return json($cateInfo);
    }

//    获取二级栏目
    public function getSonCate($pid)
    {
        $sonCateRes = model('cate')->field('id, cate_name, thumb')->where('pid', $pid)->order('sort DESC')->select();
        return json($sonCateRes);
    }

    // 获取同级的所有二级分类
    public function getCates($cid) {
    	$cateInfo = model('cate')->field('id, pid, description, cate_name')->find($cid);
    	$cates = model('cate')->field('id, cate_name, pid')->where(array('pid' => $cateInfo['pid']))->select();
    	return json(['cates'=>$cates, 'description' => $cateInfo['description']]);
    }
}
