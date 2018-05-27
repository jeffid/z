<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:80:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\personal\deliver.html";i:1525268995;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1525685174;s:68:"D:\APP\wamp\www\XDL\zhipin\application\home\view\personal\sider.html";i:1525685174;s:73:"D:\APP\wamp\www\XDL\zhipin\application\home\view\personal\pop_resume.html";i:1525018033;}*/ ?>
<!DOCTYPE html>
<html class="standard"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>已投递</title>
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
    

        
<div id="main" class="inner home-inner">
    <div class="job-box">
        <!--侧边信息栏-->
        <div class="sider" id="async-sider">
    
    <!--<div class="userinfo-box">
        <a href="javascript:;

" class="edit-userinfo" ka="base_info_edit">编辑</a>
        <div class="headbox">
            <div class="sex man"></div>
            <img src="<?php echo (\think\Session::get('user.avatar')) ? \think\Session::get('user.avatar') :  \think\Session::get('default.avatar'); ?>"
                 class="headimg" alt="">
        </div>
        <div class="username">邓华杰</div>
        <div class="userinfo">25岁<i class="vline"></i>1年以内 <i class="vline"></i> 大专</div>
        <div class="now-state">
            <div class="dropdown-wrap">
            <span class="dropdown-select">
                <input type="text" value="在职-暂不考虑" ka="base_info_status_from_1" class="ipt" readonly="">
                <i class="icon-select-arrow"></i>
                <div class="dropdown-menu">
                    <ul>
                        <li data-val="0" ka="base_info_status_to_0">离职-随时到岗</li>
                        <li data-val="1" ka="base_info_status_to_1">在职-暂不考虑</li>
                        <li data-val="2" ka="base_info_status_to_2">在职-考虑机会</li>
                        <li data-val="3" ka="base_info_status_to_3">离职-月内到岗</li>
                    </ul>
                </div>
            </span>
            </div>
        </div>
        <div class="user-stat">
            <a href="javascript:;

" ka="personal_added_2"><span><b>2</b>沟通过</span></a>
            <a href="javascript:;

" ka="personal_submitted_1"><span><b>1</b>已投递</span></a>
            <a href="javascript:;

" ka="personal_interview_0"><span><b>0</b>面试</span></a>
            <a href="javascript:;

" ka="personal_interest_2"><span><b>2</b>感兴趣</span></a>
        </div>
    </div>-->
    
    <div class="promotion-img">
        <a href="javascript:;

" target="_blank" ka="rcmd-list-personality"><img src="/static/home/images/20180421-01.jpg" alt=""></a>
    </div>
    
    <!--
    <div class="sider-resume">
        <div class="resume-attachment">
            <h3 class="title">附件简历
                <div class="resume-menu">
                    <i></i><i></i><i></i>
                    <div class="resume-menu-box">
                        <div class="menu-btn">
                            <div class="upload-op">
                                <i class="change">更新</i>
                                <a class="btn-upload-file"><input id="fileupload" type="file" name="file"
                                                                  accept="image/jpeg,image/png,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document"></a>
                            </div>
                        </div>
                        <div class="menu-btn">
                            <a href="javascript:;

" ka="user-resume-download-submit">下载</a>
                        </div>
                        <div class="menu-btn">
                            <i class="resume-del">删除</i>
                        </div>
                    </div>
                </div>
            </h3>
            <div class="loadresume"><span class="file-name">邓华杰-简历2.docx</span></div>
            <div class="upd-time">
                2018.04.29 上传
            </div>
        </div>
        <div class="resume-attachment">
            <h3 class="title">在线简历
                <div class="upload-op"><a href="javascript:;

" ka="resume_edit" class="edit">编辑</a></div>
            </h3>
            <div class="upd-time">2018.04.22 更新</div>
        </div>
    </div>
    -->
    
    <div class="sider-recommend">
        <ul>
            <li><a href="javascript:;

" ka="personal_interestme_0">对我感兴趣</a></li>
            <li class="last"><a href="javascript:;

" ka="personal_sawme_0">看过我</a></li>
        </ul>
    </div>
    <!--
    <div class="promotion-img nomargin"><a href="#"><img src="/v2/web/geek/images/promotion-1.png" alt="" /></a></div>
    <div class="promotion-img"><a href="#"><img src="/v2/web/geek/images/promotion-1.png" alt="" /></a></div>
    -->
</div>

        
        <div class="user-sider-left">
            <div class="chat-history">
                <div class="job-tab">
                    <!--<a href="/personal/chat" ka="personal_top_added_0">沟通过</a>-->
                    <a href="/personal/deliver" ka="personal_top_sawme_0" class="cur">已投递</a>
                    <a href="/personal/interview" ka="personal_top_interview">面试</a>
                    <a href="/personal/interest" ka="personal_top_interest">感兴趣</a>
                </div>
                
                <ul>
                    <?php if(empty($data) || (($data instanceof \think\Collection || $data instanceof \think\Paginator ) && $data->isEmpty())): ?>
                    <!--无职位-->
                    <div class="data-tips">
                        <div class="data-blank">
                            <i class="tip-nodata"></i><b>暂时未有投递简历，建议尝试多与Boss沟通</b>
                            <p><a href=""
                                  ka="personal_submitted_recommend" class="btn">查看推荐职位</a></p>
                        </div>
                    </div>
                    
                    <?php else: ?>
                    <!--沟通过和已投递-->
                    <?php if(is_array($data) || $data instanceof \think\Collection || $data instanceof \think\Paginator): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                    <li class="item-boss">
                        <div class="figure"><img src="<?php echo isset($item['hr_avatar'])?$item['hr_avatar']: \think\Session::get('default.avatar'); ?>"></div>
                        <div class="item-content">
                            <div class="info-header">
                                
                                <h3 class="name"><?php echo $item['hr_name']; ?><em class="vline"></em><?php echo $item['hr_position']; ?></h3>
                            </div>
                            <div class="info-primary">
                                <div class="company-info">
                                    <img src="<?php echo isset($item['co_logo'])?$item['co_logo']: \think\Session::get('default.logo'); ?>">
                                    <div class="text">
                                        <b>
                                            <a href="/companys/index/cid/<?php echo $item['co_id']; ?>" ><?php echo $item['co_name']; ?></a>
                                        </b>
                                        <p class="gray"><?php echo $item['co_industry']; ?> · <?php echo $item['co_financing']; ?> · <?php echo $item['co_employees']; ?>人</p>
                                    </div>
                                </div>
                                <div class="job-info">
                                    <div class="job-name"><a href="/job/index/jid/<?php echo $item['j_id']; ?>

" ><?php echo $item['j_name']; ?><span class="salary"><?php echo salary2text($item['j_salary']); ?></span></a></div>
                                    <p class="gray"><?php echo $item['j_location']; ?><em class="vline"></em><?php echo $item['j_experience']; ?><em class="vline"></em><?php echo $item['j_degree']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; endif; ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--简历预览-->


    
    
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