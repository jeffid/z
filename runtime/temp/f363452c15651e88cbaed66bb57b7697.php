<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\detail.html";i:1525167518;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1525146655;}*/ ?>
<!DOCTYPE html>
<html class="standard"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title></title>
    <meta name="keywords" content="Boss直聘,直直,招聘,求职,找工作">
    <meta name="description" content="Boss直聘是一款互联网求职招聘找工作软件，让求职者与Boss直接开聊、加快面试、即时反馈，找工作就用Boss直聘。直直为Boss直聘IP，下载APP让直直带你轻松找工作！">
    <link href="/static/home/css/main.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/static/home/css/sub.css">
    
</head>
<body>
<div id="wrap" class="user-center">
    
    <div id="header">
        <div class="inner home-inner">
            <div class="logo"><a href="/index/index" ka="header-home-logo" title="BOSS直聘"><span>BOSS直聘</span></a>
            </div>
            <div class="nav">
                <ul>
                    <li class=""><a ka="header-home" href="/index/index">首页</a></li>
                    <li class=""><a ka="header-job" href="/search/index">求职</a></li>
                    <li class=""><a ka="header-app" href="#">APP</a></li>
                    <li class=""><a ka="header-article" href="#">资讯</a></li>
                </ul>
            </div>
            
            <div class="user-nav">
                
                <?php if(empty(\think\Session::get('uid')) || ((\think\Session::get('uid') instanceof \think\Collection || \think\Session::get('uid') instanceof \think\Paginator ) && \think\Session::get('uid')->isEmpty())): ?>
                <!--未登录-->
                <div class="btns">
                    <a href="/homelogin/index" class="link-publish" ka="header-publish" title="免费发布职位">免费发布职位</a><em class="vline"></em>
                    <!--<a  href="javascript:;" ka="header-sao" class="link-scan">Boss 扫码登录</a>-->
                    <a  href="/signup/index" ka="header-register" class="btn btn-outline">注册</a>
                    <a href="/homelogin/index" ka="header-login" class="btn btn-outline">登录</a>
                </div>
                
                <?php else: if(\think\Session::get('user.status') == 1): ?>
                
                <ul>
                    <li class="">
                        <a ka="header-message" href="#">消息
                            <span class="nav-chat-num"></span>
                        </a>
                    </li>
                    
                    <li class="nav-figure">
                        <a href="#" ka="header-username">
                            <span class="label-text"><?php echo (\think\Session::get('user.name')) ? \think\Session::get('user.name') :  '请完善资料'; ?></span>
                            <img src="#" alt="">
                        </a>
                        <div class="dropdown" style="display: none;">
                            <!--<a href="/personal/deliver" ka="header-personal">个人中心</a>-->
                            <a href="/employer/account" ka="account_manage">账户管理</a>
                            <a href="javascript:;" class="link-recruit" ka="header-recruit">我要招聘</a>
                            <a href="/homelogin/logout" ka="header-logout">退出</a>
                            <p class="recruit-tip" style="display: none;">
                                <img src="/static/home/images/recruit-tip.gif" alt="">
                                <span>请在 APP 端“我的 - 设置”中<br>切换为Boss身份，即可进行招聘</span>
                            </p>
                        </div>
                    </li>
                </ul>
                
                <?php else: ?>
    
                <ul>
                    <li class="">
                        <a ka="header-message" href="#">消息
                            <span class="nav-chat-num"></span>
                        </a>
                    </li>
                    <li class="">
                        <a ka="header-resume" href="/employee/resume">简历</a>
                    </li>
                    <li class="nav-figure">
                        <a href="#" ka="header-username">
                            <span class="label-text"><?php echo (\think\Session::get('user.name')) ? \think\Session::get('user.name') :  '请完善资料'; ?></span>
                            <img src="#" alt="">
                        </a>
                        <div class="dropdown" style="display: none;">
                            <a href="/personal/deliver" ka="header-personal">个人中心</a>
                            <a href="/employee/account" ka="account_manage">账户管理</a>
                            <a href="javascript:;" class="link-recruit" ka="header-recruit">我要招聘</a>
                            <a href="/homelogin/logout" ka="header-logout">退出</a>
                            <p class="recruit-tip" style="display: none;">
                                <img src="/static/home/images/recruit-tip.gif" alt="">
                                <span>请在 APP 端“我的 - 设置”中<br>切换为Boss身份，即可进行招聘</span>
                            </p>
                        </div>
                    </li>
                </ul>
    
                <?php endif; endif; ?>
                
            </div>
        </div>
    </div>
    

        
