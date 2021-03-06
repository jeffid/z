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
    session('phone', $phone);
    session('phoneCode', $code);
    session('phoneCodeExpire', time() + $expire * 60);
    $param = "{$code},{$expire}";// 验证码,有效时间
    $uid = "";
    $ucpass = new Ucpaas($options);
    return $ucpass->SendSms($appid, $templateid, $param, $phone, $uid);
}

function sms_check($phone, $phoneCode)
{
    if ($phoneCode == session('phoneCode') && $phone == session('phone') && time() < session('phoneCodeExpire')) {
//        session('phoneCode',null); //todo 暂时不删除短信验证码
        return true;
    } else {
        return false;
    }
}

function replaceRecord($table, $jid, $status = ['status' => '0'])
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
        'logos' => 'co_logo'
    ];
    
    $job = Db::table('job')->where('id', $jid)->field($jobfield)->find();
    $hr = Db::table('user')->where('id', $job['hr_id'])->field($hrfield)->find();
    $company = Db::table('company')->where('id', $job['co_id'])->field($cofield)->find();
    
    $data = $job + $hr + $company + $status + ['uid' => session('uid'), 'addtime' => time(), 'username' => session('user.name')];
    
    return Db::table($table)->insert($data, 'REPLACE');
}

/*薪水文本转文本*/
// todo 薪水的输入分最底、最高两个选择得出的范围比较合适，非当前版本
function salary2text($n)
{
    $a = [
        "0" => '面议',
        "1" => '1K',
        "2" => '2K',
        "3" => '3K',
        "4" => '4K',
        "5" => '5K',
        "6" => '6K',
        "7" => '7K',
        "8" => '8K',
        "9" => '9K',
        "10" => '10K',
        "11" => '11K',
        "12" => '12K',
        "13" => '13K',
        "14" => '14K',
        "15" => '15K',
        "16" => '16K',
        "17" => '17K',
        "18" => '18K',
        "19" => '19K',
        "20" => '20K',
        "21" => '21K',
        "22" => '22K',
        "23" => '23K',
        "24" => '24K',
        "25" => '25K',
        "26" => '26K',
        "27" => '27K',
        "28" => '28K',
        "29" => '29K',
        "30" => '30K',
        "31" => '31K',
        "32" => '32K',
        "33" => '33K',
        "34" => '34K',
        "35" => '35K',
        "36" => '36K',
        "37" => '37K',
        "38" => '38K',
        "39" => '39K',
        "40" => '40K',
        "41" => '41K',
        "42" => '42K',
        "43" => '43K',
        "44" => '44K',
        "45" => '45K',
        "46" => '46K',
        "47" => '47K',
        "48" => '48K',
        "49" => '49K',
        "50" => '50K',
        "60" => '60K',
        "70" => '70K',
        "80" => '80K',
        "90" => '90K',
        "100" => '100K',
        "110" => '110K',
        "120" => '120K',
        "130" => '130K',
        "140" => '140K',
        "150" => '150K',
        "160" => '160K',
        "170" => '170K',
        "180" => '180K',
        "190" => '190K',
        "200" => '200K',
        "210" => '210K',
        "220" => '220K',
        "230" => '230K',
        "240" => '240K',
        "250" => '250K',
    ];
    return $a[$n];
}


/*性别索引转文本*/
function sex2text($n)
{
    $a = [
        '女',
        '男'
    ];
    return $a[$n];
}

/*站内信索引转文本*/
function scope2text($n)
{
    $a = [
        '0' => '面向普通用户',
        '1' => '面向HR',
        '3' => '系统消息',
    ];
    return $a[$n];
}

function getCategory($data, $pid = 0)
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

/*获取存放其它位置的多维数组职业类型数据*/
function gettest()
{
    $ct = \data\Category::getCATEGORY();
//    $this->setCategory($ct,'0');
    
    /*从数据库获取多维分类目录*/
    $data = Db::table('category')->select();
    echo '<pre>';
    print_r($this->getCategory($data));
}

/*将分类目录(数组格式)存入数据库*/
function setCategory($data, $pid, $path = '')
{
    foreach ($data as $item) {
        $field = [
            'name' => $item['name'],
            'pid' => $pid,
            'path' => trim($path . ',' . $pid, ',')
        ];
        $newPid = Db::table('category')->insertGetId($field);
        if (count($item['children']) > 0) {
            $this->category($item['children'], $newPid, $field['path']);
        }
    }
}


function applyStatus2text($n){
    $a=[
        '离职-随时到岗',
        '在职-暂不考虑',
        '在职-考虑机会',
        '在职-月内到岗',
    ];
    return $a[$n];
}


/*
 * select id from message_content where type=’global’ and id not in (select message_id from message where receiver_id=A);
 * */

function fetchGlobalMsg()
{
    /*还没加入当前登录用户信息表 的系统消息集合*/
    $newMsg = Db::table('msg')
        ->where('id', 'NOT IN', function ($query) {
            $query->table('msglog')->where('receiver_id', session('uid'))->field('m_id');
        })
        ->where([
            'scope'=> 3, //系统消息代号
            'expiretime'=>[['=','0'],['>',time()],'or'], //永久有效消息或是在有效期内
        ])
        ->field([
            'id'=>'m_id',
            'scope'
        ])
        ->select();
    
    if (!empty($newMsg)) {
        /*进一步完善插入消息记录表的字段*/
        foreach ($newMsg as &$item) {
            $item['receiver_id'] = session('uid');
        }

//    echo '<pre>';
//    print_r($newMsg);
//    echo '</pre>';
        /*插入新消息记录*/
        Db::table('msglog')->insertAll($newMsg);
        
    }
    
}