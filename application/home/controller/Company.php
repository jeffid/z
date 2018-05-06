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
        
        $lists=DB::table('user')->where('co_id',$id)->field('id,username,position,avatar')->select();
        
        $job=Db::table('job')->where('co_id',$id)->select();
        $jobs=Db::table('job')->where('co_id',$id)->find();
        $env=Db::table('company_env')->where('co_id',$id)->find();
        
       if(!empty($lists)){
           foreach ($lists as &$item){
               $hrjob=Db::table('job')->where('hr_id',$item['id'])->order('id desc')->select();
               if (!empty($hrjob)){
                   $item['count']=count($hrjob);
                   $item['newjobname']=$hrjob[0]['job'] ;
               }
           }
       }
//        $job['salary']=$a[$job['salary']];
//        var_dump($lists);die;
    
    
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