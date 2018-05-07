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
//        session('admin');
//        echo  '<pre>';
//        print_r($_SESSION);
//        echo  '</pre>';

        
        /*总用户数*/
        $total_user=Db::table('user')->count('id');
        /*今日新用户数*/
        $new_user=Db::table('user')->where('addtime','>',strtotime(date('Y-m-d')))->count('id');
        
        /*总招聘数*/
        $total_job=Db::table('job')->count('id');
        /*今日发布招聘数*/
        $new_job=Db::table('job')->wheretime('timestamp','today')->count('id');
//        $new_job=Db::table('job')->where('timestamp','>',strtotime(date('Y-m-d')))->count('id');
        
        return $this->fetch("Admin/index",[
            'username'=>session('username'),
            'group'=>session('name'),
            'count'=>session('admin.count'),
            'cur_ip'=>$_SERVER['REMOTE_ADDR'],
            'last_ip'=>session('admin.last_ip'),
            'last_time'=>session('admin.last_time'),
            
            'server_software'=>$_SERVER['SERVER_SOFTWARE'],
            'server_name'=>$_SERVER['SERVER_NAME'],
            
            'total_user'=>$total_user,
            'new_user'=>$new_user,
            'total_job'=>$total_job,
            'new_job'=>$new_job,
        ]);
    }
}
