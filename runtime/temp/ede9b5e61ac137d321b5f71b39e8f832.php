<?php if (!defined('THINK_PATH')) exit(); /*a:6:{s:77:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume\resume.html";i:1524751361;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1525685174;s:70:"D:\APP\wamp\www\XDL\zhipin\application\home\view\resume\info_show.html";i:1525421935;s:75:"D:\APP\wamp\www\XDL\zhipin\application\home\view\resume\adventage_show.html";i:1524686261;s:73:"D:\APP\wamp\www\XDL\zhipin\application\home\view\resume\history_show.html";i:1524724601;s:75:"D:\APP\wamp\www\XDL\zhipin\application\home\view\resume\education_show.html";i:1524748248;}*/ ?>
<!DOCTYPE html>
<html class="standard"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>我的简历</title>
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
    

        
<div id="main" class="inner">
    <div class="job-box" style="margin-top: 20px;">
        <div class="sider deliver-sider" style="margin-top: 0;">
            <div class="sider-resume">
                <!--<div class="resume-attachment">-->
                <!--<h3 class="title">附件简历-->
                <!--</h3>-->
                <!--<div class="upload">-->
                <!--<div class="file-result" style="background: rgb(247, 247, 247);">-->
                <!--上传附件简历-->
                <!--</div>-->
                <!--<div class="file-btn"><a class="btn-upload-file"><input id="fileupload" type="file" name="file" ka="user-resume-upload-file"></a></div>-->
                <!--<div class="file-tip">-->
                <!--<p>支持 doc，docx，pdf，jpg，png 格式附件，文件大小不超过10M</p>-->
                <!--</div>-->
                <!--</div>-->
                <!---->
                <!---->
                <!--</div>-->
                <!--<div class="tit">简历完成度<span class="progress-score">80%</span></div>
                <div class="progress"><p></p></div>-->
                <div class="resume-nav">
                    <h3 class="title">在线简历</h3>
                    <ul>
                        <li>
                            <i class="fz-resume fz-info"></i>
                            <a href="#resume-userinfo">
                                <span>个人信息</span>
                            </a>
                        
                        </li>
                        
                        <li>
                            <i class="fz-resume fz-adventage"></i>
                            <a href="#resume-summary">
                                <span>我的优势</span>
                            </a>
                        
                        </li>
                        
                        <li>
                            <i class="fz-resume fz-history"></i>
                            <a href="#resume-history">
                                <span>工作经历</span>
                            </a>
                        
                        </li>
                        
                        <li>
                            <i class="fz-resume fz-eaducation"></i>
                            <a href="#resume-education">
                                <span>教育经历</span>
                            </a>
                        
                        </li>
                    
                    </ul>
                </div>
                
                <!-- <div class="btns"><a href="#" class="btn btn-download">下载电子简历</a><a href="#" class="btn btn-download">微信版本简历</a></div>-->
            </div>
        </div>
        <div class="resume">
            <div class="resume-box">
                <div class="update-time"><span class="prv-view-btn" ka="user_resume_preview"></span></div>
                <div class="resume-item" id="resume-userinfo">
                    <div class="item-primary">
                        <form upload-base64-url="/employee/avatarupdate" upload="" action="/employee/avatarupdate" method="post" >
    <div class="profile_form zw_form figure">
        <dl class="clearfix avatar_line">
            <dd class="txt Rcheck avatar_box">
                <img src="<?php echo (\think\Session::get('user.avatar')) ? \think\Session::get('user.avatar') :  \think\Session::get('default.avatar'); ?>" class="avatar">
                <div class="sel_avatar">
                    <a ka="choose-avatar" data-title="头像设置" class="upload-layer"></a>
                </div>
                <input name="large"
                       value=""
                       type="hidden" class="kz_input required avatar_url" datatype="z" nullmsg="请上传头像！">
                <input name="tiny"
                       value=""
                       type="hidden" class="kz_input required avatar_url" datatype="z" nullmsg="请上传头像！">
            </dd>
        </dl>
    </div>
</form>

<?php if(isset($info['in_name'])): ?>
<h2 class="name"><?php echo isset($info['in_name'])?$info['in_name']:'未填写资料'; ?> <i class="fz-resume <?php echo $info['in_sex']==1?'fz-male':'fz-female'; ?>"></i>
    <div class="op">
        <a data-url="" href="javascript:;" ka="user-resume-edit-userinfo" class="link-edit" data-func="func-edit"
           data-action="/employee/ResumeInfoEdit" data-id="<?php echo $info['in_id']; ?>"><i class="fz-resume fz-edit"></i>编辑</a>
    </div>
</h2>
<div class="info-labels">
    <p class="row-base">
        <span class="label-text">
            <i class="fz-resume fz-experience"></i><?php echo $info['years']; ?>年以内经验
        </span>
        <em class="vline"></em>
        <span class="label-text">
            <i class="fz-resume fz-status"></i><?php echo $info['applyStatus']; ?>
        </span>
    </p>
    
    <p class="row-contact">
        <span class="label-text"><i class="fz-resume fz-tel"></i><?php echo $info['phone']; ?></span>
        
        <?php if(!(empty($info['in_wx']) || (($info['in_wx'] instanceof \think\Collection || $info['in_wx'] instanceof \think\Paginator ) && $info['in_wx']->isEmpty()))): ?>
        <em class="vline"></em>
        <span class="label-text span-wechat"><i class="fz-resume fz-weixin"></i><?php echo $info['in_wx']; ?></span>
        <?php endif; if(!(empty($info['in_email']) || (($info['in_email'] instanceof \think\Collection || $info['in_email'] instanceof \think\Paginator ) && $info['in_email']->isEmpty()))): ?>
        <em class="vline"></em>
        <span class="label-text span-email"><i class="fz-resume fz-mail"></i><?php echo $info['in_email']; ?></span>
        <?php endif; ?>
    </p>
