<?php
namespace app\api\controller;
use think\Controller;

class Common extends Controller
{
	// 公用校验openid
    public function checkOpenid() 
    {
    	$appid = config('appid');
    	$secret = config('secret');
    	$grant_type = 'authorization_code';
    	$openid = input('openid');
    	$js_code = input('code');
    	$url = 'https://api.weixin.qq.com/sns/jscode2session';
    	$data = [
    		'appid' => $appid,
    		'secret' => $secret,
    		'js_code' => $js_code,
    		'grant_type' => $grant_type
    	];
    	$res = httpCurl($url, $data, 'POST');    	
   		return json($res);
    	if ($res->openid == $openid) {
    		return true;
    	}else {
    		return false;
    	}
    }


    public function restToken($openid) 
    {
    	$data['token'] = getRandChar(32);
    	$data['token_time'] = time();
    	$res = db('user')->where('openid',$openid)->update($data);
    	if ($res) {
    		return $data['token'];
    	}else {
    		return false;
    	}
    }
}
