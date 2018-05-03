<?php
namespace app\home\controller;

use think\Controller;
use think\Db;
class Companyjob extends Controller
{
    function getIndex()
    {
        $request = request();
        $id = $request->param('25');// todo ??
        $id=25; //todo  公司id
        $row=Db::table('company')->where('id',$id)->find();
        $list=count(DB::table("company_admin")->where('co_id',$id)->select());
        $lists=DB::table("company_admin")->where('co_id',$id)->select();
        $info= count(DB::table("job")->where('co_id',$id)->select());
        $job=Db::table('job')->alias('j')->join('user ca',"j.co_id = ca.co_id and j.co_id={$id} " )->paginate(5);
        $rew=Db::table('company_admin')->where('id',$id)->find();
     
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