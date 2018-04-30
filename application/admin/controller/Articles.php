<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Articles extends Allow
{
    public function getIndex(){
        $request = request();
//        public function getIndex(){
       $user=Db::table("articles")->paginate(1);
        //加载模板
        return $this->fetch("articles/index",['user'=>$user,'data'=>$request->param()]);
    }

    public function getAdd(){
        return $this->fetch("/articles/add");
    }
    public function postInsert(){
        //请求对象
        $request=request();
        //获取表单数据
        $file=$request->file("pic");
        //规则
        $result=$this->validate(['file1'=>$file],['file1'=>'require|image'],['file1.require'=>"上传文件不能为空",'file1.image'=>'非法图像文件']);
        if(true!==$result){
            $this->error($result,"/articles/add");
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
        //获取标题和公告内容
        $data['title']=$request->param("title");
        $data['descr']=$request->param("descr");
        $data['pic']="/uploads/thumbs/".$name.".".$ext;
        $data['opic']="./uploads/".$savename;
        // echo $savename;exit;//  20180417\55a793f1a6c73039064b0e9721d33b54.jpg
        //把原图干掉
        // unlink("./uploads/".$savename);
        // echo "<pre>";
        // var_dump($data);
        if(Db::table("articles")->insert($data)){
            // echo  1;
            $this->success("添加成功","/articles/index");
        }else{
            $this->error("添加失败");
        }
    }
    public function getDelete(){
        $request=request();
        $id=$request->param('id');
        //把需要删除的数据
        $info=Db::table("articles")->where("id","{$id}")->find();
//         echo "<pre>";
//         var_dump($info);die;
        //获取pic
        $pic=$info['pic'];///uploads/thumb/1523959048.jpg
        //获取原图
        $opic=$info['opic'];
        //获取descr
        $descr=$info['descr'];
        // echo $descr;
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$descr,$arr);
        // echo "<pre>";
        // var_dump($arr);exit;
        if(Db::table("articles")->where("id","{$id}")->delete()){
            //删除缩放后的图像
            unlink(".".$pic);
            //删除缩放之前的图像
            unlink($opic);
            //删除百度编辑器图片
            if(isset($arr[1])){
                //遍历
                foreach($arr[1] as $v){
                    unlink(".".$v);
                }
            }
            $this->success("删除成功","/articles/index");
        }else{
            $this->error("删除失败");
        }
    }
    public function getEdit(){
        $request = request();
        $id = $request->param('id');
        $row = Db::table('articles')->where('id', "{$id}")->find();
        return $this->fetch("/articles/edit",['row'=>$row]);
    }
    public function postUpdate(){
        $request=request();
        //获取表单数据
        $id = $request->param('id');
        $file=$request->file("pic");
        
        //规则
        $result=$this->validate(['file1'=>$file],['file1'=>'require|image'],['file1.require'=>"上传文件不能为空",'file1.image'=>'非法图像文件']);
        if(true!==$result){
            $this->error($result,"/articles/add");
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
        //获取标题和公告内容
        $data['title']=$request->param("title");
        $data['descr']=$request->param("descr");
        $data['pic']="/uploads/thumbs/".$name.".".$ext;
        $data['opic']="./uploads/".$savename;
        $row=Db::table("articles")->where("id","{$id}")->find();
//         echo "<pre>";
//         var_dump($row);die;
        //获取pic
        $pic=$row['pic'];///uploads/thumb/1523959048.jpg
        //获取原图
        $opic=$row['opic'];
        //获取descr
        $descr=$row['descr'];
        // echo $descr;
        preg_match_all('/<img.*?src="(.*?)".*?>/is',$descr,$arr);
//        var_dump($row);
//        var_dump($pic);
//        var_dump($opic);
//        var_dump($descr);
//         echo "<pre>";
//         var_dump($arr);exit;
        if(Db::table("articles")->where("id","{$id}")->update($data)){
            //删除缩放后的图像
            unlink(".".$pic);
            //删除缩放之前的图像
            unlink($opic);
            //删除百度编辑器图片
            if(isset($arr[1])){
                //遍历
                foreach($arr[1] as $v){
                    unlink(".".$v);
                }
            }
            $this->success("修改成功","/articles/index");
        }else{
            $this->error("修改失败");
        }
    }
}