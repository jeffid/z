<?php

namespace app\admin\controller;

//加载配置类
use think\Config;
//导入Controller;
use think\Controller;
//导入Db
use think\Db;

class permissions extends Allow
{
    //管理员列表
    public function getIndex()
    {
        $user = Db::query("select * from role,admin,user_role where admin.id=user_role.uid and user_role.rid=role.id");
        return $this->fetch("permissions/index", ['user' => $user]);
    }
    
    //管理员添加
    public function getAdminadd()
    {
        
        return $this->fetch("permissions/adminadd");
    }
    
    //执行管理员添加
    public function postAdmininsert()
    {
        
        $request = request();
        //封装需要添加数据
        
        $data = $request->only(['rid', 'username']);
        $data['password'] = md5($request->param('password'));
        //数据效验 内置验证方法 User 验证器类  验证数据是否符合规则  规则在validate
        $result = $this->validate($request->param(), 'Uuu');
        if (true !== $result) {
            //显示错误提示信息  阻止页面提交
            $this->error($result, "/permissions/adminadd");
        }
//        var_dump($data);die;
        $output = array_slice($data, 1, 3);
        $output['createtime']=time();
        $id = Db::table("admin")->insertGetId($output);
        $outputs = array_slice($data, 0, 1);
        $outputs['uid'] = $id;
        Db::table("user_role")->insert($outputs);
        
        $this->success("数据添加成功", "/permissions/index");
        
    }
    
    
    //管理分配
    public function getRolelist()
    {
        //获取id
        $request = request();
        $id = $request->param("id");
        //获取当前登录用户的信息
        $info = Db::table("admin")->where("id", "{$id}")->find();
        //获取所有的角色信息
        $role = Db::table("role")->select();
        //获取当前登录用户角色信息
        $data = Db::table("user_role")->where("uid", "{$id}")->select();
        //遍历 $rids 存储的是当前登录用户的角色id
        foreach ($data as $v) {
            $rids[] = $v['rid'];
        }
        return $this->fetch("permissions/rolelist", ['info' => $info, 'role' => $role, 'rids' => $rids, 'uid' => $id]);
    }
    
    //执行管理分配
    public function postSaverole()
    {
        $request = request();
        //获取当前用户分配的角色信息
        $rid = $_POST['rid'];
//         echo "<pre>";
//         var_dump($rid);
//         die;
        //获取当前登录用户的id
        $uid = $request->param("uid");
        //删除当前登录用户原有的角色信息
        Db::table("user_role")->where("uid", $uid)->delete();
        //遍历
        foreach ($rid as $v) {
            //封装需要插入的数据
            $data['uid'] = $uid;//用户id
            $data['rid'] = $v;
            $d[] = $data;
//            //执行插入
//            Db::table("user_role")->insert($data);
        }
//        var_dump($d);die;

//        $this->success("角色分配成功", "/permissions/index");
        if (Db::table("user_role")->insertAll($d)) {
            $this->success("角色分配成功", "/permissions/index");
        } else {
            $this->error("角色分配失败");
            
        }
    }
    
    //管理员修改
    public function getEdit()
    {
        $request = request();
        $id = $request->param('id');
        $info = Db::table('admin')->where('id', "{$id}")->find();
        return $this->fetch("permissions/edit", ['info' => $info]);
    }
    
    //管理员执行修改
    public function postupdate()
    {
        //获取id
        $request = request();
        $id = $request->param('id');
        //获取修改的值
        $data = $request->only(['status']);
        
        if ($pwd = $request->param('password')) {
            $data['password'] = md5($pwd);
        }
//        var_dump($data);
//        var_dump($id);die;
        if (Db::table("admin")->where('id', $id)->update($data)) {
            $this->success("数据修改成功", "/permissions/index");
        } else {
            $this->error("数据修改失败");
        }
    }
    
    
    //权限列表
    public function getPermissions()
    {
        $role = Db::table("role")->select();
        
        return $this->fetch("/rolelist/index", ['role' => $role]);
    }
    
    //权限添加
    public function getPermissionsadd()
    {
        
        return $this->fetch("/rolelist/add");
    }
    
    //执行权限添加
    public function postPermissionsinsert()
    {
        $request = request();
        
        $data = $request->only(['name']);
        $data['status'] = 1;
        
        if ($id = Db::table("role")->insert($data)) {
            
            
            $this->success("权限添加成功", "/permissions/permissions");
        } else {
            $this->error("权限添加失败", "/rolelist/index");
        }
        
    }
    
    //权限分配
    public function getAddrole()
    {
        //获取id
        $request = request();
        $id = $request->param("id");
        
        $info = Db::table("role")->where("id", "{$id}")->find();
        //获取所有的角色信息
        $role = Db::table("node")->select();
        //获取权限id
        $data = Db::table("role_node")->where("rid", "{$id}")->select();
        $rids = [];
        foreach ($data as $v) {
            $rids[] = $v['nid'];
        }
//        var_dump($rids);
        //获取当前登录用户角色信息
        return $this->fetch("/rolelist/addrole", ['info' => $info, 'role' => $role, 'uid' => $id, 'rids' => $rids]);
    }
    
    //权限分配执行
    public function postRoleinsert()
    {
        $request = request();
        
        $id = $request->param("id");
        Db::table("role_node")->where("rid", $id)->delete();

//        var_dump($uid);die;
        
//        var_dump($_POST);die;
        $res=true;
        if (!empty($name = $_POST['name']??[])) {
            foreach ($name as $v) {
                //封装需要插入的数据
                $data['rid'] = $id;//用户id
                $data['nid'] = $v;
                //执行插入
                $d[] = $data;
            }
           $res = !!Db::table("role_node")->insertAll($d);
        }

//        var_dump($d,$uid);die;

//        Db::table("role_node")->insertAll($d);
        
        if ($res) {
            $this->success("权限分配成功", "/permissions/permissions");
        } else {
            $this->error("权限分配失败", "/permissions/permissions");
        }
    }
    
    //权限点列表
    public function getAdminpermissions()
    {
        $role = Db::table("node")->select();
        return $this->fetch("/rolelist/adminpermissions", ['role' => $role]);
    }
    
    //权限点修改
    public function getRoleedit()
    {
        $request = request();
        $id = $request->param('id');
        $info = Db::table('node')->where('id', "{$id}")->find();
        return $this->fetch("rolelist/edit", ['info' => $info]);
    }
    
    //权限点执行修改
    public function postRoleupdate()
    {
        //获取id
        $request = request();
        $id = $request->param('id');
        //获取修改的值
        $data = $request->only(['name']);
        if (Db::table("node")->where('id', "{$id}")->update($data)) {
            $this->success("数据修改成功", "/permissions/adminpermissions");
        } else {
            $this->error("数据修改失败");
        }
    }
    
    //权限点添加
    public function getRoleadd()
    {
        return $this->fetch("rolelist/roleadd");
    }
    
    //执行权限点添加
    public function postRoleinsery()
    {
        
        $request = request();
        //封装需要添加数据
        $data = $request->only(['name', 'mname', 'aname']);
        //封装status
        $data['status'] = 1;
        if (Db::table("node")->insert($data)) {
            $this->success("数据添加成功", "/permissions/roleadd");
            // var_dump($data);
        } else {
            $this->error("数据添加失败");
            // var_dump($data);
        }
        
    }
}

?>