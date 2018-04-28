<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/18
 * Time: 17:11
 */

namespace app\home\controller;
use think\Controller;

/**
 * 非对应的用户类型不能进入普通用户个人中心或HR信息中心
 * 登录状态，且为合适的类型，否则返回首页
 * */
class Permit1 extends Controller
{
    function _initialize(){
        if(!session('uid')||session('userStatus')!='1'){
            //跳转前台登录界面
            $this->error('请先登录BOSS账号','/login/index');
        }
//        $request=request();
//        $controller=strtolower($request->controller());
//        $action=$request->action();
//        $nodelist=Session::get("nodelist");
//        if(empty($nodelist[$controller])||!in_array($action,$nodelist[$controller])){
//            $this->error("sorry,您没有权限访问该模块,请联系超级管理员","/admin/index");
//        }
    }

}