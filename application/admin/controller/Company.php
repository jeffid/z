<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Company extends Allow
{
    public function getindex()
    {
        $company = Db::table("company")->select();
        return $this->fetch("/Company/index", ['company' => $company]);
    }
    
    public function getadd()
    {
        return $this->fetch("/Company/add");
    }
    
    public function postInsert()
    {
        $request=request();
        //获取表单数据
        $file=$request->file("logo");
        $files = $request->file("bg");
//        var_dump($file);die;
//        规则
    
        $result = $this->validate(['file1' => $file], ['file1' => 'require|image'], ['file1.require' => "上传文件不能为空", 'file1.image' => '非法图像文件']);
        $results = $this->validate(['file2' => $files], ['file2' => 'require|image'], ['file2.require' => "上传文件不能为空2", 'file2.image' => '非法图像文件2']);
        if (true !== $result) {
            $this->error($result, "/company/add");
        }
        if (true !== $results) {
            $this->error($results, "/company/add");
        }
        //移动文件
        $info=$file->move(ROOT_PATH . 'public' . DS . 'uploads');
//        $info=$file->move('/static/public/uploads/');
//        var_dump($info);die;
        $infos=$files->move(ROOT_PATH . 'public' . DS . 'uploads');
//        $infos=$files->move('/static/public/uploads/');
        //获取上传文件信息
        $savename=$info->getSaveName();
        $savenames=$infos->getSaveName();
        $ext=$info->getExtension();
        $exts=$infos->getExtension();

//        echo $savename.":".$ext;
//        echo $savenames.":".$exts;die;
    
        //随机图片名字
        $name=time()+rand(1,10000);
        $names=time()+rand(1,10000);

//        var_dump($savename);die;
        //打开需要处理的图像文件
        $img=\think\Image::open("./uploads/".$savename);
    
        $images=\think\Image::open("./uploads/".$savenames);
    
        $img->save("./uploads/thumb/".$name.".".$ext);
        $images->save("./uploads/thumb/".$names.".".$exts);
//        var_dump($images->save("./uploads/thumb/".$names.".".$exts));
//        die;
    
        //缩放
        $img->thumb(60,60)->save("./uploads/thumb/".$name.".".$ext);
        $images->thumb(60,60)->save("./uploads/thumb/".$names.".".$exts);
        //获取添加内容
    
        $data['bg']="./uploads/".$savename;
        $data['bgs']="/uploads/thumb/".$name.".".$ext;
//        var_dump($data['bg']);die;
        $data['logo']="./uploads/".$savenames;
        $data['logos']="/uploads/thumb/".$names.".".$exts;
//        $data['logo']=$request->param("logo");
        $data['name']=$request->param("name");
        $data['fullname']=$request->param("fullname");
        $data['financing']=$request->param("financing");
        $data['employees']=$request->param("employees");
        $data['industry']=$request->param("industry");
        $data['profile']=$request->param("profile");
        $data['homepage']=$request->param("homepage");
//        var_dump($data);die;
        if(Db::table("company")->insert($data)){
            // echo  1;
            $this->success("添加成功","/company/index");
        }else{
            $this->error("添加失败");
        }

    }
    //修改
    public function getEdit()
    {
        $request = request();
        $id = $request->param('id');
        $info = Db::table('company')->where('id', "{$id}")->find();
        
        return $this->fetch("company/edit", ['info' => $info]);
    }
    public function postUpdate()
    {
        
        //获取id
        $request = request();
        $id = $request->param('id');
        $file=$request->file("logo");
        $files = $request->file("bg");
//        规则
    
        $result = $this->validate(['file1' => $file], ['file1' => 'require|image'], ['file1.require' => "上传文件不能为空", 'file1.image' => '非法图像文件']);
        $results = $this->validate(['file2' => $files], ['file2' => 'require|image'], ['file2.require' => "上传文件不能为空2", 'file2.image' => '非法图像文件2']);
        if (true !== $result) {
            $this->error($result, "/company/add");
        }
        if (true !== $results) {
            $this->error($result, "/company/add");
        }
        //移动文件
        $info=$file->move(ROOT_PATH."public".DS."uploads");
        $infos=$files->move(ROOT_PATH."public".DS."uploads");
        //获取上传文件信息
        $savename=$info->getSaveName();
        $savenames=$infos->getSaveName();
        $ext=$info->getExtension();
        $exts=$infos->getExtension();

//        echo $savename.":".$ext;
//        echo $savenames.":".$exts;
    
        //随机图片名字
        $name=time()+rand(1,10000);
        $names=time()+rand(1,10000);

//        var_dump($name);
        //打开需要处理的图像文件
        $img=\think\Image::open("./uploads/".$savename);
//        var_dump($image);die;
        $images=\think\Image::open("./uploads/".$savenames);
    
        $img->save("./uploads/thumb/".$name.".".$ext);
        $images->save("./uploads/thumb/".$names.".".$exts);
//        var_dump($images);
//        die;
    
        //缩放
        $img->thumb(60,60)->save("./uploads/thumb/".$name.".".$ext);
        $images->thumb(60,60)->save("./uploads/thumb/".$names.".".$exts);
        //获取添加内容
        $data['bg']="./uploads/".$savename;
        $data['bgs']="/uploads/thumb/".$name.".".$ext;
        $data['logo']="./uploads/".$savenames;
        $data['logos']="/uploads/thumb/".$names.".".$exts;
//        $data['logo']=$request->param("logo");
        $data['name']=$request->param("name");
        $data['fullname']=$request->param("fullname");
        $data['financing']=$request->param("financing");
        $data['employees']=$request->param("employees");
        $data['industry']=$request->param("industry");
        $data['profile']=$request->param("profile");
        $data['homepage']=$request->param("homepage");
        $row=Db::table("company")->where("id","{$id}")->find();
        $bg=$row['bg'];
        $bgs=$row['bgs'];
        $logo=$row['logo'];
        $logos=$row['logos'];
        if(Db::table("company")->where('id', "{$id}")->Update($data)){
            unlink($bg);
            unlink(".".$bgs);
            unlink($logo);
            unlink(".".$logos);
            // echo  1;
            $this->success("修改成功","/company/index");
        }else{
            $this->error("添加失败");
        }
    }
    //品牌删除
    public function getDelete()
    {
        $request=request();
        $id=$request->param('id');
        //把需要删除的数据
        $info=Db::table("company")->where("id","{$id}")->find();
        // echo "<pre>";
        // var_dump($info);
        //获取pic
        $bgs=$info['bgs'];
        $logos=$info['logos'];
        //获取原图
        $bg=$info['bg'];
        $logo=$info['logo'];
        if(Db::table("company")->where("id","{$id}")->delete()){
            //删除缩放后的图像
            unlink(".".$bgs);
            unlink(".".$logos);
            //删除缩放之前的图像
            unlink($bg);
            unlink($logo);
           
            $this->success("删除成功","/company/index");
        }else{
            $this->error("删除失败");
        }
    }
    
    
}