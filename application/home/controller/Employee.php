<?php
/**
 * Created by PhpStorm.
 * User: WAXKI
 * Date: 2018/4/18
 * Time: 20:45
 */

namespace app\home\controller;

use app\home\controller\Permit0;
use think\Db;

/**
 * 个人信息页
 * 各个在线简历板块都有相应的处理方法
 * 上传附件简历
 * 上传头像
 * 简历投递状态页，已投，面试，感兴趣
 * */
class Employee extends Permit0
{
    function getIndex()
    {
        return $this->fetch('/account');
    }
    
    function getResume()
    {
        /*
         * 整页列出以uid找数据
         * 编辑单项,以存在按钮里的id找数据
         * 添加,修改提交后,重新渲染一次该部份
         * */
        $data = [
            'info' => $this->getResumeInfoData(),
            'adv' => $this->getResumeAdventageData(),
            'his' => $this->getResumeHistoryData(),
            'edu' => $this->getResumeEducationData(),
        ];
        
        return $this->fetch('/resume/resume', $data);
    }
    
    /*简历,个人信息部份*********************************************/
    function getResumeInfoData()
    {
        $uid = session('uid');
        $phone = session('user.phonePostfix');
        $applyStatus = ['离职-随时到岗', '在职-暂不考虑', '在职-考虑机会', '在职-月内到岗'];
        $sexText = ['女', '男'];
        /*如果记录不存在,此方法返回空数组*/
        $data = Db::table('resume_info')->where('uid', $uid)->select()[0] ?? [];
        if (count($data) < 1) {
            return $data;
        }
        
        /*求职状态，对应文本*/
        $data['applyStatus'] = $applyStatus[$data['in_status']];
        /*从数据库里记录的开始工作时间，得出工作经验年数*/
        $data['years'] = date('Y') - $data['in_start_work_year'];
        /*手机号，session中读取，登录时保存*/
        $data['phone'] = $phone;
        $data['sexText'] = $sexText[$data['in_sex']];
        $data['uid'] = $uid;
        
        return $data;
    }
    
    
    function postResumeInfoShow()
    {
        $data = [
            'info' => $this->getResumeInfoData(),
        ];
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/info_show', $data)];
    }
    
    function postResumeInfoEdit()
    {
        $rq = request();
        if ($rq->isAjax()) {
            /*个人信息表是唯一的,可以根据uid获取数据*/
            $data = $this->getResumeInfoData();
            /*前台传过来的信息表id,存到表单的隐藏域中,修改提交时可用*/
            $data['id'] = $rq->param('id');
            return ['msg' => 'ok', 'html' => $this->fetch('/resume/info_edit', $data)];
        }
    }
    
    function postResumeInfoEditExec()
    {
        $rq = request();
        $userName = $rq->param('in_name');
        if ($res = Db::table('resume_info')->strict(false)->update($rq->param())) {
            session('user.name', $userName); //更新暂存用户名
            Db::table('user')->where('id', session('uid'))->update(['username' => $userName]);
            return $this->postResumeInfoShow();
        } else {
            return ['msg' => '信息表数据更新失败', 'res' => $res];
        }
    }
    
    function postResumeInfoAdd()
    {
        $rq = request();
        if ($rq->isAjax()) {
            return ['msg' => 'ok', 'html' => $this->fetch('/resume/info_add')];
        }
    }
    
    function postResumeInfoAddExec()
    {
        $rq = request();
        $userName = $rq->param('in_name');
        $data = $rq->except(['in_id']);//历史遗留的in_id
        $data['uid'] = session('uid');
//        print_r($data);
        $res = Db::table('resume_info')->strict(false)->insert($data);
        if ($res) {
            session('user.name', $userName); //更新暂存用户名
            Db::table('user')->where('id', session('uid'))->update(['username' => $userName]);
            
            return $this->postResumeInfoShow();
        } else {
            return ['msg' => '添加信息失败,请完整填写字段再提交', 'res' => $res];
        }
    }
    
    
    /*简历,个人优势部份********************************************/
    function getResumeAdventageData()
    {
        $uid = session('uid');
        /*如果记录不存在,此方法返回空数组*/
        $data = Db::table('resume_adventage')->where('uid', $uid)->select()[0] ?? [];
        return $data;
    }
    
    function postResumeAdventageShow()
    {
        $data = [
            'adv' => $this->getResumeAdventageData(),
        ];
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/adventage_show', $data)];
    }
    
    function postResumeAdventageAdd()
    {
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/adventage_add')];
    }
    
