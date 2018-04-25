<?php
namespace app\home\validate;
use think\Validate;

class User extends Validate{
	protected $rule=[
		'phone_prefix'=>"require",
		'phone_postfix'=>"require|number",
		'phone'=>"require|unique:user",
		'captcha'=>"require|captcha",
		];
	//设置规则信息
	protected $message=[
		'phone_prefix.require'=>'地区编号不能为空',
		'phone_postfix.require'=>'手机号不能为空',
		'phone_postfix.number'=>'手机号须为数字',
		'phone.unique'=>'手机号已被注册,请换号或直接登录',
        'captcha.require'=>'请填写图形验证码',
        'captcha.captcha'=>'图形验证码不正确',
						];
	//验证场景
	protected $scene = [
        'signup'   =>  ['phone_prefix','phone_postfix','phone','captcha'],
        'login'   =>  ['phone_prefix','phone_postfix','phone','captcha'],
 
    ];
}
 ?>