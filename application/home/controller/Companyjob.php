<?php
namespace app\home\controller;

use think\Controller;
use think\Db;
class Companyjob extends Controller
{
    function getIndex()
    {
        $request = request();
        $cid = $request->param('cid');
        if (!$row=Db::table('company')->where('id',$cid)->find()) {
            return $this->redirect('/index/index');
        }
        $list=count(DB::table("company_admin")->where('co_id',$cid)->select());
        $lists=DB::table("company_admin")->where('co_id',$cid)->select();
        $info= count(DB::table("job")->where('co_id',$cid)->select());
        $job=Db::table('job')->alias('j')->join('user ca',"j.co_id = ca.co_id and j.co_id={$cid} " )->paginate(5);
        $rew=Db::table('company_admin')->where('id',$cid)->find();
     
//        $job['salary']=$a[$job['salary']];
//        var_dump($job);
        return $this->fetch("/company_job",[
            'row'=>$row,
            'info'=>$info,
            'list'=>$list,
            'job'=>$job,
            'rew'=>$rew,
            'data' => $request->param(),
            'lists'=>$lists
        ]);
    }
}