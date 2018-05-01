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
        /*默认变量组*/
        session('default',[]);
        /*默认头像*/
        session('default.avatar','/static/home/images/avatar/avatar_14.png');
        session('default.logo','/static/home/images/defaultlogov2.jpg');
    
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
        if ($result !== true) {
            return ['msg' => $result];
        }
        
        /* 短信验证码验证 */
        if (!sms_check($data['phone'], $data['phoneCode'])) {
            return ['msg' => '短信验证码不正确或过期'];
        }
//                unset($data['captcha']);
//                unset($data['phoneCode']);
//               echo db('user')->insert($data);
        $id = db('user')->strict(false)->insertGetId($data);
        if ($id) {
            session('uid', $id); //用户id
            session('user.name', '未实名'); //用户实名
            session('user.phonePostfix', $data['phone_postfix']); //短手机号
            session('user.phone', $data['phone']); //长手机号
            session('user.status', $data['status']); //用户角色状态
            /* 前台重定向
             * HR 跳转到账号管理
             * 牛人 跳转到简历
             * */
            if ($data['status']=='0') {
            return ['msg' => 'ok', 'redirect' => '/employee/resume'];
            }
            if ($data['status']=='1') {
            return ['msg' => 'ok', 'redirect' => '/employer/info'];
            }
            
        } else {
            return ['msg' => '异常，注册失败'];
        }
        
    }
    
    
    function getGuide()
    {
        return $this->fetch('/guide');
    }
    
    function getProtocol()
    {
        return $this->fetch('/guide');
    }
    
}