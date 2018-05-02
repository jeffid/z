<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/29
 * Time: 23:38
 */

namespace app\home\controller;

use app\home\controller\Permit0;
use think\Db;

class Personal extends Permit0
{
    
    /*列出已投递简历的职位*/
    function getDeliver()
    {
        $rq = request();
        //拿数据
        $where = [
            'uid' => session('uid'),
        ];
        /*todo 分页*/
        $data = Db::table('personal_deliver')->where($where)->select();
        return $this->fetch('/personal/deliver', ['data' => $data]);
    }
    
    /*执行投递简历处理*/
    function getDeliverAdd()
    {
        $rq = request();
        $jid = $rq->param('jid');
//        $status = ['status' => '0'];
        if (replaceRecord('personal_deliver', $jid)) {
            // 跳转到职位详情页
            $this->redirect("/Job/index/jid/{$jid}");
        } else {
            return ['msg' => '简历投递失败'];
        }
    }
    
    /*获得面试邀约列表*/
    function getInterview()
    {
        $where = [
            'uid' => session('uid'),
            'status' => 1,
        ];
        $data = Db::table('personal_deliver')->where($where)->select();
//        var_dump($data);
        return $this->fetch('/personal/interview', ['data' => $data]);
    }
    
    /*感兴趣的职位列表页*/
    function getInterest()
    {
        $where = [
            'uid' => session('uid'),
        ];
        $data = Db::table('personal_interest')->where($where)->select();
        return $this->fetch('/personal/interest', ['data' => $data]);
    }
    
    /*执行添加感兴趣(收藏)处理*/
    function getInterestAdd()
    {
        $rq = request();
        $jid = $rq->param('jid');
//        $status = ['status' => 1];
        if (replaceRecord('personal_Interest', $jid)) {
            // 跳转到职位详情页
            $this->redirect("/Job/index/jid/{$jid}");
        } else {
            return ['msg' => '添加收藏失败'];
        }
    }
    
    
    /*移除出感兴趣列表(收藏)*/
    function getInterestRemove()
    {
        $rq = request();
        $jid = $rq->param('jid');
        $where = [
            'j_id' => $jid,
            'uid' => session('uid'),
        ];
        
        if (Db::table('personal_interest')->where($where)->delete()) {
            /*todo 应以前台ajax接收成功信息并对页面做相应变化为宜，因为指定跳转不灵活*/
            if ($rq->param('list')) {
                $this->redirect("/personal/interest");
            } else {
                /*跳转到职位详情页*/
                $this->redirect("/Job/index/jid/{$jid}");
            }
        } else {
            return ['msg' => '收藏移除失败'];
        }
    }
    
    
}

