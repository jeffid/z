<?php
namespace app\home\controller;

use think\Controller;

/**
 * 必须登录
 * */
class Permit3 extends Controller
{
    function _initialize()
    {
        if (!session('uid')) {
            //跳转前台登录界面
            return $this->error('请先登录', '/homelogin/index');
        }
    }
}