    function postResumeAdventageAddExec()
    {
        $rq = request();
        $data = $rq->except('ad_id');
        $data['uid'] = session('uid');
        
        /*防止添加多条数*/
        if (Db::table('resume_adventage')->where('uid', $data['uid'])->find()) {
            return ['msg' => '记录已存在'];
        }
        
        /*插入数据库*/
        if (Db::table('resume_adventage')->strict(false)->insert($data)) {
            return $this->postResumeAdventageShow();
        } else {
            return ['msg' => '添加信息失败,请完整填写字段再提交'];
        }
    }
    
    function postResumeAdventageEdit()
    {
        $rq = request();
        /*个人信息表是唯一的,可以根据uid获取数据*/
        $data = $this->getResumeAdventageData();
        /*前台传过来的信息表id,存到表单的隐藏域中,修改提交时可用*/
        $data['id'] = $rq->param('id');
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/adventage_edit', $data)];
        
    }
    
    function postResumeAdventageEditExec()
    {
        $rq = request();
        $res = Db::table('resume_adventage')->strict(false)->update($rq->param());
        if ($res) {
            return $this->postResumeAdventageShow();
        } else {
            return ['msg' => '数据更新失败', 'res' => $res];
        }
    }
    
    
    /*简历,工作经历 部份********************************************/
    function getResumeHistoryData()
    {
        $uid = session('uid');
        /*如果记录不存在,此方法返回空数组*/
        $data = Db::table('resume_history')->where('uid', $uid)->select();
        return $data;
    }
    
    function postResumeHistoryShow()
    {
        $data = [
            'his' => $this->getResumeHistoryData(),
        ];
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/history_show', $data)];
    }
    
    function postResumeHistoryAdd()
    {
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/history_add')];
    }
    
    function postResumeHistoryAddExec()
    {
        $rq = request();
        $data = $rq->except('hi_id');
        $data['uid'] = session('uid');
        /*插入数据库*/
        $res = Db::table('resume_history')->strict(false)->insert($data);
        
        if ($res) {
            return $this->postResumeHistoryShow();
        } else {
            return ['msg' => '添加信息失败,请完整填写字段再提交'];
        }
    }
    
    function postResumeHistoryEdit()
    {
        $rq = request();
        /*个人信息表是唯一的,可以根据uid获取数据*/
        $data = Db::table('resume_history')->find($rq->param('id'));
        /*前台传过来的信息表id,存到表单的隐藏域中,修改提交时可用*/
        $data['id'] = $rq->param('id');
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/history_edit', $data)];
        
    }
    
    function postResumeHistoryEditExec()
    {
        $rq = request();
        $res = Db::table('resume_history')->strict(false)->update($rq->param());
        if ($res) {
            return $this->postResumeHistoryShow();
        } else {
            return ['msg' => '数据更新失败', 'res' => $res];
        }
    }
    
    function postResumeHistoryDelete()
    {
        $rq = request();
        
        /*删除记录*/
        if (Db::table('resume_history')->delete($rq->param('id'))) {
            return $this->postResumeHistoryShow();
        } else {
            return ['msg' => '删除操作未执行'];
        }
    }
    
    
    /*简历,个人教育背景部份*******************************/
    function getResumeEducationData()
    {
        $uid = session('uid');
        /*如果记录不存在,此方法返回空数组*/
        $data = Db::table('resume_education')->where('uid', $uid)->select();
        return $data;
    }
    
    function postResumeEducationShow()
    {
        $data = [
            'edu' => $this->getResumeEducationData(),
        ];
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/education_show', $data)];
    }
    
    function postResumeEducationAdd()
    {
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/education_add')];
    }
    
    function postResumeEducationAddExec()
    {
        $rq = request();
        $data = $rq->except('hi_id');
        $data['uid'] = session('uid');
        /*插入数据库*/
        $res = Db::table('resume_education')->strict(false)->insert($data);
        
        if ($res) {
            return $this->postResumeEducationShow();
        } else {
            return ['msg' => '添加信息失败,请完整填写字段再提交'];
        }
    }
    
    function postResumeEducationEdit()
    {
        $rq = request();
        $data = Db::table('resume_education')->find($rq->param('id'));
        /*前台传过来的信息表id,存到表单的隐藏域中,修改提交时可用*/
        $data['id'] = $rq->param('id');
        return ['msg' => 'ok', 'html' => $this->fetch('/resume/education_edit', $data)];
        
    }
    
    function postResumeEducationEditExec()
    {
        $rq = request();
        $res = Db::table('resume_education')->strict(false)->update($rq->param());
        if ($res) {
            return $this->postResumeEducationShow();
        } else {
            return ['msg' => '数据更新失败', 'res' => $res];
        }
    }
    
