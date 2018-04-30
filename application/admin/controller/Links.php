<?php
//规定控制器是属于哪个模块下的控制器
namespace app\admin\controller;

//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;

class Links extends Allow
{
    //友情链接添加
    public function getAdd()
    {
        return $this->fetch("/links/add");
    }
    
    //执行友情链接添加
    public function postInsert()
    {
        $request = request();
        $data = $request->except(['action']);
        $email = $data['email'];
        $result = $this->validate(['email' => $email], ['email' => "email"], ['email.email' => '不符合邮箱格式']);
        if (true !== $result) {
            $this->error($result, "/adminlinks/add");
        }
        if (Db::table('links')->insert($data)) {
            $this->success("添加成功", "/adminlinks/add");
        } else {
            $this->error("添加失败", "/adminlinks/add");
        }
    }
    
    //友情链接列表
    public function getindex()
    {
        $data = Db::table('links')->paginate(10);
        return $this->fetch('/links/index', ['data' => $data]);
    }
    
    //加载修改模板
    public function getEdit()
    {
        $request = request();
        $id = $request->param('id');
        $data = Db::table('links')->where('id', $id)->find();
        return $this->fetch("/links/edit", ['data' => $data]);
    }
    
    //执行修改
    public function postUpdate()
    {
        $request = request();
        $data = $request->except(['action', 'id']);
        $id = $request->param('id');
        if (Db::table('links')->where('id', $id)->update($data)) {
            return $this->success("修改成功", "/adminlinks/index");
        } else {
            return $this->error("修改失败");
        }
    }
    
    //友情链接删除
    public function getDelete()
    {
        $request = request();
        $id = $request->param('id');
        if (Db::table('links')->where('id', $id)->delete()) {
            return $this->success("删除成功", "/adminlinks/index");
        } else {
            return $this->error("删除失败");
        }
        
    }
}