<div id="wrap">
    
    <div id="main">
        <div class="job-banner">
            <div class="inner home-inner">
                
                <div class="job-primary detail-box">
                    <div class="info-primary">
                        <div class="job-author">
                            <span class="time">发布于<?php echo date( 'Y-m-d H:i:s',$row['timestamp']); ?></span>
                        </div>
                        <div class="name">
                            <h1><?php echo $row['job']; ?></h1>
                            <span class="badge"><?php echo salary2text($row['salary']); ?></span>
                        </div>
                        <p>城市：<?php echo $row['location']; ?>
                            <em class="vline"></em>经验：<?php echo $row['experience']; ?>年
                            <em class="vline"></em>学历：<?php echo $row['degree']; ?>
                        </p>
                        
                        <?php if(!(empty($row['tags']) || (($row['tags'] instanceof \think\Collection || $row['tags'] instanceof \think\Paginator ) && $row['tags']->isEmpty()))): ?>
                        <div class="job-tags">
                            <span><?php echo $row['tags']; ?></span>
                        </div>
                        <?php endif; ?>
                    
                    </div>
                    
                    <div class="info-company">
                        <div class="company-logo">
                            <a ka="job-detail-company" href=javascript:; title="">
                                <img src="<?php echo $info['logos']; ?>" alt="">
                            </a>
                        </div>
                        <h3 class="name">
                            <a ka="job-detail-company" href="javascript:;" title="找靓机招聘"><?php echo $info['name']; ?></a>
                        </h3>
                        <p><?php echo $info['financing']; ?>
                            <em class="vline"></em><?php echo $info['employees']; ?>人
                            <em class="vline"></em><?php echo $info['industry']; ?>
                        </p>
                        <p><?php echo $info['homepage']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="smallbanner" style="display: none;">
            <div class="inner home-inner">
                <div class="detail-op">
                    <div class="btns">
                        <a ka="go_greet_done_18324848" href="javascript:;" data-url="" redirect-url=""
                           class="btn btn-startchat">简历投放</a>
                        <div class="op-links">
                            <a href="javascript:;" ka="job_detail_like" data-url="" class="link-like ">感兴趣</a>
                            <a ka="job_detail_report" href="javascript:;" class="link-report">举报</a>
                        </div>
                    </div>
                </div>
                <div class="name">资深PHP研发工程师 <span class="badge">40K-60K</span></div>
            </div>
        </div>
        
        <div class="job-box">
            <div class="inner home-inner">
                <div class="job-sider">
                    
                    <div class="promotion-img">
                        <a href="javascript:;" ka="job-detail-personality"><img src="./img/promotion.jpg" alt=""></a>
                    </div>
                    
                    
                    <div class="promotion-job">
                        <h3><a href="javascript:;" ka="more-similar-jobs2" class="more">更多相似职位</a>相似职位</h3>
                        <ul>
                            
                            <li>
                                <div class="company-logo"><a ka="job_sug_brand1_custompage" href="javascript:;"
                                                             title="云影天光"><img src="./img/defaultlogov2.jpg" alt=""></a>
                                </div>
                                <div class="info-primary">
                                    <div class="name"><a ka="job_sug_1" href="javascript:;">PHP后端工程师 <span class="red">6K-10K</span></a>
                                    </div>
                                    <p class="gray"><a ka="job_sug_brandjob1_custompage" href="javascript:;"
                                                       title="云影天光招聘">云影天光</a><em class="vdot">·</em>深圳</p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="company-logo"><a ka="job_sug_brand2_custompage" href="javascript:;"
                                                             title="悦视光合"><img
                                        src="./img/32d25cdb8a62477b8855dc771a751baecfcd208495d565ef66e7dff9f98764da.jpg"
                                        alt=""></a></div>
                                <div class="info-primary">
                                    <div class="name"><a ka="job_sug_2" href="javascript:;">Python研发工程师 (WEB后端) <span
                                            class="red">8K-16K</span></a></div>
                                    <p class="gray"><a ka="job_sug_brandjob2_custompage" href="javascript:;"
                                                       title="悦视光合招聘">悦视光合</a><em class="vdot">·</em>深圳</p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="company-logo"><a ka="job_sug_brand3_custompage" href="javascript:;"
                                                             title="DANKAL"><img
                                        src="./img/83b19d15a0280f6702c41b54161a3f7822320866d10680a3221a93ea4edbc4b6.jpg"
                                        alt=""></a></div>
                                <div class="info-primary">
                                    <div class="name"><a ka="job_sug_3" href="javascript:;">php开发工程师 <span class="red">4K-6K</span></a>
                                    </div>
                                    <p class="gray"><a ka="job_sug_brandjob3_custompage" href="javascript:;"
                                                       title="DANKAL招聘">DANKAL</a><em class="vdot">·</em>深圳</p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="company-logo"><a ka="job_sug_brand4_custompage" href="javascript:;"
                                                             title="嘉华教育集团"><img
                                        src="./img/5556719db96910dbfff5b677c3c7c1eab3b20a95469db60a2377a710960a22ab.jpg"
                                        alt=""></a></div>
                                <div class="info-primary">
                                    <div class="name"><a ka="job_sug_4" href="javascript:;">php开发工程师 <span class="red">10K-15K</span></a>
                                    </div>
                                    <p class="gray"><a ka="job_sug_brandjob4_custompage" href="javascript:;"
                                                       title="嘉华教育集团招聘">嘉华教育集团</a><em class="vdot">·</em>深圳</p>
                                </div>
                            </li>
                            
                            <li>
                                <div class="company-logo"><a ka="job_sug_brand5_custompage" href="javascript:;"
                                                             title="费思漫科技"><img
                                        src="./img/imageec2ac12a691ed0276db448ee7b42de8b-8081682e3f00f46dD_DzDW0Qxt7L3MzhBg__"
                                        alt=""></a></div>
                                <div class="info-primary">
                                    <div class="name"><a ka="job_sug_5" href="javascript:;">PHP工程师 <span class="red">6K-12K</span></a>
                                    </div>
                                    <p class="gray"><a ka="job_sug_brandjob5_custompage" href="javascript:;"
                                                       title="费思漫科技招聘">费思漫科技</a><em class="vdot">·</em>深圳</p>
                                </div>
                            </li>
                        
                        </ul>
                        
                        <div class="view-more"><a href="javascript:;" ka="more-similar-jobs3"><i class="more">更多相似职位</i></a>
                        </div>
                    
                    </div>
                    
                    <div class="promotion-img">
                        <a href="javascript:;" ka="job-detail-app"><img src="./img/pro-1.png" alt=""></a>
                    </div>
                
                
                </div>
                <div class="job-detail">
                    <div class="detail-figure">
                        <img src="./img/27fa4496d659b2bf48f1d875d265d0718c7dd922ad47494fc02c388e12c00eac_s.jpg" alt="">
                    </div>
                    <div class="detail-op">
                        <div class="btns">
                            <a ka="go_greet_done_18324848" href="javascript:;" data-url="" redirect-url="" class="btn btn-startchat">立即沟通</a>
                            
                            <div class="op-links">
                                <a href="javascript:;" ka="job_detail_like" data-url="&amp;expectId=&amp;tag=4&amp;lid="
                                   class="link-like ">感兴趣</a>
                                <a ka="job_detail_report" href="javascript:;" class="link-report">举报</a>
                            </div>
                        </div>
                        <h2 class="name"><?php echo $list['ce_name']; ?><i class="icon-vip"></i></h2>
                        <p class="gray"><?php echo $list['profile']; ?><em class="vdot">·</em></p>
                    </div>
                    <div class="detail-content">
                        <div class="job-sec">
                            <h3>职位描述</h3>
                            <div class="text">
                                职位描述 ：<br><?php echo $row['job_descr']; ?><br><br>
                                工作地址: <?php echo $row['address']; ?><br><br>
                            </div>
                        </div>
                        
                        <div class="job-sec">
                            <h3>团队介绍</h3>
                            <div class="text"><?php echo $row['team_descr']; ?></div>
                            <div class="job-tags">
                                
                            </div>
                        
                        </div>
                        
                        
                        <div class="job-sec company-info">
                            <h3>公司介绍</h3>
                            <div class="text">
                                <?php echo $info['profile']; ?>
                            </div>
                            <a ka="job-comintroduce" href="javascript:;" class="look-all">查看全部</a>
                        </div>
                        
                        <!--推荐职位 ---------------------------------------->
                        <div class="recommend-box">
                            <h3>推荐职位</h3>
                            <div class="slider-main" style="height: 390.78px;">
                                <ul>
                                    
                                    <li class="" style="left: -654px;">
                                        <a ka="job_recommend_1" href="javascript:;" class="recommend-li">
                                            <div class="name">电子技术研发工程师 <span class="red">5k-10k</span></div>
                                            <p>深圳创安佳</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_2" href="javascript:;" class="recommend-li">
                                            <div class="name">开关电源研发工程师 <span class="red">6k-12k</span></div>
                                            <p>SINGOF</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_3" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">8k-15k</span></div>
                                            <p>纵腾</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_4" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">8k-16k</span></div>
                                            <p>金斧子</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_5" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">9k-15k</span></div>
                                            <p>乐玩互娱</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_6" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP程序员 <span class="red">6k-7k</span></div>
                                            <p>深圳刀刀电子</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_7" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP软件工程师 <span class="red">8k-13k</span></div>
                                            <p>史蒂夫</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_8" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发 <span class="red">8k-10k</span></div>
                                            <p>智投广告</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_9" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">10k-15k</span></div>
                                            <p>孩宝小镇</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_10" href="javascript:;" class="recommend-li">
                                            <div class="name">研发结构工程师 <span class="red">6k-12k</span></div>
                                            <p>天行创新</p>
                                        </a>
                                    </li>
                                    
                                    <li class="" style="left: -654px;">
                                        <a ka="job_recommend_11" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP程序员 <span class="red">4k-8k</span></div>
                                            <p>海带宝</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_12" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">8k-10k</span></div>
                                            <p>一起戴</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_13" href="javascript:;" class="recommend-li">
                                            <div class="name">资深Android开发工程师 <span class="red">30k-50k</span></div>
                                            <p>今日头条</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_14" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP <span class="red">12k-18k</span></div>
                                            <p>超算科技</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_15" href="javascript:;" class="recommend-li">
                                            <div class="name">蓝牙结构工程师，研发 <span class="red">6k-8k</span></div>
                                            <p>深圳升韵声学有限公司</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_16" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP高级开发工程师 <span class="red">10k-20k</span></div>
                                            <p>智物科技</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_17" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">12k-20k</span></div>
                                            <p>上海炽聚</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_18" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">6k-12k</span></div>
                                            <p>大家族网络</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_19" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">10k-20k</span></div>
                                            <p>深圳每日</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_20" href="javascript:;" class="recommend-li">
                                            <div class="name">技术研发工程师（图形图像、C++) <span class="red">10k-20k</span></div>
                                            <p>英迈思</p>
                                        </a>
                                    </li>
                                    
                                    <li class="" style="left: -654px;">
                                        <a ka="job_recommend_21" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP程序员 <span class="red">4k-6k</span></div>
                                            <p>雷克RK</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_22" href="javascript:;" class="recommend-li">
                                            <div class="name">全栈php工程师 <span class="red">8k-16k</span></div>
                                            <p>深圳大牛创投</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_23" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">8k-14k</span></div>
                                            <p>普智正元</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_24" href="javascript:;" class="recommend-li">
                                            <div class="name">网站建设／网站制作／PHP工程师／WEB开发 <span class="red">5k-10k</span>
                                            </div>
                                            <p>尚青创意</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_25" href="javascript:;" class="recommend-li">
                                            <div class="name">研发助理工程师（空气消毒净化器） <span class="red">4k-6k</span></div>
                                            <p>康风环境</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_26" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">10k-20k</span></div>
                                            <p>小鹿咚咚科技</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_27" href="javascript:;" class="recommend-li">
                                            <div class="name">技术程序php <span class="red">7k-10k</span></div>
                                            <p>京城科技</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_28" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP <span class="red">5k-10k</span></div>
                                            <p>美聚供应链</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_29" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP <span class="red">6k-8k</span></div>
                                            <p>银信联供应链</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_30" href="javascript:;" class="recommend-li">
                                            <div class="name">电源研发工程师 <span class="red">8k-12k</span></div>
                                            <p>瀚强科技</p>
                                        </a>
                                    </li>
                                    
                                    <li class="cur" style="left: 0px;">
                                        <a ka="job_recommend_31" href="javascript:;" class="recommend-li">
                                            <div class="name">免疫原及标准品试剂研发工程师 <span class="red">8k-15k</span></div>
                                            <p>艾伟迪</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_32" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP工程师 <span class="red">8k-15k</span></div>
                                            <p>小微创想</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_33" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">4k-6k</span></div>
                                            <p>易天讯达</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_34" href="javascript:;" class="recommend-li">
                                            <div class="name">资深应用运维工程师 <span class="red">13k-26k</span></div>
                                            <p>平安科技</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_35" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程师 <span class="red">8k-16k</span></div>
                                            <p>金斧子</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_36" href="javascript:;" class="recommend-li">
                                            <div class="name">iOS研发工程师 <span class="red">6k-12k</span></div>
                                            <p>娜米小兔</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_37" href="javascript:;" class="recommend-li">
                                            <div class="name">研发储干 <span class="red">4k-6k</span></div>
                                            <p>硕日新能源</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_38" href="javascript:;" class="recommend-li">
                                            <div class="name">PHP开发工程 <span class="red">10k-15k</span></div>
                                            <p>嘉华教育集团</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_39" href="javascript:;" class="recommend-li">
                                            <div class="name">资深ID工程师 <span class="red">6k-12k</span></div>
                                            <p>乔威电源</p>
                                        </a>
                                        
                                        
                                        <a ka="job_recommend_40" href="javascript:;" class="recommend-li">
                                            <div class="name">资深销售代表 <span class="red">15k-30k</span></div>
                                            <p>溢米辅导</p>
                                        </a>
                                    </li>
                                
                                </ul>
                                <a href="javascript:;" class="btn-direction btn-prev prev"></a><a href="javascript:;"
                                                                                                  class="btn-direction btn-next next"></a>
                                <div class="slider-dot"><i data-index="1" class=""></i><i data-index="2" class=""></i><i
                                        data-index="3" class=""></i><i data-index="4" class="cur"></i></div>
                            </div>
                        </div>
                        <!-- SEO  -->
                        
                        <div class="links" style="height: 70px;">
                            <dl class="links-item">
                                <dt>推荐公司：</dt>
                                <dd>
                                    <a href="javascript:;" ka="seo-brand-1">宽东方</a>
                                    
                                    <a href="javascript:;" ka="seo-brand-2">企强控股集团</a>
                                    
                                    <a href="javascript:;" ka="seo-brand-3">藏品阁</a>
                                    
                                    <a href="javascript:;" ka="seo-brand-4">中瑟资本</a>
                                    
                                    <a href="javascript:;" ka="seo-brand-5">泰岳安全</a>
                                    
                                    <a href="javascript:;" ka="seo-brand-6">K-MALL购物中心</a>
                                    
                                    <a href="javascript:;" ka="seo-brand-7">欣朵瑞拉,美肌泥</a>
                                    
                                    <a href="javascript:;" ka="seo-brand-8">淮安顺丰速运有限公司</a>
                                    
                                    <a href="javascript:;" ka="seo-brand-9">知道网络</a>
                                
                                </dd>
                            </dl>
                            <dl class="links-item">
                                <dt>城市招聘：</dt>
                                <dd>
                                    <a href="javascript:;" ka="seo-city-1">图木舒克招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-2">枣庄招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-3">乌兰察布招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-4">阿里招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-5">黄石招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-6">佳木斯招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-7">淮南招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-8">永州招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-9">六安招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-10">泰州招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-11">河池招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-12">金华招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-13">长春招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-14">呼和浩特招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-15">三门峡招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-16">安庆招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-17">宜宾招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-18">周口招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-19">丹东招聘</a>
                                    
                                    <a href="javascript:;" ka="seo-city-20">怀化招聘</a>
                                
                                
                                </dd>
                            </dl>
                            <dl class="links-item">
                                <dt>热门职位：</dt>
                                <dd>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-1">PCB工艺招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-2">深度学习招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-3">算法工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-4">数据采集招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-5">有线传输工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-6">图像识别招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-7">VB招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-8">实施顾问招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-9">机器学习招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-10">通信项目经理招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-11">Golang招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-12">HTML5招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-13">通信研发工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-14">通信技术工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-15">项目专员招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-16">移动通信工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-17">FAE招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-18">数据仓库招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-19">.NET招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-20">网络工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-21">WP招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-22">通信项目专员招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-23">Android招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-24">电气工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-25">通信设备工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-26">项目助理招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-27">DSP开发招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-28">web前端招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-29">核心网工程师招聘</a>
                                    
                                    
                                    <a href="javascript:;" ka="seo-position-30">材料工程师招聘</a>
                                
                                
                                </dd>
                            </dl>
                            <label><span>展开</span><i class="fz fz-slidedown"></i></label>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    
    
    <!--底部footer-->
    <div id="footer">
        <div class="inner home-inner">
            <div class="footer-social">
                <img src="/static/home/images/footer-logo.png" alt="">
                <p>企业服务热线 <span>400 065 5799</span></p>
                <p>工作日 <span>9:30 - 18:30</span></p>
                <p class="footer-icon">
                    <a href="javascript:;" ka="link-weibo" target="_blank" class="icon-weibo"><span>官方微博</span></a>
                    <a href="javascript:;" class="icon-weixin" ka="link-weixin"><span>微信公众号</span><img
                            src="/static/home/images/we_chat_qr.jpg" class="qrcode-weixin"></a>
                    <a href="javascript:;" class="icon-app"
                       ka="link-downloadapp"><span>下载</span></a>
                </p>
            </div>
            <div class="footer-about clear-fix">
                <dl>
                    <dt>企业服务</dt>
                    <dd>
                        <a href="javascript:;" ka="link-search">职位搜索</a>
                        <a href="javascript:;" ka="link-news">新闻资讯</a>
                        <a href="javascript:;" ka="link-app">BOSS直聘APP</a>
                    </dd>
                </dl>
                <dl>
                    <dt>使用与帮助</dt>
                    <dd>
                        <a href="javascript:;" ka="link-privacy" target="_blank">用户协议与隐私政策</a>
                        <a href="javascript:;" ka="link-anticheatguide"
                           target="_blank">防骗指南</a>
                        <a href="javascript:;" class="footer-feedback">意见反馈</a>
                    </dd>
                </dl>
                <dl>
                    <dt>联系我们</dt>
                    <dd>
                        <p>北京华品博睿网络技术有限公司</p>
                        <p>公司地址 北京朝阳区太阳宫中路冠捷大厦3层302</p>
                        <p>联系电话 010-84150633</p>
                    </dd>
                </dl>
            </div>
            <div class="copyright">
                
                
                <p><span>Copyright © 2018 BOSS直聘</span><span>京ICP备14013441号-5</span><span><a
                        href="javascript:;" ka="link-businesslicense"
                        target="_blank">经营执照</a></span><span><a
                        href="javascript:;"
                        ka="link-beian" target="_blank">京公网安备11010502032801 <img src="/static/home/images/icon-beian.png"
                                                                                 alt=""></a></span><span><a
                        href="javascript:;" ka="link-sdwj" target="_blank">首都网警</a></span></p>
            </div>
        </div>
    </div>
    
    
    <!--通用返回顶部-->
    <div id="siderbar" style="display: none;">
        <ul>
            <li class="siderbar-top" title="返回顶部"></li>
            <li class="siderbar-feedback" title="反馈"><span>反馈</span></li>
        </ul>
    </div>
</div>

<script src="/static/home/js/jquery-1.12.2.min.js"></script>
<script class="refreshjs" src="/static/home/js/main.js" ></script>
<script src="/static/home/js/sub.js"></script>


</body>
</html>