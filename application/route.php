<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2018 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------


use think\Route;

/**后台******************/
Route::controller("/user","admin/User");

Route::controller("/admin","admin/Admin");
//后台用户模块
Route::controller("/adminuser","admin/User");
//后台登录模块
Route::controller("/login","admin/Login");
//简历模块
Route::controller("/resume","admin/Resume");
//权限模块
Route::controller("/permissions","admin/Permissions");
//后台角色管理
Route::controller("/rolelist","admin/Rolelist");
//品牌模块
Route::controller("/company","admin/Company");
//公告模块
Route::controller("/articles","admin/Articles");
//轮播图模块
Route::controller("/carousel","admin/Carousel");
//链接友情模块
Route::controller("/links","admin/Links");
//分类模块
Route::controller("/category","admin/Category");
//广告
Route::controller("/advertising","admin/Advertising");
//友情链接模块
Route::controller("/adminlinks","admin/links");
//站内信模块
Route::controller("/message","admin/message");


/*前台**********************************************/
//登录
Route::controller('/homelogin','home/Login');
//前台注册
Route::controller("/signup","home/Signup");
//公司主页
Route::controller("/companys","home/Company");
//公司招聘职位
Route::controller("/companyjob","home/Companyjob");
//账号管理  发布信息 已收信息 手机号 密码修改 企业
Route::controller("/employer","home/Employer");
//求职 职位详情
Route::controller("/job","home/Job");
//网站主页
Route::controller("/index","home/Index");
//短链接
//Route::get('/','home/Index/index');
//Route::get('/','home/Index/getindex');
Route::get('/','/index/index');

/**********/
//普通用户个人中心
Route::controller('/personal','home/Personal');
//普通用户其它相关
Route::controller('/employee','home/Employee');
//搜索
Route::controller('/search','home/Search');
//站内信模块
Route::controller("/msg","home/message");
