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
            'signSms' => 'block', // 默认短信登录
            'signRegister' => 'none',
        ];
        return $this->fetch('/signup', $data);
    }
    
    function postSms()
    {
        $rq = request();
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
        
        if (!captcha_check($data['captcha'])) {
            echo '图形验证码不正确';
            return;
        }
        /* 收验证码的手机号==登录手机号，
           提交短信验证码==存session里的验证码，
           在有效时间 */
        if ($data['phoneCode'] != session('phoneCode') && time() > session('phoneCodeExpire') && $data['phone'] != session('phone')) {
            echo '短信验证码不正确或过期';
            return;
        }
        /*手机号提示放在最后,防止恶意猜测用户注册情况*/
        $res = db('user')->where('phone', $data['phone'])->find();
        if (!$res) {
            echo '该手机号未注册,请先注册';
            return;
        }
        $this->loginSuccess($res);

//        echo 'ok';
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
        
        $res = db('user')->where($data)->find();
        if (!$res) {
            echo '该手机号未注册或密码错误';
            return;
        }
        $this->loginSuccess($res);
//        echo 'ok';
    }
    
    function loginSuccess($user)
    {
        $userinfo = db('resume_info')->where('uid', $user['id'])->find() ?? [];
        $username = $userinfo['in_name'] ?? '未实名';
        session('username', $username); //用户实名
        session('uid', $user['id']); //用户id
        session('phone_postfix', $user['phone_postfix']); //短手机号
        session('phone', $user['phone']); //长手机号
        session('userStauts', $user['status']); //用户角色状态
        session('phoneCode', null); //删除短信验证码
        
       return $this->redirect('/index/index');
    }
}