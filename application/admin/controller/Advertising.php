<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Advertising extends Allow
{
    //添加广告图列表
    public function getAdd(){
        $request=request();
        //获取搜索的关键字
        $k=$request->param('search');
        $data=Db::table('company')->field('name,bgs,id')->where("name",'like',"%".$k."%")->paginate(10);
//        var_dump($data);
        return $this->fetch("advertising/add",['data'=>$data,'con'=>$request->param(),'k'=>$k]);
    }
    
    //执行广告图添加
    public function getInsert(){
        $request = request();
        $id=$request->param('id');
        $row=Db::table('company')->where('id',$id)->find();
        $data['bgs']=$row['bgs'];
        $data['name']=$row['name'];
        $data['co_id']=$row['id'];
        $data['bg']=$row['bg'];
        $data['homepage']=$row['homepage'];
//        var_dump($data);die;
        if(Db::table('advertising')->insert($data)){
            $this->success("添加成功","/advertising/add");
        }else{
            $this->error("添加失败,请查看是否已添加");
        }
    }
    
    //广告列表
    public function getIndex(){
        $data=Db::table('advertising')->select();
        return $this->fetch("advertising/index",['data'=>$data]);
    }
    
    //广告删除
    public function getDelete(){
        $request = request();
        $id = $request->param('id');
        if(Db::table('advertising')->where('id',$id)->delete()){
            $this->success("删除成功","/advertising/index");
        }else{
            $this->error("删除失败");
        }
    }
    
}
