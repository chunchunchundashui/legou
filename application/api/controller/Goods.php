<?php
namespace app\api\controller;

class Goods
{
    //    获取分类下面的商品
    public function getGoods()
    {
        $cid = input('cid');
        $page = input('page',1);    // 如果没有传递页码就是默认第一页
        $config = ['page'=>$page, 'list_rows' => 6];
        $goodsRes = model('goods')->field('id, goods_name, thumb, shop_price, market_price, stock_num')->where('cate_id',$cid)->order('id DESC')->paginate(null, false, $config);
        return json(['code' => 200, 'msg' => "success", 'goods' => $goodsRes]);
    }

    // 获取商品详情
    public function getGoodsInfo() 
    {
        $goodsid = input('id');
        $goodsInfo = model('goods')->field('id, goods_name, shop_price, market_price, sale_num, stock_num, des_img')->find($goodsid);
        if (!$goodsInfo) {
            $goods = ['status'=>400, 'msg' => 'error'];
        }else {
            // if ($goodsInfo['des_img']) {
            //     // 限制png图片
            //     $img = imagecreatefrompng($goodsInfo['des_img']);
            //     // 获取图片的高度
            //     $goodsInfo['des_img_height'] = imagesy($img);
            // }
            $goodsImg = model('photos')->where('goods_id',$goodsInfo['id'])->select();
            $goods = ['status' => 200, 'msg' => 'success', 'goodsInfo' => $goodsInfo, 'goodsImg' => $goodsImg];
        }
        return json($goods);
    }
}
