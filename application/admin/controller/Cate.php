<?php
namespace app\admin\controller;

use catetree\Catetree;
use think\Controller;

class Cate extends Controller
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

    public function lst()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $sort = db('cate')->where('id',$data['id'])->update(array('sort'=>$data['sort']));
            if ($sort){$this->success('排序成功');}else{$this->error('排序失敗');}
        }
        $cateTree = new Catetree();
        $cateArr = db('cate')->field('id, cate_name, thumb, sort, pid')->order('sort DESC')->select();
        $cateLst = $cateTree->cateTree($cateArr);
        $this->assign('cateLst', $cateLst);
        return view('list');
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            //            验证器
//            $validate = validate('Banner');
//            if (!$validate->check($data)) {
//                $this->error($validate->getError());
//            }
            if ($_FILES['thumb']['tmp_name']) {
                $file = request()->file('thumb');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $bannerSrc = date('Ymd').'/'.$info->getFilename();
                        $data['thumb'] = $bannerSrc;
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }else {
                $this->error('请上传图片');
            }
            $addBanner = db('cate')->insert($data);
            if ($addBanner !== false) {$this->success('添加栏目成功','admin/Cate/lst');}else{$this->error('添加栏目失败');}
        }
        $cateTree = new Catetree();
        $cateAdd = db('cate')->field('id, cate_name, pid')->select();
        $cateRes = $cateTree->cateTree($cateAdd);
        $this->assign('cateRes', $cateRes);
        return view();
    }

    public function edit()
    {
        $id = input('id');
        if (request()->isPost()) {
            $data = input('post.');
            //            验证器
//            $validate = validate('Banner');
//            if (!$validate->check($data)) {
//                $this->error($validate->getError());
//            }
            if ($_FILES['thumb']['tmp_name']) {
                $file = request()->file('thumb');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $bannerSrc = date('Ymd').'/'.$info->getFilename();
                        $data['thumb'] = $bannerSrc;
                        //                        删除原图
                        $ogCate = db('cate')->field('thumb')->find($id);
                        if ($ogCate['thumb']) {
                            $oImgSrc = APP_BANNER_UPLODAS.'/'.$ogCate['thumb'];
                            if (file_exists($oImgSrc)) {
                                @unlink($oImgSrc);
                            }
                        }
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }
            $addBanner = db('cate')->update($data);
            if ($addBanner !== false) {$this->success('修改栏目成功','admin/Cate/lst');}else{$this->error('修改栏目失败');}
        }
        $cateTree = new Catetree();
        $db = db('cate');
        $cateAdd = $db->field('id, cate_name, pid')->select();
        $cateRes = $cateTree->cateTree($cateAdd);
        $cateLst = $db->field('id, cate_name, sort, pid, thumb,description')->find($id);
        $this->assign([
            'cateRes' => $cateRes,
            'cateLst' => $cateLst,
            ]);
        return view();
    }

    public function del()
    {
        if (request()->isAjax()) {
            $id = input('id');
//            获取当前栏目和子栏目的id
            $cateDel = model('cate')->getChildren($id);
            $cateDel[] = intval($id);
//            删除这些栏目下的商品信息及商品图片信息

//            循环删除图片
            $db = db('cate');
            foreach ($cateDel as $k => $v) {
                $cates = $db->field('thumb')->find($v);
                $thumbSrc = APP_BANNER_UPLODAS.'/'.$cates['thumb'];
                if (file_exists($thumbSrc)) {
                    @unlink($thumbSrc);
                }
                $db->delete($v);
            }
            $this->success('删除栏目成功');
        }
    }
}
