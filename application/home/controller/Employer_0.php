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
    function getaccount() {
        return $this->getInfo();
    }
    //个人信息
    function getInfo(){
        $id = session('uid') ;
        $row = Db::table('user')->where('id', $id)->find();
        return $this->fetch("/employer/info", ['row' => $row]);
    }
    //个人信息添加
    function getAddinfo(){
        
        return $this->fetch("/employer/addinfo");
    }
    function postUpdateinfo(){
        $request=request();

        $id = session('uid') ;
        $data = $request->only(['username','position']);

        if (DB::table('user')->where('id',$id)->update($data)){
            session('user.name', $data['username']); //更新用户实名
            session('user.position', $data['position']); //更新用户职位
            $this->success("数据添加成功", "/employer/info");
        }else{
            $this->error("数据添加失败", "/employer/info");
        }
    }
    
    function getAdd()
    {
        return $this->fetch("/employer/employer");
    }
    
    function postInsert()
    {
        $request = request();
        //封装需要添加数据
//        $data = $request->only(['job', 'location', 'experience', 'degree', 'job_descr', 'team_descr', 'tags', 'address','salary']);
        $data = $request->param();
        //添加时间
        $data['timestamp'] = time();
        //封装status
        $data['status'] = 1;
        //HR id
        $data['hr_id'] = 1;
        //公司ID
        $data['co_id'] = 1;
        if (DB::table("job")->strict(false)->insert($data)) {
            echo "ok";
//            $this->success("数据添加成功");
        } else {
            echo "error";
        }
//            $this->error("数据添加失败");
    }
    
    function getindex()
    {
        $request = request();
        $job = Db::table("job")->paginate(1);
        return $this->fetch("/employer/index", ['job' => $job, 'data' => $request->param()]);
    }
    
    function getEdit()
    {
        
        $request = request();
        $id = $request->param('id');
        $row = Db::table('job')->where('id', "{$id}")->find();
        return $this->fetch("/employer/index1", ['row' => $row]);
    }
    
    function postUpdate()
    {
        //获取id
        $request = request();
        $id = $request->param('id');
        $id = session('uid') ;
        //获取修改的值
        $data = $request->only(['job', 'location', 'experience', 'degree', 'job_descr', 'team_descr', 'tags', 'address']);
//        var_dump($data);die;
        
        if (Db::table("job")->where('id', $id)->update($data)) {
            echo 'ok';
        } else {
            echo "error";
        }
    }
    
    function getEditphone()
    {
        
        $uid = session('uid');
        $row = Db::table('user')->where('id', "{$uid}")->find();
        $phone = $row['phone_postfix'];
        $p = substr_replace($phone, "****", 3, 4);
        return $this->fetch("/employer/phone", ['p' => $p]);
    }
    
    function postPhoneupdate()
    {
        
        $rq = request();
        $fcode = $rq->param('captcha');
        //对比输入的验证码和系统验证码
        
        $uid = session('uid');
        $data = ['phone_prefix' => $rq->param('regionCode'), 'phone_postfix' => $rq->param('phone'), 'phone' => $rq->param('regionCode') . $rq->param('phone')];
        
        if (!captcha_check($fcode)) {
            // echo "error";
            echo "captcha error";
            return;
        }
        
        if ($data['phone'] == session('phone') && $rq->param('phoneCode') == session('phoneCode') && time() < session('phoneCodeExpire')) {
            
            session('phoneCode', null); //删除验证码,防止重用
            echo Db::table("user")->where('id', $uid)->update($data) ? 'ok' : 'error';
//                unset($data['captcha']);
//                unset($data['phoneCode']);
//               echo db('user')->insert($data);
        } else {
            $dd = [
                $data['phone'] => session('phone'),
                $rq->param('phoneCode') => session('phoneCode'),
                time() => session('phoneCodeExpire'),
            
            ];
            var_dump($dd);
            
//            echo ' 短信验证码不正确或过期  ';
        }
        
    }
    
    function getEditpwd()
    {
        $uid = session('uid');
        $row = Db::table('user')->where('id', "{$uid}")->find();
        $phone = $row['phone_postfix'];
        $p = substr_replace($phone, "****", 3, 4);
        
        return $this->fetch("/employer/editpwd", ['row' => $row, 'p' => $p]);
    }
    
    function postPwdupdate()
    {
        //获取id
        $request = request();
        $id = $request->param('id');
        $id = 1;
        //获取修改的值
        $data = $request->only(['password']);
        
        if (Db::table("user")->where('id', $id)->update($data)) {
            echo 'ok';
        } else {
            echo "error";
        }
    }
    
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
    
    function getReindex()
    {
        
        $request = request();
        $job = Db::table("offer")->paginate(1);
        return $this->fetch("/employer/received_resume", ['job' => $job, 'data' => $request->param()]);
    }
    
    function getReview()
    {
        $request = request();
        $id = $request->param('id');
        $row = Db::query("select * from resume_info as ri,resume_adventage as ra,resume_history as rh,resume_education as re where ri.uid=ra.uid and ri.uid=rh.uid and ri.uid=re.uid and ri.uid={$id}")[0];
        return $this->fetch("/employer/resume_review", ['row' => $row]);
    }
    
    function postChangeOfferStatus()
    {
        $request = request();
        if (Db::table("offer")->where('id', $request->param('id'))->update(['status' => $request->param('optionIndex')])) {
            
            echo "ok";
        } else {
            echo "error";
        }
    }
    
    
    //查看
    function getCompanyindex()
    {
        $id = session('uid');
        $info = Db::table('user')->where('id', $id)->find();
//        var_dump($info['co_id']);
        $row = Db::query("select * from company as c,company_addr as ca,company_env as ce,company_admin as cad where c.id=ca.co_id and c.id=ce.co_id and c.id=cad.co_id and c.id={$info['co_id']}");
        $row = $row[0] ?? [];
        return $this->fetch("/employer/companyindex", ['row' => $row,'info'=>$info]);
    }
    
    
    //添加
    function getCompanyadd()
    {
        
        return $this->fetch("/employer/companyadd");
    }
    
    
    //执行添加
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
        $results = $this->validate(['file2' => $files], ['file2' => 'require|image'], ['file2.require' => "上传文件不能为空2", 'file2.image' => '非法图像文件2']);
        $resultss = $this->validate(['file3' => $filess], ['file3' => 'require|image'], ['file3.require' => "上传文件不能为空2", 'file3.image' => '非法图像文件3']);
        if (true !== $result) {
            $this->error($result, "/employer/companyadd");
        }
        if (true !== $results) {
            $this->error($results, "/employer/companyadd");
        }
        if (true !== $resultss) {
            $this->error($results, "/employer/companyadd");
        }
        //移动文件
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');
//        $info=$file->move('/static/public/uploads/');
//        var_dump($info);die;
        $infos = $files->move(ROOT_PATH . 'public' . DS . 'uploads');
        $infoss = $filess->move(ROOT_PATH . 'public' . DS . 'uploads');
