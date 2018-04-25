<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/18
 * Time: 20:45
 */

namespace app\home\controller;
use think\Controller;

class Login extends Controller
{
    function getIndex()
    {
        $data = [
            'signPwd' => 'none',
            'signSms' => 'block',
            'signRegister' => 'none',
        ];
        return $this->fetch('/signup', $data);
    }
    function postSms()
    {
        $rq = request();
//        echo json_encode($rq->param());
        $phone = $rq->param('regionCode') . $rq->param('phone');
        echo sms($phone);
    }
    
    /* 短信模式登录 */
    function postLoginSms()
    {
        $rq = request();
        
        $data['captcha'] = $rq->param('captcha');
        $data['phoneCode'] = $rq->param('phoneCode');
        $data['phone'] = $rq->param('regionCode') . $rq->param('phone');
    
        if (count(db('user')->where('phone',$data['phone'])->select())<1) {
            echo '该手机号未注册';
            return;
        }
        if (!captcha_check($data['captcha'])) {
            echo '图形验证码不正确';
            return;
        }
        /* 收验证码的手机号==登录手机号，
           提交短信验证码==存session里的验证码，
           在有效时间 */
        if ($data['phoneCode'] != session('phoneCode') && time() > session('phoneCodeExpire')&& $data['phone']!=session('phone')) {
            echo '短信验证码不正确或过期';
            return;
        }
        // todo 存入短手机号,用户id,信息表里的实名,用户类型
        echo 'ok';
    }
    
    /* 密码模式登录 */
    function postLoginPwd()
    {
        $rq = request();
        
        $data['password'] = md5($rq->param('password'));
        $data['phone'] = $rq->param('regionCode') . $rq->param('phone');
    

        if (!captcha_check($rq->param('captcha'))) {
            echo '图形验证码不正确';
            return;
        }
        if (count(db('user')->where($data)->select())<1) {
            echo '该手机号未注册或密码错误';
            return;
        }
        
        // todo 存入短手机号,用户id,信息表里的实名
        echo 'ok';
    }
}