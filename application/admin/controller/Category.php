<?php
//规定控制器是属于哪个模块下的控制器
namespace app\admin\controller;

//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;

class Category extends Allow
{
    //分类列表
    public function getIndex()
    {
        $cate = Db::table('category')->where('pid', 0)->select();
        return $this->fetch("category/index", ['cate' => $cate]);
    }
    
    //子类列表
    public function getSeed()
    {
        $request = request();
        $id = $request->param('id');
        if ($list = Db::table('category')->where("pid", $id)->select()) {
            return $this->fetch("category/seed", ['cate' => $list, 'id' => $id]);
        } else {
            $data = Db::table('category')->field('pid')->where('id', $id)->find();
            $pid = $data['pid'];
            $list = Db::table('category')->where('pid', $pid)->select();
            return $this->fetch("category/seed", ['cate' => $list, 'id' => $id]);
        }
    }
    
    //返回上一级
    public function getBack()
    {
        $request = request();
        $id = $request->param('id');
//        echo $id;
        $data = Db::table('category')->field('pid')->where('id', $id)->find();
        $pid = $data['pid'];
//        echo $pid;
        if ($pid != 0) {
            $con = Db::table('category')->where('id', $pid)->select();
            $id = $con[0]['id'];
            $list = Db::table('category')->where('pid', $pid)->select();
            return $this->fetch("category/seed", ['cate' => $list, 'id' => $id]);
        } else {
            $cate = Db::table('category')->where('pid', 0)->select();
            return $this->fetch("category/index", ['cate' => $cate]);
        }
    }
    
    //加载添加模板
    public function getAdd()
    {
        $cate = Db::table('category')->select();
        
        return $this->fetch("Category/add", ['cate' => $cate]);
    }
    
    //执行添加
    public function postInsert()
    {
        $request = request();
        $data = $request->only(['name', 'pid']);
        if ($data['pid'] == 0) {
            $data['path'] = '0';
        } else {
            $info = Db::table("category")->where("id", $data['pid'])->find();
            $data['path'] = $info['path'] . "," . $info['id'];
        }
        if(Db::table("category")->insert($data)){
            // echo "1";
            $this->success("添加成功","/category/index");
        }else{
            $this->error("添加失败","/category/add");
        }
    }
    
    //删除列表
    public function getDelete(){
        $request = request();
        $id = $request->param('id');
        if ($list=Db::table('category')->where('pid',$id)->select()){
            $this->error("存在子类别删除失败,请先删除子类别","/cartegory/index");
        }elseif(false){
            //todo 后期看有相关商品
            $this->error("存在相关商品删除失败,请先删除商品","/cartegory/index");
        } else{
            if(Db::table('category')->where('id',$id)->delete()){
                $this->success("删除成功","/category/index");
            }else{
                $this->error("删除失败","/category/index");
            }
        }
    }
    
    //加载修改模板
    public function getEdit(){
        $request = request();
        $id = $request->param('id');
        $cate=Db::table('category')->field('name')->where('id',$id)->find();
        $cate['id']=$id;
        return $this->fetch("category/edit",['cate'=>$cate]);
    }
    //执行修改
    public function postUpdate(){
        $request = request();
        $data = $request->only(['name', 'id']);
        if(Db::table('category')->where('id',$data['id'])->update(['name'=>$data['name']])){
            $this->success("修改成功","/category/index");
        }else{
            $this->error("修改失败","/category/index");
        }
    }
}
