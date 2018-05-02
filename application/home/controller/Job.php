<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/18
 * Time: 20:45
 */


namespace app\home\controller;
use app\home\controller\Permit1;
use think\Controller;
use think\Db;

class Job extends Controller
{
    function getIndex(){
        
        $rq=request();
        $jid=$rq->param('jid');
        $where=[
            'id'=>$jid,
            'status'=>1,
        ];
        $row=Db::table("job")->where($where)->find(); //参数
        if (!$row) {
            /*没找到id对应工作时跳到首页*/
            return $this->redirect('/index/index');
        }
        
        $hr=Db::table('user')->where('id',$row['hr_id'])->find();
        $info=Db::table("company")->where('id',$row['co_id'])->find();
        $list=Db::table("company_admin")->where('co_id',$row['co_id'])->find();
    
        $deliver_status=null;
        $interest_status=null;
        
        if ($uid=session('uid')) {
            /*当前用户已投递的,状态 1*/
            $deliver_status=Db::table('personal_deliver')->where(['j_id'=>$jid,'uid'=>$uid])->find() ? 1 :0;
            /*当前用户已加入感兴趣单的,状态 1*/
            $interest_status=Db::table('personal_interest')->where(['j_id'=>$jid,'uid'=>$uid])->find() ? 1 :0;
        }
        
//        $row['salary']=salary2text($row['salary']); //转换移到模板里做了
        $d=[
            'row'=>$row,
            'info'=>$info,
            'list'=>$list,
            'hr'=>$hr,
            'deliver_status'=>$deliver_status,
            'interest_status'=>$interest_status,
            'jid'=>$jid,
            ];
        return $this->fetch('/job_detail',$d);
    }
}