//        $infos=$files->move('/static/public/uploads/');
        //获取上传文件信息
        $savename = $info->getSaveName();
        $savenames = $infos->getSaveName();
        $savenamess = $infoss->getSaveName();
        $ext = $info->getExtension();
        $exts = $infos->getExtension();
        $extss = $infoss->getExtension();

//        echo $savename.":".$ext;
//        echo $savenames.":".$exts;die;
        
        //随机图片名字
        $name = time() + rand(1, 10000);
        $names = time() + rand(1, 10000);
        $namess = time() + rand(1, 10000);

//        var_dump($savename);die;
        //打开需要处理的图像文件
        $img = \think\Image::open("./uploads/" . $savename);
        
        $images = \think\Image::open("./uploads/" . $savenames);
        $imagess = \think\Image::open("./uploads/" . $savenamess);
        
        $img->save("./uploads/thumbhome/" . $name . "." . $ext);
        $images->save("./uploads/thumbhome/" . $names . "." . $exts);
        $imagess->save("./uploads/thumbhome/" . $namess . "." . $extss);
//        var_dump($images->save("./uploads/thumb/".$names.".".$exts));
//        die;
        
        //缩放
        $img->thumb(60, 60)->save("./uploads/thumbhome/" . $name . "." . $ext);
        $images->thumb(60, 60)->save("./uploads/thumbhome/" . $names . "." . $exts);
        $imagess->thumb(60, 60)->save("./uploads/thumbhome/" . $namess . "." . $extss);
        //获取添加内容
        $data['logo'] = "/uploads/" . $savename;
        $data['logos'] = "/uploads/thumbhome/" . $name . "." . $ext;
        $data['bg'] = "/uploads/" . $savenames;
        $data['bgs'] = "/uploads/thumbhome/" . $names . "." . $exts;
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
        $admin['profile'] = $request->param("profile");
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
            $user['id'] = session('uid') ;
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
        session('user.cid',$co_id);
        $this->success("数据添加成功", "/employer/companyindex");
        
    }
    
    
    //修改
    function getCompanyedit()
    {
        $id = session('uid') ;
        $info = Db::table('user')->where('id', $id)->find();
        $row = Db::query("select * from company as c,company_addr as ca,company_env as ce,company_admin as cad where c.id=ca.co_id and c.id=ce.co_id and c.id=cad.co_id and c.id={$info['co_id']}");
        $row = $row[0] ?? [];
        return $this->fetch("/employer/companyedit", ['row' => $row,'info'=>$info]);
    }
    
    
    function postCompanyupdate()
    {
        //获取id
        
        $request = request();
        $id = $request->param('id');
        
       
        $file = $request->file("logo");
        $files = $request->file("bg");
        $filess = $request->file("src");
        
        $result = $this->validate(['file1' => $file], ['file1' => 'require|image'], ['file1.require' => "上传文件不能为空", 'file1.image' => '非法图像文件']);
        $results = $this->validate(['file2' => $files], ['file2' => 'require|image'], ['file2.require' => "上传文件不能为空2", 'file2.image' => '非法图像文件2']);
        $resultss = $this->validate(['file3' => $filess], ['file3' => 'require|image'], ['file3.require' => "上传文件不能为空2", 'file3.image' => '非法图像文件3']);
        if (true !== $result) {
            $this->error($result, "/employer/companyedit");
        }
        if (true !== $results) {
            $this->error($results, "/employer/companyedit");
        }
        if (true !== $resultss) {
            $this->error($results, "/employer/companyedit");
        }
        //移动文件
        $info = $file->move(ROOT_PATH . 'public' . DS . 'uploads');

        $infos = $files->move(ROOT_PATH . 'public' . DS . 'uploads');
        $infoss = $filess->move(ROOT_PATH . 'public' . DS . 'uploads');

        $savename = $info->getSaveName();
        $savenames = $infos->getSaveName();
        $savenamess = $infoss->getSaveName();
        $ext = $info->getExtension();
        $exts = $infos->getExtension();
        $extss = $infoss->getExtension();

        
        //随机图片名字
        $name = time() + rand(1, 10000);
        $names = time() + rand(1, 10000);
        $namess = time() + rand(1, 10000);


        //打开需要处理的图像文件
        $img = \think\Image::open("./uploads/" . $savename);
        $images = \think\Image::open("./uploads/" . $savenames);
        $imagess = \think\Image::open("./uploads/" . $savenamess);
        
        $img->save("./uploads/thumbhome/" . $name . "." . $ext);
        $images->save("./uploads/thumbhome/" . $names . "." . $exts);
        $imagess->save("./uploads/thumbhome/" . $names . "." . $extss);
        
        //缩放
        $img->thumb(60, 60)->save("./uploads/thumbhome/" . $name . "." . $ext);
        $images->thumb(60, 60)->save("./uploads/thumbhome/" . $names . "." . $exts);
        $imagess->thumb(60, 60)->save("./uploads/thumbhome/" . $namess . "." . $extss);
        //获取添加内容
        $data['logo'] = "/uploads/" . $savename;
        $data['logos'] = "/uploads/thumbhome/" . $name . "." . $ext;
        $data['bg'] = "/uploads/" . $savenames;
        $data['bgs'] = "/uploads/thumbhome/" . $names . "." . $exts;
        $data['name'] = $request->param("name");
        $data['fullname'] = $request->param("fullname");
        $data['financing'] = $request->param("financing");
        $data['employees'] = $request->param("employees");
        $data['industry'] = $request->param("industry");
        $data['profile'] = $request->param("profile");
        $data['homepage'] = $request->param("homepage");
        $addr['addr'] = $request->param("addr");
        $admin['ce_name'] = $request->param("ce_name");
        $admin['profile'] = $request->param("profile");
        $env['src'] = "/uploads/" . $savenamess;
        $env['srcs'] = "/uploads/thumbhome/" . $namess . "." . $extss;

        Db::startTrans();
        try {
//
            $row = Db::table("company")->where('id',$id)->find();
            $rows = Db::table("company_env")->where("co_id", $id)->find();
          
            $bg = $row['bg'];
            $bgs = $row['bgs'];
            $logo = $row['logo'];
            $logos = $row['logos'];
            $src = $rows['src'];
            $srcs = $rows['srcs'];

            if (Db::table('company')->where("id", $id)->update($data)) {
                unlink(".".$bg);
                unlink("." . $bgs);
                unlink(".".$logo);
                unlink("." . $logos);
            }
            Db::table('company_addr')->where("co_id", $id)->update($addr);
            Db::table('company_admin')->where("co_id",$id)->update($admin);
            if (Db::table('company_env')->where("co_id", $id)->update($env)) {
                unlink(".".$src);
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