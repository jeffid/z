<?php
//规定控制器是属于哪个模块下的控制器
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Announce extends Controller
{
    //加载后台公告添加模板
    public function getAdd(){
    	// echo "this is add";
        return $this->fetch("Announce/add");
    }

    //执行添加
    public function postInsert(){
        // echo "111";
        //请求对象
        $request=request();
        //获取表单数据
        $file=$request->file("pic");
        //规则
        $result=$this->validate(['file1'=>$file],['file1'=>'require|image'],['file1.require'=>"上传文件不能为空",'file1.image'=>'非法图像文件']);
        if(true!==$result){
            $this->error($result,"/adminannounce/add");
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
        $img->thumb(100,100)->save("./uploads/thumb/".$name.".".$ext);
        //获取标题和公告内容
        $data['title']=$request->param("title");
        $data['descr']=$request->param("descr");
        $data['pic']="/uploads/thumb/".$name.".".$ext;
        $data['opic']="./uploads/".$savename;
        // echo $savename;exit;//  20180417\55a793f1a6c73039064b0e9721d33b54.jpg
        //把原图干掉
        // unlink("./uploads/".$savename);
        // echo "<pre>";
        // var_dump($data);
        if(Db::table("articles")->insert($data)){
            // echo  1;
            $this->success("添加成功","/adminannounce/index");
        }else{
            $this->error("添加失败");
        }
    }

    //公告列表
    public function getIndex(){
        $request=request();
        //获取数据总条数
        $count=Db::table("articles")->Count();
        //数据每页显示的数据条数
        $rev=2;
        //获取最大页
        $maxpage=ceil($count/$rev);
        for($i=1;$i<=$maxpage;$i++){
            $arr[$i]=$i;
        }
        //获取当前页
        $page=$request->get('page');
        //判断
        if(empty($page)){
            $page=1;
        }
        //获取偏移量
        $offset=($page-1)*2;
        $sql="select * from articles limit {$offset},2";
        
        //检测请求是否为Ajax
        if($request->isAjax()){
            // echo $page;exit;
            //获取当前ajax分页数据
            $data=Db::query($sql);
            //加载单独的模板
            return $this->fetch("Announce/test",['data'=>$data]);
        }
        $data=Db::query($sql);
       //加载模板
        return $this->fetch("Announce/index",['arr'=>$arr,'data'=>$data]);
    }
    // post  Ajax请求
    public function postIndex1(){
        echo 666;
    }

    //执行删除
    public function getDelete(){
        $request=request();
        $id=$request->param('id');
        //把需要删除的数据
        $info=Db::table("articles")->where("id","{$id}")->find();
        // echo "<pre>";
        // var_dump($info);
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
            $this->success("删除成功","/adminannounce/index");
        }else{
            $this->error("删除失败");
        }
    }

}
