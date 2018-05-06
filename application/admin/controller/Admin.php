<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller;
use think\Controller;
//导入Db
use think\Db;

class Admin extends Allow{
    //加载后台首页
    public function getIndex(){
//        var_dump($_SESSION);
        session('admin');
//        echo  '<pre>';
//        print_r($_SESSION);
//        echo  '</pre>';
//
        $user=Db::table("user")->select();
        return $this->fetch("Admin/index",[
            'user'=>$user,
        ]);
    }
}
