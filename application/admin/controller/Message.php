<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Message extends Allow
{
    public function getIndex(){
        $rq = request();
        $scope=$rq->param('scope')??3; //todo 消息发送范围组,默认显示系统消息
       $msg=Db::table("msg")->where('scope',$scope)->order('addtime desc')->paginate(8);
        //加载模板
        return $this->fetch("message/index",[
            'msg'=>$msg,
            'scope'=>$scope,
            'page'=>$msg->appends($rq->param())->render(),
            ]);
    }

    public function getAdd(){
        /* 目前仅能添加系统消息这一种*/
        return $this->fetch("/message/add");
    }
    
    public function getDetail(){
        /* 单条消息详情 */
        $rq=request();
        $msg=Db::table("msg")->where('id',$rq->param('id'))->find();
        return $this->fetch("/message/detail",[
            'msg'=>$msg,
            'url'=>$rq->param('url'),
        ]);
    }
    
    public function postInsert(){
        //请求对象
        $rq=request();
        //获取表单数据
        $data=$rq->only(['title','content','scope']);
        $data['addtime']=time();
        $data['sender_id']=session('admin.id');
        
        if(Db::table("msg")->insert($data)){
            $this->redirect("/message/index");
        }else{
            $this->error("添加失败","/message/add");
        }
    }

    public function getEdit(){
        $rq = request();
        $id = $rq->param('id');
        $msg = Db::table('msg')->where('id', $id)->find();
        return $this->fetch("/message/edit",[
            'msg'=>$msg,
            'url'=>$rq->param('url'),
        ]);
    }
    
    public function postUpdate(){
        $rq=request();
        if(Db::table("msg")->strict(false)->update($rq->param())){
            $this->redirect($rq->param('url')??"/message/index");
        }else{
            $this->error("内容没有修改","/message/edit/id/{$rq->param('id')}");
        }
    }
}