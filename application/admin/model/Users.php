<?php
namespace app\admin\model;
//导入底层Model类
use think\Model;
	//模型类
	class Users extends Model{
		//设置模型类对应的数据表
		protected $table="user";
		//获取器 可以对数据自动转换
		 public function getStatusAttr($value){
	        $status = [0=>'开启',1=>'禁用',2=>'待审核'];
	        return $status[$value];
    	}
	} 
 ?>