<?php
namespace app\admin\controller;

use think\Controller;

class Banner extends Controller
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

    public function lst()
    {
        if (request()->isPost()) {
            $data = input('post.');
             $sort = db('banner')->where('id',$data['id'])->update(array('sort'=>$data['sort']));
             if ($sort){$this->success('排序成功');}else{$this->error('排序失敗');}
        }
        $bannerLst = db('banner')->where('status',1)->order('sort DESC')->paginate(20);
        $this->assign([
            'bannerLst' => $bannerLst,
        ]);
        return view('list');
    }

    public function add()
    {
        if (request()->isPost()) {
            $data = input('post.');
            //            验证器
            $validate = validate('Banner');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            if ($_FILES['img_src']['tmp_name']) {
                $file = request()->file('img_src');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
//                        加上定义在index.php中的常量
                        $bannerSrc = date('Ymd').'/'.$info->getFilename();
                        $data['img_src'] = $bannerSrc;
                    }else{
                        // 上传失败获取错误信息
                        echo $file->getError();
                    }
                }
            }else {
                $this->error('请上传图片');
            }
            $addBanner = db('banner')->insert($data);
            if ($addBanner) {$this->success('上传成功','admin/Banner/lst');}else{$this->error('上传失败');}
        }
        return view();
    }

    public function edit()
    {
        $id = input('id');
        if (request()->isPost()) {
            $data = input('post.');
            //            验证器
            $validate = validate('Banner');
            if (!$validate->check($data)) {
                $this->error($validate->getError());
            }
            if ($_FILES['img_src']['tmp_name']) {
                $file = request()->file('img_src');
                // 移动到框架应用根目录/public/uploads/ 目录下
                if($file){
                    $info = $file->move(ROOT_PATH . 'public' . DS . 'static' . DS . 'uploads');
                    if($info){
                        // 输出 20160820/42a79759f284b767dfcb2a0197904287.jpg
                        $data['img_src'] = $info->getSaveName();
//                        删除原图
                        $ogBanner = db('banner')->field('img_src')->find($id);
                        if ($ogBanner['img_src']) {
                            $oImgSrc = APP_BANNER_UPLODAS.'/'.$ogBanner['img_src'];
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
            $updateBanner = db('banner')->update($data);
            if ($updateBanner !== false) {$this->success('上传成功','admin/Banner/lst');}else{$this->error('上传失败');}
        }
        $bannerEdit = db('banner')->find($id);
        $this->assign([
            'bannerEdit' => $bannerEdit,
        ]);
        return view();
    }

    public function del()
    {
        if (request()->isAjax()) {
            $table = db('banner');
            $id = input('post.id');
            $img_src = 'img_src';
            delBanner($table, $id, $img_src);
            $del = $table->delete($id);
            if ($del) {
                $this->success('删除成功');
            }else {
                $this->error('删除失败');
            }
        }
        return view();
    }
}
