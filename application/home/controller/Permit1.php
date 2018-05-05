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
    function _initialize()
    {
        $rq = request();
        $c = $rq->controller();
        $a = $rq->action();
        if (!session('uid') || session('user.status') != '1') {
            //跳转前台登录界面
            return $this->error('请先登录BOSS账号', '/homelogin/index');
        }
    
//        var_dump($_SESSION); /*todo 上线前删除*/
    
        if ($c == 'Employer' && empty(session('user.cid'))) {
            if ($a == 'postinsert' || $a == 'getadd') {
                return $this->error('请先添加关联公司，再执行添加工作操作', '/employer/Companyadd');
            }
        }

    }
    
}