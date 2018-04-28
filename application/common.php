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