<?php

namespace app\home\controller;

use app\home\controller\Permit1;
//导入Db
use think\Db;

/**
 * 添加、修改公司信息，提交后为禁用状态，后台管理可审核通过，通过后方可添加招聘岗位
 * 可看到投递的简历，并发出面试邀约
 * */
class Employer extends Permit1
{
    function getAccount(){
        return $this->getInfo();
    }
    
    //个人信息
    function getInfo()
    {
        $id = session('uid');
        $row = Db::table('user')->where('id', $id)->find();
        return $this->fetch("/employer/info", ['row' => $row]);
    }
    
    //个人信息添加
    function getAddinfo()
    {
        return $this->fetch("/employer/addinfo");
    }
    
    /*更新个人信息*/
    function postUpdateinfo()
    {
        $request = request();
        
        $id = session('uid');
        $data = $request->only(['username', 'position']);
        
        if (DB::table('user')->where('id', $id)->update($data)) {
            session('user.name', $data['username']); //更新用户实名
            session('user.position', $data['position']); //更新用户职位
            $this->success("数据添加成功", "/employer/info");
        } else {
            $this->error("数据添加失败", "/employer/info");
        }
    }
    function getAdd()
    {
        return $this->fetch("/employer/job_add");
    }
    
    /*添加招聘职位*/
    function postInsert()
    {
        $request = request();
        //封装需要添加数据
//        $data = $request->only(['job', 'location', 'experience', 'degree', 'job_descr', 'team_descr', 'tags', 'address','salary']);
        $data = $request->param();
        //添加时间
        $data['timestamp'] = time();
        //默认为可用状态
        $data['status'] = 1;
        //HR id
        $data['hr_id'] = session('uid');
        //当前HR相关联的公司ID
        $hr = Db::table('user')->where('id', session('uid'))->find();
        $data['co_id'] = $hr['co_id'];
        
        if (DB::table("job")->strict(false)->insert($data)) {
            echo "ok";
//            $this->success("数据添加成功");
        } else {
            echo "error";
        }
//            $this->error("数据添加失败");
    }
    
    /*列出已发布工作页面*/
    function getindex()
    {
        $request = request();
        $job = Db::table("job")->where('hr_id',session('uid'))->paginate(8);
        return $this->fetch("/employer/job_list", ['job' => $job, 'data' => $request->param()]);
    }
    
    /*修改工作信息页面*/
    function getEdit()
    {
        $request = request();
        $id = $request->param('id');
        $row = Db::table('job')->where('id', "{$id}")->find();
        return $this->fetch("/employer/job_edit", ['row' => $row]);
    }
    
    /*执行修改工作信息*/
    function postUpdate()
    {
        //获取id
        $request = request();
        $id = $request->param('id'); //已发布的工作的id
//        $id = session('uid');
        //获取修改的值
        $data = $request->only(['job', 'location', 'experience', 'degree', 'job_descr', 'team_descr', 'tags', 'address']);
        if (Db::table("job")->where('id', $id)->update($data)) {
            echo 'ok';
        } else {
            echo "error";
        }
    }
    
    /*编辑手机号页*/
    function getEditphone()
    {
        $id = session('uid');
//        var_dump($_SESSION);
        $row = Db::table('user')->where('id', "{$id}")->find();
        $phone = $row['phone_postfix'];
        $p = substr_replace($phone, "****", 3, 4);
        return $this->fetch("/employer/phone", ['p' => $p]);
    }
    
    /*更新手机号*/
    function postPhoneupdate()
    {
        $rq = request();
        $fcode = $rq->param('captcha');
        //对比输入的验证码和系统验证码
        $id = session('uid');
        $data = [
            'phone_prefix' => $rq->param('regionCode'),
            'phone_postfix' => $rq->param('phone'),
            'phone' => $rq->param('regionCode') . $rq->param('phone')
        ];
        
        if (!captcha_check($fcode)) {
            // echo "error";
            echo "captcha error";
            return;
        }
        
        if (sms_check($data['phone'],$rq->param('phoneCode'))) {
            
            session('phoneCode', null); //删除验证码,防止重用
            echo Db::table("user")->where('id', $id)->update($data) ? 'ok' : 'error';
            session('user.phone', $data['phone']);
            session('user.phonePostfix', $data['phone_postfix']);
        }
        else {
            var_dump($data);
            echo ' 短信验证码不正确或过期  ';
        }
    }
    
