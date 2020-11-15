<?php
namespace app\admin\controller;

use think\Controller;

class Special extends Controller
{
    public function lst()
    {
        $specialLst = db('special')->order('id DESC')->paginate(20);
        $this->assign([
            'specialLst' => $specialLst,
        ]);
        return view('list');
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            if ($_FILES['spe_img']['tmp_name']) {
                $file = request()->file('spe_img');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads'. DS . 'special');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $specialSrc = date('Ymd').'/'.$info->getFilename();
                        $data['spe_img'] = $specialSrc;
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }else {
                $this->error('请上传图片');
            }
            $addSpecial = db('special')->insert($data);
            if ($addSpecial !== false) {$this->success('上传成功','admin/special/lst');}else{$this->error('上传失败');}
        }
        return view();
    }

    public function edit()
    {
        $id = input('id');
        if (request()->isPost()) {
            $data = input('post.');
            if ($_FILES['spe_img']['tmp_name']) {
                $file = request()->file('spe_img');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads'. DS . 'special');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $specialSrc = date('Ymd').'/'.$info->getFilename();
                        $data['spe_img'] = $specialSrc;
                        $specials = db('special')->field('spe_img')->find($id);
                        if ($specials['spe_img']){
                            $oImgSrc = APP_BANNER_UPLODAS.'/'.'special'.'/'.$specials['spe_img'];
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
            $addSpecial = db('special')->update($data);
            if ($addSpecial !== false) {$this->success('修改成功','admin/special/lst');}else{$this->error('修改失败');}
        }
        $specialEdit = db('special')->find($id);
        $this->assign([
            'specialEdit' => $specialEdit,
        ]);
        return view();
    }

    public function del()
    {
        if (request()->isAjax()) {
            $id = input('post.id');
            $delBanner = db('special')->field('spe_img')->find($id);
            if ($delBanner['spe_img']){
                $oImgSrc = APP_BANNER_UPLODAS.'/'.'special'.'/'.$delBanner['spe_img'];
                if (file_exists($oImgSrc)) {
                    @unlink($oImgSrc);
                }
            }
            $del = model('special')::destroy($id);
            if ($del) {
                $this->success('删除成功');
            }else {
                $this->error('删除失败');
            }
        }
        return view();
    }
}
