<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Resume extends Allow
{
//简历列表
    public function getIndex()
    {
        //获取会员列表数据
        $request = request();
        $id = $request->param('id');
        
        //获取简历信息
        $info = Db::table('resume_info')->where('uid',$id)->select();
        $hi = Db::table('resume_history')->where('uid',$id)->select();
        $ed = Db::table('resume_education')->where('uid',$id)->select();
        $ad= Db::table('resume_adventage')->where('uid',$id)->select();
    
        return $this->fetch("Resume/index", ['info' => $info,'hi'=>$hi,'ed'=>$ed,'ad'=>$ad]);
    }
}
