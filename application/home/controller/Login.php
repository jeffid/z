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
            'title' => '【BOSS直聘登录】',
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
            return ['msg' => '图形验证码不正确'];
        }
        /* 收验证码的手机号==登录手机号，
           提交短信验证码==存session里的验证码，
           在有效时间 */
        if ($data['phoneCode'] != session('phoneCode') || time() > session('phoneCodeExpire') || $data['phone'] != session('phone')) {
            return ['msg' => '短信验证码不正确或过期'];
        }
        /*手机号提示放在最后,防止恶意猜测用户注册情况*/
        $res = db('user')->where('phone', $data['phone'])->find();
        if (!$res) {
            return ['msg' => '该手机号未注册,请先注册'];
        }
        
        /*登录成功，可以跳转*/
        return $this->loginSuccess($res);
    }
    
    /* 密码模式登录 */
    function postLoginPwd()
    {
        $rq = request();
        
        $data['password'] = md5($rq->param('password'));
        $data['phone'] = $rq->param('regionCode') . $rq->param('phone');
        
        
        if (!captcha_check($rq->param('captcha'))) {
            return ['msg' => '图形验证码不正确'];
        }
        
        $res = db('user')->where($data)->find();
        if (!$res) {
            return ['msg' => '该手机号未注册或密码错误'];
        }
        /*登录成功，可以跳转*/
        return $this->loginSuccess($res);
//        echo 'ok';
    }
    
    function loginSuccess($user)
    {
        $username = $user['username'] ?? '未实名';
        session('userName', $username); //用户实名
        session('userPosition', $user['position']); //用户职位
        session('uid', $user['id']); //用户id
        session('phonePostfix', $user['phone_postfix']); //短手机号
        session('phone', $user['phone']); //长手机号
        session('userStatus', $user['status']); //用户角色状态
        session('userPassword',$user['password']);
//        session('phoneCode', null); //删除短信验证码 todo

        return ['msg' => 'ok', 'redirect' => '/index/index'];
    }
    
    function getLogout(){
        session('userName', null); //用户实名
        session('userPosition', null['position']); //用户职位
        session('uid', null); //用户id
        session('phonePostfix', null); //短手机号
        session('phone', null); //长手机号
        session('userStatus', null); //用户角色状态
        session('userPassword',null);
    
    
        return $this->redirect('/index/index');
    }
}