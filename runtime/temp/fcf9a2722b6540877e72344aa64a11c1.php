<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\employer\job_edit.html";i:1525659631;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1525632639;s:69:"D:\APP\wamp\www\XDL\zhipin\application\home\view\search\city_box.html";i:1525421935;}*/ ?>
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
    

        
<div id="main" class="inner home-inner">
    <div class="account-container">
        <div class="set-page">
            <div class="set-nav">
                <div class="account-manager">账户管理</div>
                <ul>
                    <a href="/employer/info"><li>个人信息</li></a>
                    <a href="/employer/add"><li >发布工作</li></a>
                    <a href="/employer/index"><li class="cur">已发布工作</li></a>
                    <a href="/employer/reindex"><li>已收简历</li></a>
                    <a href="/employer/editphone"><li>手机号码</li></a>
                    <a href="/employer/editpwd"><li>密码管理</li></a>
                    <a href="/employer/companyindex"><li>公司</li></a>
                </ul>
            </div>
            
            <div class="set-content">
                <div class="set-box sign-form">
                    <div id="mains" class="inner">
                        <div class="job-boxs">
                            <div class="sider deliver-sider">
                            
                            </div>
                        </div>
                        
                        <div class="resume-item resume-item-open" id="resume-userinfo">
                            <div class="item-form">
                                <form action="/employer/update" method="post" class="form-editjob" data-form="form-editjob">
                                    <h3 class="title">招聘岗位</h3>
                                    <div class="form-row">
                                        <dl>
                                            <dt>* 工作名称 <span class="gray"></span></dt>
                                            <dd><input type="text" class="ipt required" placeholder="输入工作名称" data-blank="输入工作名称"
                                                       data-format="输入工作名称" required minlength="2" maxlength="30" ka="et-uname" name="job" value="<?php echo $row['job']; ?>"></dd>
                                        </dl>
                                        <dl>
                                            <dt>* 所属城市</dt>
                                            <dd>
                                                <div class="search-box">
                                                    <div class="search-form ">
                                                        <div class="search-form-con">
                                                            <div class="city-sel ipt" style="border: 1px solid #e3e7ed;">
                                                        <span class="label-text">
                                                            <b class="scityText">全国</b>
                                                            <i class="icon-arrow-down"></i>
                                                        </span>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="scity" class="city-code" value="">
                    
                                                        <div class="city-box">
    <ul class="dorpdown-province">
        <li class="">热门</li>
        <li ka="sel-province-1" class="">北京</li>
        <li ka="sel-province-2" class="">上海</li>
        <li ka="sel-province-3" class="">天津</li>
        <li ka="sel-province-4" class="">重庆</li>
        <li ka="sel-province-5" class="">黑龙江</li>
        <li ka="sel-province-6" class="">吉林</li>
        <li ka="sel-province-7" class="">辽宁</li>
        <li ka="sel-province-8" class="">内蒙古</li>
        <li ka="sel-province-9" class="">河北</li>
        <li ka="sel-province-10" class="">山西</li>
        <li ka="sel-province-11" class="">陕西</li>
        <li ka="sel-province-12" class="">山东</li>
        <li ka="sel-province-13" class="">新疆</li>
        <li ka="sel-province-14" class="">青海</li>
        <li ka="sel-province-15" class="">甘肃</li>
        <li ka="sel-province-16" class="">宁夏</li>
        <li ka="sel-province-17" class="">河南</li>
        <li ka="sel-province-18" class="">江苏</li>
        <li ka="sel-province-19" class="">湖北</li>
        <li ka="sel-province-20" class="">浙江</li>
        <li ka="sel-province-21" class="">安徽</li>
        <li ka="sel-province-22" class="">福建</li>
        <li ka="sel-province-23" class="">江西</li>
        <li ka="sel-province-24" class="">湖南</li>
        <li ka="sel-province-25" class="">贵州</li>
        <li ka="sel-province-26" class="">四川</li>
        <li ka="sel-province-27" class="">广东</li>
        <li ka="sel-province-28" class="">云南</li>
        <li ka="sel-province-29" class="">广西</li>
        <li ka="sel-province-30" class="">海南</li>
        <li ka="sel-province-31" class="">台湾</li>
        <li ka="sel-province-32" class="">西藏</li>
        <li ka="sel-province-33" class="">香港</li>
        <li ka="sel-province-34" class="">澳门</li>
    </ul>
    <div class="dorpdown-city">
        <ul>
            <li ka="hot-city-100010000" data-val="100010000" class="cur">全国</li>
            <li ka="hot-city-101010100" data-val="101010100" class="cur">北京</li>
            <li ka="hot-city-101020100" data-val="101020100" class="cur">上海</li>
            <li ka="hot-city-101280100" data-val="101280100" class="cur">广州</li>
            <li ka="hot-city-101280600" data-val="101280600" class="cur">深圳</li>
            <li ka="hot-city-101210100" data-val="101210100" class="cur">杭州</li>
            <li ka="hot-city-101030100" data-val="101030100" class="cur">天津</li>
            <li ka="hot-city-101110100" data-val="101110100" class="cur">西安</li>
            <li ka="hot-city-101190400" data-val="101190400" class="cur">苏州</li>
            <li ka="hot-city-101200100" data-val="101200100" class="cur">武汉</li>
            <li ka="hot-city-101230200" data-val="101230200" class="cur">厦门</li>
            <li ka="hot-city-101250100" data-val="101250100" class="cur">长沙</li>
            <li ka="hot-city-101270100" data-val="101270100" class="cur">成都</li>
            <li ka="hot-city-101180100" data-val="101180100" class="cur">郑州</li>
        </ul>
        <ul>
            <li ka="hot-city-101010100" data-val="101010100" class="cur">北京</li>
        </ul>
        <ul>
            <li ka="hot-city-101020100" data-val="101020100" class="cur">上海</li>
        </ul>
        <ul>
            <li ka="hot-city-101030100" data-val="101030100" class="cur">天津</li>
        </ul>
        <ul>
            <li ka="hot-city-101040100" data-val="101040100" class="cur">重庆</li>
        </ul>
        <ul>
            <li ka="hot-city-101050100" data-val="101050100" class="cur">哈尔滨</li>
            <li ka="hot-city-101050200" data-val="101050200" class="cur">齐齐哈尔</li>
            <li ka="hot-city-101050300" data-val="101050300" class="cur">牡丹江</li>
            <li ka="hot-city-101050400" data-val="101050400" class="cur">佳木斯</li>
            <li ka="hot-city-101050500" data-val="101050500" class="cur">绥化</li>
            <li ka="hot-city-101050600" data-val="101050600" class="cur">黑河</li>
            <li ka="hot-city-101050700" data-val="101050700" class="cur">伊春</li>
            <li ka="hot-city-101050800" data-val="101050800" class="cur">大庆</li>
            <li ka="hot-city-101050900" data-val="101050900" class="cur">七台河</li>
            <li ka="hot-city-101051000" data-val="101051000" class="cur">鸡西</li>
            <li ka="hot-city-101051100" data-val="101051100" class="cur">鹤岗</li>
            <li ka="hot-city-101051200" data-val="101051200" class="cur">双鸭山</li>
            <li ka="hot-city-101051300" data-val="101051300" class="cur">大兴安岭</li>
        </ul>
        <ul>
            <li ka="hot-city-101060100" data-val="101060100" class="cur">长春</li>
            <li ka="hot-city-101060200" data-val="101060200" class="cur">吉林</li>
            <li ka="hot-city-101060300" data-val="101060300" class="cur">四平</li>
            <li ka="hot-city-101060400" data-val="101060400" class="cur">通化</li>
            <li ka="hot-city-101060500" data-val="101060500" class="cur">白城</li>
            <li ka="hot-city-101060600" data-val="101060600" class="cur">辽源</li>
            <li ka="hot-city-101060700" data-val="101060700" class="cur">松原</li>
            <li ka="hot-city-101060800" data-val="101060800" class="cur">白山</li>
            <li ka="hot-city-101060900" data-val="101060900" class="cur">延边</li>
        </ul>
        <ul>
            <li ka="hot-city-101070100" data-val="101070100" class="cur">沈阳</li>
            <li ka="hot-city-101070200" data-val="101070200" class="cur">大连</li>
            <li ka="hot-city-101070300" data-val="101070300" class="cur">鞍山</li>
            <li ka="hot-city-101070400" data-val="101070400" class="cur">抚顺</li>
            <li ka="hot-city-101070500" data-val="101070500" class="cur">本溪</li>
            <li ka="hot-city-101070600" data-val="101070600" class="cur">丹东</li>
            <li ka="hot-city-101070700" data-val="101070700" class="cur">锦州</li>
            <li ka="hot-city-101070800" data-val="101070800" class="cur">营口</li>
            <li ka="hot-city-101070900" data-val="101070900" class="cur">阜新</li>
            <li ka="hot-city-101071000" data-val="101071000" class="cur">辽阳</li>
            <li ka="hot-city-101071100" data-val="101071100" class="cur">铁岭</li>
            <li ka="hot-city-101071200" data-val="101071200" class="cur">朝阳</li>
            <li ka="hot-city-101071300" data-val="101071300" class="cur">盘锦</li>
            <li ka="hot-city-101071400" data-val="101071400" class="cur">葫芦岛</li>
        </ul>
        <ul>
            <li ka="hot-city-101080100" data-val="101080100" class="cur">呼和浩特</li>
            <li ka="hot-city-101080200" data-val="101080200" class="cur">包头</li>
            <li ka="hot-city-101080300" data-val="101080300" class="cur">乌海</li>
            <li ka="hot-city-101080400" data-val="101080400" class="cur">通辽</li>
            <li ka="hot-city-101080500" data-val="101080500" class="cur">赤峰</li>
            <li ka="hot-city-101080600" data-val="101080600" class="cur">鄂尔多斯</li>
            <li ka="hot-city-101080700" data-val="101080700" class="cur">呼伦贝尔</li>
            <li ka="hot-city-101080800" data-val="101080800" class="cur">巴彦淖尔</li>
            <li ka="hot-city-101080900" data-val="101080900" class="cur">乌兰察布</li>
            <li ka="hot-city-101081000" data-val="101081000" class="cur">锡林郭勒</li>
            <li ka="hot-city-101081100" data-val="101081100" class="cur">兴安盟</li>
            <li ka="hot-city-101081200" data-val="101081200" class="cur">阿拉善</li>
        </ul>
        <ul>
            <li ka="hot-city-101090100" data-val="101090100" class="cur">石家庄</li>
            <li ka="hot-city-101090200" data-val="101090200" class="cur">保定</li>
            <li ka="hot-city-101090300" data-val="101090300" class="cur">张家口</li>
            <li ka="hot-city-101090400" data-val="101090400" class="cur">承德</li>
            <li ka="hot-city-101090500" data-val="101090500" class="cur">唐山</li>
            <li ka="hot-city-101090600" data-val="101090600" class="cur">廊坊</li>
            <li ka="hot-city-101090700" data-val="101090700" class="cur">沧州</li>
            <li ka="hot-city-101090800" data-val="101090800" class="cur">衡水</li>
            <li ka="hot-city-101090900" data-val="101090900" class="cur">邢台</li>
            <li ka="hot-city-101091000" data-val="101091000" class="cur">邯郸</li>
            <li ka="hot-city-101091100" data-val="101091100" class="cur">秦皇岛</li>
        </ul>
        <ul>
            <li ka="hot-city-101100100" data-val="101100100" class="cur">太原</li>
            <li ka="hot-city-101100200" data-val="101100200" class="cur">大同</li>
            <li ka="hot-city-101100300" data-val="101100300" class="cur">阳泉</li>
            <li ka="hot-city-101100400" data-val="101100400" class="cur">晋中</li>
            <li ka="hot-city-101100500" data-val="101100500" class="cur">长治</li>
            <li ka="hot-city-101100600" data-val="101100600" class="cur">晋城</li>
            <li ka="hot-city-101100700" data-val="101100700" class="cur">临汾</li>
            <li ka="hot-city-101100800" data-val="101100800" class="cur">运城</li>
            <li ka="hot-city-101100900" data-val="101100900" class="cur">朔州</li>
            <li ka="hot-city-101101000" data-val="101101000" class="cur">忻州</li>
            <li ka="hot-city-101101100" data-val="101101100" class="cur">吕梁</li>
        </ul>
        <ul>
            <li ka="hot-city-101110100" data-val="101110100" class="cur">西安</li>
            <li ka="hot-city-101110200" data-val="101110200" class="cur">咸阳</li>
            <li ka="hot-city-101110300" data-val="101110300" class="cur">延安</li>
            <li ka="hot-city-101110400" data-val="101110400" class="cur">榆林</li>
            <li ka="hot-city-101110500" data-val="101110500" class="cur">渭南</li>
            <li ka="hot-city-101110600" data-val="101110600" class="cur">商洛</li>
            <li ka="hot-city-101110700" data-val="101110700" class="cur">安康</li>
            <li ka="hot-city-101110800" data-val="101110800" class="cur">汉中</li>
            <li ka="hot-city-101110900" data-val="101110900" class="cur">宝鸡</li>
            <li ka="hot-city-101111000" data-val="101111000" class="cur">铜川</li>
        </ul>
        <ul>
            <li ka="hot-city-101120100" data-val="101120100" class="cur">济南</li>
            <li ka="hot-city-101120200" data-val="101120200" class="cur">青岛</li>
            <li ka="hot-city-101120300" data-val="101120300" class="cur">淄博</li>
            <li ka="hot-city-101120400" data-val="101120400" class="cur">德州</li>
            <li ka="hot-city-101120500" data-val="101120500" class="cur">烟台</li>
            <li ka="hot-city-101120600" data-val="101120600" class="cur">潍坊</li>
            <li ka="hot-city-101120700" data-val="101120700" class="cur">济宁</li>
            <li ka="hot-city-101120800" data-val="101120800" class="cur">泰安</li>
            <li ka="hot-city-101120900" data-val="101120900" class="cur">临沂</li>
            <li ka="hot-city-101121000" data-val="101121000" class="cur">菏泽</li>
            <li ka="hot-city-101121100" data-val="101121100" class="cur">滨州</li>
            <li ka="hot-city-101121200" data-val="101121200" class="cur">东营</li>
            <li ka="hot-city-101121300" data-val="101121300" class="cur">威海</li>
            <li ka="hot-city-101121400" data-val="101121400" class="cur">枣庄</li>
            <li ka="hot-city-101121500" data-val="101121500" class="cur">日照</li>
            <li ka="hot-city-101121600" data-val="101121600" class="cur">莱芜</li>
            <li ka="hot-city-101121700" data-val="101121700" class="cur">聊城</li>
        </ul>
        <ul>
            <li ka="hot-city-101130100" data-val="101130100" class="cur">乌鲁木齐</li>
            <li ka="hot-city-101130200" data-val="101130200" class="cur">克拉玛依</li>
            <li ka="hot-city-101130300" data-val="101130300" class="cur">昌吉</li>
            <li ka="hot-city-101130400" data-val="101130400" class="cur">巴音郭楞</li>
            <li ka="hot-city-101130500" data-val="101130500" class="cur">博尔塔拉</li>
            <li ka="hot-city-101130600" data-val="101130600" class="cur">伊犁</li>
            <li ka="hot-city-101130800" data-val="101130800" class="cur">吐鲁番</li>
            <li ka="hot-city-101130900" data-val="101130900" class="cur">哈密</li>
            <li ka="hot-city-101131000" data-val="101131000" class="cur">阿克苏</li>
            <li ka="hot-city-101131100" data-val="101131100" class="cur">克孜勒苏柯尔克孜</li>
            <li ka="hot-city-101131200" data-val="101131200" class="cur">喀什</li>
            <li ka="hot-city-101131300" data-val="101131300" class="cur">和田</li>
            <li ka="hot-city-101131400" data-val="101131400" class="cur">塔城</li>
            <li ka="hot-city-101131500" data-val="101131500" class="cur">阿勒泰</li>
            <li ka="hot-city-101131600" data-val="101131600" class="cur">石河子</li>
            <li ka="hot-city-101131700" data-val="101131700" class="cur">阿拉尔</li>
            <li ka="hot-city-101131800" data-val="101131800" class="cur">图木舒克</li>
            <li ka="hot-city-101131900" data-val="101131900" class="cur">五家渠</li>
            <li ka="hot-city-101132000" data-val="101132000" class="cur">铁门关</li>
            <li ka="hot-city-101132100" data-val="101132100" class="cur">北屯市</li>
            <li ka="hot-city-101132200" data-val="101132200" class="cur">可克达拉市</li>
            <li ka="hot-city-101132300" data-val="101132300" class="cur">昆玉市</li>
            <li ka="hot-city-101132400" data-val="101132400" class="cur">双河市</li>
        </ul>
        <ul>
            <li ka="hot-city-101150100" data-val="101150100" class="cur">西宁</li>
            <li ka="hot-city-101150200" data-val="101150200" class="cur">海东</li>
            <li ka="hot-city-101150300" data-val="101150300" class="cur">海北</li>
            <li ka="hot-city-101150400" data-val="101150400" class="cur">黄南</li>
            <li ka="hot-city-101150500" data-val="101150500" class="cur">海南</li>
            <li ka="hot-city-101150600" data-val="101150600" class="cur">果洛</li>
            <li ka="hot-city-101150700" data-val="101150700" class="cur">玉树</li>
            <li ka="hot-city-101150800" data-val="101150800" class="cur">海西</li>
        </ul>
        <ul>
            <li ka="hot-city-101160100" data-val="101160100" class="cur">兰州</li>
            <li ka="hot-city-101160200" data-val="101160200" class="cur">定西</li>
            <li ka="hot-city-101160300" data-val="101160300" class="cur">平凉</li>
            <li ka="hot-city-101160400" data-val="101160400" class="cur">庆阳</li>
            <li ka="hot-city-101160500" data-val="101160500" class="cur">武威</li>
            <li ka="hot-city-101160600" data-val="101160600" class="cur">金昌</li>
            <li ka="hot-city-101160700" data-val="101160700" class="cur">张掖</li>
            <li ka="hot-city-101160800" data-val="101160800" class="cur">酒泉</li>
            <li ka="hot-city-101160900" data-val="101160900" class="cur">天水</li>
            <li ka="hot-city-101161000" data-val="101161000" class="cur">白银</li>
            <li ka="hot-city-101161100" data-val="101161100" class="cur">陇南</li>
            <li ka="hot-city-101161200" data-val="101161200" class="cur">嘉峪关</li>
            <li ka="hot-city-101161300" data-val="101161300" class="cur">临夏</li>
            <li ka="hot-city-101161400" data-val="101161400" class="cur">甘南</li>
        </ul>
        <ul>
            <li ka="hot-city-101170100" data-val="101170100" class="cur">银川</li>
            <li ka="hot-city-101170200" data-val="101170200" class="cur">石嘴山</li>
            <li ka="hot-city-101170300" data-val="101170300" class="cur">吴忠</li>
            <li ka="hot-city-101170400" data-val="101170400" class="cur">固原</li>
            <li ka="hot-city-101170500" data-val="101170500" class="cur">中卫</li>
        </ul>
        <ul>
            <li ka="hot-city-101180100" data-val="101180100" class="cur">郑州</li>
            <li ka="hot-city-101180200" data-val="101180200" class="cur">安阳</li>
            <li ka="hot-city-101180300" data-val="101180300" class="cur">新乡</li>
            <li ka="hot-city-101180400" data-val="101180400" class="cur">许昌</li>
            <li ka="hot-city-101180500" data-val="101180500" class="cur">平顶山</li>
            <li ka="hot-city-101180600" data-val="101180600" class="cur">信阳</li>
            <li ka="hot-city-101180700" data-val="101180700" class="cur">南阳</li>
            <li ka="hot-city-101180800" data-val="101180800" class="cur">开封</li>
            <li ka="hot-city-101180900" data-val="101180900" class="cur">洛阳</li>
            <li ka="hot-city-101181000" data-val="101181000" class="cur">商丘</li>
            <li ka="hot-city-101181100" data-val="101181100" class="cur">焦作</li>
            <li ka="hot-city-101181200" data-val="101181200" class="cur">鹤壁</li>
            <li ka="hot-city-101181300" data-val="101181300" class="cur">濮阳</li>
            <li ka="hot-city-101181400" data-val="101181400" class="cur">周口</li>
            <li ka="hot-city-101181500" data-val="101181500" class="cur">漯河</li>
            <li ka="hot-city-101181600" data-val="101181600" class="cur">驻马店</li>
            <li ka="hot-city-101181700" data-val="101181700" class="cur">三门峡</li>
            <li ka="hot-city-101181800" data-val="101181800" class="cur">济源</li>
        </ul>
        <ul>
            <li ka="hot-city-101190100" data-val="101190100" class="cur">南京</li>
            <li ka="hot-city-101190200" data-val="101190200" class="cur">无锡</li>
            <li ka="hot-city-101190300" data-val="101190300" class="cur">镇江</li>
            <li ka="hot-city-101190400" data-val="101190400" class="cur">苏州</li>
            <li ka="hot-city-101190500" data-val="101190500" class="cur">南通</li>
            <li ka="hot-city-101190600" data-val="101190600" class="cur">扬州</li>
            <li ka="hot-city-101190700" data-val="101190700" class="cur">盐城</li>
            <li ka="hot-city-101190800" data-val="101190800" class="cur">徐州</li>
            <li ka="hot-city-101190900" data-val="101190900" class="cur">淮安</li>
            <li ka="hot-city-101191000" data-val="101191000" class="cur">连云港</li>
            <li ka="hot-city-101191100" data-val="101191100" class="cur">常州</li>
            <li ka="hot-city-101191200" data-val="101191200" class="cur">泰州</li>
            <li ka="hot-city-101191300" data-val="101191300" class="cur">宿迁</li>
        </ul>
        <ul>
            <li ka="hot-city-101200100" data-val="101200100" class="cur">武汉</li>
            <li ka="hot-city-101200200" data-val="101200200" class="cur">襄阳</li>
            <li ka="hot-city-101200300" data-val="101200300" class="cur">鄂州</li>
            <li ka="hot-city-101200400" data-val="101200400" class="cur">孝感</li>
            <li ka="hot-city-101200500" data-val="101200500" class="cur">黄冈</li>
            <li ka="hot-city-101200600" data-val="101200600" class="cur">黄石</li>
            <li ka="hot-city-101200700" data-val="101200700" class="cur">咸宁</li>
            <li ka="hot-city-101200800" data-val="101200800" class="cur">荆州</li>
            <li ka="hot-city-101200900" data-val="101200900" class="cur">宜昌</li>
            <li ka="hot-city-101201000" data-val="101201000" class="cur">十堰</li>
            <li ka="hot-city-101201100" data-val="101201100" class="cur">随州</li>
            <li ka="hot-city-101201200" data-val="101201200" class="cur">荆门</li>
            <li ka="hot-city-101201300" data-val="101201300" class="cur">恩施</li>
            <li ka="hot-city-101201400" data-val="101201400" class="cur">仙桃</li>
            <li ka="hot-city-101201500" data-val="101201500" class="cur">潜江</li>
            <li ka="hot-city-101201600" data-val="101201600" class="cur">天门</li>
            <li ka="hot-city-101201700" data-val="101201700" class="cur">神农架</li>
        </ul>
        <ul>
            <li ka="hot-city-101210100" data-val="101210100" class="cur">杭州</li>
            <li ka="hot-city-101210200" data-val="101210200" class="cur">湖州</li>
            <li ka="hot-city-101210300" data-val="101210300" class="cur">嘉兴</li>
            <li ka="hot-city-101210400" data-val="101210400" class="cur">宁波</li>
            <li ka="hot-city-101210500" data-val="101210500" class="cur">绍兴</li>
            <li ka="hot-city-101210600" data-val="101210600" class="cur">台州</li>
            <li ka="hot-city-101210700" data-val="101210700" class="cur">温州</li>
            <li ka="hot-city-101210800" data-val="101210800" class="cur">丽水</li>
            <li ka="hot-city-101210900" data-val="101210900" class="cur">金华</li>
            <li ka="hot-city-101211000" data-val="101211000" class="cur">衢州</li>
            <li ka="hot-city-101211100" data-val="101211100" class="cur">舟山</li>
        </ul>
        <ul>
            <li ka="hot-city-101220100" data-val="101220100" class="cur">合肥</li>
            <li ka="hot-city-101220200" data-val="101220200" class="cur">蚌埠</li>
            <li ka="hot-city-101220300" data-val="101220300" class="cur">芜湖</li>
            <li ka="hot-city-101220400" data-val="101220400" class="cur">淮南</li>
            <li ka="hot-city-101220500" data-val="101220500" class="cur">马鞍山</li>
            <li ka="hot-city-101220600" data-val="101220600" class="cur">安庆</li>
            <li ka="hot-city-101220700" data-val="101220700" class="cur">宿州</li>
            <li ka="hot-city-101220800" data-val="101220800" class="cur">阜阳</li>
            <li ka="hot-city-101220900" data-val="101220900" class="cur">亳州</li>
            <li ka="hot-city-101221000" data-val="101221000" class="cur">滁州</li>
            <li ka="hot-city-101221100" data-val="101221100" class="cur">淮北</li>
            <li ka="hot-city-101221200" data-val="101221200" class="cur">铜陵</li>
            <li ka="hot-city-101221300" data-val="101221300" class="cur">宣城</li>
            <li ka="hot-city-101221400" data-val="101221400" class="cur">六安</li>
            <li ka="hot-city-101221500" data-val="101221500" class="cur">池州</li>
            <li ka="hot-city-101221600" data-val="101221600" class="cur">黄山</li>
        </ul>
        <ul>
            <li ka="hot-city-101230100" data-val="101230100" class="cur">福州</li>
            <li ka="hot-city-101230200" data-val="101230200" class="cur">厦门</li>
            <li ka="hot-city-101230300" data-val="101230300" class="cur">宁德</li>
            <li ka="hot-city-101230400" data-val="101230400" class="cur">莆田</li>
            <li ka="hot-city-101230500" data-val="101230500" class="cur">泉州</li>
            <li ka="hot-city-101230600" data-val="101230600" class="cur">漳州</li>
            <li ka="hot-city-101230700" data-val="101230700" class="cur">龙岩</li>
            <li ka="hot-city-101230800" data-val="101230800" class="cur">三明</li>
            <li ka="hot-city-101230900" data-val="101230900" class="cur">南平</li>
        </ul>
        <ul>
            <li ka="hot-city-101240100" data-val="101240100" class="cur">南昌</li>
            <li ka="hot-city-101240200" data-val="101240200" class="cur">九江</li>
            <li ka="hot-city-101240300" data-val="101240300" class="cur">上饶</li>
            <li ka="hot-city-101240400" data-val="101240400" class="cur">抚州</li>
            <li ka="hot-city-101240500" data-val="101240500" class="cur">宜春</li>
            <li ka="hot-city-101240600" data-val="101240600" class="cur">吉安</li>
            <li ka="hot-city-101240700" data-val="101240700" class="cur">赣州</li>
            <li ka="hot-city-101240800" data-val="101240800" class="cur">景德镇</li>
            <li ka="hot-city-101240900" data-val="101240900" class="cur">萍乡</li>
            <li ka="hot-city-101241000" data-val="101241000" class="cur">新余</li>
            <li ka="hot-city-101241100" data-val="101241100" class="cur">鹰潭</li>
        </ul>
        <ul>
            <li ka="hot-city-101250100" data-val="101250100" class="cur">长沙</li>
            <li ka="hot-city-101250200" data-val="101250200" class="cur">湘潭</li>
            <li ka="hot-city-101250300" data-val="101250300" class="cur">株洲</li>
            <li ka="hot-city-101250400" data-val="101250400" class="cur">衡阳</li>
            <li ka="hot-city-101250500" data-val="101250500" class="cur">郴州</li>
            <li ka="hot-city-101250600" data-val="101250600" class="cur">常德</li>
            <li ka="hot-city-101250700" data-val="101250700" class="cur">益阳</li>
            <li ka="hot-city-101250800" data-val="101250800" class="cur">娄底</li>
            <li ka="hot-city-101250900" data-val="101250900" class="cur">邵阳</li>
            <li ka="hot-city-101251000" data-val="101251000" class="cur">岳阳</li>
            <li ka="hot-city-101251100" data-val="101251100" class="cur">张家界</li>
            <li ka="hot-city-101251200" data-val="101251200" class="cur">怀化</li>
            <li ka="hot-city-101251300" data-val="101251300" class="cur">永州</li>
            <li ka="hot-city-101251400" data-val="101251400" class="cur">湘西</li>
        </ul>
        <ul>
            <li ka="hot-city-101260100" data-val="101260100" class="cur">贵阳</li>
            <li ka="hot-city-101260200" data-val="101260200" class="cur">遵义</li>
            <li ka="hot-city-101260300" data-val="101260300" class="cur">安顺</li>
            <li ka="hot-city-101260400" data-val="101260400" class="cur">铜仁</li>
            <li ka="hot-city-101260500" data-val="101260500" class="cur">毕节</li>
            <li ka="hot-city-101260600" data-val="101260600" class="cur">六盘水</li>
            <li ka="hot-city-101260700" data-val="101260700" class="cur">黔东南</li>
            <li ka="hot-city-101260800" data-val="101260800" class="cur">黔南</li>
            <li ka="hot-city-101260900" data-val="101260900" class="cur">黔西南</li>
        </ul>
        <ul>
            <li ka="hot-city-101270100" data-val="101270100" class="cur">成都</li>
            <li ka="hot-city-101270200" data-val="101270200" class="cur">攀枝花</li>
            <li ka="hot-city-101270300" data-val="101270300" class="cur">自贡</li>
            <li ka="hot-city-101270400" data-val="101270400" class="cur">绵阳</li>
            <li ka="hot-city-101270500" data-val="101270500" class="cur">南充</li>
            <li ka="hot-city-101270600" data-val="101270600" class="cur">达州</li>
            <li ka="hot-city-101270700" data-val="101270700" class="cur">遂宁</li>
            <li ka="hot-city-101270800" data-val="101270800" class="cur">广安</li>
            <li ka="hot-city-101270900" data-val="101270900" class="cur">巴中</li>
            <li ka="hot-city-101271000" data-val="101271000" class="cur">泸州</li>
            <li ka="hot-city-101271100" data-val="101271100" class="cur">宜宾</li>
            <li ka="hot-city-101271200" data-val="101271200" class="cur">内江</li>
            <li ka="hot-city-101271300" data-val="101271300" class="cur">资阳</li>
            <li ka="hot-city-101271400" data-val="101271400" class="cur">乐山</li>
            <li ka="hot-city-101271500" data-val="101271500" class="cur">眉山</li>
            <li ka="hot-city-101271600" data-val="101271600" class="cur">雅安</li>
            <li ka="hot-city-101271700" data-val="101271700" class="cur">德阳</li>
            <li ka="hot-city-101271800" data-val="101271800" class="cur">广元</li>
            <li ka="hot-city-101271900" data-val="101271900" class="cur">阿坝</li>
            <li ka="hot-city-101272000" data-val="101272000" class="cur">凉山</li>
            <li ka="hot-city-101272100" data-val="101272100" class="cur">甘孜</li>
        </ul>
        <ul>
            <li ka="hot-city-101280100" data-val="101280100" class="cur">广州</li>
            <li ka="hot-city-101280200" data-val="101280200" class="cur">韶关</li>
            <li ka="hot-city-101280300" data-val="101280300" class="cur">惠州</li>
            <li ka="hot-city-101280400" data-val="101280400" class="cur">梅州</li>
            <li ka="hot-city-101280500" data-val="101280500" class="cur">汕头</li>
            <li ka="hot-city-101280600" data-val="101280600" class="cur">深圳</li>
            <li ka="hot-city-101280700" data-val="101280700" class="cur">珠海</li>
            <li ka="hot-city-101280800" data-val="101280800" class="cur">佛山</li>
            <li ka="hot-city-101280900" data-val="101280900" class="cur">肇庆</li>
            <li ka="hot-city-101281000" data-val="101281000" class="cur">湛江</li>
            <li ka="hot-city-101281100" data-val="101281100" class="cur">江门</li>
            <li ka="hot-city-101281200" data-val="101281200" class="cur">河源</li>
            <li ka="hot-city-101281300" data-val="101281300" class="cur">清远</li>
            <li ka="hot-city-101281400" data-val="101281400" class="cur">云浮</li>
            <li ka="hot-city-101281500" data-val="101281500" class="cur">潮州</li>
            <li ka="hot-city-101281600" data-val="101281600" class="cur">东莞</li>
            <li ka="hot-city-101281700" data-val="101281700" class="cur">中山</li>
            <li ka="hot-city-101281800" data-val="101281800" class="cur">阳江</li>
            <li ka="hot-city-101281900" data-val="101281900" class="cur">揭阳</li>
            <li ka="hot-city-101282000" data-val="101282000" class="cur">茂名</li>
            <li ka="hot-city-101282100" data-val="101282100" class="cur">汕尾</li>
            <li ka="hot-city-101282200" data-val="101282200" class="cur">东沙群岛</li>
        </ul>
        <ul>
            <li ka="hot-city-101290100" data-val="101290100" class="cur">昆明</li>
            <li ka="hot-city-101290200" data-val="101290200" class="cur">曲靖</li>
            <li ka="hot-city-101290300" data-val="101290300" class="cur">保山</li>
            <li ka="hot-city-101290400" data-val="101290400" class="cur">玉溪</li>
            <li ka="hot-city-101290500" data-val="101290500" class="cur">普洱</li>
            <li ka="hot-city-101290700" data-val="101290700" class="cur">昭通</li>
            <li ka="hot-city-101290800" data-val="101290800" class="cur">临沧</li>
            <li ka="hot-city-101290900" data-val="101290900" class="cur">丽江</li>
            <li ka="hot-city-101291000" data-val="101291000" class="cur">西双版纳</li>
            <li ka="hot-city-101291100" data-val="101291100" class="cur">文山</li>
            <li ka="hot-city-101291200" data-val="101291200" class="cur">红河</li>
            <li ka="hot-city-101291300" data-val="101291300" class="cur">德宏</li>
            <li ka="hot-city-101291400" data-val="101291400" class="cur">怒江</li>
            <li ka="hot-city-101291500" data-val="101291500" class="cur">迪庆</li>
            <li ka="hot-city-101291600" data-val="101291600" class="cur">大理</li>
            <li ka="hot-city-101291700" data-val="101291700" class="cur">楚雄</li>
        </ul>
        <ul>
            <li ka="hot-city-101300100" data-val="101300100" class="cur">南宁</li>
            <li ka="hot-city-101300200" data-val="101300200" class="cur">崇左</li>
            <li ka="hot-city-101300300" data-val="101300300" class="cur">柳州</li>
            <li ka="hot-city-101300400" data-val="101300400" class="cur">来宾</li>
            <li ka="hot-city-101300500" data-val="101300500" class="cur">桂林</li>
            <li ka="hot-city-101300600" data-val="101300600" class="cur">梧州</li>
            <li ka="hot-city-101300700" data-val="101300700" class="cur">贺州</li>
            <li ka="hot-city-101300800" data-val="101300800" class="cur">贵港</li>
            <li ka="hot-city-101300900" data-val="101300900" class="cur">玉林</li>
            <li ka="hot-city-101301000" data-val="101301000" class="cur">百色</li>
            <li ka="hot-city-101301100" data-val="101301100" class="cur">钦州</li>
            <li ka="hot-city-101301200" data-val="101301200" class="cur">河池</li>
            <li ka="hot-city-101301300" data-val="101301300" class="cur">北海</li>
            <li ka="hot-city-101301400" data-val="101301400" class="cur">防城港</li>
        </ul>
        <ul>
            <li ka="hot-city-101310100" data-val="101310100" class="cur">海口</li>
            <li ka="hot-city-101310200" data-val="101310200" class="cur">三亚</li>
            <li ka="hot-city-101310300" data-val="101310300" class="cur">三沙</li>
            <li ka="hot-city-101310400" data-val="101310400" class="cur">儋州</li>
            <li ka="hot-city-101310500" data-val="101310500" class="cur">五指山</li>
            <li ka="hot-city-101310600" data-val="101310600" class="cur">琼海</li>
            <li ka="hot-city-101310700" data-val="101310700" class="cur">文昌</li>
            <li ka="hot-city-101310800" data-val="101310800" class="cur">万宁</li>
            <li ka="hot-city-101310900" data-val="101310900" class="cur">东方</li>
            <li ka="hot-city-101311000" data-val="101311000" class="cur">定安</li>
            <li ka="hot-city-101311100" data-val="101311100" class="cur">屯昌</li>
            <li ka="hot-city-101311200" data-val="101311200" class="cur">澄迈</li>
            <li ka="hot-city-101311300" data-val="101311300" class="cur">临高</li>
            <li ka="hot-city-101311400" data-val="101311400" class="cur">白沙</li>
            <li ka="hot-city-101311500" data-val="101311500" class="cur">昌江</li>
            <li ka="hot-city-101311600" data-val="101311600" class="cur">乐东</li>
            <li ka="hot-city-101311700" data-val="101311700" class="cur">陵水</li>
            <li ka="hot-city-101311800" data-val="101311800" class="cur">保亭</li>
            <li ka="hot-city-101311900" data-val="101311900" class="cur">琼中</li>
        </ul>
        <ul>
            <li ka="hot-city-101341100" data-val="101341100" class="cur">台湾</li>
        </ul>
        <ul>
            <li ka="hot-city-101140100" data-val="101140100" class="cur">拉萨</li>
            <li ka="hot-city-101140200" data-val="101140200" class="cur">日喀则</li>
            <li ka="hot-city-101140300" data-val="101140300" class="cur">昌都</li>
            <li ka="hot-city-101140400" data-val="101140400" class="cur">林芝</li>
            <li ka="hot-city-101140500" data-val="101140500" class="cur">山南</li>
            <li ka="hot-city-101140600" data-val="101140600" class="cur">那曲</li>
            <li ka="hot-city-101140700" data-val="101140700" class="cur">阿里</li>
        </ul>
        <ul>
            <li ka="hot-city-101320300" data-val="101320300" class="cur">香港</li>
        </ul>
        <ul>
            <li ka="hot-city-101330100" data-val="101330100" class="cur">澳门</li>
        </ul>
    </div>