    /*编辑密码页*/
    function getEditpwd()
    {
//        $request = request();
//        $id = $request->param('id');
        $id = session('uid');
        $row = Db::table('user')->where('id', "{$id}")->find();
        $phone = $row['phone_postfix'];
        $p = substr_replace($phone, "****", 3, 4);
        
        return $this->fetch("/employer/editpwd", ['row' => $row, 'p' => $p]);
    }
    
    /*更新密码*/
    function postPwdupdate()
    {
        //获取id
        $request = request();
//        $id = $request->param('id');
        $id = session('uid');
        //获取修改的值
        $data['password'] = md5($request->param('password'));
        
        if (Db::table("user")->where('id', $id)->update($data)) {
            echo 'ok';
        } else {
            echo "error";
        }
    }
    
    /*改变发布的职位的状态,0禁用,1可用*/
    function postChangestatus()
    {
        $rq = request();
        $newStatus = $rq->param('status') == 1 ? 0 : 1;
        $id = $rq->param('id');
        
        if (Db::table("job")->where('id', $id)->update(['status' => $newStatus])) {
            
            echo json_encode(['msg' => 'ok', 'status' => $newStatus]);
        } else {
            echo json_encode(['msg' => 'error']);
        }
    }
    
    
    /*列出应聘信息*/
    function getReindex()
    {
        $request = request();
        /*列出当前hr_id名下的所有简历投递*/
        $job = Db::table("personal_deliver")->where('hr_id',session('uid'))->paginate(1);
        return $this->fetch("/employer/received_resume", ['job' => $job, 'data' => $request->param()]);
    }
    
    /*改变投递过来的简历的状态,0 未处理 1 邀约面试*/
    function postChangeOfferStatus()
    {
        $request = request();
        if (Db::table("personal_deliver")->where('id', $request->param('id'))->update(['status' => $request->param('optionIndex')])) {
            echo "ok";
        } else {
            echo "error";
        }
    }
    
    /*查看应聘者简历*/
    function getReview()
    {
        $request = request();
        $id = $request->param('id');
        $row = Db::query("select * from resume_info as ri,resume_adventage as ra,resume_history as rh,resume_education as re where ri.uid=ra.uid and ri.uid=rh.uid and ri.uid=re.uid and ri.uid={$id}")[0];
        return $this->fetch("/employer/resume_review", ['row' => $row]);
    }
    
    
    
