<?php
namespace app\common\validate;
use think\Validate;

/**
 * Created by PhpStorm.
 * User: 春春春
 * Date: 2020/11/6
 * Time: 0:00
 */

class Banner extends Validate
{
    protected $rule =   [
        'title'  => 'require|unique:banner',
        'link_url' => 'require|url'
    ];

    protected $message  =   [
        'title.require' => '标题不能为空',
        'title.unique'     => '标题不能重复',
        'link_url.require' => '链接不能为空',
        'link_url.url' => '链接不合法',
    ];
}