<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/18
 * Time: 20:45
 */

namespace app\home\controller;

use think\Controller;
use think\Db;

/**
 * 图片验证码
 * 手机验证码
 * *提交后进个人中心，可修改个人简历信息
 * */
class Signup extends Controller
{
    function getIndex()
    {
        $data = [
            'signPwd' => 'none',
            'signSms' => 'none',
            'signRegister' => 'block',
        ];
        return $this->fetch('/signup', $data);
    }
    
    function postSms()
    {
        $rq = request();
        $phone = $rq->param('regionCode') . $rq->param('phone');
        echo sms($phone);
    }
    
    function postSignup()
    {
        $rq = request();
        
        $data['captcha'] = $rq->param('captcha');
        $data['phoneCode'] = $rq->param('phoneCode');
        
        $data['phone_prefix'] = $rq->param('regionCode');
        $data['phone_postfix'] = $rq->param('phone');
        $data['phone'] = $rq->param('regionCode') . $rq->param('phone');
        $data['status'] = $rq->param('purpose');
        $data['addtime'] = time();
        /* 验证以上5项 */
        $result = $this->validate($data, 'User.signup');
        if ($result === true) {
            /* 短信验证码验证 */
            if ($data['phone'] == session('phone') && $data['phoneCode'] == session('phoneCode') && time() < session('phoneCodeExpire')) {
                session('phoneCode', null); //删除验证码,防止重用
                echo db('user')->strict(false)->insert($data) ? 'ok' : 'error';
//                unset($data['captcha']);
//                unset($data['phoneCode']);
//               echo db('user')->insert($data);
            } else {
                echo '短信验证码不正确或过期';
            }
        } else {
            echo $result;
//            return;
        }
    }
    
}