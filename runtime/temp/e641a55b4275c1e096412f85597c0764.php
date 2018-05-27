<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:73:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\tt\addjob.html";i:1524488444;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1524485756;}*/ ?>
<!DOCTYPE html>
<html class="standard"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title></title>
    <meta name="keywords" content="Boss直聘,直直,招聘,求职,找工作">
    <meta name="description" content="Boss直聘是一款互联网求职招聘找工作软件，让求职者与Boss直接开聊、加快面试、即时反馈，找工作就用Boss直聘。直直为Boss直聘IP，下载APP让直直带你轻松找工作！">
    <link href="/static/home/css/main.css" type="text/css" rel="stylesheet">
    <link rel="stylesheet" href="/static/home/css/main2.css">
    
</head>
<body>
<div id="wrap" class="user-center">
    
    <div id="header">
        <div class="inner home-inner">
            <div class="logo"><a href="#" ka="header-home-logo" title="BOSS直聘"><span>BOSS直聘</span></a>
            </div>
            <div class="nav">
                <ul>
                    <li class=""><a ka="header-home" href="#">首页</a></li>
                    <li class=""><a ka="header-job" href="#">求职</a></li>
                    <li class=""><a ka="header-app" href="#">APP</a></li>
                    <li class=""><a ka="header-article" href="#">资讯</a></li>
                </ul>
            </div>
            
            <div class="user-nav">
                <ul>
                    <li class="">
                        <a ka="header-message" href="#">消息
                            <span class="nav-chat-num"></span>
                        </a>
                    </li>
                    <li class="">
                        <a ka="header-resume" href="#">简历</a>
                    </li>
                    <li class="nav-figure">
                        <a href="#" ka="header-username">
                            <span class="label-text">邓华杰</span>
                            <img src="#" alt="">
                        </a>
                        <div class="dropdown" style="display: none;">
                            <a href="#" ka="header-personal">个人中心</a>
                            <a href="#" ka="account_manage">账户管理</a>
                            <a href="javascript:;" class="link-recruit" ka="header-recruit">我要招聘</a>
                            <a href="#" ka="header-logout">退出</a>
                            <p class="recruit-tip" style="display: none;">
                                <img src="#" alt="">
                                <span>请在 APP 端“我的 - 设置”中<br>切换为Boss身份，即可进行招聘</span>
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    

        
<div id="main" class="inner home-inner">
    <div class="account-container">
        <div class="set-page">
            <div class="set-nav">
                <div class="account-manager">账户管理</div>
                <ul>
                    <a href="/employer/add"><li class="cur">发布工作</li></a>
                    <a href="/employer/index"><li >已发布工作</li></a>
                    <a href="/employer/editphone"><li>手机号码</li></a>
                    <a href="/employer/editpwd"><li>密码管理</li></a>
                </ul>
            </div>
            
            <div class="set-content">
                <div class="set-box sign-form">
                    <form action="/employer/insert" method="post" class="form-addjob">
                        <h3 class="title">招聘岗位</h3>
                        <div class="form-row">
                            <dl>
                                <dt>工作名称 <span class="gray"></span></dt>
                                <dd><input type="text" class="ipt required" placeholder="输入工作名称" data-blank="输入工作名称"
                                           data-format="输入工作名称" required minlength="2" maxlength="10" ka="et-uname"
                                           name="job" value=""></dd>
                            </dl>
                            <dl>
                                <dt>所在地 <span class="gray"></span></dt>
                                <dd><input type="text" class="ipt required" placeholder="请填写所在地" data-blank="请填写所在地"
                                           data-format="请填写所在地" required minlength="2" maxlength="10" ka="et-uname"
                                           name="location" value="">
                                </dd>
                            </dl>
                        </div>
                        <div class="form-row">
                            <dl>
                                <dt>要求经验年龄</dt>
                                <dd>
                                    <div class="gray"><input type="text" name="experience" class="ipt required" value=""
                                                             required minlength="2" maxlength="10"></div>
                                </dd>
                            </dl>
                            <dl>
                                <dt>要求学历</dt>
                                <dd>
                                    <div class="gray">
                                        <input type="text" name="degree" class="ipt required" value="" required
                                               minlength="2" maxlength="10">
                                    </div>
                                </dd>
                            </dl>
                        </div>
                        <div class="form-row">
                            <dl>
                                <dt>职位描述</dt>
                                <dd>
                    
                                    <!--<input type="text" class="ipt ipt-datetimepicker " data-blank="" name="job_descr"-->
                                    <!--value="" required minlength="2" maxlength="100">-->
                                    <textarea class="ipt ipt-datetimepicker " name="job_descr" id="" cols="30" rows="10"
                                              required minlength="1" maxlength="300"></textarea>
                
                                </dd>
                            </dl>
                            <dl>
                                <dt>团队介绍</dt>
                                <dd><textarea class="ipt ipt-datetimepicker " name="team_descr" id="" cols="30"
                                              rows="10" required minlength="1" maxlength="100" required minlength="2"
                                              maxlength="300"></textarea></dd>
                            </dl>
                        </div>
                        <div class="form-row">
                            <dl>
                                <dt>职位标签</dt>
                                <dd><input name="tags" ka="email_edit" value="" type="text" class="ipt"
                                           placeholder="请填写职位标签" data-range="0,40" data-blank="" data-format="请填写职位标签"
                                           required minlength="2" maxlength="20"></dd>
                            </dl>
                            <dl>
                                <dt>工作地址</dt>
                                <dd><input name="address" ka="email_edit" value="" type="text" class="ipt"
                                           placeholder="请填写工作地址" data-range="0,40" data-blank="" data-format="请填写工作地址"
                                           required minlength="2" maxlength="50"></dd>
                            </dl>
                        </div>
                        <input type="hidden" name="id" value="">
                        <button class="btn btn-back" type="button" ka="user-resume-user-info-cancel">取消</button>
                        <button class="btn vali_btn" type="submit" ka="user-resume-user-info-ok">完成</button>
                    </form>
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
                    <a href="" ka="link-weibo" target="_blank" class="icon-weibo"><span>官方微博</span></a>
                    <a href="javascript:;" class="icon-weixin" ka="link-weixin"><span>微信公众号</span><img
                            src="/static/home/images/we_chat_qr.jpg" class="qrcode-weixin"></a>
                    <a href="" class="icon-app"
                       ka="link-downloadapp"><span>下载</span></a>
                </p>
            </div>
            <div class="footer-about clear-fix">
                <dl>
                    <dt>企业服务</dt>
                    <dd>
                        <a href="" ka="link-search">职位搜索</a>
                        <a href="" ka="link-news">新闻资讯</a>
                        <a href="" ka="link-app">BOSS直聘APP</a>
                    </dd>
                </dl>
                <dl>
                    <dt>使用与帮助</dt>
                    <dd>
                        <a href="" ka="link-privacy" target="_blank">用户协议与隐私政策</a>
                        <a href="" ka="link-anticheatguide"
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
                        href="" ka="link-businesslicense"
                        target="_blank">经营执照</a></span><span><a
                        href=""
                        ka="link-beian" target="_blank">京公网安备11010502032801 <img src="/static/home/images/icon-beian.png"
                                                                                 alt=""></a></span><span><a
                        href="" ka="link-sdwj" target="_blank">首都网警</a></span></p>
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
<script src="/static/home/js/main.js"></script>
<script src="/static/home/js/sub.js"></script>


</body>
</html>