    //查看关联公司信息
    function getCompanyindex()
    {
        $id = session('uid');
        $info = Db::table('user')->where('id', $id)->find();
        if (!$info['co_id']) {
            return $this->getCompanyadd();
        }
//        $row = Db::query("select * from company as c,company_addr as ca,company_env as ce,company_admin as cad where c.id=ca.co_id and c.id=ce.co_id and c.id=cad.co_id and c.id={$info['co_id']}");
        $row = Db::table('company')
            ->alias('c')
            ->join('company_addr ca','c.id=ca.co_id')
            ->join('company_env ce','c.id=ce.co_id')
            ->join('company_admin cad','c.id=cad.co_id')
            ->where('c.id',$info['co_id'])
            ->field('c.id,c.name,c.fullname,c.bgs,c.logos,c.financing,c.employees,c.industry,c.profile cf,c.homepage,ca.addr,cad.ce_name,cad.profile cadf')
            ->select();
//        var_dump($row);
        $row = $row[0] ?? [];
        return $this->fetch("/employer/companyindex", ['row' => $row, 'info' => $info]);
    }
    
    
    //添加关联公司信息
    function getCompanyadd()
    {
        return $this->fetch("/employer/companyadd");
    }
    
    
    //执行添加关联公司
    function postCompanyinsert()
    {
        $request = request();
        //获取表单数据
        $file = $request->file("logo");
        $files = $request->file("bg");
        $filess = $request->file("src");


//            var_dump($file);die;
//        规则
        
        $result = $this->validate(['file1' => $file], ['file1' => 'require|image'], ['file1.require' => "上传文件不能为空", 'file1.image' => '非法图像文件']);
        
        $resultss = $this->validate(['file3' => $filess], ['file3' => 'require|image'], ['file3.require' => "上传文件不能为空2", 'file3.image' => '非法图像文件3']);
        if (true !== $result) {
            $this->error($result, "/employer/companyadd");
        }
        
        if (true !== $resultss) {
            $this->error($resultss, "/employer/companyadd");
        }
        //移动文件
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
//        $info=$file->move('/static/public/uploads/');
//        var_dump($info);die;
        if(!empty($files)){
            $infos = $files->move(ROOT_PATH . 'public' . DS . 'uploads');
            $savenames = $infos->getSaveName();
            $exts = $infos->getExtension();
            $names = time() + rand(1, 10000);
            $images = \think\Image::open("./uploads/" . $savenames);
            $images->save("./uploads/thumbhome/" . $names . "." . $exts);
            $images->thumb(60, 60)->save("./uploads/thumbhome/" . $names . "." . $exts);
            $data['bg'] = "./uploads/" . $savenames;
            $data['bgs'] = "/uploads/thumbhome/" . $names . "." . $exts;
        }
       
        $infoss = $filess->move(ROOT_PATH . 'public' . DS . 'uploads');
//        $infos=$files->move('/static/public/uploads/');
        //获取上传文件信息
        $savename = $info->getSaveName();
        $savenamess = $infoss->getSaveName();
        $ext = $info->getExtension();
        $extss = $infoss->getExtension();

//        echo $savename.":".$ext;
//        echo $savenames.":".$exts;die;
        
        //随机图片名字
        $name = time() + rand(1, 10000);
        $namess = time() + rand(1, 10000);

//        var_dump($savename);die;
        //打开需要处理的图像文件
        $img = \think\Image::open("./uploads/" . $savename);
        
        $imagess = \think\Image::open("./uploads/" . $savenamess);
        
        $img->save("./uploads/thumbhome/" . $name . "." . $ext);
        $imagess->save("./uploads/thumbhome/" . $namess . "." . $extss);
//        var_dump($images->save("./uploads/thumb/".$names.".".$exts));
//        die;
        
        //缩放
        $img->thumb(60, 60)->save("./uploads/thumbhome/" . $name . "." . $ext);
        $imagess->thumb(60, 60)->save("./uploads/thumbhome/" . $namess . "." . $extss);
        //获取添加内容
        $data['logo'] = "./uploads/" . $savename;
        $data['logos'] = "/uploads/thumbhome/" . $name . "." . $ext;
        
//        var_dump($data['bg']);die;


//        $data['logo']=$request->param("logo");
        $data['name'] = $request->param("name");
        $data['fullname'] = $request->param("fullname");
        $data['financing'] = $request->param("financing");
        $data['employees'] = $request->param("employees");
        $data['industry'] = $request->param("industry");
        $data['profile'] = $request->param("profile");
        $data['homepage'] = $request->param("homepage");
        $addr['addr'] = $request->param("addr");
        $admin['ce_name'] = $request->param("ce_name");
        $admin['profiles'] = $request->param("profile");
        $env['src'] = "/uploads/" . $savenamess;
        $env['srcs'] = "/uploads/thumbhome/" . $namess . "." . $extss;
//            Db::table('company')->insertGetId($data);
//            var_dump($data);
//            var_dump($env);die;
        
        
        Db::startTrans();
        try {
            $co_id = Db::table('company')->insertGetId($data);
            $addr['co_id'] = $co_id;
            $admin['co_id'] = $co_id;
            $env['co_id'] = $co_id;
            $user['co_id'] = $co_id;
            $user['id'] = session('uid');
            Db::table('company_addr')->insert($addr);
            Db::table('company_admin')->insert($admin);
            Db::table('company_env')->insert($env);
            Db::table('user')->update($user);
            
            Db::commit();
            
        } catch (\Exception $e) {
            
            //回滚事物
            Db::rollback();
            $this->error("数据添加失败", "/employer/companyadd");
        }
    
        /*更新HR名下的公司id*/
        session('user.cid',$co_id);
        $this->success("数据添加成功", "/employer/companyindex");
    }
    
    
    //修改关联公司页面
    function getCompanyedit()
    {
        $id = session('uid');
        $info = Db::table('user')->where('id', $id)->find();
        $row = Db::table('company')
            ->alias('c')
            ->join('company_addr ca','c.id=ca.co_id')
            ->join('company_env ce','c.id=ce.co_id')
            ->join('company_admin cad','c.id=cad.co_id')
            ->where('c.id',$info['co_id'])
            ->field('c.id,c.name,c.fullname,c.bg,c.bgs,c.logo,c.logos,c.financing,c.employees,c.industry,c.profile cf,c.homepage,ce.srcs,ce.src,ca.addr,cad.ce_name,cad.profile cadf')
            ->select();
        $row = $row[0] ?? [];
        return $this->fetch("/employer/companyedit", ['row' => $row, 'info' => $info]);
    }
    
