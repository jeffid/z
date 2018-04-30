<?php

namespace app\home\controller;

use app\home\controller\Permit1;
//导入Db
use think\Db;
class Index extends Permit1
{
    public function getIndex()
    {
        
        
        
        $env=db::table("carousel")->select();
        var_dump($env);
        return $this->fetch("/index/index",['env'=>$env]);
    }
    function getCompanyindex(){
    
    
//        var_dump($id);
//        $id=25; //todo
        $request = request();
        $id=$request->param('id');
//        var_dump($id);die;
        $row=Db::table('company')->where('id',$id)->find();
        $rew=Db::table('company_addr')->where('co_id',$id)->find();
        $info= count(DB::table("job")->where('co_id',$id)->select());
        $list=count(DB::table("company_admin")->where('co_id',$id)->select());
        $lists=DB::query("select * from job,company_admin where job.co_id=company_admin.co_id and job.co_id=$id");
        $job=Db::table('job')->where('co_id',$id)->select();
        $jobs=Db::table('job')->where('co_id',$id)->find();
        $env=Db::table('company_env')->where('co_id',$id)->find();
        $id=$row['id'];
        $a=[
            '1~3k',
            '3~5k',
            '5~7k',
            '7~9k',
            '9~11k',
            '11~13k',
            '13~15k',
            '15~17k',
            '17~19k',
            '19~21k',
            '21~23k',
            '23~25k',
            '25~27k',
            '27~29k',
            '29~31k',
            '31~33k',
            '33~35k',
            '35~37k',
            '37~39k',
            '39~41k',
            '41~43k',
            '43~45k',
            '45~47k',
            '47~49k',
        ];
//        $job['salary']=$a[$job['salary']];
//        var_dump($job);
        
        return $this->fetch("/company",['row'=>$row,'info'=>$info,'list'=>$list,'job'=>$job,'a'=>$a,'env'=>$env,'lists'=>$lists,'rew'=>$rew,'jobs'=>$jobs,'id'=>$id]);
    }
}
