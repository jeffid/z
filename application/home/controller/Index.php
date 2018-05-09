<?php

namespace app\home\controller;

//导入Db
use think\Controller;
use think\Db;


class Index extends Controller
{
    public function index()
    {
        return $this->getIndex();
    }
    
    public function getIndex()
    {
        /*默认变量组*/
        session('default', []);
        /*默认头像*/
        session('default.avatar', '/static/home/images/avatar/avatar_14.png');
        session('default.logo', '/static/home/images/defaultlogov2.jpg');

        /*轮播数据, 降序,拿最新的*/
        $env = db::table("carousel")->order('id desc')->limit(5)->select();
        /*广告数据*/
        $ad = db::table("advertising")->order('id desc')->limit(2)->select();
        /*全部分类,平行数据*/
        $allCategory = Db::table('category')->select();
        /*分类目录,多维分类数据*/
        $cate = getCategory($allCategory); //通用函数
        $d = [
            'cate' => $cate,
            'env' => $env,
            'ad' => $ad
        ];
//        var_dump($d);
    
        return $this->fetch("index/index", $d);
    }
    
    
}