    /*执行关联公司信息修改*/
    function postCompanyupdate()
    {
        $request = request();
        $id = $request->param('id');
        
        $file = $request->file("logo");
        $files = $request->file("bg");
        $filess = $request->file("src");
        
        $result = $this->validate(['file1' => $file], ['file1' => 'require|image'], ['file1.require' => "上传文件不能为空", 'file1.image' => '非法图像文件']);
       
        $resultss = $this->validate(['file3' => $filess], ['file3' => 'require|image'], ['file3.require' => "上传文件不能为空2", 'file3.image' => '非法图像文件3']);
        if (true !== $result) {
            $this->error($result, "/employer/companyedit");
        }
       
        if (true !== $resultss) {
            $this->error($resultss, "/employer/companyedit");
        }
        if(!empty($files)){
            $infos = $files->move(ROOT_PATH . 'public' . DS . 'uploads');
            $savenames = $infos->getSaveName();
            $exts = $infos->getExtension();
            $names = time() + rand(1, 10000);
            $images = \think\Image::open("./uploads/" . $savenames);
            $images->save("./uploads/thumbhome/" . $names . "." . $exts);
            $images->thumb(60, 60)->save("./uploads/thumbhome/" . $names . "." . $exts);
            $data['bg'] = "./uploads/" . $savenames;
            $data['bgs'] = "/uploads/thumbhome/" . $names . "." . $exts;
        }else{
            $data['bg']='';
            $data['bgs']='';
        }
        //移动文件
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
        
      
        $infoss = $filess->move(ROOT_PATH . 'public' . DS . 'uploads');
        
        $savename = $info->getSaveName();
      
        $savenamess = $infoss->getSaveName();
        $ext = $info->getExtension();
       
        $extss = $infoss->getExtension();
        
        
        //随机图片名字
        $name = time() + rand(1, 10000);
       
        $namess = time() + rand(1, 10000);
        
        
        //打开需要处理的图像文件
        $img = \think\Image::open("./uploads/" . $savename);
      
        $imagess = \think\Image::open("./uploads/" . $savenamess);
        
        $img->save("./uploads/thumbhome/" . $name . "." . $ext);
       
        $imagess->save("./uploads/thumbhome/" . $namess . "." . $extss);
        
        //缩放
        $img->thumb(60, 60)->save("./uploads/thumbhome/" . $name . "." . $ext);
        
        $imagess->thumb(60, 60)->save("./uploads/thumbhome/" . $namess . "." . $extss);
        //获取添加内容
        $data['logo'] = "./uploads/" . $savename;
        $data['logos'] = "/uploads/thumbhome/" . $name . "." . $ext;
        $data['name'] = $request->param("name");
        $data['fullname'] = $request->param("fullname");
        $data['financing'] = $request->param("financing");
        $data['employees'] = $request->param("employees");
        $data['industry'] = $request->param("industry");
        $data['profile'] = $request->param("profile");
        $data['homepage'] = $request->param("homepage");
        $addr['addr'] = $request->param("addr");
        $admin['ce_name'] = $request->param("ce_name");
        $admin['profile'] = $request->param("profiles");
        $env['src'] = "/uploads/" . $savenamess;
        $env['srcs'] = "/uploads/thumbhome/" . $namess . "." . $extss;
//        var_dump($data['profile']);
//        var_dump($admin['profile']);die;
        Db::startTrans();
        try {
//
            $row = Db::table("company")->where('id', $id)->find();
            $rows = Db::table("company_env")->where("co_id", $id)->find();
            
            $bg = $row['bg'];
            $bgs = $row['bgs'];
            $logo = $row['logo'];
            $logos = $row['logos'];
            $src = $rows['src'];
            $srcs = $rows['srcs'];
            
            if (Db::table('company')->where("id", $id)->update($data)) {
                if(!empty($bg && $bgs)){
                    unlink($bg);
                    unlink("." . $bgs);
                }
                
                unlink($logo);
                unlink("." . $logos);
            }
            Db::table('company_addr')->where("co_id", $id)->update($addr);
            Db::table('company_admin')->where("co_id", $id)->update($admin);
            if (Db::table('company_env')->where("co_id", $id)->update($env)) {
                unlink("." . $src);
                unlink("." . $srcs);
            }
            
            Db::commit();
        } catch (\Exception $e) {
            
            //回滚事物
            Db::rollback();
            $this->error("数据修改失败", "/employer/companyedit");
            
        }
        $this->success("数据修改成功", "/employer/companyindex");
        
        
    }
}