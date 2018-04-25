<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/18
 * Time: 20:45
 */

namespace app\home\controller;
use app\home\controller\Permit1;

/**
 * 添加、修改公司信息，提交后为禁用状态，后台管理可审核通过，通过后方可添加招聘岗位
 * 可看到投递的简历，并发出面试邀约
 * */
class Employer extends Permit1
{
    function getIndex(){
        return $this->fetch('/login');
    }
    function getpwd(){
        return $this->fetch('/tt/password');
    }
    function getAddjob(){
        return $this->fetch('/tt/addjob');
    }
}