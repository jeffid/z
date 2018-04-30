<?php

namespace app\admin\validate;

//导入Validate
use think\Validate;

class Uuu extends Validate
{
    //设置规则
    protected $rule = [
        // require 字段不能为空  regex 正则规则  unique 数据唯一规则 users 数据表
        'username' => "require|regex:\d{11}|unique:user",
    ];
    
    //设置规则信息
    protected $message = [
        'username.require' => '用户名不能为空',
        'username.regex' => '手机号必须是11位数',
        'username.unique' => '用户名重复',
    
    
    ];
    //验证场景
    protected $scene = [
        'add' => ['username'],
    
    ];
}

?>