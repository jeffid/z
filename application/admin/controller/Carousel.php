<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Carousel extends Allow
{
    //添加轮播图列表
    public function getAdd(){
        $request=request();
        //获取搜索的关键字
        $k=$request->param('search');
        $data=Db::table('company')->field('name,bgs,id')->where("name",'like',"%".$k."%")->paginate(10);
//        var_dump($data);
        return $this->fetch("carousel/add",['data'=>$data,'con'=>$request->param(),'k'=>$k]);
    }
    
    //执行轮播图添加
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
        if(Db::table('carousel')->insert($data)){
            $this->success("添加成功","/carousel/add");
        }else{
            $this->error("添加失败,请查看是否已添加");
        }
    }
    
    //轮播图列表
    public function getIndex(){
        $data=Db::table('carousel')->select();
        return $this->fetch("carousel/index",['data'=>$data]);
    }
    
    //轮播图删除
    public function getDelete(){
        $request = request();
        $id = $request->param('id');
        if(Db::table('carousel')->where('id',$id)->delete()){
            $this->success("删除成功","/carousel/index");
        }else{
            $this->error("删除失败");
        }
    }
    
}
