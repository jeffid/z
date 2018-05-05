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
    //轮播图修改
    public function getEdit(){
        $request = request();
        $id=$request->param('id');
        $row=Db::table('carousel')->where('id',$id)->find();
        return $this->fetch('/carousel/edit',['row'=>$row]);
        
    }
    //执行轮播图修改
    public function postUpdate(){
        $re=request();
        $id=$re->param('id');
        $file=$re->file("bgs");
        $result=$this->validate(['file1'=>$file],['file1'=>'require|image'],['file1.require'=>"上传文件不能为空",'file1.image'=>'非法图像文件']);
        if(true!==$result){
            $this->error($result,"/carousel/index");
        }
        //移动文件 ROOT_PATH  DS
        $info=$file->move(ROOT_PATH."public".DS."uploads");
        //获取上传文件信息
        $savename=$info->getSaveName();
        $ext=$info->getExtension();
        //随机图片名字
        $name=time()+rand(1,10000);
        //打开需要处理的图像文件
        $img=\think\Image::open("./uploads/".$savename);
        //缩放
        $img->thumb(100,100)->save("./uploads/thumbs/".$name.".".$ext);
        $data['bgs']="/uploads/thumbs/".$name.".".$ext;
        $data['bg']="/uploads/".$savename;
        $row=Db::table("carousel")->where("id","{$id}")->find();
//         echo "<pre>";
//         var_dump($row);die;
        //获取pic
        $bg=$row['bg'];///uploads/thumb/1523959048.jpg
        //获取原图
        $bgs=$row['bgs'];
//        var_dump($data);
//        var_dump($id);
//        die;
        if (Db::table("carousel")->where('id',$id)->update($data)){
            $this->success("添加成功","/carousel/index");
            if(!empty($bg) && !empty($bgs)){
                //删除缩放后的图像
                unlink(".".$bgs);
                //删除缩放之前的图像
                unlink(".".$bg);
            }
           
        }else{
            $this->error("添加失败");
        }
    }
}
