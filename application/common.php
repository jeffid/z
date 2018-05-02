<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件


use think\Loader;
use think\Config;
use think\Db;

function email($to, $title, $content, $cfg = 'zhipin')
{

    import('org.email.SMTP');
    import('org.email.PHPMailer');
    $mail = new PHPMailer();
    //设置字符集
    $mail->CharSet = "utf-8";
    //设置采用SMTP方式发送邮件
    $mail->IsSMTP();
    //设置邮件服务器地址
    $mail->Host = config($cfg . '.host');//###
    //设置邮件服务器的端口 默认的是25  如果需要谷歌邮箱的话 443 端口号
    $mail->Port = 25;
    //设置发件人的邮箱地址
    $mail->From = config($cfg . '.username'); //###
    $mail->FromName = config($cfg . '.fromname');//
    //设置SMTP是否需要密码验证
    $mail->SMTPAuth = true;
    //发送方
    $mail->Username = config($cfg . '.username');//###
    $mail->Password = config($cfg . '.password');//###客户端的授权密码
    //发送邮件的主题
    $mail->Subject = $title;
    //内容类型 文本型
    $mail->AltBody = "text/html";
    //发送的内容
    $mail->Body = $content;
    //设置内容是否为html格式
    $mail->IsHTML(true);
    //设置接收方
    $mail->AddAddress(trim($to));
    if (!$mail->Send()) {
        echo "失败  " . $mail->ErrorInfo;
//        var_dump($mail);
        return false;
    } else {
        return true;
    }
}

function sms($phone, $expire = 30)
{
    import('org.sms.Ucpaas');
    $options['accountsid'] = 'f37f253b37273a6d3555ecd36313065d';
    $options['token'] = '3c9e77be86bf471ef6f6e7292814f939';
    $appid = 'eb8268b7deb2440fb9eb31a4566646ad';
    $templateid = '310670';
    $code = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
    session('phone',$phone);
    session('phoneCode',$code);
    session('phoneCodeExpire',time()+$expire*60);
    $param = "{$code},{$expire}";// 验证码,有效时间
    $uid = "";
    $ucpass = new Ucpaas($options);
    return $ucpass->SendSms($appid, $templateid, $param, $phone, $uid);
}

function sms_check($phone,$phoneCode){
    if ($phoneCode == session('phoneCode') && $phone == session('phone') && time() < session('phoneCodeExpire')) {
//        session('phoneCode',null); //todo 暂时不删除短信验证码
        return true;
    }
    else {
        return false;
    }
}

function replaceRecord($table,$jid, $status=['status' => '0'])
{
    $jobfield = [
        'hr_id',
        'co_id',
        'id j_id',
        'job j_name',
        'location j_location',
        'degree j_degree',
        'salary j_salary',
        'experience j_experience',
    ];
    $hrfield = [
        'username' => 'hr_name',
        'avatar' => 'hr_avatar',
        'position' => 'hr_position'
    ];
    $cofield = [
        'name' => 'co_name',
        'industry' => 'co_industry',
        'financing' => 'co_financing',
        'employees' => 'co_employees',
        'logo' => 'co_logo'
    ];
    
    $job = Db::table('job')->where('id', $jid)->field($jobfield)->find();
    $hr = Db::table('user')->where('id', $job['hr_id'])->field($hrfield)->find();
    $company = Db::table('company')->where('id', $job['co_id'])->field($cofield)->find();
    
    $data = $job + $hr + $company + $status + ['uid'=>session('uid'),'addtime'=>time(),'username'=>session('user.name')];
    
    return Db::table($table)->insert($data, 'REPLACE');
}

 /*薪水文本转文本*/
 // todo 薪水的输入分最底、最高两个选择得出的范围比较合适，非当前版本
function salary2text($n){
    $a=[
        '1~3k',
        '3~5k',
        '5~7k',
        '7~9k',
        '9~11k',
        '11~13k',
        '13~15k',
        '15~17k',
        '17~19k',
        '19~21k',
        '21~23k',
        '23~25k',
        '25~27k',
        '27~29k',
        '29~31k',
        '31~33k',
        '33~35k',
        '35~37k',
        '37~39k',
        '39~41k',
        '41~43k',
        '43~45k',
        '45~47k',
        '47~49k',
    ];
    return $a[$n];
}

/*性别索引转文本*/
function sex2text($n){
    $a=[
        '女',
        '男'
    ];
    return $a[$n];
}

function getCategory($data, $pid=0)
{
    $it = [];
    foreach ($data as $item) {
        if ($item['pid'] == $pid) {
            $item['children'] = getCategory($data, $item['id']);
            $it[] = $item;
        }
    }
    return $it;
}