    function postResumeEducationDelete()
    {
        $rq = request();
        
        /*删除记录*/
        if (Db::table('resume_education')->delete($rq->param('id'))) {
            return $this->postResumeEducationShow();
        } else {
            return ['msg' => '删除操作未执行'];
        }
    }
    
    /*账号管理**************************************************/
    function getAccount()
    {
        return $this->getPhoneEdit();
//        return $this->fetch('/');
    }
    
    /*修改手机号 */
    function getPhoneEdit()
    {
        $phone = session('user.phonePostfix');
        $p = substr_replace($phone, "****", 3, 4);
//        var_dump($_SESSION);
        return $this->fetch("/employee/editphone", ['p' => $p]);
    }
    
    function postPhoneEditExec()
    {
        $rq = request();
        $fcode = $rq->param('captcha');
        //对比输入的验证码和系统验证码
        $uid = session('uid');
        $data = [
            'phone_prefix' => $rq->param('regionCode'),
            'phone_postfix' => $rq->param('phone'),
            'phone' => $rq->param('regionCode') . $rq->param('phone')
        ];
        
        if (!captcha_check($fcode)) {
            return ['msg' => "图形验证码错误"];
        }
        
        if (!sms_check($data['phone'], $rq->param('phoneCode'))) {
            return ['msg' => "短信验证码不正确或过期"];
        }
        if (Db::table("user")->where('id', $uid)->update($data)) {
            session('user.phonePostfix', $data['phone_postfix']); //短手机号
            session('user.phone', $data['phone']); //长手机号
            return ['msg' => "ok", 'redirect' => '/employee/PhoneEdit'];
        } else {
            return ['msg' => "更新数据失败"];
        }
    }
    
    /*修改密码*/
    function getPwdEdit()
    {
        $uid = session('uid');
        $row = Db::table('user')->where('id', $uid)->find();
        $phone = $row['phone_postfix'];
        $p = substr_replace($phone, "****", 3, 4);
        
        return $this->fetch("/employee/editpwd", ['row' => $row, 'p' => $p]);
    }
    
    function postPwdAddExec()
    {
        $rq = request();
        $uid = session('uid');
        //获取修改的值
        $data['password'] = md5($rq->param('password'));
        
        if (Db::table("user")->where('id', $uid)->update($data)) {
            session('user.password', $data['password']); //新密码存入session
            return ['msg' => "ok", 'redirect' => '/employee/pwdEdit'];
        } else {
            return ['msg' => "更新数据失败"];
        }
    }
    
    function postPwdEditExec()
    {
    
    }
    
    function postAvatarUpdate()
    {
        $rq = request();
        if (!empty($imgstr = $rq->param('data'))) {
            $base64_body = substr(strstr($imgstr, ','), 1);
            //2，解码:
            $data = base64_decode($base64_body);
            $basePath = ROOT_PATH . 'public' . DS; // 操作系统盘根目录到public目录的路径,静态资源根目录
            $path = '/uploads/avatar/'; // TP5 的public目录下的目录
            $realSavePath = $basePath . $path; // 操作系统中的目录路径,不含文件名
            
            if (!is_dir($realSavePath)) {
                mkdir($realSavePath, 0777, true);
            }
            
            preg_match('|image/(.+);base|', $imgstr, $a); // 匹配图片后缀
            $extension = $a[1] ?? '';
            $fileName = uniqid('avatar_', true) . '.' . $extension; //文件名,带扩展名
            $saveName = $path . $fileName; //TP5 静态资源文件路径,包括文件名
            $realSaveName=$realSavePath.$fileName; //操作系统文件下
            
            /*存储图片*/
            if (file_put_contents($realSaveName, $data)) {
                /*旧文件路径*/
                $user = Db::table('user')->where('id', session('uid'))->field('avatar')->find();
                $oldAvatar = $basePath . $user['avatar'];
                
                if (Db::table('user')->where('id', session('uid'))->update(['avatar' => $saveName])) {
                    /*删除旧头像文件*/
                    if (is_file($oldAvatar)) {
                        unlink($oldAvatar);
                    }
                    /*新头像路径出存入session*/
                    session('user.avatar',$saveName);
                    /*新头像地址传入数据库后，返回成功信息*/
                    return [
                        "rescode" => 1,
                        "resmsg" => "请求成功",
                        "verifyTip" => false,
                        "url" => [
                            $saveName,
                            $saveName,
                        ]
                    ];
                } else {
                    /*新文件存入数据库失败后，删除新头像文件*/
                    unlink($realSaveName);
                }
            }
            /*如果前面没有成功返回，则返回失败信息给前台*/
            return [
                "rescode" => 0,
                "resmsg" => "更新头像请求失败",
                "verifyTip" => false,
            ];
        }
    }
    
    
}
