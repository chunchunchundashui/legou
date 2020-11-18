<?php
namespace app\admin\controller;

use catetree\Catetree;
use think\Controller;

class Goods extends Controller
{
    public function lst()
    {
        $goodsLst = db('goods')->alias('g')->field('g.id, goods_name, g.thumb, stock_num, cate_id, c.cate_name, shop_price, market_price, sale_num, weight, weight_unit')->join('cate c', 'g.cate_id = c.id')->order('id DESC')->paginate(10);
        $this->assign([
            'goodsLst' => $goodsLst,
        ]);
        return view('list');
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            //            验证器
//            $validate = validate('goods');
//            if (!$validate->check($data)) {
//                $this->error($validate->getError());
//            }
//            上传缩略图
            if ($_FILES['thumb']['tmp_name']) {
                $file = request()->file('thumb');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $thumbSrc = date('Ymd').'/'.$info->getFilename();
                        $data['thumb'] = $thumbSrc;
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }else {
                $this->error('请上传缩略图');
            }
//            上传详情图
            if ($_FILES['des_img']['tmp_name']) {
                $file = request()->file('des_img');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $des_imgSrc = date('Ymd').'/'.$info->getFilename();
                        $data['des_img'] = $des_imgSrc;
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }else {
                $this->error('请上传详情图');
            }
            $addgoods = model('goods')->save($data);
            if ($addgoods) {$this->success('上传成功','admin/goods/lst');}else{$this->error('上传失败');}
        }
        $cateTree = new Catetree();
        $cateAdd = db('cate')->field('id, cate_name, pid')->select();
        $cateRes = $cateTree->cateTree($cateAdd);
//        获取专题信息
        $specialAdd = db('special')->where('status',1)->select();
        $this->assign([
            'specialAdd' => $specialAdd,
            'cateRes' => $cateRes
        ]);
        return view();
    }

    public function edit()
    {
        $id = input('id');
//        商品基本信息
        $goodsEdit = db('goods')->find($id);
//        处理修改
        if (request()->isPost()) {
            $data = input('post.');
//            上传缩略图
            if ($_FILES['thumb']['tmp_name']) {
                $file = request()->file('thumb');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $thumbSrc = date('Ymd').'/'.$info->getFilename();
                        $data['thumb'] = $thumbSrc;
//                        删除旧的缩略图
                        $this->imgDel($goodsEdit['thumb']);
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }
//            上传详情图
            if ($_FILES['des_img']['tmp_name']) {
                $file = request()->file('des_img');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $des_imgSrc = date('Ymd').'/'.$info->getFilename();
                        $data['des_img'] = $des_imgSrc;
//                        删除旧的详情图
                        $this->imgDel($goodsEdit['des_img']);
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }
            $addgoods = model('goods')->update($data);
            if ($addgoods !== false) {$this->success('修改成功','admin/goods/lst');}else{$this->error('修改失败');}
        }
//        无限极分类
        $cateTree = new Catetree();
        $cateAdd = db('cate')->field('id, cate_name, pid')->select();
        $cateRes = $cateTree->cateTree($cateAdd);
//      商品图片
        $photos = db('photos')->where(array('goods_id'=>$id))->select();
//        获取专题信息
        $specialAdd = db('special')->where('status',1)->select();
//        获取所属专题
        $goodsSpecial = array();
        $_goodsSpecial = db('goods_spe')->where(array('goods_id'=>$id))->select();
        foreach ($_goodsSpecial as $k => $v) {
            $goodsSpecial[] = $v['spe_id'];
        }
        $this->assign([
            'cateRes' => $cateRes,
            'photos' => $photos,
            'goodsEdit' => $goodsEdit,
            'specialAdd' => $specialAdd,
            'goodsSpecial' => $goodsSpecial,
        ]);
        return view();
    }

    public function del()
    {
        if (request()->isAjax()) {
            $goods = model('goods');
            $id = input('post.id');
            $goodsInfo = $goods->field('des_img, thumb')->find($id);
            $this->imgDel($goodsInfo['des_img']);   //  删除详情图
            $this->imgDel($goodsInfo['thumb']);        // 删除缩略图
            $del = $goods::destroy($id);
            if ($del) {
                $this->success('删除成功');
            }else {
                $this->error('删除失败');
            }
        }
        return view();
    }
    
//    异步删除商品相册
    public function delPhoto()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $db = db('photos');
            $photos = $db->find($id);
            $photoSrc = 'photo'. DS . $photos['img_src'];
            $this->imgDel($photoSrc);
            $del = $db->delete($id);
            if ($del !== false) {
                $this->success('删除成功');
            }else {
                $this->success('删除失败');
            }
        }
    }

    public function imgDel($name)
    {
        $imgSrc = APP_BANNER_UPLODAS. '/'. $name;
        if (file_exists($imgSrc)) {
            @unlink($imgSrc);
        }
    }

}
