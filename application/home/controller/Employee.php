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
    
    function getChangePhone()
    {
        return $this->fetch('/account/change_phone');
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
        ];
        return $this->fetch('/resume/resume', $data);
    }
    
    
    function getResumeInfoData()
    {
        $uid = session('uid') || 1;
        $phone = session('phone') || 17665450001;
        $applyStatus = ['离职-随时到岗', '在职-暂不考虑', '在职-考虑机会', '在职-月内到岗'];
        $sexText = ['女', '男'];
        
        $data = Db::table('resume_info')->where('uid', $uid)->select()[0];
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
        $res = ['msg' => 'ok', $this->fetch('/resume/info_show', $data)];
        return $res;
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
        var_dump($rq->param());
        $res=Db::table('resume_info')->strict(false)->update($rq->param());
        if ($res) {
            $this->postResumeInfoShow();
        } else {
            return ['msg' => '信息表数据更新失败','res'=>$res];
        }
    }
    
}