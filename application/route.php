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

Route::controller('/index','home/Index');
Route::controller('/login','home/Login');
Route::controller('/signup','home/Signup');
Route::controller('/resume','home/Resume');
Route::controller('/job','home/Job');
Route::controller('/company','home/Company');
Route::controller('/employee','home/Employee');
Route::controller('/employer','home/Employer');

