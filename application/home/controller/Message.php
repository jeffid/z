<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/5/6
 * Time: 19:02
 */

namespace app\home\controller;

use app\home\controller\Permit3;
use think\Db;

class Message extends Permit3
{
    function getIndex()
    {
        return $this->getAll();
    }
    
    function getAll()
    {
        $rq = request();
        $data = Db::table('msglog')
            ->alias('ml')
            ->join('msg', 'msg.id= ml.m_id')
            ->where([
                'ml.receiver_id' => session('uid'), //当前登录用户id
                'ml.status' => ['<>', -1], //未删除的
            ])
            ->field([
                'ml.id' => 'id',
                'ml.scope',
                'ml.status',
                'msg.id' => 'm_id',
                'msg.sender_id',
                'msg.title',
                'msg.content',
                'msg.addtime',
            ])
            ->paginate(20);

//        var_dump($data);
        $page = $data->appends($rq->param())->render();
        
        return $this->fetch('/message/all', [
            'data' => $data,
            'page' => $page,
        ]);
    }
    
    function getUnread()
    {
        $rq = request();
        $data = Db::table('msglog')
            ->alias('ml')
            ->join('msg', 'msg.id= ml.m_id')
            ->where([
                'ml.receiver_id' => session('uid'), //当前登录用户id
                'ml.status' => '0', //未读的
            ])
            ->field([
                'ml.id' => 'id',
                'ml.scope',
                'ml.status',
                'msg.id' => 'm_id',
                'msg.sender_id',
                'msg.title',
                'msg.content',
                'msg.addtime',
            ])
            ->paginate(20);

//        var_dump($data);
        $page = $data->appends($rq->param())->render();
        
        return $this->fetch('/message/unread', [
            'data' => $data,
            'page' => $page,
        ]);
    }
    
    function getDetail()
    {
        $rq = request();
        $m_id = $rq->param('mid');
        
        /*拿出指定消息内容*/
        $msg = Db::table('msg')->where('id', $m_id)->find();
        
        /*修改为已读状态,1*/
        Db::table('msglog')->where([
            'm_id'=> $m_id, // 消息id
            'receiver_id'=>session('uid'), //当前登录用户id
        ])->update(['status'=>1]);
        
        return $this->fetch('/message/detail', [
            'item' => $msg,
            'url' => $rq->param('url'),
        ]);
    }
}