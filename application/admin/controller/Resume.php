<?php
namespace app\admin\controller;
//加载配置类
use think\Config;
//导入Controller
use think\Controller;
//导入Db
use think\Db;
class Resume extends Allow
{
//简历列表
    public function getIndex()
    {
        //获取会员列表数据

        $request = request();
        $id = $request->param('id');
        //获取简历信息
        $info = Db::query("select * from resume_info as ri,resume_adventage as ra,resume_history as rh,resume_education as re where ri.uid=ra.uid and ri.uid=rh.uid and ri.uid=re.uid and ri.uid={$id}");
        if (count($info)>0) {
            $info=$info[0];
            if ($id == $info['uid']) {
            
            return $this->fetch("Resume/index", ['info' => $info]);
            }
        }
        else {
            $this->error('对不起,该用户某油填写简历','/adminuser/index');
        }

        
    }
}
?>