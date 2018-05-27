<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:86:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\employer\resume_review.html";i:1525663556;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1525632639;}*/ ?>
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
    

        



<div class="" style="margin:0 auto;width: 800px">
<div class="resume-item resume-item-open" id="resume-userinfo">

    <div class="item-form"><form action="/geek/user/save.json" method="post" class="form-resume">
        <?php if(is_array($info) || $info instanceof \think\Collection || $info instanceof \think\Paginator): if( count($info)==0 ) : echo "" ;else: foreach($info as $key=>$info): ?>
        <h3 class="title">个人信息</h3>
        <div class="form-row">
            <dl>
                <dt>姓名 <span class="gray"></span></dt>
                <dd><input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="name" value="<?php echo $info['in_name']; ?>" disabled ></dd>
            </dl>
            <dl>
                <dt>当前的求职状态</dt>
                <dd>
                    
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="status" value="<?php echo applyStatus2text($info['in_status']); ?>" disabled >
                </dd>
            </dl>
        </div>
        <div class="form-row">
            <dl>
                <dt>性别</dt>
                <dd><input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="sex" value="<?php echo sex2text($info['in_sex']); ?>" disabled ></dd>
            </dl>
            <dl>
                <dt>开始工作时间</dt>
                <dd>
    
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="work" value="<?php echo $info['in_start_work_year']; ?>" disabled >
                <input disabled type="hidden" name="startWorkYearCode" value="0">
                </span>
                </dd>
            </dl>
        </div>
        <div class="form-row">
            <dl>
                <dt>生日</dt>
                <dd>
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="birthday" value="<?php echo $info['in_birthday']; ?>" disabled >
                </dd>
            </dl>
            <dl>
                <dt>微信号</dt>
                <dd><input disabled name="weixin" value="<?php echo $info['in_wx']; ?>" type="text" class="ipt" placeholder="" data-range="0,50" data-blank="" data-format="" maxlength="50" disabled ></dd>
            </dl>
        </div>
        <div class="form-row">
            <dl>
                <dt>* 邮箱</dt>
                <dd><input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="email" value="<?php echo $info['in_email']; ?>" disabled ></dd>
            </dl>

        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($ad) || $ad instanceof \think\Collection || $ad instanceof \think\Paginator): if( count($ad)==0 ) : echo "" ;else: foreach($ad as $key=>$ad): ?>
        <div class="form-row">
            
            <dl>
                <dt>我的优势</dt>
                <dd>
                    <textarea disabled class="ipt ipt-datetimepicker " name="job_descr" id="" cols="30" rows="10" required minlength="1" maxlength="300"><?php echo $ad['ad_text']; ?></textarea disabled>
            
                </dd>
            </dl>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($ed) || $ed instanceof \think\Collection || $ed instanceof \think\Paginator): if( count($ed)==0 ) : echo "" ;else: foreach($ed as $key=>$ed): ?>
        <div class="form-row">
            <dl>
                <dt>学校名称</dt>
                <dd>
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="birthday" value="<?php echo $ed['ed_school']; ?>">
                </dd>
            </dl>
            <dl>
                <dt>专业名称</dt>
                <dd><input disabled name="weixin" value="<?php echo $ed['ed_subject']; ?>" type="text" class="ipt" placeholder="" data-range="0,50" data-blank="" data-format="" maxlength="50"></dd>
            </dl>
        </div>
        <div class="form-row">
            <dl>
                <dt>学历</dt>
                <dd>
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="birthday" value="<?php echo $ed['ed_degree']; ?>">
                </dd>
            </dl>
  
        </div>
        <div class="form-row">
            <dl>
                <dt>入校时间</dt>
                <dd>
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="birthday" value="<?php echo $ed['ed_startdate']; ?>">
                </dd>
            </dl>
            <dl>
                <dt>离校时间</dt>
                <dd><input disabled name="weixin" value="<?php echo $ed['ed_enddate']; ?>" type="text" class="ipt" placeholder="" data-range="0,50" data-blank="" data-format="" maxlength="50"></dd>
            </dl>
        </div>
        <div class="form-row">
        
            <dl>
                <dt>在校经历</dt>
                <dd>
                    <textarea disabled class="ipt ipt-datetimepicker " name="job_descr" id="" cols="30" rows="10" required minlength="1" maxlength="300"><?php echo $ed['ed_experience']; ?></textarea disabled>
                </dd>
            </dl>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; if(is_array($hi) || $hi instanceof \think\Collection || $hi instanceof \think\Paginator): if( count($hi)==0 ) : echo "" ;else: foreach($hi as $key=>$hi): ?>
        <div class="form-row">
            <dl>
                <dt>公司名称</dt>
                <dd>
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="birthday" value="<?php echo $hi['hi_company']; ?>">
                </dd>
            </dl>
            <dl>
                <dt>公司类型</dt>
                <dd><input disabled name="weixin" value="<?php echo $hi['hi_type']; ?>" type="text" class="ipt" placeholder="" data-range="0,50" data-blank="" data-format="" maxlength="50"></dd>
            </dl>
        </div>
        <div class="form-row">
            <dl>
                <dt>职业名称</dt>
                <dd>
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="birthday" value="<?php echo $hi['hi_position']; ?>">
                </dd>
            </dl>
            <dl>
                <dt>所属行业</dt>
                <dd><input disabled name="weixin" value="<?php echo $hi['hi_industry']; ?>" type="text" class="ipt" placeholder="" data-range="0,50" data-blank="" data-format="" maxlength="50"></dd>
            </dl>
        </div>
        <div class="form-row">
            <dl>
                <dt>入职时间</dt>
                <dd>
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="birthday" value="<?php echo $hi['hi_startdate']; ?>">
                </dd>
            </dl>
            <dl>
                <dt>离职时间</dt>
                <dd><input disabled name="weixin" value="<?php echo $hi['hi_enddate']; ?>" type="text" class="ipt" placeholder="" data-range="0,50" data-blank="" data-format="" maxlength="50"></dd>
            </dl>
        </div>
        <div class="form-row">
            <dl>
                <dt>所属部门</dt>
                <dd>
                    <input disabled type="text" class="ipt required" placeholder="" data-range="1,12" data-blank="" data-format="" maxlength="24" ka="et-uname" name="birthday" value="<?php echo $hi['hi_department']; ?>">
                </dd>
            </dl>
            
        </div>
        <div class="form-row">
        
            <dl>
                <dt>工作内容</dt>
                <dd>
                    <textarea disabled class="ipt ipt-datetimepicker " name="job_descr" id="" cols="30" rows="10" required minlength="1" maxlength="300"><?php echo $hi['hi_work']; ?></textarea >

                </dd>
            </dl>
        </div>
        <div class="form-row">
        
            <dl>
                <dt>工作业绩</dt>
                <dd>
                    <textarea disabled class="ipt ipt-datetimepicker " name="job_descr" id="" cols="30" rows="10" required minlength="1" maxlength="300"><?php echo $hi['hi_results']; ?></textarea >
            
                </dd>
            </dl>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        
        
        
        <div class="form-btns"><a href="/employer/reindex"><button class="btn btn-back" type="button" ka="user-resume-user-info-cancel">取消</button></a></div>
    </form></div>
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