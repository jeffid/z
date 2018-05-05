<?php
namespace app\home\controller;

use think\Controller;
use think\Db;
class Company extends Controller
{
    function getIndex(){
        $rq=request();
        $id=$rq->param('cid');
        $row=Db::table('company')->where('id',$id)->find();
        if (!$row) {
//            return $this->error('无此公司','/index/index');
            return $this->redirect('/index/index');
        }
        $rew=Db::table('company_addr')->where('co_id',$id)->find();
        $info= count(DB::table("job")->where('co_id',$id)->select());
        $list=count(DB::table("company_admin")->where('co_id',$id)->select());
        $lists=DB::query("select * from job,company_admin where job.co_id=company_admin.co_id and job.co_id=$id");
        $job=Db::table('job')->where('co_id',$id)->select();
        $jobs=Db::table('job')->where('co_id',$id)->find();
        $env=Db::table('company_env')->where('co_id',$id)->find();
       
//        $job['salary']=$a[$job['salary']];
//        var_dump($job);
        
        return $this->fetch("/company",[
            'row'=>$row,
            'info'=>$info,
            'list'=>$list,
            'job'=>$job,
            'env'=>$env,
            'lists'=>$lists,
            'rew'=>$rew,
            'jobs'=>$jobs
        ]);
    }
}