</div>

<?php else: ?>

<h2 class="name">个人信息
    <div class="op">
        <a data-url="" href="javascript:;" class="link-edit" data-func="func-edit" data-action="/employee/ResumeInfoAdd" data-id=""><i class="fz-resume fz-add"></i>添加</a>
    </div>
    <div style="height: 60px;font-size: 14px;">请添加个人信息</div>
</h2>
<?php endif; ?>
                    </div>
                    
                    <div class="item-form" style="display: block;">
                        
                    </div>
                </div>
                
                <!------------------------------------------------------->
                <div class="resume-item" id="resume-summary">
                    <div class="item-primary">
                        <?php if(!(empty($adv) || (($adv instanceof \think\Collection || $adv instanceof \think\Paginator ) && $adv->isEmpty()))): ?>
<h3 class="title">我的优势
    <div class="op">
        <a data-url="" href="javascript:;" ka="user-resume-edit-desc" class="link-edit" data-action="/employee/resumeAdventageEdit" data-func="func-edit" data-id="<?php echo $adv['ad_id']; ?>">
            <i class="fz-resume fz-edit"></i>编辑
        </a>
    </div>
</h3>
<div class="text">
    <p><?php echo $adv['ad_text']; ?></p>
</div>

<?php else: ?>

<h3 class="title">我的优势
    <div class="op">
        <a data-url="" href="javascript:;" ka="user-resume-edit-desc" class="link-edit" data-action="/employee/resumeAdventageAdd" data-func="func-add">
            <i class="fz-resume fz-add"></i>添加
        </a>
    </div>
</h3>
<div class="text">
    <p></p>
</div>
<?php endif; ?>
                    </div>
                    <div class="item-form" style="display: block;">
                        
                    </div>
                </div>
                
                <!----------------------------------------------------------------->
                <div class="resume-item" id="resume-history">
                    <div class="item-primary">
                        <h3 class="title">
    工作经历
    <div class="op">
        <a data-url="" href="javascript:;" ka="user-resume-add-workexp"
           class="link-add" data-action="/employee/resumeHistoryAdd" data-func="func-add">
            <i class="fz-resume fz-add"></i>添加
        </a>
    </div>
</h3>
<div class="history-project">
    
    <?php if(is_array($his) || $his instanceof \think\Collection || $his instanceof \think\Paginator): $i = 0; $__LIST__ = $his;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <div class="history-item" >
        <div class="op">
            <a href="javascript:;" data-url=""
               ka="user-resume-edit-workexp1" class="link-edit" data-action="/employee/resumeHistoryEdit" data-func="func-edit" data-id="<?php echo $item['hi_id']; ?>">
                <i class="fz-resume fz-edit"></i>编辑
            </a>
            
            <em class="vline"></em>
            <a href="javascript:;" data-url=""
               ka="user-resume-del-workexp1" class="link-delete" data-action="/employee/resumeHistoryDelete" data-func="func-delete" data-id="<?php echo $item['hi_id']; ?>">
                <i class="fz-resume fz-delete"></i>删除
            </a>
        </div>
        <span class="period"><?php echo $item['hi_startdate']; ?>-<?php echo $item['hi_enddate']; ?></span>
        
        <h4 class="name"><?php echo $item['hi_company']; ?></h4>
        <div class="text">
            
            <h4><?php echo $item['hi_position']; ?></h4>
            <div class="text">
                
                <h4><?php echo $item['hi_work']; ?></h4>
                
                <p><?php echo $item['hi_results']; ?></p>
            </div>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>


                    </div>
                    <div class="item-form" style="display:block;">
                        
                    </div>
                </div>
                
                <!------------------------------------------------------->
                <div class="resume-item" id="resume-education">
                    <div class="item-primary">
                        <h3 class="title">教育经历
    <div class="op">
        <a href="javascript:;" data-url= ka="user-resume-add-eduexp" class="link-add" data-action="/employee/resumeEducationAdd" data-func="func-add">
            <i class="fz-resume fz-add"></i>添加
        </a>
    </div>
</h3>
<div class="history-education">
    <?php if(is_array($edu) || $edu instanceof \think\Collection || $edu instanceof \think\Paginator): $i = 0; $__LIST__ = $edu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
    <div class="history-item" id="row-846a940cfc2fe5551nZ539u8EFs~">
        <div class="op">
            <a href="javascript:;" data-url=""
               ka="user-resume-edit-eduexp1" class="link-edit" data-action="/employee/resumeEducationEdit" data-func="func-edit" data-id="<?php echo $item['ed_id']; ?>">
                <i class="fz-resume fz-edit"  ></i>编辑
            </a>
            
            <em class="vline"></em>
            <a href="javascript:;" data-url=""
               ka="user-resume-del-eduexp1" class="link-delete" data-action="/employee/resumeEducationDelete" data-func="func-delete" data-id="<?php echo $item['ed_id']; ?>">
                <i class="fz-resume fz-delete" ></i>删除
            </a>
        
        </div>
        <span class="period"><?php echo $item['ed_startdate']; ?>-<?php echo $item['ed_enddate']; ?></span>
        <h4 class="name"><?php echo $item['ed_school']; ?></h4>
        <div class="text">
            <h4><?php echo $item['ed_subject']; ?><em class="vline"></em><?php echo $item['ed_degree']; ?></h4>
            <p><?php echo isset($item['ed_experience'])?$item['ed_experience']:''; ?></p>
        </div>
    </div>
    <?php endforeach; endif; else: echo "" ;endif; ?>
</div>
                
                    
                    </div>
                    <div class="item-form" style="display:block;">
                        
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