</div>

                                                    </div>
                                                </div>
                                            </dd>
                                        </dl>
                                        
                                    </div>
                                    <div class="form-row">
                                        
                                        <dl>
                                            <dt>* 最底薪水</dt>
                                            <dd>
                                                <select name="salary" class="ipt">
                                                    <option value="0" <?php if($row['salary'] == 0): ?> selected <?php endif; ?> >面议</option>
                                                    <option value="1" <?php if($row['salary'] == 1): ?> selected <?php endif; ?> >1K</option>
                                                    <option value="2" <?php if($row['salary'] == 2): ?> selected <?php endif; ?>>2K</option>
                                                    <option value="3" <?php if($row['salary'] == 3): ?> selected <?php endif; ?>>3K</option>
                                                    <option value="4" <?php if($row['salary'] == 4): ?> selected <?php endif; ?>>4K</option>
                                                    <option value="5" <?php if($row['salary'] == 5): ?> selected <?php endif; ?>>5K</option>
                                                    <option value="6" <?php if($row['salary'] == 6): ?> selected <?php endif; ?>>6K</option>
                                                    <option value="7" <?php if($row['salary'] == 7): ?> selected <?php endif; ?>>7K</option>
                                                    <option value="8" <?php if($row['salary'] == 8): ?> selected <?php endif; ?>>8K</option>
                                                    <option value="9" <?php if($row['salary'] == 9): ?> selected <?php endif; ?>>9K</option>
                                                    <option value="10" <?php if($row['salary'] == 10): ?> selected <?php endif; ?>>10K</option>
                                                    <option value="11" <?php if($row['salary'] == 11): ?> selected <?php endif; ?>>11K</option>
                                                    <option value="12" <?php if($row['salary'] == 12): ?> selected <?php endif; ?>>12K</option>
                                                    <option value="13" <?php if($row['salary'] == 13): ?> selected <?php endif; ?>>13K</option>
                                                    <option value="14" <?php if($row['salary'] == 14): ?> selected <?php endif; ?>>14K</option>
                                                    <option value="15" <?php if($row['salary'] == 15): ?> selected <?php endif; ?>>15K</option>
                                                    <option value="16" <?php if($row['salary'] == 16): ?> selected <?php endif; ?>>16K</option>
                                                    <option value="17" <?php if($row['salary'] == 17): ?> selected <?php endif; ?>>17K</option>
                                                    <option value="18" <?php if($row['salary'] == 18): ?> selected <?php endif; ?>>18K</option>
                                                    <option value="19" <?php if($row['salary'] == 19): ?> selected <?php endif; ?>>19K</option>
                                                    <option value="20" <?php if($row['salary'] == 20): ?> selected <?php endif; ?>>20K</option>
                                                    <option value="21" <?php if($row['salary'] == 21): ?> selected <?php endif; ?>>21K</option>
                                                    <option value="22" <?php if($row['salary'] == 22): ?> selected <?php endif; ?>>22K</option>
                                                    <option value="23" <?php if($row['salary'] == 23): ?> selected <?php endif; ?>>23K</option>
                                                    <option value="24" <?php if($row['salary'] == 24): ?> selected <?php endif; ?>>24K</option>
                                                    <option value="25" <?php if($row['salary'] == 25): ?> selected <?php endif; ?>>25K</option>
                                                    <option value="26" <?php if($row['salary'] == 26): ?> selected <?php endif; ?>>26K</option>
                                                    <option value="27" <?php if($row['salary'] == 27): ?> selected <?php endif; ?>>27K</option>
                                                    <option value="28" <?php if($row['salary'] == 28): ?> selected <?php endif; ?>>28K</option>
                                                    <option value="29" <?php if($row['salary'] == 29): ?> selected <?php endif; ?>>29K</option>
                                                    <option value="30" <?php if($row['salary'] == 30): ?> selected <?php endif; ?>>30K</option>
                                                    <option value="31" <?php if($row['salary'] == 31): ?> selected <?php endif; ?>>31K</option>
                                                    <option value="32" <?php if($row['salary'] == 32): ?> selected <?php endif; ?>>32K</option>
                                                    <option value="33" <?php if($row['salary'] == 33): ?> selected <?php endif; ?>>33K</option>
                                                    <option value="34" <?php if($row['salary'] == 34): ?> selected <?php endif; ?>>34K</option>
                                                    <option value="35" <?php if($row['salary'] == 35): ?> selected <?php endif; ?>>35K</option>
                                                    <option value="36" <?php if($row['salary'] == 36): ?> selected <?php endif; ?>>36K</option>
                                                    <option value="37" <?php if($row['salary'] == 37): ?> selected <?php endif; ?>>37K</option>
                                                    <option value="38" <?php if($row['salary'] == 38): ?> selected <?php endif; ?>>38K</option>
                                                    <option value="39" <?php if($row['salary'] == 39): ?> selected <?php endif; ?>>39K</option>
                                                    <option value="40" <?php if($row['salary'] == 40): ?> selected <?php endif; ?>>40K</option>
                                                    <option value="41" <?php if($row['salary'] == 41): ?> selected <?php endif; ?>>41K</option>
                                                    <option value="42" <?php if($row['salary'] == 42): ?> selected <?php endif; ?>>42K</option>
                                                    <option value="43" <?php if($row['salary'] == 43): ?> selected <?php endif; ?>>43K</option>
                                                    <option value="44" <?php if($row['salary'] == 44): ?> selected <?php endif; ?>>44K</option>
                                                    <option value="45" <?php if($row['salary'] == 45): ?> selected <?php endif; ?>>45K</option>
                                                    <option value="46" <?php if($row['salary'] == 46): ?> selected <?php endif; ?>>46K</option>
                                                    <option value="47" <?php if($row['salary'] == 47): ?> selected <?php endif; ?>>47K</option>
                                                    <option value="48" <?php if($row['salary'] == 48): ?> selected <?php endif; ?>>48K</option>
                                                    <option value="49" <?php if($row['salary'] == 49): ?> selected <?php endif; ?>>49K</option>
                                                    <option value="50" <?php if($row['salary'] == 50): ?> selected <?php endif; ?>>50K</option>
                                                    <option value="60" <?php if($row['salary'] == 60): ?> selected <?php endif; ?>>60K</option>
                                                    <option value="70" <?php if($row['salary'] == 70): ?> selected <?php endif; ?>>70K</option>
                                                    <option value="80" <?php if($row['salary'] == 80): ?> selected <?php endif; ?>>80K</option>
                                                    <option value="90" <?php if($row['salary'] == 90): ?> selected <?php endif; ?>>90K</option>
                                                    <option value="100" <?php if($row['salary'] == 100): ?> selected <?php endif; ?>>100K</option>
                                                    <option value="110" <?php if($row['salary'] == 110): ?> selected <?php endif; ?>>110K</option>
                                                    <option value="120" <?php if($row['salary'] == 120): ?> selected <?php endif; ?>>120K</option>
                                                    <option value="130" <?php if($row['salary'] == 130): ?> selected <?php endif; ?>>130K</option>
                                                    <option value="140" <?php if($row['salary'] == 140): ?> selected <?php endif; ?>>140K</option>
                                                    <option value="150" <?php if($row['salary'] == 150): ?> selected <?php endif; ?>>150K</option>
                                                    <option value="160" <?php if($row['salary'] == 160): ?> selected <?php endif; ?>>160K</option>
                                                    <option value="170" <?php if($row['salary'] == 170): ?> selected <?php endif; ?>>170K</option>
                                                    <option value="180" <?php if($row['salary'] == 180): ?> selected <?php endif; ?>>180K</option>
                                                    <option value="190" <?php if($row['salary'] == 190): ?> selected <?php endif; ?>>190K</option>
                                                    <option value="200" <?php if($row['salary'] == 200): ?> selected <?php endif; ?>>200K</option>
                                                    <option value="210" <?php if($row['salary'] == 210): ?> selected <?php endif; ?>>210K</option>
                                                    <option value="220" <?php if($row['salary'] == 220): ?> selected <?php endif; ?>>220K</option>
                                                    <option value="230" <?php if($row['salary'] == 230): ?> selected <?php endif; ?>>230K</option>
                                                    <option value="240" <?php if($row['salary'] == 240): ?> selected <?php endif; ?>>240K</option>
                                                    <option value="250" <?php if($row['salary'] == 250): ?> selected <?php endif; ?>>250K</option>
                                                </select>
                                            </dd>
                                        </dl>
    
    
                                    </div>
                                    <div class="form-row">
                                        <dl>
                                            <dt>* 要求经验年龄</dt>
                                            <dd>
                                                <div class="gray"><input type="text"
                                                                         name="experience"
                                                                         class="ipt required"
                                                                         value="<?php echo $row['experience']; ?>" required minlength="1" maxlength="10"></div>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>* 要求学历</dt>
                                            <dd>
                                                <div class="gray">
                                                    <input type="text" name="degree" class="ipt required" value="<?php echo $row['degree']; ?>" required minlength="2" maxlength="10">
                                                </div>
                                            </dd>
                                        </dl>
                                    </div>
                                    <div class="form-row">
                                        <dl>
                                            <dt>职位标签</dt>
                                            <dd><input name="tags" ka="email_edit" value="<?php echo $row['tags']; ?>" type="text" class="ipt"
                                                       placeholder="请填写职位标签" data-range="0,40" data-blank="" data-format="请填写职位标签"
                                                       required minlength="2" maxlength="20"></dd>
                                        </dl>
                                        <dl>
                                            <dt>* 工作地址</dt>
                                            <dd><input name="address" ka="email_edit" value="<?php echo $row['address']; ?>" type="text" class="ipt"
                                                       placeholder="请填写工作地址" data-range="0,40" data-blank="" data-format="请填写工作地址"
                                                       required minlength="2" maxlength="50"></dd>
                                        </dl>
                                    </div>
                                    <div class="form-row">
                                        <dl>
                                            <dt>* 职位描述</dt>
                                            <dd>
        
                                                <!--<input type="text" class="ipt ipt-datetimepicker " data-blank="" name="job_descr"-->
                                                <!--value="" required minlength="2" maxlength="100">-->
                                                <textarea class="ipt ipt-datetimepicker " name="job_descr" id="" cols="30" rows="10" required minlength="1" maxlength="300"><?php echo $row['job_descr']; ?></textarea>
    
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>* 团队介绍</dt>
                                            <dd><textarea class="ipt ipt-datetimepicker " name="team_descr" id="" cols="30" rows="10" required minlength="1" maxlength="100" required minlength="2" maxlength="300"><?php echo $row['team_descr']; ?></textarea></dd>
                                        </dl>
                                    </div>
                                   
                                    <div class="form-row" style="padding-bottom: 20px;">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        
                                        <button class="btn vali_btn" type="submit" ka="user-resume-user-info-ok">完成</button>
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
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