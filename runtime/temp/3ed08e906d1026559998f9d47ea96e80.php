<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\tt\password.html";i:1524484786;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1524485756;}*/ ?>
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
                    <li ka="account_mobile_change" data-tab="phone" data-url="/geek/account/mobile.json" class="cur">
                        手机号码
                    </li>
                    <li ka="account_pwd" data-tab="pwd" data-url="/geek/account/password.json">密码管理</li>
                    <li ka="account_chatwords" data-tab="usalchat" data-url="/geek/account/reply.json">聊天常用语</li>
                    <li ka="account_icebreaker" data-tab="sayhello" data-url="/geek/account/greeting.json">设置打招呼语</li>
                </ul>
            </div>
            
            <div class="set-content">
                <div class="set-box sign-form">
                    <form action="https://www.zhipin.com/geek/account/management?ka=account_manage"
                          class="account-form phone-form">
                        <div class="bind-phone">
                            <span class="txt-msg">当前绑定手机号</span>
                            <div class="operate-area"><span class="phone-num">176****0001</span></div>
                        </div>
                        <div>
                            <span class="txt-msg">更改绑定手机号</span>
                            <div class="operate-area">
                                
                                <div class="form-row row-select">
                                    <span class="dropdown-select">
                                        <i class="icon-select-arrow"></i>
                                        <em class="text-select">+86</em>
                                        <input type="hidden" name="regionCode" value="+86">
                                    </span>
                                    <span class="ipt-wrap">
                                        <input type="tel" class="ipt ipt-phone required" placeholder="手机号"
                                               maxlength="50" name="account" data-blank="请输入手机号"
                                               data-format="请输入正确的手机号">
                                    </span>
                                    <div class="dropdown-menu">
                                        <ul>
                                            <li data-val="+86"><span class="num">+86</span>中国大陆</li>
                                            <li data-val="+1"><span class="num">+1</span>美国</li>
                                            <li data-val="+852"><span class="num">+852</span>香港</li>
                                            <li data-val="+81"><span class="num">+81</span>日本</li>
                                            <li data-val="+886"><span class="num">+886</span>台湾</li>
                                            <li data-val="+44"><span class="num">+44</span>英国</li>
                                            <li data-val="+82"><span class="num">+82</span>韩国</li>
                                            <li data-val="+33"><span class="num">+33</span>法国</li>
                                            <li data-val="+7"><span class="num">+7</span>俄罗斯</li>
                                            <li data-val="+39"><span class="num">+39</span>意大利</li>
                                            <li data-val="+65"><span class="num">+65</span>新加坡</li>
                                            <li data-val="+63"><span class="num">+63</span>菲律宾</li>
                                            <li data-val="+60"><span class="num">+60</span>马来西亚</li>
                                            <li data-val="+64"><span class="num">+64</span>新西兰</li>
                                            <li data-val="+34"><span class="num">+34</span>西班牙</li>
                                            <li data-val="+95"><span class="num">+95</span>缅甸</li>
                                            <li data-val="+230"><span class="num">+230</span>毛里求斯</li>
                                            <li data-val="+263"><span class="num">+263</span>津巴布韦</li>
                                            <li data-val="+20"><span class="num">+20</span>埃及</li>
                                            <li data-val="+92"><span class="num">+92</span>巴基斯坦</li>
                                            <li data-val="+880"><span class="num">+880</span>孟加拉国</li>
                                        </ul>
                                    </div>
                                </div>
                                
                                
                                <div class="form-row row-code">
                        <span class="cell-wrap">
                            <input type="text" data-blank="请输入图片验证码" data-format="图片验证码错误"
                                   class="ipt ipt-code ipt-image-code" name="captcha" maxlength="4"
                                   placeholder="请输入图片验证码" data-url="/captcha/randkey.json">
                        </span>
                                    <span class="cell-wrap">
                            <img src="./account_files/saved_resource" class="verifyimg">
                        </span>
                                    <input type="hidden" name="randomKey" class="randomkey"
                                           value="1JRrtuSleullUSJmR31LEuRmWLvpaN5x">
                                </div>
                                <div class="form-row row-code">
                        <span class="cell-wrap">
                            <input type="text" class="ipt ipt-code ipt-message-code" name="captcha" maxlength="4"
                                   data-blank="请输入短信验证码" data-format="短信验证码错误" placeholder="请输入验证码">
                        </span>
                                    <span class="cell-wrap get-message-code">获取验证码</span>
                                </div>
                                <div class="form-btn">
                                    <button type="submit" class="btn btn-change-phone" ka="mobile_change_sure">确认更改手机号
                                    </button>
                                </div>
                                <div class="text-tip">
                                    <span class="ps">注：</span>
                                    <span class="ps-info">修改手机号后，可以使用新手机登录Boss直聘；聊天时“交换电话” 功能的手机号会一同修改</span>
                                </div>
                            </div>
                        </div>
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