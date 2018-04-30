<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class User extends Allow
{
    //会员列表
    public function getIndex()
    {
        $request = request();
        //获取搜索的关键字
        $k = $request->param('keywords');
        //获取会员列表数据
        $user = Db::table("user")->where("phone", 'like', "%" . $k . "%")->paginate(3);
        return $this->fetch("User/index", ['user' => $user, 'data' => $request->param(), 'k' => $k]);
    }
    
    //添加模板
    public function getAdd()
    {
        //添加模板
        return $this->fetch("User/add");
    }
    //跳转列表
//   public function getIndex1(){
//        $this->success("跳转成功","/user2/index");
//   }
    //执行会员添加
    public function postInsert()
    {
        
        $request = request();
        //封装需要添加数据
        $data = $request->only(['phone', 'passwrod']);
        //添加时间
        $data['addtime'] = time();
        //封装status
        $data['status'] = 1;
        //数据效验 内置验证方法 User 验证器类  验证数据是否符合规则  规则在validate
        $result = $this->validate($request->param(), 'Uuu');
        if (true !== $result) {
            //显示错误提示信息  阻止页面提交
            $this->error($result, "/adminuser/add");
        }
        if (Db::table("user")->insert($data)) {
            $this->success("数据添加成功", "/adminuser/index");
            // var_dump($data);
        } else {
            $this->error("数据添加失败", "/adminuser/add");
            // var_dump($data);
        }
        
    }
    
    //删除
    public function getDelete()
    {
        $request = request();
        $id = $request->param('id');
        if (Db::table('user')->where('id', "{$id}")->delete()) {
            $this->success("数据删除成功", "/adminuser/index");
        } else {
            $this->error("数据添加失败", "/adminuser/index");
        }
    }
    
    //修改
    public function getEdit()
    {
        $request = request();
        $id = $request->param('id');
        $info = Db::table('user')->where('id', "{$id}")->find();
        return $this->fetch("User/edit", ['info' => $info]);
    }
    
    //执行修改
    public function postUpdate()
    {
        //获取id
        $request = request();
        $id = $request->param('id');
        //获取修改的值
        $data = $request->only(['status']);
        if (Db::table("user")->where('id', "{$id}")->update($data)) {
            $this->success("数据修改成功", "/adminuser/index");
        } else {
            $this->error("数据修改失败");
        }
    }
    //批量删除
//   public function getAlldelete(){
//        echo "批量删除";
//   }
}
