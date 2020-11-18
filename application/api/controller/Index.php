<?php
namespace app\api\controller;

class Index
{
    //    轮播图接口
    public function getBanner()
    {
//        $bannerLst = db('banner')->field('id, img_src, link_url')->where('status',1)->order('sort DESC')->limit(5)->select();
//        foreach ($bannerLst as $k => $v) {
//            $bannerLst[$k]['img_src'] = config('http').'/'.$v['img_src'];
//        }
        $bannerLst = model('banner')->field('id, img_src, link_url')->where('status',1)->order('sort DESC')->limit(5)->select();
        return json($bannerLst);
    }
}
