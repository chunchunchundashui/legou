<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

//删除带有图片的数据
/**
 * @param $table    表名称
 * @param $id       删除的id
 * @param $img_src  删除图片的路径
 */
function delBanner($table, $id, $img_src) {
    $delBanner = $table->field($img_src)->find($id);
    if ($delBanner[$img_src]){
        $oImgSrc = APP_BANNER_UPLODAS.'/'.$delBanner[$img_src];
        if (file_exists($oImgSrc)) {
            @unlink($oImgSrc);
        }
    }
}