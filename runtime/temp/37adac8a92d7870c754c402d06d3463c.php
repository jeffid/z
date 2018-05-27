<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:71:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\company.html";i:1525685174;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1525835144;}*/ ?>
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
                        <a href="/companys/index/cid/<?php echo $row['id']; ?>"><div class="company-logo"><img src="<?php echo $row['logos']; ?>" alt=""></div></a>
                    </div>
                    <div class="info-primary">
                        <h1 class="name"><?php echo $row['name']; ?><i class="icon-brand"></i></h1>
                        <p><?php echo $row['financing']; ?><em class="vline"></em><?php echo $row['employees']; ?>人以上<em class="vline"></em><?php echo $row['industry']; ?></p>
                    </div>
                </div>
                <div class="company-tab">
                    
                    <a href="" class="cur" ka="company-intro">公司简介</a>
                    
                    
                    <a href="/companyjob/index/cid/<?php echo $row['id']; ?>" ka="company-jobs">招聘职位(<?php echo $info; ?>)</a>
                </div>
            </div>
        </div>
        
        <div class="company-hotjob small-item">
            <div class="inner home-inner">
                
                
                <div class="code-box">
                    <span>手机查看</span>
                    <img src="./222_files/common.json" alt="">
                </div>
                
                <h3><a href="/companyjob/index/cid/<?php echo $row['id']; ?>" class="more" ka="all-jobs-hot">查看全部<?php echo $info; ?>个职位</a>热招职位</h3>
                <ul>
    
                    <?php if(is_array($job) || $job instanceof \think\Collection || $job instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($job) ? array_slice($job,0,5, true) : $job->slice(0,5, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <li>
                        <a href="/job/index/jid/<?php echo $item['id']; ?>"  ka="hot-job-1">
                            <div class="info-primary">
                                <div class="name"><span class="salary"><?php echo salary2text($item['salary']); ?></span><b><?php echo $item['job']; ?> </b></div>
                                <p class="gray"><?php echo $item['tags']; ?> ·<?php echo $item['degree']; ?>·<?php echo $item['location']; ?></p>
                            </div>
                        </a>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                    
                
                </ul>
            </div>
        </div>
        
        <div class="job-box">
            <div class="inner home-inner">
                <div class="company-sider">
                    
                    
                    <div class="job-sec picture-list">
                        <h3>公司环境</h3>
                        <div class="slider-main" style="height: 149px;">
                            
                            <a href="" class="pic-btn btn-prev prev"></a>
                            <a href="" class="pic-btn btn-next  next"></a>
                            
                            <ul>
                                
                                <li class="" style="left: -298px;">
                                    <img src="<?php echo $env['src']; ?>" alt="">
                                </li>
                                
                                <li class="" style="left: -298px;">
                                    <img src="<?php echo $env['src']; ?>" alt="">
                                </li>
                                
                                <li class="cur" style="left: 0px;">
                                    <img src="<?php echo $env['src']; ?>" alt="">
                                </li>
                                
                                <li class="" style="left: -298px;">
                                    <img src="<?php echo $env['src']; ?>" alt="">
                                </li>
                                
                                <li class="" style="left: -298px;">
                                    <img src="<?php echo $env['src']; ?>" alt="">
                                </li>
                            
                            </ul>
                            <a href="" class="btn-direction btn-prev prev"></a><a href="" class="btn-direction btn-next next"></a><div class="slider-dot"><i data-index="1" class=""></i><i data-index="2" class=""></i><i data-index="3" class="cur"></i><i data-index="4" class=""></i><i data-index="5" class=""></i></div></div>
                    </div>
                    
                    
                    <div class="job-sec recruiter-list">
                        <h3><?php echo $row['fullname']; ?>中心招聘Boss</h3>
                        <ul>
                            <?php if(is_array($lists) || $lists instanceof \think\Collection || $lists instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($lists) ? array_slice($lists,0,4, true) : $lists->slice(0,4, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                            <li>
                                <div class="figure"></div>
                                <div class="text">
                                    <div class="name"><a href="" ka="boss-1"><?php echo $item['username']; ?><em class="vline"></em><?php echo $item['position']; ?></a></div>
                                    <p class="gray">正在招聘 “<?php echo $item['newjobname']; ?>” 等 <?php echo $info; ?> 个职位</p>
                                </div>
                            </li>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
                            
                        
                        </ul>
                        <div class="view-more"><a href="" ka="all-jobs-boss"><i class="more">查看所有Boss的在招职位</i></a></div>
                    </div>
                
                </div>
                <div class="job-detail">
                    <div class="detail-content">
                        
                        <div class="job-sec">
                            <h3><?php echo $row['fullname']; ?>中心简介</h3>
                            <div class="text fold-text"><?php echo $row['profile']; ?><a href="" class="more-view" ka="company-intro-more" style="display: block;">展开<i class="fz fz-slidedown"></i></a></div>
                        </div>
                        
                        
                        <div class="job-sec company-products">
                            <h3>团队介绍</h3>
                            <?php echo $jobs['team_descr']; ?>
                        </div>
                        
                        
                        
                        
                        
                        <div class="job-sec">
                            <h3>公司地址: <?php echo $rew['addr']; ?></h3>
                            <div class="job-location">
                            
                            
                            </div>
                        </div>
                        
                        
                        
                        
                        <div class="links" style="height: 70px;">
                            
                            <dl class="links-item">
                                <dt>推荐公司：</dt>
                                <dd>
                                    
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-brand-1">三维聚源</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-brand-2">职前</a>
                                
                                
                                
                                
                                </dd>
                            </dl>
                            <dl class="links-item">
                                <dt>城市招聘：</dt>
                                <dd>
                                    
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-city-1">潜江招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-2">西宁招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-3">晋中招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-4">抚顺招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-5">定安招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-6">陇南招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-7">中山招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-8">丽江招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-9">朝阳招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-10">运城招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-11">三明招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-12">龙岩招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-13">六安招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-14">阳江招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-15">抚州招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-16">韶关招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-17">内江招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-18">菏泽招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-19">崇左招聘</a>
                                    
                                    <a href="JavaScript:;"  ka="seo-city-20">呼和浩特招聘</a>
                                
                                
                                
                                
                                </dd>
                            </dl>
                            <dl class="links-item">
                                <dt>热门职位：</dt>
                                <dd>
                                    
                                    
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-1">上海氩弧焊工招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-2">上海服装设计招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-3">上海夹具工程师招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-4">上海营养师招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-5">上海医疗器械注册招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-6">上海铣工招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-7">上海面料辅料开发招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-8">上海法律顾问招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-9">上海CEO/总裁/总经理招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-10">上海男装设计招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-11">上海童装设计招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-12">上海财务总监招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-13">上海医师招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-14">上海漆工招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-15">上海临床数据分析招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-16">上海事业部负责人招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-17">上海行政总监招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-18">上海体系工程师招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-19">上海打样/制版招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-20">上海前台招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-21">上海模具工程师招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-22">上海经理助理招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-23">上海电工招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-24">上海医美咨询招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-25">上海铆工招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-26">上海材料工程师招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-27">上海医学编辑招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-28">上海机械制图招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-29">上海厂长/工厂经理招聘</a>
                                    
                                    
                                    <a href="JavaScript:;"  ka="seo-position-30">上海放射科医师招聘</a>
                                
                                
                                
                                
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
<!--
                <dl>
                    <dt>联系我们</dt>
                    <dd>
                        <p>北京华品博睿网络技术有限公司</p>
                        <p>公司地址 北京朝阳区太阳宫中路冠捷大厦3层302</p>
                        <p>联系电话 010-84150633</p>
                    </dd>
                </dl>
-->
                <dl>
                    <dt>注意</dt>
                    <dd>
                        <h2>个人练手项目,非正式商用网站</h2>
                        <a href="https://www.zhipin.com/" target="_blank">(原官网)</a>
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