<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\company_job.html";i:1525632639;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1525632639;}*/ ?>
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
                        <a ka="header-message" href="/msg/index">消息
                            <span class="nav-chat-num"></span>
                        </a>
                    </li>
                    
                    <li class="nav-figure">
                        <a href="#" ka="header-username">
                            <span class="label-text"><?php echo (\think\Session::get('user.name')) ? \think\Session::get('user.name') :  '请完善资料'; ?></span>
                            <img src="<?php echo (\think\Session::get('user.avatar')) ? \think\Session::get('user.avatar') :  \think\Session::get('default.avatar'); ?>" alt="">
                        </a>
                        <div class="dropdown" style="display: none;">
                            <!--<a href="/personal/deliver" ka="header-personal">个人中心</a>-->
                            <a href="/employer/account" ka="account_manage">账户管理</a>
                            <a href="/employer/add" class="link-recruit" ka="header-recruit">我要招聘</a>
                            <a href="/homelogin/logout" ka="header-logout">退出</a>
                            
                        </div>
                    </li>
                </ul>
                
                <?php else: ?>
    
                <ul>
                    <li class="">
                        <a ka="header-message" href="/msg/index">消息
                            <span class="nav-chat-num"></span>
                        </a>
                    </li>
                    <li class="">
                        <a ka="header-resume" href="/employee/resume">简历</a>
                    </li>
                    <li class="nav-figure">
                        <a href="#" ka="header-username">
                            <span class="label-text"><?php echo (\think\Session::get('user.name')) ? \think\Session::get('user.name') :  '请完善资料'; ?></span>
                            <img src="<?php echo (\think\Session::get('user.avatar')) ? \think\Session::get('user.avatar') :  \think\Session::get('default.avatar'); ?>" alt="">
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
    

        


<div id="main">
    <div class="company-banner" style="background-image: url(<?php echo $row['bg']; ?>);">
        <div class="inner home-inner">
            <div>
                <div class="company-stat">
                    <span><a href="" ka="all-jobs-top"><b><?php echo $info; ?></b>在招职位</a></span><em class="vline"></em><span><b><?php echo $list; ?></b>位BOSS</span>
                    <div class="company-logo"><img src="<?php echo $row['logos']; ?>" alt=""></div>
                </div>
                <div class="info-primary">
                    <h1 class="name"><?php echo $row['name']; ?><i class="icon-brand"></i></h1>
                    <p><?php echo $row['financing']; ?><em class="vline"></em><?php echo $row['employees']; ?>人以上<em class="vline"></em><?php echo $row['industry']; ?>
                    </p>
                </div>
            </div>
            <div class="company-tab">
                
                <a href="/companys/index/cid/<?php echo $row['id']; ?>" ka="company-intro">公司简介</a>
                
                
                <a href="" ka="company-jobs" class="cur">招聘职位(<?php echo $info; ?>)</a>
            </div>
        </div>
    </div>
    <div style="width: 100%;background: #fff;height: 600px">
    
        <?php if(is_array($job) || $job instanceof \think\Collection || $job instanceof \think\Paginator): if( count($job)==0 ) : echo "" ;else: foreach($job as $key=>$row): ?>
        <div class="inner home-inner">
    
            
            <div class="code-box">
                <span>手机查看</span>
                <img src="./222_files/common.json" alt="">
            </div>
            <li>
                <a href="" data-lid="85e7c83a-a1a8-4b9f-997f-7b0057d8e397.brand_jod_list" ka="job-1" target="_blank">
                    <div class="job-primary" style="float: left">
                        <div class="info-primary">
                            <h3 class="name">
                                <div class="title-box">
                                    <div class="job-title"><?php echo $row['job']; ?></div>
                                    <span class="red"><?php echo salary2text($row['salary']); ?></span>
                                </div>
                            </h3>
                            <p><?php echo $row['location']; ?><em class="vline"></em><?php echo $row['experience']; ?>年以内<em class="vline"></em><?php echo $row['degree']; ?></p>
                        </div>
                        
                        <div class="info-publis" style="margin-left: 300px">
                            <h3 class="name"><?php echo $row['username']; ?><em
                                    class="vline"></em><?php echo $row['position']; ?></h3>
                            <p>发布于<?php echo date( 'Y-m-d H:i:s',$row['timestamp']); ?></p>
                        </div>
                    </div>
                </a>
                <div class="startchat-box detail-op">
                    <a ka="job-1-chat" href="javascript:;"
                       data-url="/gchat/addRelation.json?jobId=6b18d944e74510401nd-2ti6EVE~"
                       redirect-url="/geek/new/index/chat?id=a83b7fe66fee41f70XV62du6EQ~~&amp;lid=85e7c83a-a1a8-4b9f-997f-7b0057d8e397.brand_jod_list"
                       class="btn btn-startchat">简历投取</a>
                </div>
            </li>
        
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <div class="" id="pages" style="margin-right: 330px">
        
            <?php echo $job->appends($data)->render(); ?>
    
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
    
    <!--友情链接-->
    <?php echo widget("Wd/links"); ?>
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