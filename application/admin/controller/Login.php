<?php

namespace app\admin\controller;

//加载配置类
use think\Config;
//导入Controller;
use think\Controller;
//导入Db
use think\Db;
//引入Session类
use think\Session;

class Login extends Controller
{
    //加载后台登录界面
    public function getLogin()
    {
        return $this->fetch("Login/login");
    }
    
    //执行登录
    public function postLogindo()
    {
        //创建请求对象
        $request = request();
        //获取输入的验证码
        $fcode = $request->param('fcode');
       
        //对比输入的验证码和系统验证码
        if (!captcha_check($fcode)) {
            return $this->error("验证码错误", "/login/login");
        }
        
        //检测用户名
        if (!$info = Db::table("admin")
            ->join('user_role ur','admin.id=ur.uid')
            ->join("role r",'ur.rid=r.id')
            ->field('admin.username,admin.status,admin.password,admin.id,ur.rid,r.name,r.id as r_id')
            ->where("username", $request->param('username'))->find()) {
            return $this->error("用户名有误", "/login/login");
        }

        if (md5($request->param('password')) != $info['password']) {
            $this->error("密码有误", "/login/login");
        }
        
        if ($info['status'] != 1) {
            return $this->error("当前用户已禁用", "/login/login");
        }

        $list = Db::query("select n.name,n.mname,n.aname from user_role as ur,role_node as rn,node as n where ur.rid=rn.rid and rn.nid=n.id and ur.uid={$info['id']}");
        
        //2.初始化权限
        //让所有的后台登录的用户具有后台首页访问权限 admin 后台首页控制器 getindex 访问后台首页的方法
        //如果有add 方法 添加insert  如果有edit 方法 添加update
        $nodelist['admin'][] = "getindex";
        //遍历
        foreach ($list as $v) {
            //给$nodelist 赋值
            $nodelist[$v['mname']][] = $v['aname'];
            //判断 如果有add方法 添加insert
            if ($v['aname'] == "getadd") {
                $nodelist[$v['mname']][] = "postinsert";
            }
            //如果有edit 添加update
            if ($v['aname'] == "getedit") {
                $nodelist[$v['mname']][] = "postupdate";
            }
            //管理员添加
            if ($v['aname'] == "getadminadd") {
                $nodelist[$v['mname']][] = "postadmininsert";
            }
            //管理员分配
            if ($v['aname'] == "getrolelist") {
                $nodelist[$v['mname']][] = "postsaverole";
            }
            //权限添加
            if ($v['aname'] == "getpermissionsadd") {
                $nodelist[$v['mname']][] = "postpermissionsinsert";
            }
            //权限修改
            if ($v['aname'] == "getaddrole") {
                $nodelist[$v['mname']][] = "postroleinsert";
            }
            //权限点添加
            if ($v['aname'] == "getroleadd") {
                $nodelist[$v['mname']][] = "postroleinsery";
            }
            //权限点修改
            if ($v['aname'] == "getroleedit") {
                $nodelist[$v['mname']][] = "postroleupdate";
            }
        }
        
        //3.把当前登录用户的权限信息存储在session里
        Session::set('username', $info['username']);
        Session::set('islogin', 1);
        Session::set('rid', $info['rid']);
        Session::set('name', $info['name']);
        Session::set('r_id', $info['r_id']);
        Session::set('nodelist', $nodelist);
        $this->redirect("/admin/index");
    }
    
    
    //执行退出
    public function getLogout()
    {
        Session::delete('username');
        Session::delete('islogin');
        $this->success("退出成功", "/login/login");
    }
    
}

?>