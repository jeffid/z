<?php if (!defined('THINK_PATH')) exit(); /*a:13:{s:75:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\index\index.html";i:1524884376;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1525835144;s:73:"D:\APP\wamp\www\XDL\zhipin\application\home\view\index\index_jobmenu.html";i:1525268995;s:75:"D:\APP\wamp\www\XDL\zhipin\application\home\view\index\index_searchbox.html";i:1525685174;s:72:"D:\APP\wamp\www\XDL\zhipin\application\home\view\search\search_form.html";i:1525685174;s:69:"D:\APP\wamp\www\XDL\zhipin\application\home\view\search\city_box.html";i:1525421935;s:73:"D:\APP\wamp\www\XDL\zhipin\application\home\view\search\industry_box.html";i:1525421935;s:73:"D:\APP\wamp\www\XDL\zhipin\application\home\view\search\position_box.html";i:1525421935;s:69:"D:\APP\wamp\www\XDL\zhipin\application\home\view\search\category.html";i:1525421935;s:75:"D:\APP\wamp\www\XDL\zhipin\application\home\view\index\index_sliderbox.html";i:1525685174;s:72:"D:\APP\wamp\www\XDL\zhipin\application\home\view\index\index_jobtab.html";i:1525194252;s:76:"D:\APP\wamp\www\XDL\zhipin\application\home\view\index\index_companytab.html";i:1524839843;s:76:"D:\APP\wamp\www\XDL\zhipin\application\home\view\index\index_hotcitytab.html";i:1525685174;}*/ ?>
<!DOCTYPE html>
<html class="standard"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>首页</title>
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
    

        
<!--主体main-->
<div id="main" class="inner home-inner">
    <div class="home-box">
        <div class="home-sider">
            <!-- 左侧职位选择 -->
            <div class="job-menu">
    <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($cate) ? array_slice($cate,0,12, true) : $cate->slice(0,12, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;?>
    <dl class="">
       
        <dd>
            <i class="icon-arrow-right"></i>
            <a href="/search/index/position/<?php echo $item1['id']; ?>"><?php echo $item1['name']; ?></a>
        </dd>
       
        <div class="menu-line"></div>
        <div class="menu-sub">
            <?php if(is_array($item1['children']) || $item1['children'] instanceof \think\Collection || $item1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?>
    
            <ul>
                <li>
                    <h4><?php echo $item2['name']; ?></h4>
                    <div class="text">
                        <?php if(is_array($item2['children']) || $item2['children'] instanceof \think\Collection || $item2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item3): $mod = ($i % 2 );++$i;?>
                            <a href="/search/index/position/<?php echo $item3['id']; ?>"><?php echo $item3['name']; ?></a>
                        <?php endforeach; endif; else: echo "" ;endif; ?>

                    </div>
                </li>
            </ul>
            <?php endforeach; endif; else: echo "" ;endif; ?>

        </div>
       
    </dl>
    <?php endforeach; endif; else: echo "" ;endif; ?>
    

    <div class="show-all" style="display: block;">
        显示全部职位
    </div>
    
    
    <div class="all-box" style="display: none;">
    
        <?php if(is_array($cate) || $cate instanceof \think\Collection || $cate instanceof \think\Paginator): $i = 0;$__LIST__ = is_array($cate) ? array_slice($cate,12,null, true) : $cate->slice(12,null, true); if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;?>
    
        <dl>
            <dd>
                <i class="icon-arrow-right"></i>
                <a href="/search/index/position/<?php echo $item1['id']; ?>"><?php echo $item1['name']; ?></a>
            </dd>
            <div class="menu-line"></div>
            <div class="menu-sub">
                <ul>
                    <?php if(is_array($item1['children']) || $item1['children'] instanceof \think\Collection || $item1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?>
                    
                    <li>
                        <h4><?php echo $item2['name']; ?></h4>
                        <div class="text">
                            <?php if(is_array($item2['children']) || $item2['children'] instanceof \think\Collection || $item2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item3): $mod = ($i % 2 );++$i;?>
                            <a href="/search/index/position/<?php echo $item3['id']; ?>"><?php echo $item3['name']; ?></a>
                            <?php endforeach; endif; else: echo "" ;endif; ?>
    
                        </div>
                    </li>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
        </dl>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        
    
    </div>
</div>

        </div>
        <div class="home-main">
            <!--搜索框-->
            <div class="search-box sub">
    
<div class="search-form ">
    <form action="/search/index/" method="get" class="">
        <div class="search-form-con">
            <div class="city-sel">
                <i class="line"></i>
                <span class="label-text">
                                <b>全国</b><i class="icon-arrow-down"></i>
                            </span>
            </div>
            <div class="industry-sel" ka="search_bos_sel_industry">
                <i class="line"></i>
                <span class="label-text">
                                <b>行业不限</b><i class="icon-arrow-down"></i>
                            </span>
            </div>
            <div class="position-sel" ka="search_box_sel_jobtype">
                <i class="line"></i>
                <span class="label-text">
                                <b>职位类型不限</b><i class="icon-arrow-down"></i>
                            </span>
            </div>
            <p class="ipt-wrap">
                <input type="text" name="query" ka="search-keyword" value="" autocomplete="off" class="ipt-search" maxlength="50" placeholder="搜索职位、公司">
            </p>
        </div>
        
        <input type="hidden" name="scity" class="city-code" value="">
        <input type="hidden" name="industry" class="industry-code" value="">
        <input type="hidden" name="position" class="position-code" value="">
        
        <button class="btn btn-search">搜索</button>
        
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

                            <div class="industry-box">
                        <ul>
                            <li data-val=""><a href="javascript:;">不限</a></li>
                            <li data-val="100001" ka="sel-industry-1"><a href="javascript:;">电子商务</a></li>
                            <li data-val="100002" ka="sel-industry-2"><a href="javascript:;">游戏</a></li>
                            <li data-val="100003" ka="sel-industry-3"><a href="javascript:;">媒体</a></li>
                            <li data-val="100004" ka="sel-industry-4"><a href="javascript:;">广告营销</a></li>
                            <li data-val="100005" ka="sel-industry-5"><a href="javascript:;">数据服务</a></li>
                            <li data-val="100006" ka="sel-industry-6"><a href="javascript:;">医疗健康</a></li>
                            <li data-val="100007" ka="sel-industry-7"><a href="javascript:;">生活服务</a></li>
                            <li data-val="100008" ka="sel-industry-8"><a href="javascript:;">O2O</a></li>
                            <li data-val="100009" ka="sel-industry-9"><a href="javascript:;">旅游</a></li>
                            <li data-val="100010" ka="sel-industry-10"><a href="javascript:;">分类信息</a></li>
                            <li data-val="100011" ka="sel-industry-11"><a href="javascript:;">音乐/视频/阅读</a></li>
                            <li data-val="100012" ka="sel-industry-12"><a href="javascript:;">在线教育</a></li>
                            <li data-val="100013" ka="sel-industry-13"><a href="javascript:;">社交网络</a></li>
                            <li data-val="100014" ka="sel-industry-14"><a href="javascript:;">人力资源服务</a></li>
                            <li data-val="100015" ka="sel-industry-15"><a href="javascript:;">企业服务</a></li>
                            <li data-val="100016" ka="sel-industry-16"><a href="javascript:;">信息安全</a></li>
                            <li data-val="100018" ka="sel-industry-17"><a href="javascript:;">智能硬件</a></li>
                            <li data-val="100019" ka="sel-industry-18"><a href="javascript:;">移动互联网</a></li>
                            <li data-val="100020" ka="sel-industry-19"><a href="javascript:;">互联网</a></li>
                            <li data-val="100021" ka="sel-industry-20"><a href="javascript:;">计算机软件</a></li>
                            <li data-val="100024" ka="sel-industry-21"><a href="javascript:;">通信/网络设备</a></li>
                            <li data-val="100101" ka="sel-industry-22"><a href="javascript:;">广告/公关/会展</a></li>
                            <li data-val="100206" ka="sel-industry-23"><a href="javascript:;">互联网金融</a></li>
                            <li data-val="100502" ka="sel-industry-24"><a href="javascript:;">物流/仓储</a></li>
                            <li data-val="100504" ka="sel-industry-25"><a href="javascript:;">贸易/进出口</a></li>
                            <li data-val="100601" ka="sel-industry-26"><a href="javascript:;">咨询</a></li>
                            <li data-val="100702" ka="sel-industry-27"><a href="javascript:;">工程施工</a></li>
                            <li data-val="100801" ka="sel-industry-28"><a href="javascript:;">汽车生产</a></li>
                            <li data-val="101304" ka="sel-industry-29"><a href="javascript:;">其他行业</a></li>
                        </ul>
                    </div>

        <div class="position-box ">
    <?php if(!(empty($category) || (($category instanceof \think\Collection || $category instanceof \think\Paginator ) && $category->isEmpty()))): ?>
    <!--搜索框实时从数据库拿目录时用这个,否则用静态目录-->
    <ul class="category category-1">
        <li data-positioncode="0" data-position="不限职业类型">
            <a href="javascript:;">不限职业类型</a>
        </li>
        <?php if(is_array($category) || $category instanceof \think\Collection || $category instanceof \think\Paginator): $i = 0; $__LIST__ = $category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item1): $mod = ($i % 2 );++$i;?>
        <li data-positioncode="<?php echo $item1['id']; ?>" data-position="<?php echo $item1['name']; ?>">
            <a href="javascript:;"><?php echo $item1['name']; ?></a>
            <ul class="category category-2">
                <?php if(is_array($item1['children']) || $item1['children'] instanceof \think\Collection || $item1['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item1['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item2): $mod = ($i % 2 );++$i;?>
                <li data-positioncode="<?php echo $item2['id']; ?>" data-position="<?php echo $item2['name']; ?>">
                    <a href="javascript:;"><?php echo $item2['name']; ?></a>
                    <ul class="category category-3">
                        <?php if(is_array($item2['children']) || $item2['children'] instanceof \think\Collection || $item2['children'] instanceof \think\Paginator): $i = 0; $__LIST__ = $item2['children'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item3): $mod = ($i % 2 );++$i;?>
                        <li data-positioncode="<?php echo $item3['id']; ?>" data-position="<?php echo $item3['name']; ?>">
                            <a href="javascript:;"><?php echo $item3['name']; ?></a>
                        </li>
                        <?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </li>
        <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <?php else: ?>
    <!--搜索框实时从数据库拿目录时用这个,否则用静态目录-->
    <ul class="category category-1">
    <li data-positioncode="0" data-position="不限职业类型">
        <a href="javascript:;">不限职业类型</a>
    </li>
    <li data-positioncode="1" data-position="技术">
        <a href="javascript:;">技术</a>
        <ul class="category category-2">
            <li data-positioncode="2" data-position="后端开发">
                <a href="javascript:;">后端开发</a>
                <ul class="category category-3">
                    <li data-positioncode="3" data-position="Java">
                        <a href="javascript:;">Java</a>
                    </li>
                    <li data-positioncode="4" data-position="C++">
                        <a href="javascript:;">C++</a>
                    </li>
                    <li data-positioncode="5" data-position="PHP">
                        <a href="javascript:;">PHP</a>
                    </li>
                    <li data-positioncode="6" data-position="数据挖掘">
                        <a href="javascript:;">数据挖掘</a>
                    </li>
                    <li data-positioncode="7" data-position="C">
                        <a href="javascript:;">C</a>
                    </li>
                    <li data-positioncode="8" data-position="C#">
                        <a href="javascript:;">C#</a>
                    </li>
                    <li data-positioncode="9" data-position=".NET">
                        <a href="javascript:;">.NET</a>
                    </li>
                    <li data-positioncode="10" data-position="Hadoop">
                        <a href="javascript:;">Hadoop</a>
                    </li>
                    <li data-positioncode="11" data-position="Python">
                        <a href="javascript:;">Python</a>
                    </li>
                    <li data-positioncode="12" data-position="Delphi">
                        <a href="javascript:;">Delphi</a>
                    </li>
                    <li data-positioncode="13" data-position="VB">
                        <a href="javascript:;">VB</a>
                    </li>
                    <li data-positioncode="14" data-position="Perl">
                        <a href="javascript:;">Perl</a>
                    </li>
                    <li data-positioncode="15" data-position="Ruby">
                        <a href="javascript:;">Ruby</a>
                    </li>
                    <li data-positioncode="16" data-position="Node.js">
                        <a href="javascript:;">Node.js</a>
                    </li>
                    <li data-positioncode="17" data-position="搜索算法">
                        <a href="javascript:;">搜索算法</a>
                    </li>
                    <li data-positioncode="18" data-position="Golang">
                        <a href="javascript:;">Golang</a>
                    </li>
                    <li data-positioncode="19" data-position="自然语言处理">
                        <a href="javascript:;">自然语言处理</a>
                    </li>
                    <li data-positioncode="20" data-position="推荐算法">
                        <a href="javascript:;">推荐算法</a>
                    </li>
                    <li data-positioncode="21" data-position="Erlang">
                        <a href="javascript:;">Erlang</a>
                    </li>
                    <li data-positioncode="22" data-position="算法工程师">
                        <a href="javascript:;">算法工程师</a>
                    </li>
                    <li data-positioncode="23" data-position="语音/视频/图形开发">
                        <a href="javascript:;">语音/视频/图形开发</a>
                    </li>
                    <li data-positioncode="24" data-position="数据采集">
                        <a href="javascript:;">数据采集</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="25" data-position="移动开发">
                <a href="javascript:;">移动开发</a>
                <ul class="category category-3">
                    <li data-positioncode="26" data-position="HTML5">
                        <a href="javascript:;">HTML5</a>
                    </li>
                    <li data-positioncode="27" data-position="Android">
                        <a href="javascript:;">Android</a>
                    </li>
                    <li data-positioncode="28" data-position="iOS">
                        <a href="javascript:;">iOS</a>
                    </li>
                    <li data-positioncode="29" data-position="WP">
                        <a href="javascript:;">WP</a>
                    </li>
                    <li data-positioncode="30" data-position="web前端">
                        <a href="javascript:;">web前端</a>
                    </li>
                    <li data-positioncode="31" data-position="Flash">
                        <a href="javascript:;">Flash</a>
                    </li>
                    <li data-positioncode="32" data-position="JavaScript">
                        <a href="javascript:;">JavaScript</a>
                    </li>
                    <li data-positioncode="33" data-position="U3D">
                        <a href="javascript:;">U3D</a>
                    </li>
                    <li data-positioncode="34" data-position="COCOS2DX">
                        <a href="javascript:;">COCOS2DX</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="35" data-position="测试">
                <a href="javascript:;">测试</a>
                <ul class="category category-3">
                    <li data-positioncode="36" data-position="测试工程师">
                        <a href="javascript:;">测试工程师</a>
                    </li>
                    <li data-positioncode="37" data-position="自动化测试">
                        <a href="javascript:;">自动化测试</a>
                    </li>
                    <li data-positioncode="38" data-position="功能测试">
                        <a href="javascript:;">功能测试</a>
                    </li>
                    <li data-positioncode="39" data-position="性能测试">
                        <a href="javascript:;">性能测试</a>
                    </li>
                    <li data-positioncode="40" data-position="测试开发">
                        <a href="javascript:;">测试开发</a>
                    </li>
                    <li data-positioncode="41" data-position="移动端测试">
                        <a href="javascript:;">移动端测试</a>
                    </li>
                    <li data-positioncode="42" data-position="游戏测试">
                        <a href="javascript:;">游戏测试</a>
                    </li>
                    <li data-positioncode="43" data-position="硬件测试">
                        <a href="javascript:;">硬件测试</a>
                    </li>
                    <li data-positioncode="44" data-position="软件测试">
                        <a href="javascript:;">软件测试</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="45" data-position="运维/技术支持">
                <a href="javascript:;">运维/技术支持</a>
                <ul class="category category-3">
                    <li data-positioncode="46" data-position="运维工程师">
                        <a href="javascript:;">运维工程师</a>
                    </li>
                    <li data-positioncode="47" data-position="运维开发工程师">
                        <a href="javascript:;">运维开发工程师</a>
                    </li>
                    <li data-positioncode="48" data-position="网络工程师">
                        <a href="javascript:;">网络工程师</a>
                    </li>
                    <li data-positioncode="49" data-position="系统工程师">
                        <a href="javascript:;">系统工程师</a>
                    </li>
                    <li data-positioncode="50" data-position="IT技术支持">
                        <a href="javascript:;">IT技术支持</a>
                    </li>
                    <li data-positioncode="51" data-position="系统管理员">
                        <a href="javascript:;">系统管理员</a>
                    </li>
                    <li data-positioncode="52" data-position="网络安全">
                        <a href="javascript:;">网络安全</a>
                    </li>
                    <li data-positioncode="53" data-position="系统安全">
                        <a href="javascript:;">系统安全</a>
                    </li>
                    <li data-positioncode="54" data-position="DBA">
                        <a href="javascript:;">DBA</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="55" data-position="数据">
                <a href="javascript:;">数据</a>
                <ul class="category category-3">
                    <li data-positioncode="56" data-position="ETL工程师">
                        <a href="javascript:;">ETL工程师</a>
                    </li>
                    <li data-positioncode="57" data-position="数据仓库">
                        <a href="javascript:;">数据仓库</a>
                    </li>
                    <li data-positioncode="58" data-position="数据开发">
                        <a href="javascript:;">数据开发</a>
                    </li>
                    <li data-positioncode="59" data-position="数据挖掘">
                        <a href="javascript:;">数据挖掘</a>
                    </li>
                    <li data-positioncode="60" data-position="数据分析师">
                        <a href="javascript:;">数据分析师</a>
                    </li>
                    <li data-positioncode="61" data-position="数据架构师">
                        <a href="javascript:;">数据架构师</a>
                    </li>
                    <li data-positioncode="62" data-position="算法研究员">
                        <a href="javascript:;">算法研究员</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="63" data-position="项目管理">
                <a href="javascript:;">项目管理</a>
                <ul class="category category-3">
                    <li data-positioncode="64" data-position="项目经理">
                        <a href="javascript:;">项目经理</a>
                    </li>
                    <li data-positioncode="65" data-position="项目主管">
                        <a href="javascript:;">项目主管</a>
                    </li>
                    <li data-positioncode="66" data-position="项目助理">
                        <a href="javascript:;">项目助理</a>
                    </li>
                    <li data-positioncode="67" data-position="项目专员">
                        <a href="javascript:;">项目专员</a>
                    </li>
                    <li data-positioncode="68" data-position="实施顾问">
                        <a href="javascript:;">实施顾问</a>
                    </li>
                    <li data-positioncode="69" data-position="实施工程师">
                        <a href="javascript:;">实施工程师</a>
                    </li>
                    <li data-positioncode="70" data-position="需求分析工程师">
                        <a href="javascript:;">需求分析工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="71" data-position="硬件开发">
                <a href="javascript:;">硬件开发</a>
                <ul class="category category-3">
                    <li data-positioncode="72" data-position="硬件">
                        <a href="javascript:;">硬件</a>
                    </li>
                    <li data-positioncode="73" data-position="嵌入式">
                        <a href="javascript:;">嵌入式</a>
                    </li>
                    <li data-positioncode="74" data-position="自动化">
                        <a href="javascript:;">自动化</a>
                    </li>
                    <li data-positioncode="75" data-position="单片机">
                        <a href="javascript:;">单片机</a>
                    </li>
                    <li data-positioncode="76" data-position="电路设计">
                        <a href="javascript:;">电路设计</a>
                    </li>
                    <li data-positioncode="77" data-position="驱动开发">
                        <a href="javascript:;">驱动开发</a>
                    </li>
                    <li data-positioncode="78" data-position="系统集成">
                        <a href="javascript:;">系统集成</a>
                    </li>
                    <li data-positioncode="79" data-position="FPGA开发">
                        <a href="javascript:;">FPGA开发</a>
                    </li>
                    <li data-positioncode="80" data-position="DSP开发">
                        <a href="javascript:;">DSP开发</a>
                    </li>
                    <li data-positioncode="81" data-position="ARM开发">
                        <a href="javascript:;">ARM开发</a>
                    </li>
                    <li data-positioncode="82" data-position="PCB工艺">
                        <a href="javascript:;">PCB工艺</a>
                    </li>
                    <li data-positioncode="83" data-position="模具设计">
                        <a href="javascript:;">模具设计</a>
                    </li>
                    <li data-positioncode="84" data-position="热传导">
                        <a href="javascript:;">热传导</a>
                    </li>
                    <li data-positioncode="85" data-position="材料工程师">
                        <a href="javascript:;">材料工程师</a>
                    </li>
                    <li data-positioncode="86" data-position="精益工程师">
                        <a href="javascript:;">精益工程师</a>
                    </li>
                    <li data-positioncode="87" data-position="射频工程师">
                        <a href="javascript:;">射频工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="88" data-position="前端开发">
                <a href="javascript:;">前端开发</a>
                <ul class="category category-3">
                    <li data-positioncode="89" data-position="web前端">
                        <a href="javascript:;">web前端</a>
                    </li>
                    <li data-positioncode="90" data-position="Javascript">
                        <a href="javascript:;">Javascript</a>
                    </li>
                    <li data-positioncode="91" data-position="Flash">
                        <a href="javascript:;">Flash</a>
                    </li>
                    <li data-positioncode="92" data-position="HTML5">
                        <a href="javascript:;">HTML5</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="93" data-position="通信">
                <a href="javascript:;">通信</a>
                <ul class="category category-3">
                    <li data-positioncode="94" data-position="通信技术工程师">
                        <a href="javascript:;">通信技术工程师</a>
                    </li>
                    <li data-positioncode="95" data-position="通信研发工程师">
                        <a href="javascript:;">通信研发工程师</a>
                    </li>
                    <li data-positioncode="96" data-position="数据通信工程师">
                        <a href="javascript:;">数据通信工程师</a>
                    </li>
                    <li data-positioncode="97" data-position="移动通信工程师">
                        <a href="javascript:;">移动通信工程师</a>
                    </li>
                    <li data-positioncode="98" data-position="电信网络工程师">
                        <a href="javascript:;">电信网络工程师</a>
                    </li>
                    <li data-positioncode="99" data-position="电信交换工程师">
                        <a href="javascript:;">电信交换工程师</a>
                    </li>
                    <li data-positioncode="100" data-position="有线传输工程师">
                        <a href="javascript:;">有线传输工程师</a>
                    </li>
                    <li data-positioncode="101" data-position="无线射频工程师">
                        <a href="javascript:;">无线射频工程师</a>
                    </li>
                    <li data-positioncode="102" data-position="通信电源工程师">
                        <a href="javascript:;">通信电源工程师</a>
                    </li>
                    <li data-positioncode="103" data-position="通信标准化工程师">
                        <a href="javascript:;">通信标准化工程师</a>
                    </li>
                    <li data-positioncode="104" data-position="通信项目专员">
                        <a href="javascript:;">通信项目专员</a>
                    </li>
                    <li data-positioncode="105" data-position="通信项目经理">
                        <a href="javascript:;">通信项目经理</a>
                    </li>
                    <li data-positioncode="106" data-position="核心网工程师">
                        <a href="javascript:;">核心网工程师</a>
                    </li>
                    <li data-positioncode="107" data-position="通信测试工程师">
                        <a href="javascript:;">通信测试工程师</a>
                    </li>
                    <li data-positioncode="108" data-position="通信设备工程师">
                        <a href="javascript:;">通信设备工程师</a>
                    </li>
                    <li data-positioncode="109" data-position="光通信工程师">
                        <a href="javascript:;">光通信工程师</a>
                    </li>
                    <li data-positioncode="110" data-position="光传输工程师">
                        <a href="javascript:;">光传输工程师</a>
                    </li>
                    <li data-positioncode="111" data-position="光网络工程师">
                        <a href="javascript:;">光网络工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="112" data-position="电子/半导体">
                <a href="javascript:;">电子/半导体</a>
                <ul class="category category-3">
                    <li data-positioncode="113" data-position="电子工程师">
                        <a href="javascript:;">电子工程师</a>
                    </li>
                    <li data-positioncode="114" data-position="电气工程师">
                        <a href="javascript:;">电气工程师</a>
                    </li>
                    <li data-positioncode="115" data-position="FAE">
                        <a href="javascript:;">FAE</a>
                    </li>
                    <li data-positioncode="116" data-position="电气设计工程师">
                        <a href="javascript:;">电气设计工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="117" data-position="高端技术职位">
                <a href="javascript:;">高端技术职位</a>
                <ul class="category category-3">
                    <li data-positioncode="118" data-position="技术经理">
                        <a href="javascript:;">技术经理</a>
                    </li>
                    <li data-positioncode="119" data-position="技术总监">
                        <a href="javascript:;">技术总监</a>
                    </li>
                    <li data-positioncode="120" data-position="测试经理">
                        <a href="javascript:;">测试经理</a>
                    </li>
                    <li data-positioncode="121" data-position="架构师">
                        <a href="javascript:;">架构师</a>
                    </li>
                    <li data-positioncode="122" data-position="CTO">
                        <a href="javascript:;">CTO</a>
                    </li>
                    <li data-positioncode="123" data-position="运维总监">
                        <a href="javascript:;">运维总监</a>
                    </li>
                    <li data-positioncode="124" data-position="技术合伙人">
                        <a href="javascript:;">技术合伙人</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="125" data-position="人工智能">
                <a href="javascript:;">人工智能</a>
                <ul class="category category-3">
                    <li data-positioncode="126" data-position="机器学习">
                        <a href="javascript:;">机器学习</a>
                    </li>
                    <li data-positioncode="127" data-position="深度学习">
                        <a href="javascript:;">深度学习</a>
                    </li>
                    <li data-positioncode="128" data-position="图像算法">
                        <a href="javascript:;">图像算法</a>
                    </li>
                    <li data-positioncode="129" data-position="图像处理">
                        <a href="javascript:;">图像处理</a>
                    </li>
                    <li data-positioncode="130" data-position="语音识别">
                        <a href="javascript:;">语音识别</a>
                    </li>
                    <li data-positioncode="131" data-position="图像识别">
                        <a href="javascript:;">图像识别</a>
                    </li>
                    <li data-positioncode="132" data-position="算法研究员">
                        <a href="javascript:;">算法研究员</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="133" data-position="软件销售支持">
                <a href="javascript:;">软件销售支持</a>
                <ul class="category category-3">
                    <li data-positioncode="134" data-position="售前工程师">
                        <a href="javascript:;">售前工程师</a>
                    </li>
                    <li data-positioncode="135" data-position="售后工程师">
                        <a href="javascript:;">售后工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="136" data-position="其他技术职位">
                <a href="javascript:;">其他技术职位</a>
                <ul class="category category-3">
                    <li data-positioncode="137" data-position="其他技术职位">
                        <a href="javascript:;">其他技术职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="138" data-position="产品">
        <a href="javascript:;">产品</a>
        <ul class="category category-2">
            <li data-positioncode="139" data-position="产品经理">
                <a href="javascript:;">产品经理</a>
                <ul class="category category-3">
                    <li data-positioncode="140" data-position="产品经理">
                        <a href="javascript:;">产品经理</a>
                    </li>
                    <li data-positioncode="141" data-position="网页产品经理">
                        <a href="javascript:;">网页产品经理</a>
                    </li>
                    <li data-positioncode="142" data-position="移动产品经理">
                        <a href="javascript:;">移动产品经理</a>
                    </li>
                    <li data-positioncode="143" data-position="产品助理">
                        <a href="javascript:;">产品助理</a>
                    </li>
                    <li data-positioncode="144" data-position="数据产品经理">
                        <a href="javascript:;">数据产品经理</a>
                    </li>
                    <li data-positioncode="145" data-position="电商产品经理">
                        <a href="javascript:;">电商产品经理</a>
                    </li>
                    <li data-positioncode="146" data-position="游戏策划">
                        <a href="javascript:;">游戏策划</a>
                    </li>
                    <li data-positioncode="147" data-position="产品专员">
                        <a href="javascript:;">产品专员</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="148" data-position="高端产品职位">
                <a href="javascript:;">高端产品职位</a>
                <ul class="category category-3">
                    <li data-positioncode="149" data-position="产品总监">
                        <a href="javascript:;">产品总监</a>
                    </li>
                    <li data-positioncode="150" data-position="游戏制作人">
                        <a href="javascript:;">游戏制作人</a>
                    </li>
                    <li data-positioncode="151" data-position="产品VP">
                        <a href="javascript:;">产品VP</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="152" data-position="其他产品职位">
                <a href="javascript:;">其他产品职位</a>
                <ul class="category category-3">
                    <li data-positioncode="153" data-position="其他产品职位">
                        <a href="javascript:;">其他产品职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="154" data-position="设计">
        <a href="javascript:;">设计</a>
        <ul class="category category-2">
            <li data-positioncode="155" data-position="视觉设计">
                <a href="javascript:;">视觉设计</a>
                <ul class="category category-3">
                    <li data-positioncode="156" data-position="视觉设计师">
                        <a href="javascript:;">视觉设计师</a>
                    </li>
                    <li data-positioncode="157" data-position="网页设计师">
                        <a href="javascript:;">网页设计师</a>
                    </li>
                    <li data-positioncode="158" data-position="Flash设计师">
                        <a href="javascript:;">Flash设计师</a>
                    </li>
                    <li data-positioncode="159" data-position="APP设计师">
                        <a href="javascript:;">APP设计师</a>
                    </li>
                    <li data-positioncode="160" data-position="UI设计师">
                        <a href="javascript:;">UI设计师</a>
                    </li>
                    <li data-positioncode="161" data-position="平面设计师">
                        <a href="javascript:;">平面设计师</a>
                    </li>
                    <li data-positioncode="162" data-position="美术设计师（2D/3D）">
                        <a href="javascript:;">美术设计师（2D/3D）</a>
                    </li>
                    <li data-positioncode="163" data-position="广告设计师">
                        <a href="javascript:;">广告设计师</a>
                    </li>
                    <li data-positioncode="164" data-position="多媒体设计师">
                        <a href="javascript:;">多媒体设计师</a>
                    </li>
                    <li data-positioncode="165" data-position="原画师">
                        <a href="javascript:;">原画师</a>
                    </li>
                    <li data-positioncode="166" data-position="游戏特效">
                        <a href="javascript:;">游戏特效</a>
                    </li>
                    <li data-positioncode="167" data-position="游戏界面设计师">
                        <a href="javascript:;">游戏界面设计师</a>
                    </li>
                    <li data-positioncode="168" data-position="游戏场景">
                        <a href="javascript:;">游戏场景</a>
                    </li>
                    <li data-positioncode="169" data-position="游戏角色">
                        <a href="javascript:;">游戏角色</a>
                    </li>
                    <li data-positioncode="170" data-position="游戏动作">
                        <a href="javascript:;">游戏动作</a>
                    </li>
                    <li data-positioncode="171" data-position="三维/CAD/制图">
                        <a href="javascript:;">三维/CAD/制图</a>
                    </li>
                    <li data-positioncode="172" data-position="美工">
                        <a href="javascript:;">美工</a>
                    </li>
                    <li data-positioncode="173" data-position="包装设计">
                        <a href="javascript:;">包装设计</a>
                    </li>
                    <li data-positioncode="174" data-position="设计师助理">
                        <a href="javascript:;">设计师助理</a>
                    </li>
                    <li data-positioncode="175" data-position="动画设计师">
                        <a href="javascript:;">动画设计师</a>
                    </li>
                    <li data-positioncode="176" data-position="插画师">
                        <a href="javascript:;">插画师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="177" data-position="交互设计">
                <a href="javascript:;">交互设计</a>
                <ul class="category category-3">
                    <li data-positioncode="178" data-position="交互设计师">
                        <a href="javascript:;">交互设计师</a>
                    </li>
                    <li data-positioncode="179" data-position="无线交互设计师">
                        <a href="javascript:;">无线交互设计师</a>
                    </li>
                    <li data-positioncode="180" data-position="网页交互设计师">
                        <a href="javascript:;">网页交互设计师</a>
                    </li>
                    <li data-positioncode="181" data-position="硬件交互设计师">
                        <a href="javascript:;">硬件交互设计师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="182" data-position="用户研究">
                <a href="javascript:;">用户研究</a>
                <ul class="category category-3">
                    <li data-positioncode="183" data-position="数据分析师">
                        <a href="javascript:;">数据分析师</a>
                    </li>
                    <li data-positioncode="184" data-position="用户研究员">
                        <a href="javascript:;">用户研究员</a>
                    </li>
                    <li data-positioncode="185" data-position="游戏数值策划">
                        <a href="javascript:;">游戏数值策划</a>
                    </li>
                    <li data-positioncode="186" data-position="UX设计师">
                        <a href="javascript:;">UX设计师</a>
                    </li>
                    <li data-positioncode="187" data-position="用户研究经理">
                        <a href="javascript:;">用户研究经理</a>
                    </li>
                    <li data-positioncode="188" data-position="用户研究总监">
                        <a href="javascript:;">用户研究总监</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="189" data-position="高端设计职位">
                <a href="javascript:;">高端设计职位</a>
                <ul class="category category-3">
                    <li data-positioncode="190" data-position="设计经理/主管">
                        <a href="javascript:;">设计经理/主管</a>
                    </li>
                    <li data-positioncode="191" data-position="设计总监">
                        <a href="javascript:;">设计总监</a>
                    </li>
                    <li data-positioncode="192" data-position="视觉设计经理">
                        <a href="javascript:;">视觉设计经理</a>
                    </li>
                    <li data-positioncode="193" data-position="视觉设计总监">
                        <a href="javascript:;">视觉设计总监</a>
                    </li>
                    <li data-positioncode="194" data-position="交互设计经理/主管">
                        <a href="javascript:;">交互设计经理/主管</a>
                    </li>
                    <li data-positioncode="195" data-position="交互设计总监">
                        <a href="javascript:;">交互设计总监</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="196" data-position="非视觉设计">
                <a href="javascript:;">非视觉设计</a>
                <ul class="category category-3">
                    <li data-positioncode="197" data-position="服装设计">
                        <a href="javascript:;">服装设计</a>
                    </li>
                    <li data-positioncode="198" data-position="工业设计">
                        <a href="javascript:;">工业设计</a>
                    </li>
                    <li data-positioncode="199" data-position="橱柜设计">
                        <a href="javascript:;">橱柜设计</a>
                    </li>
                    <li data-positioncode="200" data-position="家具设计">
                        <a href="javascript:;">家具设计</a>
                    </li>
                    <li data-positioncode="201" data-position="家居设计">
                        <a href="javascript:;">家居设计</a>
                    </li>
                    <li data-positioncode="202" data-position="珠宝设计">
                        <a href="javascript:;">珠宝设计</a>
                    </li>
                    <li data-positioncode="203" data-position="室内设计">
                        <a href="javascript:;">室内设计</a>
                    </li>
                    <li data-positioncode="204" data-position="陈列设计">
                        <a href="javascript:;">陈列设计</a>
                    </li>
                    <li data-positioncode="205" data-position="景观设计">
                        <a href="javascript:;">景观设计</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="206" data-position="其他设计职位">
                <a href="javascript:;">其他设计职位</a>
                <ul class="category category-3">
                    <li data-positioncode="207" data-position="其他设计职位">
                        <a href="javascript:;">其他设计职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="208" data-position="运营">
        <a href="javascript:;">运营</a>
        <ul class="category category-2">
            <li data-positioncode="209" data-position="运营">
                <a href="javascript:;">运营</a>
                <ul class="category category-3">
                    <li data-positioncode="210" data-position="用户运营">
                        <a href="javascript:;">用户运营</a>
                    </li>
                    <li data-positioncode="211" data-position="产品运营">
                        <a href="javascript:;">产品运营</a>
                    </li>
                    <li data-positioncode="212" data-position="数据运营">
                        <a href="javascript:;">数据运营</a>
                    </li>
                    <li data-positioncode="213" data-position="内容运营">
                        <a href="javascript:;">内容运营</a>
                    </li>
                    <li data-positioncode="214" data-position="活动运营">
                        <a href="javascript:;">活动运营</a>
                    </li>
                    <li data-positioncode="215" data-position="商家运营">
                        <a href="javascript:;">商家运营</a>
                    </li>
                    <li data-positioncode="216" data-position="品类运营">
                        <a href="javascript:;">品类运营</a>
                    </li>
                    <li data-positioncode="217" data-position="游戏运营">
                        <a href="javascript:;">游戏运营</a>
                    </li>
                    <li data-positioncode="218" data-position="网络推广">
                        <a href="javascript:;">网络推广</a>
                    </li>
                    <li data-positioncode="219" data-position="网站运营">
                        <a href="javascript:;">网站运营</a>
                    </li>
                    <li data-positioncode="220" data-position="新媒体运营">
                        <a href="javascript:;">新媒体运营</a>
                    </li>
                    <li data-positioncode="221" data-position="社区运营">
                        <a href="javascript:;">社区运营</a>
                    </li>
                    <li data-positioncode="222" data-position="微信运营">
                        <a href="javascript:;">微信运营</a>
                    </li>
                    <li data-positioncode="223" data-position="微博运营">
                        <a href="javascript:;">微博运营</a>
                    </li>
                    <li data-positioncode="224" data-position="策略运营">
                        <a href="javascript:;">策略运营</a>
                    </li>
                    <li data-positioncode="225" data-position="线下拓展运营">
                        <a href="javascript:;">线下拓展运营</a>
                    </li>
                    <li data-positioncode="226" data-position="电商运营">
                        <a href="javascript:;">电商运营</a>
                    </li>
                    <li data-positioncode="227" data-position="运营助理/专员">
                        <a href="javascript:;">运营助理/专员</a>
                    </li>
                    <li data-positioncode="228" data-position="内容审核">
                        <a href="javascript:;">内容审核</a>
                    </li>
                    <li data-positioncode="229" data-position="销售运营">
                        <a href="javascript:;">销售运营</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="230" data-position="编辑">
                <a href="javascript:;">编辑</a>
                <ul class="category category-3">
                    <li data-positioncode="231" data-position="副主编">
                        <a href="javascript:;">副主编</a>
                    </li>
                    <li data-positioncode="232" data-position="内容编辑">
                        <a href="javascript:;">内容编辑</a>
                    </li>
                    <li data-positioncode="233" data-position="文案策划">
                        <a href="javascript:;">文案策划</a>
                    </li>
                    <li data-positioncode="234" data-position="网站编辑">
                        <a href="javascript:;">网站编辑</a>
                    </li>
                    <li data-positioncode="235" data-position="记者">
                        <a href="javascript:;">记者</a>
                    </li>
                    <li data-positioncode="236" data-position="采编">
                        <a href="javascript:;">采编</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="237" data-position="客服">
                <a href="javascript:;">客服</a>
                <ul class="category category-3">
                    <li data-positioncode="238" data-position="售前咨询">
                        <a href="javascript:;">售前咨询</a>
                    </li>
                    <li data-positioncode="239" data-position="售后咨询">
                        <a href="javascript:;">售后咨询</a>
                    </li>
                    <li data-positioncode="240" data-position="网络客服">
                        <a href="javascript:;">网络客服</a>
                    </li>
                    <li data-positioncode="241" data-position="客服经理">
                        <a href="javascript:;">客服经理</a>
                    </li>
                    <li data-positioncode="242" data-position="客服专员/助理">
                        <a href="javascript:;">客服专员/助理</a>
                    </li>
                    <li data-positioncode="243" data-position="客服主管">
                        <a href="javascript:;">客服主管</a>
                    </li>
                    <li data-positioncode="244" data-position="客服总监">
                        <a href="javascript:;">客服总监</a>
                    </li>
                    <li data-positioncode="245" data-position="电话客服">
                        <a href="javascript:;">电话客服</a>
                    </li>
                    <li data-positioncode="246" data-position="咨询热线/呼叫中心客服">
                        <a href="javascript:;">咨询热线/呼叫中心客服</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="247" data-position="高端运营职位">
                <a href="javascript:;">高端运营职位</a>
                <ul class="category category-3">
                    <li data-positioncode="248" data-position="主编">
                        <a href="javascript:;">主编</a>
                    </li>
                    <li data-positioncode="249" data-position="运营总监">
                        <a href="javascript:;">运营总监</a>
                    </li>
                    <li data-positioncode="250" data-position="COO">
                        <a href="javascript:;">COO</a>
                    </li>
                    <li data-positioncode="251" data-position="客服总监">
                        <a href="javascript:;">客服总监</a>
                    </li>
                    <li data-positioncode="252" data-position="运营经理/主管">
                        <a href="javascript:;">运营经理/主管</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="253" data-position="其他运营职位">
                <a href="javascript:;">其他运营职位</a>
                <ul class="category category-3">
                    <li data-positioncode="254" data-position="其他运营职位">
                        <a href="javascript:;">其他运营职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="255" data-position="市场">
        <a href="javascript:;">市场</a>
        <ul class="category category-2">
            <li data-positioncode="256" data-position="市场/营销">
                <a href="javascript:;">市场/营销</a>
                <ul class="category category-3">
                    <li data-positioncode="257" data-position="市场营销">
                        <a href="javascript:;">市场营销</a>
                    </li>
                    <li data-positioncode="258" data-position="市场策划">
                        <a href="javascript:;">市场策划</a>
                    </li>
                    <li data-positioncode="259" data-position="市场顾问">
                        <a href="javascript:;">市场顾问</a>
                    </li>
                    <li data-positioncode="260" data-position="市场推广">
                        <a href="javascript:;">市场推广</a>
                    </li>
                    <li data-positioncode="261" data-position="SEO">
                        <a href="javascript:;">SEO</a>
                    </li>
                    <li data-positioncode="262" data-position="SEM">
                        <a href="javascript:;">SEM</a>
                    </li>
                    <li data-positioncode="263" data-position="商务渠道">
                        <a href="javascript:;">商务渠道</a>
                    </li>
                    <li data-positioncode="264" data-position="商业数据分析">
                        <a href="javascript:;">商业数据分析</a>
                    </li>
                    <li data-positioncode="265" data-position="活动策划">
                        <a href="javascript:;">活动策划</a>
                    </li>
                    <li data-positioncode="266" data-position="网络营销">
                        <a href="javascript:;">网络营销</a>
                    </li>
                    <li data-positioncode="267" data-position="海外市场">
                        <a href="javascript:;">海外市场</a>
                    </li>
                    <li data-positioncode="268" data-position="政府关系">
                        <a href="javascript:;">政府关系</a>
                    </li>
                    <li data-positioncode="269" data-position="APP推广">
                        <a href="javascript:;">APP推广</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="270" data-position="公关媒介">
                <a href="javascript:;">公关媒介</a>
                <ul class="category category-3">
                    <li data-positioncode="271" data-position="媒介经理">
                        <a href="javascript:;">媒介经理</a>
                    </li>
                    <li data-positioncode="272" data-position="广告协调">
                        <a href="javascript:;">广告协调</a>
                    </li>
                    <li data-positioncode="273" data-position="品牌公关">
                        <a href="javascript:;">品牌公关</a>
                    </li>
                    <li data-positioncode="274" data-position="媒介专员">
                        <a href="javascript:;">媒介专员</a>
                    </li>
                    <li data-positioncode="275" data-position="活动策划执行">
                        <a href="javascript:;">活动策划执行</a>
                    </li>
                    <li data-positioncode="276" data-position="媒介策划">
                        <a href="javascript:;">媒介策划</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="277" data-position="会务会展">
                <a href="javascript:;">会务会展</a>
                <ul class="category category-3">
                    <li data-positioncode="278" data-position="会议活动销售">
                        <a href="javascript:;">会议活动销售</a>
                    </li>
                    <li data-positioncode="279" data-position="会议活动策划">
                        <a href="javascript:;">会议活动策划</a>
                    </li>
                    <li data-positioncode="280" data-position="会议活动执行">
                        <a href="javascript:;">会议活动执行</a>
                    </li>
                    <li data-positioncode="281" data-position="会展活动销售">
                        <a href="javascript:;">会展活动销售</a>
                    </li>
                    <li data-positioncode="282" data-position="会展活动策划">
                        <a href="javascript:;">会展活动策划</a>
                    </li>
                    <li data-positioncode="283" data-position="会展活动执行">
                        <a href="javascript:;">会展活动执行</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="284" data-position="广告">
                <a href="javascript:;">广告</a>
                <ul class="category category-3">
                    <li data-positioncode="285" data-position="广告创意">
                        <a href="javascript:;">广告创意</a>
                    </li>
                    <li data-positioncode="286" data-position="美术指导">
                        <a href="javascript:;">美术指导</a>
                    </li>
                    <li data-positioncode="287" data-position="广告设计师">
                        <a href="javascript:;">广告设计师</a>
                    </li>
                    <li data-positioncode="288" data-position="策划经理">
                        <a href="javascript:;">策划经理</a>
                    </li>
                    <li data-positioncode="289" data-position="文案">
                        <a href="javascript:;">文案</a>
                    </li>
                    <li data-positioncode="290" data-position="广告制作">
                        <a href="javascript:;">广告制作</a>
                    </li>
                    <li data-positioncode="291" data-position="媒介投放">
                        <a href="javascript:;">媒介投放</a>
                    </li>
                    <li data-positioncode="292" data-position="媒介合作">
                        <a href="javascript:;">媒介合作</a>
                    </li>
                    <li data-positioncode="293" data-position="媒介顾问">
                        <a href="javascript:;">媒介顾问</a>
                    </li>
                    <li data-positioncode="294" data-position="广告审核">
                        <a href="javascript:;">广告审核</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="295" data-position="高端市场职位">
                <a href="javascript:;">高端市场职位</a>
                <ul class="category category-3">
                    <li data-positioncode="296" data-position="市场总监">
                        <a href="javascript:;">市场总监</a>
                    </li>
                    <li data-positioncode="297" data-position="CMO">
                        <a href="javascript:;">CMO</a>
                    </li>
                    <li data-positioncode="298" data-position="公关总监">
                        <a href="javascript:;">公关总监</a>
                    </li>
                    <li data-positioncode="299" data-position="媒介总监">
                        <a href="javascript:;">媒介总监</a>
                    </li>
                    <li data-positioncode="300" data-position="创意总监">
                        <a href="javascript:;">创意总监</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="301" data-position="其他市场职位">
                <a href="javascript:;">其他市场职位</a>
                <ul class="category category-3">
                    <li data-positioncode="302" data-position="其他市场职位">
                        <a href="javascript:;">其他市场职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="303" data-position="职能/高级管理">
        <a href="javascript:;">职能/高级管理</a>
        <ul class="category category-2">
            <li data-positioncode="304" data-position="人力资源">
                <a href="javascript:;">人力资源</a>
                <ul class="category category-3">
                    <li data-positioncode="305" data-position="人力资源主管">
                        <a href="javascript:;">人力资源主管</a>
                    </li>
                    <li data-positioncode="306" data-position="招聘">
                        <a href="javascript:;">招聘</a>
                    </li>
                    <li data-positioncode="307" data-position="HRBP">
                        <a href="javascript:;">HRBP</a>
                    </li>
                    <li data-positioncode="308" data-position="人力资源专员/助理">
                        <a href="javascript:;">人力资源专员/助理</a>
                    </li>
                    <li data-positioncode="309" data-position="培训">
                        <a href="javascript:;">培训</a>
                    </li>
                    <li data-positioncode="310" data-position="薪资福利">
                        <a href="javascript:;">薪资福利</a>
                    </li>
                    <li data-positioncode="311" data-position="绩效考核">
                        <a href="javascript:;">绩效考核</a>
                    </li>
                    <li data-positioncode="312" data-position="人力资源经理">
                        <a href="javascript:;">人力资源经理</a>
                    </li>
                    <li data-positioncode="313" data-position="人力资源VP/CHO">
                        <a href="javascript:;">人力资源VP/CHO</a>
                    </li>
                    <li data-positioncode="314" data-position="人力资源总监">
                        <a href="javascript:;">人力资源总监</a>
                    </li>
                    <li data-positioncode="315" data-position="员工关系">
                        <a href="javascript:;">员工关系</a>
                    </li>
                    <li data-positioncode="316" data-position="组织发展">
                        <a href="javascript:;">组织发展</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="317" data-position="行政">
                <a href="javascript:;">行政</a>
                <ul class="category category-3">
                    <li data-positioncode="318" data-position="行政专员/助理">
                        <a href="javascript:;">行政专员/助理</a>
                    </li>
                    <li data-positioncode="319" data-position="前台">
                        <a href="javascript:;">前台</a>
                    </li>
                    <li data-positioncode="320" data-position="行政主管">
                        <a href="javascript:;">行政主管</a>
                    </li>
                    <li data-positioncode="321" data-position="经理助理">
                        <a href="javascript:;">经理助理</a>
                    </li>
                    <li data-positioncode="322" data-position="后勤">
                        <a href="javascript:;">后勤</a>
                    </li>
                    <li data-positioncode="323" data-position="商务司机">
                        <a href="javascript:;">商务司机</a>
                    </li>
                    <li data-positioncode="324" data-position="行政经理">
                        <a href="javascript:;">行政经理</a>
                    </li>
                    <li data-positioncode="325" data-position="行政总监">
                        <a href="javascript:;">行政总监</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="326" data-position="财务">
                <a href="javascript:;">财务</a>
                <ul class="category category-3">
                    <li data-positioncode="327" data-position="会计">
                        <a href="javascript:;">会计</a>
                    </li>
                    <li data-positioncode="328" data-position="出纳">
                        <a href="javascript:;">出纳</a>
                    </li>
                    <li data-positioncode="329" data-position="财务顾问">
                        <a href="javascript:;">财务顾问</a>
                    </li>
                    <li data-positioncode="330" data-position="结算">
                        <a href="javascript:;">结算</a>
                    </li>
                    <li data-positioncode="331" data-position="税务">
                        <a href="javascript:;">税务</a>
                    </li>
                    <li data-positioncode="332" data-position="审计">
                        <a href="javascript:;">审计</a>
                    </li>
                    <li data-positioncode="333" data-position="风控">
                        <a href="javascript:;">风控</a>
                    </li>
                    <li data-positioncode="334" data-position="财务经理">
                        <a href="javascript:;">财务经理</a>
                    </li>
                    <li data-positioncode="335" data-position="CFO">
                        <a href="javascript:;">CFO</a>
                    </li>
                    <li data-positioncode="336" data-position="财务总监">
                        <a href="javascript:;">财务总监</a>
                    </li>
                    <li data-positioncode="337" data-position="财务主管">
                        <a href="javascript:;">财务主管</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="338" data-position="法务">
                <a href="javascript:;">法务</a>
                <ul class="category category-3">
                    <li data-positioncode="339" data-position="法务专员/助理">
                        <a href="javascript:;">法务专员/助理</a>
                    </li>
                    <li data-positioncode="340" data-position="律师">
                        <a href="javascript:;">律师</a>
                    </li>
                    <li data-positioncode="341" data-position="专利">
                        <a href="javascript:;">专利</a>
                    </li>
                    <li data-positioncode="342" data-position="法律顾问">
                        <a href="javascript:;">法律顾问</a>
                    </li>
                    <li data-positioncode="343" data-position="法务主管">
                        <a href="javascript:;">法务主管</a>
                    </li>
                    <li data-positioncode="344" data-position="法务经理">
                        <a href="javascript:;">法务经理</a>
                    </li>
                    <li data-positioncode="345" data-position="法务总监">
                        <a href="javascript:;">法务总监</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="346" data-position="高级管理职位">
                <a href="javascript:;">高级管理职位</a>
                <ul class="category category-3">
                    <li data-positioncode="347" data-position="CEO/总裁/总经理">
                        <a href="javascript:;">CEO/总裁/总经理</a>
                    </li>
                    <li data-positioncode="348" data-position="副总裁/副总经理">
                        <a href="javascript:;">副总裁/副总经理</a>
                    </li>
                    <li data-positioncode="349" data-position="事业部负责人">
                        <a href="javascript:;">事业部负责人</a>
                    </li>
                    <li data-positioncode="350" data-position="区域/分公司/代表处负责人">
                        <a href="javascript:;">区域/分公司/代表处负责人</a>
                    </li>
                    <li data-positioncode="351" data-position="总裁/总经理/董事长助理">
                        <a href="javascript:;">总裁/总经理/董事长助理</a>
                    </li>
                    <li data-positioncode="352" data-position="合伙人">
                        <a href="javascript:;">合伙人</a>
                    </li>
                    <li data-positioncode="353" data-position="创始人">
                        <a href="javascript:;">创始人</a>
                    </li>
                    <li data-positioncode="354" data-position="董事会秘书">
                        <a href="javascript:;">董事会秘书</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="355" data-position="其他职能职位">
                <a href="javascript:;">其他职能职位</a>
                <ul class="category category-3">
                    <li data-positioncode="356" data-position="其他职能职位">
                        <a href="javascript:;">其他职能职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="357" data-position="销售">
        <a href="javascript:;">销售</a>
        <ul class="category category-2">
            <li data-positioncode="358" data-position="销售">
                <a href="javascript:;">销售</a>
                <ul class="category category-3">
                    <li data-positioncode="359" data-position="销售专员">
                        <a href="javascript:;">销售专员</a>
                    </li>
                    <li data-positioncode="360" data-position="销售经理">
                        <a href="javascript:;">销售经理</a>
                    </li>
                    <li data-positioncode="361" data-position="客户代表">
                        <a href="javascript:;">客户代表</a>
                    </li>
                    <li data-positioncode="362" data-position="大客户代表">
                        <a href="javascript:;">大客户代表</a>
                    </li>
                    <li data-positioncode="363" data-position="BD经理">
                        <a href="javascript:;">BD经理</a>
                    </li>
                    <li data-positioncode="364" data-position="商务渠道">
                        <a href="javascript:;">商务渠道</a>
                    </li>
                    <li data-positioncode="365" data-position="渠道销售">
                        <a href="javascript:;">渠道销售</a>
                    </li>
                    <li data-positioncode="366" data-position="代理商销售">
                        <a href="javascript:;">代理商销售</a>
                    </li>
                    <li data-positioncode="367" data-position="销售助理">
                        <a href="javascript:;">销售助理</a>
                    </li>
                    <li data-positioncode="368" data-position="电话销售">
                        <a href="javascript:;">电话销售</a>
                    </li>
                    <li data-positioncode="369" data-position="销售顾问">
                        <a href="javascript:;">销售顾问</a>
                    </li>
                    <li data-positioncode="370" data-position="商品经理">
                        <a href="javascript:;">商品经理</a>
                    </li>
                    <li data-positioncode="371" data-position="广告销售">
                        <a href="javascript:;">广告销售</a>
                    </li>
                    <li data-positioncode="372" data-position="网络营销">
                        <a href="javascript:;">网络营销</a>
                    </li>
                    <li data-positioncode="373" data-position="营销主管">
                        <a href="javascript:;">营销主管</a>
                    </li>
                    <li data-positioncode="374" data-position="销售工程师">
                        <a href="javascript:;">销售工程师</a>
                    </li>
                    <li data-positioncode="375" data-position="客户经理">
                        <a href="javascript:;">客户经理</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="376" data-position="销售管理">
                <a href="javascript:;">销售管理</a>
                <ul class="category category-3">
                    <li data-positioncode="377" data-position="销售总监">
                        <a href="javascript:;">销售总监</a>
                    </li>
                    <li data-positioncode="378" data-position="商务总监">
                        <a href="javascript:;">商务总监</a>
                    </li>
                    <li data-positioncode="379" data-position="区域总监">
                        <a href="javascript:;">区域总监</a>
                    </li>
                    <li data-positioncode="380" data-position="城市经理">
                        <a href="javascript:;">城市经理</a>
                    </li>
                    <li data-positioncode="381" data-position="销售VP">
                        <a href="javascript:;">销售VP</a>
                    </li>
                    <li data-positioncode="382" data-position="团队经理">
                        <a href="javascript:;">团队经理</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="383" data-position="其他销售职位">
                <a href="javascript:;">其他销售职位</a>
                <ul class="category category-3">
                    <li data-positioncode="384" data-position="其他销售职位">
                        <a href="javascript:;">其他销售职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="385" data-position="传媒">
        <a href="javascript:;">传媒</a>
        <ul class="category category-2">
            <li data-positioncode="386" data-position="采编/写作/出版">
                <a href="javascript:;">采编/写作/出版</a>
                <ul class="category category-3">
                    <li data-positioncode="387" data-position="记者">
                        <a href="javascript:;">记者</a>
                    </li>
                    <li data-positioncode="388" data-position="编辑">
                        <a href="javascript:;">编辑</a>
                    </li>
                    <li data-positioncode="389" data-position="采编">
                        <a href="javascript:;">采编</a>
                    </li>
                    <li data-positioncode="390" data-position="撰稿人">
                        <a href="javascript:;">撰稿人</a>
                    </li>
                    <li data-positioncode="391" data-position="出版发行">
                        <a href="javascript:;">出版发行</a>
                    </li>
                    <li data-positioncode="392" data-position="校对录入">
                        <a href="javascript:;">校对录入</a>
                    </li>
                    <li data-positioncode="393" data-position="总编">
                        <a href="javascript:;">总编</a>
                    </li>
                    <li data-positioncode="394" data-position="自媒体">
                        <a href="javascript:;">自媒体</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="395" data-position="公关媒介">
                <a href="javascript:;">公关媒介</a>
                <ul class="category category-3">
                    <li data-positioncode="396" data-position="媒介经理">
                        <a href="javascript:;">媒介经理</a>
                    </li>
                    <li data-positioncode="397" data-position="媒介专员">
                        <a href="javascript:;">媒介专员</a>
                    </li>
                    <li data-positioncode="398" data-position="广告协调">
                        <a href="javascript:;">广告协调</a>
                    </li>
                    <li data-positioncode="399" data-position="品牌公关">
                        <a href="javascript:;">品牌公关</a>
                    </li>
                    <li data-positioncode="400" data-position="活动策划执行">
                        <a href="javascript:;">活动策划执行</a>
                    </li>
                    <li data-positioncode="401" data-position="媒介策划">
                        <a href="javascript:;">媒介策划</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="402" data-position="会务会展">
                <a href="javascript:;">会务会展</a>
                <ul class="category category-3">
                    <li data-positioncode="403" data-position="会议活动销售">
                        <a href="javascript:;">会议活动销售</a>
                    </li>
                    <li data-positioncode="404" data-position="会议活动策划">
                        <a href="javascript:;">会议活动策划</a>
                    </li>
                    <li data-positioncode="405" data-position="会议活动执行">
                        <a href="javascript:;">会议活动执行</a>
                    </li>
                    <li data-positioncode="406" data-position="会展活动销售">
                        <a href="javascript:;">会展活动销售</a>
                    </li>
                    <li data-positioncode="407" data-position="会展活动策划">
                        <a href="javascript:;">会展活动策划</a>
                    </li>
                    <li data-positioncode="408" data-position="会展活动执行">
                        <a href="javascript:;">会展活动执行</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="409" data-position="广告">
                <a href="javascript:;">广告</a>
                <ul class="category category-3">
                    <li data-positioncode="410" data-position="广告创意">
                        <a href="javascript:;">广告创意</a>
                    </li>
                    <li data-positioncode="411" data-position="美术指导">
                        <a href="javascript:;">美术指导</a>
                    </li>
                    <li data-positioncode="412" data-position="广告设计师">
                        <a href="javascript:;">广告设计师</a>
                    </li>
                    <li data-positioncode="413" data-position="策划经理">
                        <a href="javascript:;">策划经理</a>
                    </li>
                    <li data-positioncode="414" data-position="文案">
                        <a href="javascript:;">文案</a>
                    </li>
                    <li data-positioncode="415" data-position="广告制作">
                        <a href="javascript:;">广告制作</a>
                    </li>
                    <li data-positioncode="416" data-position="媒介投放">
                        <a href="javascript:;">媒介投放</a>
                    </li>
                    <li data-positioncode="417" data-position="媒介合作">
                        <a href="javascript:;">媒介合作</a>
                    </li>
                    <li data-positioncode="418" data-position="媒介顾问">
                        <a href="javascript:;">媒介顾问</a>
                    </li>
                    <li data-positioncode="419" data-position="广告审核">
                        <a href="javascript:;">广告审核</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="420" data-position="影视媒体">
                <a href="javascript:;">影视媒体</a>
                <ul class="category category-3">
                    <li data-positioncode="421" data-position="助理">
                        <a href="javascript:;">助理</a>
                    </li>
                    <li data-positioncode="422" data-position="统筹制片人">
                        <a href="javascript:;">统筹制片人</a>
                    </li>
                    <li data-positioncode="423" data-position="执行制片人">
                        <a href="javascript:;">执行制片人</a>
                    </li>
                    <li data-positioncode="424" data-position="导演/编导">
                        <a href="javascript:;">导演/编导</a>
                    </li>
                    <li data-positioncode="425" data-position="摄影/影像师">
                        <a href="javascript:;">摄影/影像师</a>
                    </li>
                    <li data-positioncode="426" data-position="视频编辑">
                        <a href="javascript:;">视频编辑</a>
                    </li>
                    <li data-positioncode="427" data-position="音频编辑">
                        <a href="javascript:;">音频编辑</a>
                    </li>
                    <li data-positioncode="428" data-position="经纪人">
                        <a href="javascript:;">经纪人</a>
                    </li>
                    <li data-positioncode="429" data-position="后期制作">
                        <a href="javascript:;">后期制作</a>
                    </li>
                    <li data-positioncode="430" data-position="影视制作">
                        <a href="javascript:;">影视制作</a>
                    </li>
                    <li data-positioncode="431" data-position="影视发行">
                        <a href="javascript:;">影视发行</a>
                    </li>
                    <li data-positioncode="432" data-position="影视策划">
                        <a href="javascript:;">影视策划</a>
                    </li>
                    <li data-positioncode="433" data-position="主持人/主播/DJ">
                        <a href="javascript:;">主持人/主播/DJ</a>
                    </li>
                    <li data-positioncode="434" data-position="演员/配音/模特">
                        <a href="javascript:;">演员/配音/模特</a>
                    </li>
                    <li data-positioncode="435" data-position="化妆/造型/服装">
                        <a href="javascript:;">化妆/造型/服装</a>
                    </li>
                    <li data-positioncode="436" data-position="放映管理">
                        <a href="javascript:;">放映管理</a>
                    </li>
                    <li data-positioncode="437" data-position="录音/音效">
                        <a href="javascript:;">录音/音效</a>
                    </li>
                    <li data-positioncode="438" data-position="制片人">
                        <a href="javascript:;">制片人</a>
                    </li>
                    <li data-positioncode="439" data-position="编剧">
                        <a href="javascript:;">编剧</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="440" data-position="其他传媒职位">
                <a href="javascript:;">其他传媒职位</a>
                <ul class="category category-3">
                    <li data-positioncode="441" data-position="其他传媒职位">
                        <a href="javascript:;">其他传媒职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="442" data-position="金融">
        <a href="javascript:;">金融</a>
        <ul class="category category-2">
            <li data-positioncode="443" data-position="投融资">
                <a href="javascript:;">投融资</a>
                <ul class="category category-3">
                    <li data-positioncode="444" data-position="投资经理">
                        <a href="javascript:;">投资经理</a>
                    </li>
                    <li data-positioncode="445" data-position="行业研究">
                        <a href="javascript:;">行业研究</a>
                    </li>
                    <li data-positioncode="446" data-position="资产管理">
                        <a href="javascript:;">资产管理</a>
                    </li>
                    <li data-positioncode="447" data-position="投资总监">
                        <a href="javascript:;">投资总监</a>
                    </li>
                    <li data-positioncode="448" data-position="投资VP">
                        <a href="javascript:;">投资VP</a>
                    </li>
                    <li data-positioncode="449" data-position="投资合伙人">
                        <a href="javascript:;">投资合伙人</a>
                    </li>
                    <li data-positioncode="450" data-position="融资">
                        <a href="javascript:;">融资</a>
                    </li>
                    <li data-positioncode="451" data-position="并购">
                        <a href="javascript:;">并购</a>
                    </li>
                    <li data-positioncode="452" data-position="投后管理">
                        <a href="javascript:;">投后管理</a>
                    </li>
                    <li data-positioncode="453" data-position="投资助理">
                        <a href="javascript:;">投资助理</a>
                    </li>
                    <li data-positioncode="454" data-position="其他投融资职位">
                        <a href="javascript:;">其他投融资职位</a>
                    </li>
                    <li data-positioncode="455" data-position="投资顾问">
                        <a href="javascript:;">投资顾问</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="456" data-position="风控">
                <a href="javascript:;">风控</a>
                <ul class="category category-3">
                    <li data-positioncode="457" data-position="风控">
                        <a href="javascript:;">风控</a>
                    </li>
                    <li data-positioncode="458" data-position="律师">
                        <a href="javascript:;">律师</a>
                    </li>
                    <li data-positioncode="459" data-position="资信评估">
                        <a href="javascript:;">资信评估</a>
                    </li>
                    <li data-positioncode="460" data-position="合规稽查">
                        <a href="javascript:;">合规稽查</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="461" data-position="税务审计">
                <a href="javascript:;">税务审计</a>
                <ul class="category category-3">
                    <li data-positioncode="462" data-position="审计">
                        <a href="javascript:;">审计</a>
                    </li>
                    <li data-positioncode="463" data-position="法务">
                        <a href="javascript:;">法务</a>
                    </li>
                    <li data-positioncode="464" data-position="会计">
                        <a href="javascript:;">会计</a>
                    </li>
                    <li data-positioncode="465" data-position="清算">
                        <a href="javascript:;">清算</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="466" data-position="银行">
                <a href="javascript:;">银行</a>
                <ul class="category category-3">
                    <li data-positioncode="467" data-position="信用卡销售">
                        <a href="javascript:;">信用卡销售</a>
                    </li>
                    <li data-positioncode="468" data-position="分析师">
                        <a href="javascript:;">分析师</a>
                    </li>
                    <li data-positioncode="469" data-position="柜员">
                        <a href="javascript:;">柜员</a>
                    </li>
                    <li data-positioncode="470" data-position="商务渠道">
                        <a href="javascript:;">商务渠道</a>
                    </li>
                    <li data-positioncode="471" data-position="大堂经理">
                        <a href="javascript:;">大堂经理</a>
                    </li>
                    <li data-positioncode="472" data-position="理财顾问">
                        <a href="javascript:;">理财顾问</a>
                    </li>
                    <li data-positioncode="473" data-position="客户经理">
                        <a href="javascript:;">客户经理</a>
                    </li>
                    <li data-positioncode="474" data-position="信贷管理">
                        <a href="javascript:;">信贷管理</a>
                    </li>
                    <li data-positioncode="475" data-position="风控">
                        <a href="javascript:;">风控</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="476" data-position="互联网金融">
                <a href="javascript:;">互联网金融</a>
                <ul class="category category-3">
                    <li data-positioncode="477" data-position="金融产品经理">
                        <a href="javascript:;">金融产品经理</a>
                    </li>
                    <li data-positioncode="478" data-position="风控">
                        <a href="javascript:;">风控</a>
                    </li>
                    <li data-positioncode="479" data-position="催收员">
                        <a href="javascript:;">催收员</a>
                    </li>
                    <li data-positioncode="480" data-position="分析师">
                        <a href="javascript:;">分析师</a>
                    </li>
                    <li data-positioncode="481" data-position="投资经理">
                        <a href="javascript:;">投资经理</a>
                    </li>
                    <li data-positioncode="482" data-position="交易员">
                        <a href="javascript:;">交易员</a>
                    </li>
                    <li data-positioncode="483" data-position="理财顾问">
                        <a href="javascript:;">理财顾问</a>
                    </li>
                    <li data-positioncode="484" data-position="合规稽查">
                        <a href="javascript:;">合规稽查</a>
                    </li>
                    <li data-positioncode="485" data-position="审计">
                        <a href="javascript:;">审计</a>
                    </li>
                    <li data-positioncode="486" data-position="清算">
                        <a href="javascript:;">清算</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="487" data-position="保险">
                <a href="javascript:;">保险</a>
                <ul class="category category-3">
                    <li data-positioncode="488" data-position="保险业务">
                        <a href="javascript:;">保险业务</a>
                    </li>
                    <li data-positioncode="489" data-position="精算师">
                        <a href="javascript:;">精算师</a>
                    </li>
                    <li data-positioncode="490" data-position="保险理赔">
                        <a href="javascript:;">保险理赔</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="491" data-position="其他金融职位">
                <a href="javascript:;">其他金融职位</a>
                <ul class="category category-3">
                    <li data-positioncode="492" data-position="其他金融职位">
                        <a href="javascript:;">其他金融职位</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="493" data-position="证券">
                <a href="javascript:;">证券</a>
                <ul class="category category-3">
                    <li data-positioncode="494" data-position="证券经纪人">
                        <a href="javascript:;">证券经纪人</a>
                    </li>
                    <li data-positioncode="495" data-position="证券分析师">
                        <a href="javascript:;">证券分析师</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="496" data-position="汽车">
        <a href="javascript:;">汽车</a>
        <ul class="category category-2">
            <li data-positioncode="497" data-position="汽车设计与研发">
                <a href="javascript:;">汽车设计与研发</a>
                <ul class="category category-3">
                    <li data-positioncode="498" data-position="汽车设计">
                        <a href="javascript:;">汽车设计</a>
                    </li>
                    <li data-positioncode="499" data-position="车身设计">
                        <a href="javascript:;">车身设计</a>
                    </li>
                    <li data-positioncode="500" data-position="底盘设计">
                        <a href="javascript:;">底盘设计</a>
                    </li>
                    <li data-positioncode="501" data-position="机械设计">
                        <a href="javascript:;">机械设计</a>
                    </li>
                    <li data-positioncode="502" data-position="动力系统设计">
                        <a href="javascript:;">动力系统设计</a>
                    </li>
                    <li data-positioncode="503" data-position="电子工程设计">
                        <a href="javascript:;">电子工程设计</a>
                    </li>
                    <li data-positioncode="504" data-position="零部件设计">
                        <a href="javascript:;">零部件设计</a>
                    </li>
                    <li data-positioncode="505" data-position="汽车工程项目管理">
                        <a href="javascript:;">汽车工程项目管理</a>
                    </li>
                    <li data-positioncode="506" data-position="内外饰设计工程师">
                        <a href="javascript:;">内外饰设计工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="507" data-position="汽车生产与制造">
                <a href="javascript:;">汽车生产与制造</a>
                <ul class="category category-3">
                    <li data-positioncode="508" data-position="总装工程师">
                        <a href="javascript:;">总装工程师</a>
                    </li>
                    <li data-positioncode="509" data-position="焊接工程师">
                        <a href="javascript:;">焊接工程师</a>
                    </li>
                    <li data-positioncode="510" data-position="冲压工程师">
                        <a href="javascript:;">冲压工程师</a>
                    </li>
                    <li data-positioncode="511" data-position="质量工程师">
                        <a href="javascript:;">质量工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="512" data-position="汽车销售与服务">
                <a href="javascript:;">汽车销售与服务</a>
                <ul class="category category-3">
                    <li data-positioncode="513" data-position="汽车销售">
                        <a href="javascript:;">汽车销售</a>
                    </li>
                    <li data-positioncode="514" data-position="汽车配件销售">
                        <a href="javascript:;">汽车配件销售</a>
                    </li>
                    <li data-positioncode="515" data-position="汽车售后服务">
                        <a href="javascript:;">汽车售后服务</a>
                    </li>
                    <li data-positioncode="516" data-position="汽车维修">
                        <a href="javascript:;">汽车维修</a>
                    </li>
                    <li data-positioncode="517" data-position="汽车美容">
                        <a href="javascript:;">汽车美容</a>
                    </li>
                    <li data-positioncode="518" data-position="汽车定损理赔">
                        <a href="javascript:;">汽车定损理赔</a>
                    </li>
                    <li data-positioncode="519" data-position="二手车评估师">
                        <a href="javascript:;">二手车评估师</a>
                    </li>
                    <li data-positioncode="520" data-position="4S店管理">
                        <a href="javascript:;">4S店管理</a>
                    </li>
                    <li data-positioncode="521" data-position="汽车改装工程师">
                        <a href="javascript:;">汽车改装工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="522" data-position="其他汽车职位">
                <a href="javascript:;">其他汽车职位</a>
                <ul class="category category-3">
                    <li data-positioncode="523" data-position="其他汽车职位">
                        <a href="javascript:;">其他汽车职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="524" data-position="教育培训">
        <a href="javascript:;">教育培训</a>
        <ul class="category category-2">
            <li data-positioncode="525" data-position="教育产品研发">
                <a href="javascript:;">教育产品研发</a>
                <ul class="category category-3">
                    <li data-positioncode="526" data-position="课程设计">
                        <a href="javascript:;">课程设计</a>
                    </li>
                    <li data-positioncode="527" data-position="课程编辑">
                        <a href="javascript:;">课程编辑</a>
                    </li>
                    <li data-positioncode="528" data-position="教师">
                        <a href="javascript:;">教师</a>
                    </li>
                    <li data-positioncode="529" data-position="培训研究">
                        <a href="javascript:;">培训研究</a>
                    </li>
                    <li data-positioncode="530" data-position="培训师">
                        <a href="javascript:;">培训师</a>
                    </li>
                    <li data-positioncode="531" data-position="培训策划">
                        <a href="javascript:;">培训策划</a>
                    </li>
                    <li data-positioncode="532" data-position="其他教育产品研发职位">
                        <a href="javascript:;">其他教育产品研发职位</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="533" data-position="教育行政">
                <a href="javascript:;">教育行政</a>
                <ul class="category category-3">
                    <li data-positioncode="534" data-position="校长">
                        <a href="javascript:;">校长</a>
                    </li>
                    <li data-positioncode="535" data-position="教务管理">
                        <a href="javascript:;">教务管理</a>
                    </li>
                    <li data-positioncode="536" data-position="教学管理">
                        <a href="javascript:;">教学管理</a>
                    </li>
                    <li data-positioncode="537" data-position="班主任/辅导员">
                        <a href="javascript:;">班主任/辅导员</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="538" data-position="教师">
                <a href="javascript:;">教师</a>
                <ul class="category category-3">
                    <li data-positioncode="539" data-position="教师">
                        <a href="javascript:;">教师</a>
                    </li>
                    <li data-positioncode="540" data-position="助教">
                        <a href="javascript:;">助教</a>
                    </li>
                    <li data-positioncode="541" data-position="高中教师">
                        <a href="javascript:;">高中教师</a>
                    </li>
                    <li data-positioncode="542" data-position="初中教师">
                        <a href="javascript:;">初中教师</a>
                    </li>
                    <li data-positioncode="543" data-position="小学教师">
                        <a href="javascript:;">小学教师</a>
                    </li>
                    <li data-positioncode="544" data-position="幼教">
                        <a href="javascript:;">幼教</a>
                    </li>
                    <li data-positioncode="545" data-position="理科教师">
                        <a href="javascript:;">理科教师</a>
                    </li>
                    <li data-positioncode="546" data-position="文科教师">
                        <a href="javascript:;">文科教师</a>
                    </li>
                    <li data-positioncode="547" data-position="外语教师">
                        <a href="javascript:;">外语教师</a>
                    </li>
                    <li data-positioncode="548" data-position="音乐教师">
                        <a href="javascript:;">音乐教师</a>
                    </li>
                    <li data-positioncode="549" data-position="美术教师">
                        <a href="javascript:;">美术教师</a>
                    </li>
                    <li data-positioncode="550" data-position="体育教师">
                        <a href="javascript:;">体育教师</a>
                    </li>
                    <li data-positioncode="551" data-position="就业老师">
                        <a href="javascript:;">就业老师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="552" data-position="IT培训">
                <a href="javascript:;">IT培训</a>
                <ul class="category category-3">
                    <li data-positioncode="553" data-position="JAVA培训讲师">
                        <a href="javascript:;">JAVA培训讲师</a>
                    </li>
                    <li data-positioncode="554" data-position="Android培训讲师">
                        <a href="javascript:;">Android培训讲师</a>
                    </li>
                    <li data-positioncode="555" data-position="ios培训讲师">
                        <a href="javascript:;">ios培训讲师</a>
                    </li>
                    <li data-positioncode="556" data-position="PHP培训讲师">
                        <a href="javascript:;">PHP培训讲师</a>
                    </li>
                    <li data-positioncode="557" data-position=".NET培训讲师">
                        <a href="javascript:;">.NET培训讲师</a>
                    </li>
                    <li data-positioncode="558" data-position="C++培训讲师">
                        <a href="javascript:;">C++培训讲师</a>
                    </li>
                    <li data-positioncode="559" data-position="Unity 3D培训讲师">
                        <a href="javascript:;">Unity 3D培训讲师</a>
                    </li>
                    <li data-positioncode="560" data-position="Web前端培训讲师">
                        <a href="javascript:;">Web前端培训讲师</a>
                    </li>
                    <li data-positioncode="561" data-position="软件测试培训讲师">
                        <a href="javascript:;">软件测试培训讲师</a>
                    </li>
                    <li data-positioncode="562" data-position="动漫培训讲师">
                        <a href="javascript:;">动漫培训讲师</a>
                    </li>
                    <li data-positioncode="563" data-position="UI设计培训讲师">
                        <a href="javascript:;">UI设计培训讲师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="564" data-position="职业培训">
                <a href="javascript:;">职业培训</a>
                <ul class="category category-3">
                    <li data-positioncode="565" data-position="财会培训讲师">
                        <a href="javascript:;">财会培训讲师</a>
                    </li>
                    <li data-positioncode="566" data-position="HR培训讲师">
                        <a href="javascript:;">HR培训讲师</a>
                    </li>
                    <li data-positioncode="567" data-position="培训师">
                        <a href="javascript:;">培训师</a>
                    </li>
                    <li data-positioncode="568" data-position="拓展培训">
                        <a href="javascript:;">拓展培训</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="569" data-position="招生">
                <a href="javascript:;">招生</a>
                <ul class="category category-3">
                    <li data-positioncode="570" data-position="课程顾问">
                        <a href="javascript:;">课程顾问</a>
                    </li>
                    <li data-positioncode="571" data-position="招生顾问">
                        <a href="javascript:;">招生顾问</a>
                    </li>
                    <li data-positioncode="572" data-position="留学顾问">
                        <a href="javascript:;">留学顾问</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="573" data-position="教练">
                <a href="javascript:;">教练</a>
                <ul class="category category-3">
                    <li data-positioncode="574" data-position="舞蹈教练">
                        <a href="javascript:;">舞蹈教练</a>
                    </li>
                    <li data-positioncode="575" data-position="瑜伽教练">
                        <a href="javascript:;">瑜伽教练</a>
                    </li>
                    <li data-positioncode="576" data-position="瘦身顾问">
                        <a href="javascript:;">瘦身顾问</a>
                    </li>
                    <li data-positioncode="577" data-position="游泳教练">
                        <a href="javascript:;">游泳教练</a>
                    </li>
                    <li data-positioncode="578" data-position="健身教练">
                        <a href="javascript:;">健身教练</a>
                    </li>
                    <li data-positioncode="579" data-position="篮球/羽毛球教练">
                        <a href="javascript:;">篮球/羽毛球教练</a>
                    </li>
                    <li data-positioncode="580" data-position="跆拳道教练">
                        <a href="javascript:;">跆拳道教练</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="581" data-position="其他教育培训职位">
                <a href="javascript:;">其他教育培训职位</a>
                <ul class="category category-3">
                    <li data-positioncode="582" data-position="其他教育培训职位">
                        <a href="javascript:;">其他教育培训职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="583" data-position="医疗健康">
        <a href="javascript:;">医疗健康</a>
        <ul class="category category-2">
            <li data-positioncode="584" data-position="药店">
                <a href="javascript:;">药店</a>
                <ul class="category category-3">
                    <li data-positioncode="585" data-position="店长">
                        <a href="javascript:;">店长</a>
                    </li>
                    <li data-positioncode="586" data-position="执业药师/驻店药师">
                        <a href="javascript:;">执业药师/驻店药师</a>
                    </li>
                    <li data-positioncode="587" data-position="店员/营业员">
                        <a href="javascript:;">店员/营业员</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="588" data-position="医疗技术">
                <a href="javascript:;">医疗技术</a>
                <ul class="category category-3">
                    <li data-positioncode="589" data-position="医生助理">
                        <a href="javascript:;">医生助理</a>
                    </li>
                    <li data-positioncode="590" data-position="医学影像">
                        <a href="javascript:;">医学影像</a>
                    </li>
                    <li data-positioncode="591" data-position="B超医生">
                        <a href="javascript:;">B超医生</a>
                    </li>
                    <li data-positioncode="592" data-position="生物制药">
                        <a href="javascript:;">生物制药</a>
                    </li>
                    <li data-positioncode="593" data-position="药品注册">
                        <a href="javascript:;">药品注册</a>
                    </li>
                    <li data-positioncode="594" data-position="药品生产">
                        <a href="javascript:;">药品生产</a>
                    </li>
                    <li data-positioncode="595" data-position="临床研究">
                        <a href="javascript:;">临床研究</a>
                    </li>
                    <li data-positioncode="596" data-position="临床协调">
                        <a href="javascript:;">临床协调</a>
                    </li>
                    <li data-positioncode="597" data-position="临床数据分析">
                        <a href="javascript:;">临床数据分析</a>
                    </li>
                    <li data-positioncode="598" data-position="医疗器械注册">
                        <a href="javascript:;">医疗器械注册</a>
                    </li>
                    <li data-positioncode="599" data-position="医疗器械生产/质量管理">
                        <a href="javascript:;">医疗器械生产/质量管理</a>
                    </li>
                    <li data-positioncode="600" data-position="医学编辑">
                        <a href="javascript:;">医学编辑</a>
                    </li>
                    <li data-positioncode="601" data-position="药学编辑">
                        <a href="javascript:;">药学编辑</a>
                    </li>
                    <li data-positioncode="602" data-position="医师">
                        <a href="javascript:;">医师</a>
                    </li>
                    <li data-positioncode="603" data-position="药剂师">
                        <a href="javascript:;">药剂师</a>
                    </li>
                    <li data-positioncode="604" data-position="医疗器械研究">
                        <a href="javascript:;">医疗器械研究</a>
                    </li>
                    <li data-positioncode="605" data-position="医学总监">
                        <a href="javascript:;">医学总监</a>
                    </li>
                    <li data-positioncode="606" data-position="医药研发">
                        <a href="javascript:;">医药研发</a>
                    </li>
                    <li data-positioncode="607" data-position="验光师">
                        <a href="javascript:;">验光师</a>
                    </li>
                    <li data-positioncode="608" data-position="放射科医师">
                        <a href="javascript:;">放射科医师</a>
                    </li>
                    <li data-positioncode="609" data-position="检验科医师">
                        <a href="javascript:;">检验科医师</a>
                    </li>
                    <li data-positioncode="610" data-position="其他医疗技术职位">
                        <a href="javascript:;">其他医疗技术职位</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="611" data-position="护士/护理">
                <a href="javascript:;">护士/护理</a>
                <ul class="category category-3">
                    <li data-positioncode="612" data-position="护士长">
                        <a href="javascript:;">护士长</a>
                    </li>
                    <li data-positioncode="613" data-position="护士/护理">
                        <a href="javascript:;">护士/护理</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="614" data-position="医师/医生">
                <a href="javascript:;">医师/医生</a>
                <ul class="category category-3">
                    <li data-positioncode="615" data-position="医师">
                        <a href="javascript:;">医师</a>
                    </li>
                    <li data-positioncode="616" data-position="中医">
                        <a href="javascript:;">中医</a>
                    </li>
                    <li data-positioncode="617" data-position="心理医生">
                        <a href="javascript:;">心理医生</a>
                    </li>
                    <li data-positioncode="618" data-position="牙科医生">
                        <a href="javascript:;">牙科医生</a>
                    </li>
                    <li data-positioncode="619" data-position="康复治疗师">
                        <a href="javascript:;">康复治疗师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="620" data-position="健康整形">
                <a href="javascript:;">健康整形</a>
                <ul class="category category-3">
                    <li data-positioncode="621" data-position="营养师">
                        <a href="javascript:;">营养师</a>
                    </li>
                    <li data-positioncode="622" data-position="整形师">
                        <a href="javascript:;">整形师</a>
                    </li>
                    <li data-positioncode="623" data-position="理疗师">
                        <a href="javascript:;">理疗师</a>
                    </li>
                    <li data-positioncode="624" data-position="针灸推拿">
                        <a href="javascript:;">针灸推拿</a>
                    </li>
                    <li data-positioncode="625" data-position="美容师/顾问">
                        <a href="javascript:;">美容师/顾问</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="626" data-position="市场销售">
                <a href="javascript:;">市场销售</a>
                <ul class="category category-3">
                    <li data-positioncode="627" data-position="医疗器械销售">
                        <a href="javascript:;">医疗器械销售</a>
                    </li>
                    <li data-positioncode="628" data-position="医学总监">
                        <a href="javascript:;">医学总监</a>
                    </li>
                    <li data-positioncode="629" data-position="医药代表">
                        <a href="javascript:;">医药代表</a>
                    </li>
                    <li data-positioncode="630" data-position="导医">
                        <a href="javascript:;">导医</a>
                    </li>
                    <li data-positioncode="631" data-position="健康顾问">
                        <a href="javascript:;">健康顾问</a>
                    </li>
                    <li data-positioncode="632" data-position="医美咨询">
                        <a href="javascript:;">医美咨询</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="633" data-position="健身">
                <a href="javascript:;">健身</a>
                <ul class="category category-3">
                    <li data-positioncode="634" data-position="瑜伽教练">
                        <a href="javascript:;">瑜伽教练</a>
                    </li>
                    <li data-positioncode="635" data-position="瘦身顾问">
                        <a href="javascript:;">瘦身顾问</a>
                    </li>
                    <li data-positioncode="636" data-position="游泳教练">
                        <a href="javascript:;">游泳教练</a>
                    </li>
                    <li data-positioncode="637" data-position="美体教练">
                        <a href="javascript:;">美体教练</a>
                    </li>
                    <li data-positioncode="638" data-position="舞蹈教练">
                        <a href="javascript:;">舞蹈教练</a>
                    </li>
                    <li data-positioncode="639" data-position="健身教练">
                        <a href="javascript:;">健身教练</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="640" data-position="其他医疗健康类职位">
                <a href="javascript:;">其他医疗健康类职位</a>
                <ul class="category category-3">
                    <li data-positioncode="641" data-position="其他医疗健康类职位">
                        <a href="javascript:;">其他医疗健康类职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="642" data-position="采购/贸易">
        <a href="javascript:;">采购/贸易</a>
        <ul class="category category-2">
            <li data-positioncode="643" data-position="采购">
                <a href="javascript:;">采购</a>
                <ul class="category category-3">
                    <li data-positioncode="644" data-position="采购总监">
                        <a href="javascript:;">采购总监</a>
                    </li>
                    <li data-positioncode="645" data-position="采购经理">
                        <a href="javascript:;">采购经理</a>
                    </li>
                    <li data-positioncode="646" data-position="采购专员">
                        <a href="javascript:;">采购专员</a>
                    </li>
                    <li data-positioncode="647" data-position="买手">
                        <a href="javascript:;">买手</a>
                    </li>
                    <li data-positioncode="648" data-position="采购工程师">
                        <a href="javascript:;">采购工程师</a>
                    </li>
                    <li data-positioncode="649" data-position="采购主管">
                        <a href="javascript:;">采购主管</a>
                    </li>
                    <li data-positioncode="650" data-position="采购助理">
                        <a href="javascript:;">采购助理</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="651" data-position="进出口贸易">
                <a href="javascript:;">进出口贸易</a>
                <ul class="category category-3">
                    <li data-positioncode="652" data-position="外贸经理">
                        <a href="javascript:;">外贸经理</a>
                    </li>
                    <li data-positioncode="653" data-position="外贸专员">
                        <a href="javascript:;">外贸专员</a>
                    </li>
                    <li data-positioncode="654" data-position="外贸业务员">
                        <a href="javascript:;">外贸业务员</a>
                    </li>
                    <li data-positioncode="655" data-position="贸易跟单">
                        <a href="javascript:;">贸易跟单</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="656" data-position="其他采购/贸易职位">
                <a href="javascript:;">其他采购/贸易职位</a>
                <ul class="category category-3">
                    <li data-positioncode="657" data-position="其他采购/贸易类职位">
                        <a href="javascript:;">其他采购/贸易类职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="658" data-position="供应链/物流">
        <a href="javascript:;">供应链/物流</a>
        <ul class="category category-2">
            <li data-positioncode="659" data-position="物流">
                <a href="javascript:;">物流</a>
                <ul class="category category-3">
                    <li data-positioncode="660" data-position="供应链专员">
                        <a href="javascript:;">供应链专员</a>
                    </li>
                    <li data-positioncode="661" data-position="供应链经理">
                        <a href="javascript:;">供应链经理</a>
                    </li>
                    <li data-positioncode="662" data-position="物流专员">
                        <a href="javascript:;">物流专员</a>
                    </li>
                    <li data-positioncode="663" data-position="物流经理">
                        <a href="javascript:;">物流经理</a>
                    </li>
                    <li data-positioncode="664" data-position="物流运营">
                        <a href="javascript:;">物流运营</a>
                    </li>
                    <li data-positioncode="665" data-position="物流跟单">
                        <a href="javascript:;">物流跟单</a>
                    </li>
                    <li data-positioncode="666" data-position="贸易跟单">
                        <a href="javascript:;">贸易跟单</a>
                    </li>
                    <li data-positioncode="667" data-position="物仓调度">
                        <a href="javascript:;">物仓调度</a>
                    </li>
                    <li data-positioncode="668" data-position="物仓项目">
                        <a href="javascript:;">物仓项目</a>
                    </li>
                    <li data-positioncode="669" data-position="运输经理/主管">
                        <a href="javascript:;">运输经理/主管</a>
                    </li>
                    <li data-positioncode="670" data-position="货运代理专员">
                        <a href="javascript:;">货运代理专员</a>
                    </li>
                    <li data-positioncode="671" data-position="货运代理经理">
                        <a href="javascript:;">货运代理经理</a>
                    </li>
                    <li data-positioncode="672" data-position="水/空/陆运操作">
                        <a href="javascript:;">水/空/陆运操作</a>
                    </li>
                    <li data-positioncode="673" data-position="报关员">
                        <a href="javascript:;">报关员</a>
                    </li>
                    <li data-positioncode="674" data-position="报检员">
                        <a href="javascript:;">报检员</a>
                    </li>
                    <li data-positioncode="675" data-position="核销员">
                        <a href="javascript:;">核销员</a>
                    </li>
                    <li data-positioncode="676" data-position="单证员">
                        <a href="javascript:;">单证员</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="677" data-position="仓储">
                <a href="javascript:;">仓储</a>
                <ul class="category category-3">
                    <li data-positioncode="678" data-position="仓储物料经理">
                        <a href="javascript:;">仓储物料经理</a>
                    </li>
                    <li data-positioncode="679" data-position="仓储物料专员">
                        <a href="javascript:;">仓储物料专员</a>
                    </li>
                    <li data-positioncode="680" data-position="仓储物料项目">
                        <a href="javascript:;">仓储物料项目</a>
                    </li>
                    <li data-positioncode="681" data-position="仓储管理">
                        <a href="javascript:;">仓储管理</a>
                    </li>
                    <li data-positioncode="682" data-position="仓库文员">
                        <a href="javascript:;">仓库文员</a>
                    </li>
                    <li data-positioncode="683" data-position="配/理/拣/发货">
                        <a href="javascript:;">配/理/拣/发货</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="684" data-position="运输">
                <a href="javascript:;">运输</a>
                <ul class="category category-3">
                    <li data-positioncode="685" data-position="货运司机">
                        <a href="javascript:;">货运司机</a>
                    </li>
                    <li data-positioncode="686" data-position="集装箱管理">
                        <a href="javascript:;">集装箱管理</a>
                    </li>
                    <li data-positioncode="687" data-position="配送">
                        <a href="javascript:;">配送</a>
                    </li>
                    <li data-positioncode="688" data-position="快递">
                        <a href="javascript:;">快递</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="689" data-position="高端供应链职位">
                <a href="javascript:;">高端供应链职位</a>
                <ul class="category category-3">
                    <li data-positioncode="690" data-position="供应链总监">
                        <a href="javascript:;">供应链总监</a>
                    </li>
                    <li data-positioncode="691" data-position="物流总监">
                        <a href="javascript:;">物流总监</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="692" data-position="其他供应链职位">
                <a href="javascript:;">其他供应链职位</a>
                <ul class="category category-3">
                    <li data-positioncode="693" data-position="其他供应链职位">
                        <a href="javascript:;">其他供应链职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="694" data-position="房地产/建筑">
        <a href="javascript:;">房地产/建筑</a>
        <ul class="category category-2">
            <li data-positioncode="695" data-position="房地产规划开发">
                <a href="javascript:;">房地产规划开发</a>
                <ul class="category category-3">
                    <li data-positioncode="696" data-position="房产策划">
                        <a href="javascript:;">房产策划</a>
                    </li>
                    <li data-positioncode="697" data-position="地产项目管理">
                        <a href="javascript:;">地产项目管理</a>
                    </li>
                    <li data-positioncode="698" data-position="地产招投标">
                        <a href="javascript:;">地产招投标</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="699" data-position="设计装修与市政建设">
                <a href="javascript:;">设计装修与市政建设</a>
                <ul class="category category-3">
                    <li data-positioncode="700" data-position="高级建筑工程师">
                        <a href="javascript:;">高级建筑工程师</a>
                    </li>
                    <li data-positioncode="701" data-position="建筑工程师">
                        <a href="javascript:;">建筑工程师</a>
                    </li>
                    <li data-positioncode="702" data-position="建筑设计师">
                        <a href="javascript:;">建筑设计师</a>
                    </li>
                    <li data-positioncode="703" data-position="土木/土建/结构工程师">
                        <a href="javascript:;">土木/土建/结构工程师</a>
                    </li>
                    <li data-positioncode="704" data-position="室内设计">
                        <a href="javascript:;">室内设计</a>
                    </li>
                    <li data-positioncode="705" data-position="园林设计">
                        <a href="javascript:;">园林设计</a>
                    </li>
                    <li data-positioncode="706" data-position="城市规划设计">
                        <a href="javascript:;">城市规划设计</a>
                    </li>
                    <li data-positioncode="707" data-position="工程监理">
                        <a href="javascript:;">工程监理</a>
                    </li>
                    <li data-positioncode="708" data-position="工程造价">
                        <a href="javascript:;">工程造价</a>
                    </li>
                    <li data-positioncode="709" data-position="预结算">
                        <a href="javascript:;">预结算</a>
                    </li>
                    <li data-positioncode="710" data-position="工程资料管理">
                        <a href="javascript:;">工程资料管理</a>
                    </li>
                    <li data-positioncode="711" data-position="建筑施工现场管理">
                        <a href="javascript:;">建筑施工现场管理</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="712" data-position="房地产经纪">
                <a href="javascript:;">房地产经纪</a>
                <ul class="category category-3">
                    <li data-positioncode="713" data-position="地产置业顾问">
                        <a href="javascript:;">地产置业顾问</a>
                    </li>
                    <li data-positioncode="714" data-position="地产评估">
                        <a href="javascript:;">地产评估</a>
                    </li>
                    <li data-positioncode="715" data-position="地产中介">
                        <a href="javascript:;">地产中介</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="716" data-position="物业管理">
                <a href="javascript:;">物业管理</a>
                <ul class="category category-3">
                    <li data-positioncode="717" data-position="物业管理">
                        <a href="javascript:;">物业管理</a>
                    </li>
                    <li data-positioncode="718" data-position="物业租赁销售 ">
                        <a href="javascript:;">物业租赁销售 </a>
                    </li>
                    <li data-positioncode="719" data-position="物业招商管理">
                        <a href="javascript:;">物业招商管理</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="720" data-position="高端房地产职位">
                <a href="javascript:;">高端房地产职位</a>
                <ul class="category category-3">
                    <li data-positioncode="721" data-position="地产项目总监">
                        <a href="javascript:;">地产项目总监</a>
                    </li>
                    <li data-positioncode="722" data-position="地产策划总监">
                        <a href="javascript:;">地产策划总监</a>
                    </li>
                    <li data-positioncode="723" data-position="地产招投标总监">
                        <a href="javascript:;">地产招投标总监</a>
                    </li>
                    <li data-positioncode="724" data-position="物业总监">
                        <a href="javascript:;">物业总监</a>
                    </li>
                    <li data-positioncode="725" data-position="房地产销售总监">
                        <a href="javascript:;">房地产销售总监</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="726" data-position="其他房地产职位">
                <a href="javascript:;">其他房地产职位</a>
                <ul class="category category-3">
                    <li data-positioncode="727" data-position="其他房地产职位">
                        <a href="javascript:;">其他房地产职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="728" data-position="咨询/翻译/法律">
        <a href="javascript:;">咨询/翻译/法律</a>
        <ul class="category category-2">
            <li data-positioncode="729" data-position="咨询/调研">
                <a href="javascript:;">咨询/调研</a>
                <ul class="category category-3">
                    <li data-positioncode="730" data-position="企业管理咨询">
                        <a href="javascript:;">企业管理咨询</a>
                    </li>
                    <li data-positioncode="731" data-position="数据分析师">
                        <a href="javascript:;">数据分析师</a>
                    </li>
                    <li data-positioncode="732" data-position="财务咨询顾问">
                        <a href="javascript:;">财务咨询顾问</a>
                    </li>
                    <li data-positioncode="733" data-position="IT咨询顾问">
                        <a href="javascript:;">IT咨询顾问</a>
                    </li>
                    <li data-positioncode="734" data-position="人力资源顾问">
                        <a href="javascript:;">人力资源顾问</a>
                    </li>
                    <li data-positioncode="735" data-position="咨询项目管理">
                        <a href="javascript:;">咨询项目管理</a>
                    </li>
                    <li data-positioncode="736" data-position="战略咨询">
                        <a href="javascript:;">战略咨询</a>
                    </li>
                    <li data-positioncode="737" data-position="猎头顾问">
                        <a href="javascript:;">猎头顾问</a>
                    </li>
                    <li data-positioncode="738" data-position="市场调研">
                        <a href="javascript:;">市场调研</a>
                    </li>
                    <li data-positioncode="739" data-position="其他咨询顾问">
                        <a href="javascript:;">其他咨询顾问</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="740" data-position="律师">
                <a href="javascript:;">律师</a>
                <ul class="category category-3">
                    <li data-positioncode="741" data-position="事务所律师">
                        <a href="javascript:;">事务所律师</a>
                    </li>
                    <li data-positioncode="742" data-position="公司法务">
                        <a href="javascript:;">公司法务</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="743" data-position="翻译">
                <a href="javascript:;">翻译</a>
                <ul class="category category-3">
                    <li data-positioncode="744" data-position="英语翻译">
                        <a href="javascript:;">英语翻译</a>
                    </li>
                    <li data-positioncode="745" data-position="日语翻译">
                        <a href="javascript:;">日语翻译</a>
                    </li>
                    <li data-positioncode="746" data-position="韩语/朝鲜语翻译">
                        <a href="javascript:;">韩语/朝鲜语翻译</a>
                    </li>
                    <li data-positioncode="747" data-position="法语翻译">
                        <a href="javascript:;">法语翻译</a>
                    </li>
                    <li data-positioncode="748" data-position="德语翻译">
                        <a href="javascript:;">德语翻译</a>
                    </li>
                    <li data-positioncode="749" data-position="俄语翻译">
                        <a href="javascript:;">俄语翻译</a>
                    </li>
                    <li data-positioncode="750" data-position="西班牙语翻译">
                        <a href="javascript:;">西班牙语翻译</a>
                    </li>
                    <li data-positioncode="751" data-position="其他语种翻译">
                        <a href="javascript:;">其他语种翻译</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="752" data-position="高端咨询类职位">
                <a href="javascript:;">高端咨询类职位</a>
                <ul class="category category-3">
                    <li data-positioncode="753" data-position="咨询总监">
                        <a href="javascript:;">咨询总监</a>
                    </li>
                    <li data-positioncode="754" data-position="咨询经理">
                        <a href="javascript:;">咨询经理</a>
                    </li>
                    <li data-positioncode="755" data-position="高级翻译">
                        <a href="javascript:;">高级翻译</a>
                    </li>
                    <li data-positioncode="756" data-position="同声传译  ">
                        <a href="javascript:;">同声传译  </a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="757" data-position="其他咨询类职位">
                <a href="javascript:;">其他咨询类职位</a>
                <ul class="category category-3">
                    <li data-positioncode="758" data-position="其他咨询/翻译类职位">
                        <a href="javascript:;">其他咨询/翻译类职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="759" data-position="实习生/管培生">
        <a href="javascript:;">实习生/管培生</a>
        <ul class="category category-2">
            <li data-positioncode="760" data-position="实习生/培训生/储备干部">
                <a href="javascript:;">实习生/培训生/储备干部</a>
                <ul class="category category-3">
                    <li data-positioncode="761" data-position="实习生">
                        <a href="javascript:;">实习生</a>
                    </li>
                    <li data-positioncode="762" data-position="管理培训生">
                        <a href="javascript:;">管理培训生</a>
                    </li>
                    <li data-positioncode="763" data-position="储备干部">
                        <a href="javascript:;">储备干部</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="764" data-position="其他实习/培训/储备职位">
                <a href="javascript:;">其他实习/培训/储备职位</a>
                <ul class="category category-3">
                    <li data-positioncode="765" data-position="其他实习/培训/储备职位">
                        <a href="javascript:;">其他实习/培训/储备职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="766" data-position="旅游">
        <a href="javascript:;">旅游</a>
        <ul class="category category-2">
            <li data-positioncode="767" data-position="旅游服务">
                <a href="javascript:;">旅游服务</a>
                <ul class="category category-3">
                    <li data-positioncode="768" data-position="计调">
                        <a href="javascript:;">计调</a>
                    </li>
                    <li data-positioncode="769" data-position="签证">
                        <a href="javascript:;">签证</a>
                    </li>
                    <li data-positioncode="770" data-position="旅游顾问">
                        <a href="javascript:;">旅游顾问</a>
                    </li>
                    <li data-positioncode="771" data-position="导游">
                        <a href="javascript:;">导游</a>
                    </li>
                    <li data-positioncode="772" data-position="预定票务">
                        <a href="javascript:;">预定票务</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="773" data-position="旅游产品开发/策划">
                <a href="javascript:;">旅游产品开发/策划</a>
                <ul class="category category-3">
                    <li data-positioncode="774" data-position="旅游产品经理">
                        <a href="javascript:;">旅游产品经理</a>
                    </li>
                    <li data-positioncode="775" data-position="旅游策划师">
                        <a href="javascript:;">旅游策划师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="776" data-position="其他旅游职位">
                <a href="javascript:;">其他旅游职位</a>
                <ul class="category category-3">
                    <li data-positioncode="777" data-position="其他旅游职位">
                        <a href="javascript:;">其他旅游职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="778" data-position="酒店/餐饮/零售">
        <a href="javascript:;">酒店/餐饮/零售</a>
        <ul class="category category-2">
            <li data-positioncode="779" data-position="酒店">
                <a href="javascript:;">酒店</a>
                <ul class="category category-3">
                    <li data-positioncode="780" data-position="收银">
                        <a href="javascript:;">收银</a>
                    </li>
                    <li data-positioncode="781" data-position="酒店前台">
                        <a href="javascript:;">酒店前台</a>
                    </li>
                    <li data-positioncode="782" data-position="客房服务员">
                        <a href="javascript:;">客房服务员</a>
                    </li>
                    <li data-positioncode="783" data-position="酒店经理">
                        <a href="javascript:;">酒店经理</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="784" data-position="餐饮">
                <a href="javascript:;">餐饮</a>
                <ul class="category category-3">
                    <li data-positioncode="785" data-position="收银">
                        <a href="javascript:;">收银</a>
                    </li>
                    <li data-positioncode="786" data-position="服务员">
                        <a href="javascript:;">服务员</a>
                    </li>
                    <li data-positioncode="787" data-position="厨师">
                        <a href="javascript:;">厨师</a>
                    </li>
                    <li data-positioncode="788" data-position="咖啡师">
                        <a href="javascript:;">咖啡师</a>
                    </li>
                    <li data-positioncode="789" data-position="送餐员">
                        <a href="javascript:;">送餐员</a>
                    </li>
                    <li data-positioncode="790" data-position="餐饮店长">
                        <a href="javascript:;">餐饮店长</a>
                    </li>
                    <li data-positioncode="791" data-position="领班">
                        <a href="javascript:;">领班</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="792" data-position="零售">
                <a href="javascript:;">零售</a>
                <ul class="category category-3">
                    <li data-positioncode="793" data-position="收银">
                        <a href="javascript:;">收银</a>
                    </li>
                    <li data-positioncode="794" data-position="导购">
                        <a href="javascript:;">导购</a>
                    </li>
                    <li data-positioncode="795" data-position="店员/营业员">
                        <a href="javascript:;">店员/营业员</a>
                    </li>
                    <li data-positioncode="796" data-position="门店店长">
                        <a href="javascript:;">门店店长</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="797" data-position="其他酒店/餐饮/零售职位">
                <a href="javascript:;">其他酒店/餐饮/零售职位</a>
                <ul class="category category-3">
                    <li data-positioncode="798" data-position="其他酒店/餐饮/零售职位">
                        <a href="javascript:;">其他酒店/餐饮/零售职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="799" data-position="生产制造">
        <a href="javascript:;">生产制造</a>
        <ul class="category category-2">
            <li data-positioncode="800" data-position="生产营运">
                <a href="javascript:;">生产营运</a>
                <ul class="category category-3">
                    <li data-positioncode="801" data-position="厂长/工厂经理">
                        <a href="javascript:;">厂长/工厂经理</a>
                    </li>
                    <li data-positioncode="802" data-position="生产总监">
                        <a href="javascript:;">生产总监</a>
                    </li>
                    <li data-positioncode="803" data-position="生产经理/车间主任">
                        <a href="javascript:;">生产经理/车间主任</a>
                    </li>
                    <li data-positioncode="804" data-position="生产组长/拉长">
                        <a href="javascript:;">生产组长/拉长</a>
                    </li>
                    <li data-positioncode="805" data-position="生产员">
                        <a href="javascript:;">生产员</a>
                    </li>
                    <li data-positioncode="806" data-position="生产设备管理">
                        <a href="javascript:;">生产设备管理</a>
                    </li>
                    <li data-positioncode="807" data-position="生产计划/物料控制">
                        <a href="javascript:;">生产计划/物料控制</a>
                    </li>
                    <li data-positioncode="808" data-position="生产跟单">
                        <a href="javascript:;">生产跟单</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="809" data-position="质量安全">
                <a href="javascript:;">质量安全</a>
                <ul class="category category-3">
                    <li data-positioncode="810" data-position="质量管理/测试">
                        <a href="javascript:;">质量管理/测试</a>
                    </li>
                    <li data-positioncode="811" data-position="可靠度工程师">
                        <a href="javascript:;">可靠度工程师</a>
                    </li>
                    <li data-positioncode="812" data-position="故障分析师">
                        <a href="javascript:;">故障分析师</a>
                    </li>
                    <li data-positioncode="813" data-position="认证工程师">
                        <a href="javascript:;">认证工程师</a>
                    </li>
                    <li data-positioncode="814" data-position="体系工程师">
                        <a href="javascript:;">体系工程师</a>
                    </li>
                    <li data-positioncode="815" data-position="审核员">
                        <a href="javascript:;">审核员</a>
                    </li>
                    <li data-positioncode="816" data-position="安全员">
                        <a href="javascript:;">安全员</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="817" data-position="机械设计/制造">
                <a href="javascript:;">机械设计/制造</a>
                <ul class="category category-3">
                    <li data-positioncode="818" data-position="机械工程师">
                        <a href="javascript:;">机械工程师</a>
                    </li>
                    <li data-positioncode="819" data-position="机械设计师">
                        <a href="javascript:;">机械设计师</a>
                    </li>
                    <li data-positioncode="820" data-position="机械设备工程师">
                        <a href="javascript:;">机械设备工程师</a>
                    </li>
                    <li data-positioncode="821" data-position="机械维修/保养">
                        <a href="javascript:;">机械维修/保养</a>
                    </li>
                    <li data-positioncode="822" data-position="机械制图">
                        <a href="javascript:;">机械制图</a>
                    </li>
                    <li data-positioncode="823" data-position="机械结构工程师">
                        <a href="javascript:;">机械结构工程师</a>
                    </li>
                    <li data-positioncode="824" data-position="工业工程师">
                        <a href="javascript:;">工业工程师</a>
                    </li>
                    <li data-positioncode="825" data-position="工艺/制程工程师">
                        <a href="javascript:;">工艺/制程工程师</a>
                    </li>
                    <li data-positioncode="826" data-position="材料工程师">
                        <a href="javascript:;">材料工程师</a>
                    </li>
                    <li data-positioncode="827" data-position="机电工程师">
                        <a href="javascript:;">机电工程师</a>
                    </li>
                    <li data-positioncode="828" data-position="CNC/数控">
                        <a href="javascript:;">CNC/数控</a>
                    </li>
                    <li data-positioncode="829" data-position="冲压工程师">
                        <a href="javascript:;">冲压工程师</a>
                    </li>
                    <li data-positioncode="830" data-position="夹具工程师">
                        <a href="javascript:;">夹具工程师</a>
                    </li>
                    <li data-positioncode="831" data-position="模具工程师">
                        <a href="javascript:;">模具工程师</a>
                    </li>
                    <li data-positioncode="832" data-position="焊接工程师">
                        <a href="javascript:;">焊接工程师</a>
                    </li>
                    <li data-positioncode="833" data-position="注塑工程师">
                        <a href="javascript:;">注塑工程师</a>
                    </li>
                    <li data-positioncode="834" data-position="铸造/锻造工程师">
                        <a href="javascript:;">铸造/锻造工程师</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="835" data-position="化工">
                <a href="javascript:;">化工</a>
                <ul class="category category-3">
                    <li data-positioncode="836" data-position="化工工程师">
                        <a href="javascript:;">化工工程师</a>
                    </li>
                    <li data-positioncode="837" data-position="实验室技术员">
                        <a href="javascript:;">实验室技术员</a>
                    </li>
                    <li data-positioncode="838" data-position="化学分析">
                        <a href="javascript:;">化学分析</a>
                    </li>
                    <li data-positioncode="839" data-position="涂料研发">
                        <a href="javascript:;">涂料研发</a>
                    </li>
                    <li data-positioncode="840" data-position="化妆品研发">
                        <a href="javascript:;">化妆品研发</a>
                    </li>
                    <li data-positioncode="841" data-position="食品/饮料研发">
                        <a href="javascript:;">食品/饮料研发</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="842" data-position="服装/纺织/皮革">
                <a href="javascript:;">服装/纺织/皮革</a>
                <ul class="category category-3">
                    <li data-positioncode="843" data-position="服装设计">
                        <a href="javascript:;">服装设计</a>
                    </li>
                    <li data-positioncode="844" data-position="女装设计">
                        <a href="javascript:;">女装设计</a>
                    </li>
                    <li data-positioncode="845" data-position="男装设计">
                        <a href="javascript:;">男装设计</a>
                    </li>
                    <li data-positioncode="846" data-position="童装设计">
                        <a href="javascript:;">童装设计</a>
                    </li>
                    <li data-positioncode="847" data-position="内衣设计">
                        <a href="javascript:;">内衣设计</a>
                    </li>
                    <li data-positioncode="848" data-position="面料设计">
                        <a href="javascript:;">面料设计</a>
                    </li>
                    <li data-positioncode="849" data-position="面料辅料开发">
                        <a href="javascript:;">面料辅料开发</a>
                    </li>
                    <li data-positioncode="850" data-position="面料辅料采购">
                        <a href="javascript:;">面料辅料采购</a>
                    </li>
                    <li data-positioncode="851" data-position="打样/制版">
                        <a href="javascript:;">打样/制版</a>
                    </li>
                    <li data-positioncode="852" data-position="服装/纺织/皮革跟单">
                        <a href="javascript:;">服装/纺织/皮革跟单</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="853" data-position="技工/普工">
                <a href="javascript:;">技工/普工</a>
                <ul class="category category-3">
                    <li data-positioncode="854" data-position="普工/操作工">
                        <a href="javascript:;">普工/操作工</a>
                    </li>
                    <li data-positioncode="855" data-position="叉车">
                        <a href="javascript:;">叉车</a>
                    </li>
                    <li data-positioncode="856" data-position="铲车">
                        <a href="javascript:;">铲车</a>
                    </li>
                    <li data-positioncode="857" data-position="焊工">
                        <a href="javascript:;">焊工</a>
                    </li>
                    <li data-positioncode="858" data-position="氩弧焊工">
                        <a href="javascript:;">氩弧焊工</a>
                    </li>
                    <li data-positioncode="859" data-position="电工">
                        <a href="javascript:;">电工</a>
                    </li>
                    <li data-positioncode="860" data-position="木工">
                        <a href="javascript:;">木工</a>
                    </li>
                    <li data-positioncode="861" data-position="漆工">
                        <a href="javascript:;">漆工</a>
                    </li>
                    <li data-positioncode="862" data-position="车工">
                        <a href="javascript:;">车工</a>
                    </li>
                    <li data-positioncode="863" data-position="磨工">
                        <a href="javascript:;">磨工</a>
                    </li>
                    <li data-positioncode="864" data-position="铣工">
                        <a href="javascript:;">铣工</a>
                    </li>
                    <li data-positioncode="865" data-position="钳工">
                        <a href="javascript:;">钳工</a>
                    </li>
                    <li data-positioncode="866" data-position="钻工">
                        <a href="javascript:;">钻工</a>
                    </li>
                    <li data-positioncode="867" data-position="铆工">
                        <a href="javascript:;">铆工</a>
                    </li>
                    <li data-positioncode="868" data-position="钣金">
                        <a href="javascript:;">钣金</a>
                    </li>
                    <li data-positioncode="869" data-position="抛光">
                        <a href="javascript:;">抛光</a>
                    </li>
                    <li data-positioncode="870" data-position="机修工">
                        <a href="javascript:;">机修工</a>
                    </li>
                    <li data-positioncode="871" data-position="折弯工">
                        <a href="javascript:;">折弯工</a>
                    </li>
                    <li data-positioncode="872" data-position="电镀工">
                        <a href="javascript:;">电镀工</a>
                    </li>
                    <li data-positioncode="873" data-position="喷塑工">
                        <a href="javascript:;">喷塑工</a>
                    </li>
                    <li data-positioncode="874" data-position="注塑工">
                        <a href="javascript:;">注塑工</a>
                    </li>
                    <li data-positioncode="875" data-position="组装工">
                        <a href="javascript:;">组装工</a>
                    </li>
                    <li data-positioncode="876" data-position="包装工">
                        <a href="javascript:;">包装工</a>
                    </li>
                    <li data-positioncode="877" data-position="空调工">
                        <a href="javascript:;">空调工</a>
                    </li>
                    <li data-positioncode="878" data-position="电梯工">
                        <a href="javascript:;">电梯工</a>
                    </li>
                    <li data-positioncode="879" data-position="锅炉工">
                        <a href="javascript:;">锅炉工</a>
                    </li>
                    <li data-positioncode="880" data-position="学徒工">
                        <a href="javascript:;">学徒工</a>
                    </li>
                </ul>
            </li>
            <li data-positioncode="881" data-position="其他生产制造职位">
                <a href="javascript:;">其他生产制造职位</a>
                <ul class="category category-3">
                    <li data-positioncode="882" data-position="其他生产制造职位">
                        <a href="javascript:;">其他生产制造职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
    <li data-positioncode="883" data-position="其他">
        <a href="javascript:;">其他</a>
        <ul class="category category-2">
            <li data-positioncode="884" data-position="其他职位类别">
                <a href="javascript:;">其他职位类别</a>
                <ul class="category category-3">
                    <li data-positioncode="885" data-position="其他职位">
                        <a href="javascript:;">其他职位</a>
                    </li>
                </ul>
            </li>
        </ul>
    </li>
</ul>

    <?php endif; ?>
    <div class="dropdown-menu"></div>
</div>
    </form>
</div>

    
    <!--热门职位-->
    <div class="search-hot">
        <b>热门职位:</b>
        <a href="javascript:;" ka="hot-position-1">Java</a>
        <a href="javascript:;" ka="hot-position-2">PHP</a>
        <a href="javascript:;" ka="hot-position-3">C++</a>
        <a href="javascript:;" ka="hot-position-4">web前端</a>
        <a href="javascript:;" ka="hot-position-5">iOS</a>
        <a href="javascript:;" ka="hot-position-6">Android</a>
        <a href="javascript:;" ka="hot-position-7">产品经理</a>
        <a href="javascript:;" ka="hot-position-8">UI设计师</a>
        <a href="javascript:;" ka="hot-position-9">产品运营</a>
    </div>
</div>

            <!--主推文案-->
            <div class="slider-box">
    <div class="promotion-main company-sider">
        <!--轮播-->
        <div class="m-carousel" style="height: 330px;width: 100%;margin-bottom: 3px;">
            <ul class="carousel-main">
                <?php if(is_array($env) || $env instanceof \think\Collection || $env instanceof \think\Paginator): $i = 0; $__LIST__ = $env;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$item): $mod = ($i % 2 );++$i;?>
                <li class="" style="opacity: 0;">
                    <a href="/companys/index/cid/<?php echo $item['co_id']; ?>">
                        <img src="<?php echo $item['bg']; ?>" alt="<?php echo $item['name']; ?>">
                    </a>
                </li>
                <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
            
            <!--上一个、下一个按钮-->
            <a href="javascript:;" class="btn-direction  prev"></a>
            <a href="javascript:;" class="btn-direction  next"></a>
            <!--导航-->
            <div class="carousel-dot">
            </div>
        </div>
        <!--/轮播-->
    
        <!-- 广告位 -->
        <?php if(is_array($ad) || $ad instanceof \think\Collection || $ad instanceof \think\Paginator): $i = 0; $__LIST__ = $ad;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$it): $mod = ($i % 2 );++$i;?>
        <div class="h1z1">
            <a href="/companys/index/cid/<?php echo $it['co_id']; ?>">
                <img src="<?php echo $it['bg']; ?>" alt="<?php echo $it['name']; ?>" style="width: 353px;height:110px;">
            </a>
        </div>
        <?php endforeach; endif; else: echo "" ;endif; ?>
        <!-- /广告位 -->
    
    </div>
</div>

        </div>
        <!--职位tab列表-->
        <div class="common-tab-box job-tab-box">
    <h3>
        
        <span class="cur" ka="index_rcmd_job_type_1">IT·互联网</span>
        
        <span class="" ka="index_rcmd_job_type_2">金融</span>
        
        <span class="" ka="index_rcmd_job_type_3">房地产·建筑</span>
        
        <span class="" ka="index_rcmd_job_type_4">教育培训</span>
        
        <span class="" ka="index_rcmd_job_type_5">汽车</span>
        
        <span class="" ka="index_rcmd_job_type_6">娱乐传媒</span>
        
        <span class="" ka="index_rcmd_job_type_7">医疗健康</span>
        
        <span class="" ka="index_rcmd_job_type_8">法律咨询</span>
        
        <span class="" ka="index_rcmd_job_type_9">供应链·物流</span>
        
        <span class="" ka="index_rcmd_job_type_10">采购贸易</span>
    
    </h3>
    
    
    <ul class="cur">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_1"
                   class="job-info" target="_blank">
                    <p>大数据开发<span class="salary">10K - 20K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_1_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/bd3dc917779c45c9a2e7a53739bd797cfc57791320943a6d57bb590b0ca3fdd5_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180221/bd3dc917779c45c9a2e7a53739bd797cfc57791320943a6d57bb590b0ca3fdd5_s.jpg"
                             alt="">软通动力 <span class="user-text">高蓉<span class="vline"></span>招聘顾问</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_2"
                   class="job-info" target="_blank">
                    <p>嵌入式开发专家(智能语音/视频云)<span class="salary">25K - 50K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_2_custompage"
                   target="_blank" class="user-info">
                    <p><img src="/static/home/images/avatar_6.png"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_6.png" alt="">阿里云 <span
                            class="user-text">郭伟松<span class="vline"></span>JAVA开发工程师</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_3"
                   class="job-info" target="_blank">
                    <p>高级Golang开发工程师<span class="salary">20K - 40K</span></p>
                    <p class="job-text">深圳<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_3_custompage"
                   target="_blank" class="user-info">
                    <p><img src="/static/home/images/avatar_6.png"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_6.png" alt="">滴滴出行
                        <span class="user-text">Mark<span class="vline"></span>技术人员</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_4"
                   class="job-info" target="_blank">
                    <p>Java、Python开发工程师<span class="salary">15K - 30K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>1-3年<span class="vline"></span>硕士</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_4_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/6babe0c240e22054d14b29bfb2e0a50c8c7dd922ad47494fc02c388e12c00eac_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20161221/6babe0c240e22054d14b29bfb2e0a50c8c7dd922ad47494fc02c388e12c00eac_s.jpg"
                             alt="">阿里巴巴集团 <span class="user-text">戴能<span class="vline"></span>CEO</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_5"
                   class="job-info" target="_blank">
                    <p>OA项目管理<span class="salary">12K - 19K</span></p>
                    <p class="job-text">北京<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_5_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/6ba06230d0f3b36531e9fa3051b28b9ea44e876e0534426fe13dc70f18fb08e3_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171212/6ba06230d0f3b36531e9fa3051b28b9ea44e876e0534426fe13dc70f18fb08e3_s.jpg"
                             alt="">联想集团 <span class="user-text">张诗涵<span
                            class="vline"></span>Recruiter</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_6"
                   class="job-info" target="_blank">
                    <p>项目经理<span class="salary">15K - 30K</span></p>
                    <p class="job-text">北京<span class="vline"></span>5-10年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_6_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/2db235c725773668e87f2bec9c8032dcfeb29fe800de560e3bbc25ddb5c1f3fe_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180311/2db235c725773668e87f2bec9c8032dcfeb29fe800de560e3bbc25ddb5c1f3fe_s.jpg"
                             alt="">上海泛微 <span class="user-text">郑美玲<span class="vline"></span>招聘经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_7"
                   class="job-info" target="_blank">
                    <p>服务端开发工程师<span class="salary">15K - 24K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_7_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/f3635771918011a92e42f76210b16d11cfcd208495d565ef66e7dff9f98764da_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180411/f3635771918011a92e42f76210b16d11cfcd208495d565ef66e7dff9f98764da_s.jpg"
                             alt="">百度 <span class="user-text">温馨<span class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_8"
                   class="job-info" target="_blank">
                    <p>产品专员<span class="salary">10K - 15K</span></p>
                    <p class="job-text">上海<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_8_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/a571b971d497164ad8d3992ced67eb3a9b37837597a010f1143d01ea6b4ae1fe_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180205/a571b971d497164ad8d3992ced67eb3a9b37837597a010f1143d01ea6b4ae1fe_s.jpg"
                             alt="">博彦科技 <span class="user-text">甘露<span class="vline"></span>hr</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_9"
                   class="job-info" target="_blank">
                    <p>催收运营岗<span class="salary">12K - 24K</span></p>
                    <p class="job-text">北京<span class="vline"></span>5-10年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_9_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/e77157418d407018cd3858aff38e60e4cfcd208495d565ef66e7dff9f98764da_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170906/e77157418d407018cd3858aff38e60e4cfcd208495d565ef66e7dff9f98764da_s.jpg"
                             alt="">京东金融 <span class="user-text">Tomi<span class="vline"></span>人事经理</span>
                    </p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_10"
                   class="job-info" target="_blank">
                    <p>商务行研（消费金融方向）<span class="salary">25K - 40K</span></p>
                    <p class="job-text">上海<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_10_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/54edc429da5e244bf916a55a208e906549b86c6f56fc9b4deabaaab46cf3f166_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180214/54edc429da5e244bf916a55a208e906549b86c6f56fc9b4deabaaab46cf3f166_s.jpg"
                             alt="">甜橙金融 <span class="user-text">孙亚楠<span class="vline"></span>hrbp</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_11"
                   class="job-info" target="_blank">
                    <p>【需9位】产品经理（金融财务类）<span class="salary">15K - 30K</span></p>
                    <p class="job-text">北京<span class="vline"></span>5-10年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_11_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170808/c906ea92794a6e33c1deb00ae7a31d828c7dd922ad47494fc02c388e12c00eac_s.jpg"
                            alt="">京东集团 <span class="user-text">李春阳<span class="vline"></span>产品经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_12"
                   class="job-info" target="_blank">
                    <p>支付金融产品总监<span class="salary">40K - 60K</span></p>
                    <p class="job-text">北京<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_12_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180330/370db68370fbe0e883df749f32c8be5e27843800fb9e8a3623c530b29fb98421_s.jpg"
                            alt="">搬砖 <span class="user-text">金勇<span class="vline"></span>经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_13"
                   class="job-info" target="_blank">
                    <p>大数据经理（互联网金融）<span class="salary">20K - 30K</span></p>
                    <p class="job-text">深圳<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_13_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180328/846d5ac5dc39442452225509e69326eb7579c854acfa8b2d8a41bd4a32a2ac23_s.jpg"
                            alt="">通善金融 <span class="user-text">曾超良<span class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_14"
                   class="job-info" target="_blank">
                    <p>贷款经理/金融顾问(公司分配客户资源)<span class="salary">10K - 15K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_14_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180228/1068002975116e18809e2486ec90aa5f553acb7c4b8343943286c882455eb917_s.jpg"
                            alt="">房金所 <span class="user-text">田甜<span class="vline"></span>hrbp</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_15"
                   class="job-info" target="_blank">
                    <p>金融编辑<span class="salary">8K - 10K</span></p>
                    <p class="job-text">北京<span class="vline"></span>不限<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_15_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180307/f73f0c6d07ee68efc5b8d2302c519a2dd16f38425c17f7b9e9c8a88b1947488a_s.jpg"
                            alt="">点趣教育 <span class="user-text">李超<span class="vline"></span>HR专员</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_16"
                   class="job-info" target="_blank">
                    <p>金融软件测试<span class="salary">6K - 9K</span></p>
                    <p class="job-text">昆明<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_16_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180313/7e50332efb3a9b797ac33bd6c26c4bd447c1c9d02f48bff2362c12105359b114_s.jpg"
                            alt="">捷科智诚 <span class="user-text">袁红<span class="vline"></span>人事助理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_17"
                   class="job-info" target="_blank">
                    <p>风控经理（金融）<span class="salary">5K - 10K</span></p>
                    <p class="job-text">南京<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_17_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_11.png" alt="">苏宁云商集团
                        <span class="user-text">兰岚<span class="vline"></span>人事部长</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_18"
                   class="job-info" target="_blank">
                    <p>金融产品经理<span class="salary">15K - 30K</span></p>
                    <p class="job-text">南京<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_18_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180410/6aef1637ff01a94f570438fd2ccc2c54cfcd208495d565ef66e7dff9f98764da_s.jpg"
                            alt="">中地 <span class="user-text">贺婕<span class="vline"></span>人力资源主管</span></p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_19"
                   class="job-info" target="_blank">
                    <p>建筑设计师<span class="salary">20K - 30K</span></p>
                    <p class="job-text">合肥<span class="vline"></span>5-10年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_19_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/c4fd60a41fd9112df75dc96d1faa7824b986108eed0be34bc3f00060c8c77403_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170809/c4fd60a41fd9112df75dc96d1faa7824b986108eed0be34bc3f00060c8c77403_s.jpg"
                             alt="">祥源控股 <span class="user-text">何森<span class="vline"></span>招聘</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_20"
                   class="job-info" target="_blank">
                    <p>建筑设计<span class="salary">5K - 7K</span></p>
                    <p class="job-text">保定<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_20_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171113/3bfd1c91695af448df46b75c7ec82aa05c48e3f18f2e049af01780778cb4fff2_s.jpg"
                            alt="">首开地产 <span class="user-text">王辉<span class="vline"></span>前期开发经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_21"
                   class="job-info" target="_blank">
                    <p>建筑设计师<span class="salary">6K - 8K</span></p>
                    <p class="job-text">晋城<span class="vline"></span>3-5年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_21_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171219/5e6d77061cf96c1f4ef297d27e9a5a9ca68c37713d6f0fa4ec3aaf0f5d8e37e6_s.jpg"
                            alt="">百事嘉地产 <span class="user-text">郑宁娜<span class="vline"></span>人事</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_22"
                   class="job-info" target="_blank">
                    <p>建筑装饰设计总监<span class="salary">8K - 16K</span></p>
                    <p class="job-text">贵阳<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_22_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170618/f025a6ede2c34d542adf4c9abfe7b8a60ef22a6ed5f1da0bce026abc46049c8b_s.jpg"
                            alt="">璞家网装分期网络平台 <span class="user-text">高菲菲<span
                            class="vline"></span>经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_23"
                   class="job-info" target="_blank">
                    <p>建筑施工现场管理<span class="salary">8K - 9K</span></p>
                    <p class="job-text">无锡<span class="vline"></span>1年以内<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_23_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180410/d9e13c03e29dd0b6094ef1adab106093ba43e4bf65583e44b58cb548648a4591_s.jpg"
                            alt="">金锡集团 <span class="user-text">鲍唯杰<span class="vline"></span>工程部经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_24"
                   class="job-info" target="_blank">
                    <p>建筑师助理<span class="salary">8K - 16K</span></p>
                    <p class="job-text">上海<span class="vline"></span>1年以内<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_24_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180303/33eba48f768bf6926055d630f1b9289dead882e05449c044cf3eeb3fd2f0faad_s.jpg"
                            alt="">金科地产 <span class="user-text">赵海疆<span class="vline"></span>招聘经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_25"
                   class="job-info" target="_blank">
                    <p>建筑产品总监（集团公司）<span class="salary">25K - 35K</span></p>
                    <p class="job-text">成都<span class="vline"></span>5-10年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_25_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180302/01f7d1bb0acf5f93f2073c73f489bb673ae4ae9885e26258151795bf50638e7a_s.jpg"
                            alt="">正行致远房地产咨询 <span class="user-text">毛雅娟<span
                            class="vline"></span>人事经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_26"
                   class="job-info" target="_blank">
                    <p>建筑设计师<span class="salary">10K - 20K</span></p>
                    <p class="job-text">邢台<span class="vline"></span>5-10年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_26_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_1.png" alt="">中鼎地产
                        <span class="user-text">刘爱芳<span class="vline"></span>人力行政主管</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_27"
                   class="job-info" target="_blank">
                    <p>区域销售专员（建筑BIM软件）<span class="salary">5K - 10K</span></p>
                    <p class="job-text">南昌<span class="vline"></span>不限<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_27_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170507/bdc5b359da0be417b77702da4621d16f8c7dd922ad47494fc02c388e12c00eac_s.jpg"
                            alt="">南昌品茗 <span class="user-text">肖霞<span class="vline"></span>行政人事</span></p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_28"
                   class="job-info" target="_blank">
                    <p>教师<span class="salary">5K - 10K</span></p>
                    <p class="job-text">福州<span class="vline"></span>不限<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_28_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/da33fc55cb676c855a2e6878e97677294ebee0cae47e7edb7eb8ca1665b5ac22_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180404/da33fc55cb676c855a2e6878e97677294ebee0cae47e7edb7eb8ca1665b5ac22_s.jpg"
                             alt="">梦想港湾(教育培训) <span class="user-text">詹少聪<span
                            class="vline"></span>人事</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_29"
                   class="job-info" target="_blank">
                    <p>课程顾问<span class="salary">5K - 10K</span></p>
                    <p class="job-text">郑州<span class="vline"></span>1年以内<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_29_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171216/064ba05bc077dddb79eba9a1129660ff52b3639b0179b701563b866976ef852f_s.jpg"
                            alt="">校游汇/教育培训 <span class="user-text">张玉<span class="vline"></span>总经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_30"
                   class="job-info" target="_blank">
                    <p>校长<span class="salary">10K - 20K</span></p>
                    <p class="job-text">苏州<span class="vline"></span>不限<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_30_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170720/2422c99f1d5e14fe560f5f1d2afdaae58c7dd922ad47494fc02c388e12c00eac_s.jpg"
                            alt="">童尊教育培训有限公司 <span class="user-text">姜叶<span
                            class="vline"></span>总经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_31"
                   class="job-info" target="_blank">
                    <p>艺考类舞蹈老师<span class="salary">6K - 10K</span></p>
                    <p class="job-text">西安<span class="vline"></span>1年以内<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_31_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180305/af9c4a6d65259d27ab10ce3a62dc1231ea6aa3846bea02946b83a9b58a1eaa76_s.jpg"
                            alt="">艺蓁教育培训 <span class="user-text">王珊珊<span class="vline"></span>行政部门</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_32"
                   class="job-info" target="_blank">
                    <p>班主任/辅导员<span class="salary">6K - 10K</span></p>
                    <p class="job-text">广州<span class="vline"></span>1年以内<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_32_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_9.png" alt="">初圆教育培训
                        <span class="user-text">陈薇如<span class="vline"></span>人事</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_33"
                   class="job-info" target="_blank">
                    <p>教务老师<span class="salary">5K - 8K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_33_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170812/d9b755ffc192c6092bac078391f8c65ae4da5b3565dd862fbfed0ebe844985d3_s.jpg"
                            alt="">世纪智程教育培训 <span class="user-text">崔紫飘<span class="vline"></span>崔经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_34"
                   class="job-info" target="_blank">
                    <p>班主任/职业规划师<span class="salary">5K - 8K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_34_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171023/2fe2cdf2a5068cbf334e94d5e5f7c9b8da40a6d00802629b8a4ff7461102b14f_s.jpg"
                            alt="">北大青鸟唐城教育培训 <span class="user-text">刘蒙蒙<span
                            class="vline"></span>人事经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_35"
                   class="job-info" target="_blank">
                    <p>市场营销<span class="salary">5K - 10K</span></p>
                    <p class="job-text">西安<span class="vline"></span>1年以内<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_35_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180331/048039b07baac904caa88cd3337a7f636deabbed6b3d8da902f7386bbcf6331f_s.jpg"
                            alt="">西安聚成(教育培训) <span class="user-text">兰明波<span
                            class="vline"></span>副总经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_36"
                   class="job-info" target="_blank">
                    <p>市场顾问<span class="salary">5K - 8K</span></p>
                    <p class="job-text">无锡<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_36_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180329/f76bdd63a8372a9d3d9ec393bb11fa8bcfcd208495d565ef66e7dff9f98764da_s.jpg"
                            alt="">大家会教育培训 <span class="user-text">谢钟<span class="vline"></span>总经理</span>
                    </p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_37"
                   class="job-info" target="_blank">
                    <p>汽车销售顾问（重庆/四川店）<span class="salary">8K - 16K</span></p>
                    <p class="job-text">重庆<span class="vline"></span>1-3年<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_37_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/d0c84d88d4a13871304120ac8788bdb907a47e3364a8a4b036e719a9fde4874d_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170824/d0c84d88d4a13871304120ac8788bdb907a47e3364a8a4b036e719a9fde4874d_s.jpg"
                             alt="">宜车时代/宜买车 <span class="user-text">Helen<span
                            class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_38"
                   class="job-info" target="_blank">
                    <p>汽车销售<span class="salary">10K - 11K</span></p>
                    <p class="job-text">重庆<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_38_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180411/c803eddeacb802110438d82787cedfb9c1ce7b94022e516d6859e4c5bafe05fd_s.jpg"
                            alt="">后河车贷 <span class="user-text">成庆伟<span class="vline"></span>区域总监</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_39"
                   class="job-info" target="_blank">
                    <p>汽车销售<span class="salary">8K - 9K</span></p>
                    <p class="job-text">郑州<span class="vline"></span>不限<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_39_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180411/ba870cc3d2fdb768beccdbf2204883ab3f728ca737984f348c27f8b72d6358e3_s.jpg"
                            alt="">趣店汽车租赁有限公司 <span class="user-text">孟经理<span class="vline"></span>门店客户服务经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_40"
                   class="job-info" target="_blank">
                    <p>汽车销售<span class="salary">6K - 12K</span></p>
                    <p class="job-text">西安<span class="vline"></span>1-3年<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_40_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180316/9fc91cea22c321c5cd0ebaf7ad3bd27012853edb693109a2fe83c969fb7c4f03_s.jpg"
                            alt="">拓盟科技 <span class="user-text">张函<span class="vline"></span>HR经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_41"
                   class="job-info" target="_blank">
                    <p>汽车视频女主持（女主播）<span class="salary">8K - 10K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_41_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20160724/3eaecd53137d6e7134c375abe68504ed02340118edd4547062c0823f00781a3b_s.jpg"
                            alt="">电动邦 <span class="user-text">刘彦汝<span class="vline"></span>HRD</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_42"
                   class="job-info" target="_blank">
                    <p>安全工程师 (智能硬件 汽车安全方向)<span class="salary">15K - 20K</span></p>
                    <p class="job-text">上海<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_42_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_9.png" alt="">红倍心 <span
                            class="user-text">Ash<span class="vline"></span>HRBP</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_43"
                   class="job-info" target="_blank">
                    <p>汽车主持人（上海站）<span class="salary">6K - 12K</span></p>
                    <p class="job-text">上海<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_43_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180315/3862e40b11398a6e2fe5b23c1e9185960a45b54a8aa200f352a590732f4b7347_s.jpg"
                            alt="">兮有视频 <span class="user-text">董晓北<span class="vline"></span>HRM</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_44"
                   class="job-info" target="_blank">
                    <p>汽车自媒体<span class="salary">5K - 6K</span></p>
                    <p class="job-text">无锡<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_44_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170911/34165dbf10df5b6978ab9123c062bbcef7dae29d52a3406b8e1969aa5672f8a4_s.jpg"
                            alt="">尚云芮 <span class="user-text">周后权<span class="vline"></span>经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_45"
                   class="job-info" target="_blank">
                    <p>二手汽车销售<span class="salary">6K - 12K</span></p>
                    <p class="job-text">武汉<span class="vline"></span>1-3年<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_45_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171129/53394b8f5cf0e18288ee73565e9c99a340d92844aad71e695b2ed5b785bb067f_s.jpg"
                            alt="">人人车 <span class="user-text">孟莉萍<span class="vline"></span>武汉HRBP</span>
                    </p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_46"
                   class="job-info" target="_blank">
                    <p>传媒公司招聘销售专员<span class="salary">5K - 9K</span></p>
                    <p class="job-text">吉安<span class="vline"></span>1年以内<span class="vline"></span>中专及以下
                    </p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_46_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/18967fe433167ffdd0dc8196e2d00809643ea862f46c2d71538e8f727d5d1b93_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180317/18967fe433167ffdd0dc8196e2d00809643ea862f46c2d71538e8f727d5d1b93_s.jpg"
                             alt="">吉安众旗 <span class="user-text">朱志强<span class="vline"></span>经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_47"
                   class="job-info" target="_blank">
                    <p>传媒广告公司兼职合作伙伴<span class="salary">8K - 16K</span></p>
                    <p class="job-text">广州<span class="vline"></span>1年以内<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_47_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170208/c1ca599bfaca528f06cd17570bfdad2b8c7dd922ad47494fc02c388e12c00eac_s.jpg"
                            alt="">众树传媒 <span class="user-text">陈一桉<span class="vline"></span>总经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_48"
                   class="job-info" target="_blank">
                    <p>其他传媒职位<span class="salary">5K - 10K</span></p>
                    <p class="job-text">西安<span class="vline"></span>不限<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_48_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180404/22b9ff605b75ca92ce4c16f97f3e0752dfee59a241603d8f9251cf8a53312754_s.jpg"
                            alt="">融和文化 <span class="user-text">蒋光辉<span class="vline"></span>运营总监</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_49"
                   class="job-info" target="_blank">
                    <p>坚果传媒<span class="salary">8K - 16K</span></p>
                    <p class="job-text">大连<span class="vline"></span>不限<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_49_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180315/c3607e981e37faed1631bc535ed8b3dc26e8e3147d592d62801b664c6773cf31_s.jpg"
                            alt="">坚果文化传媒 <span class="user-text">于超<span class="vline"></span>总经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_50"
                   class="job-info" target="_blank">
                    <p>广告传媒业务员<span class="salary">5K - 10K</span></p>
                    <p class="job-text">佛山<span class="vline"></span>1-3年<span class="vline"></span>高中</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_50_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180409/7ca4d8bd227d5f8503275c66b9825d7d52371ce1a788f77c7a859cc367b621f0_s.jpg"
                            alt="">蚂蚁动力餐饮品牌策划 <span class="user-text">陈子轩<span
                            class="vline"></span>总经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_51"
                   class="job-info" target="_blank">
                    <p>其他传媒职位<span class="salary">5K - 10K</span></p>
                    <p class="job-text">郑州<span class="vline"></span>不限<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_51_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180314/5e8562c82e4e8f2b77a8927acc492bcf815c9c1334a4a03ecc5b6f3a2a0a03a0_s.jpg"
                            alt="">浩之腾 <span class="user-text">郭颖<span class="vline"></span>主管</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_52"
                   class="job-info" target="_blank">
                    <p>其他传媒职位<span class="salary">20K - 40K</span></p>
                    <p class="job-text">长沙<span class="vline"></span>不限<span class="vline"></span>高中</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_52_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171227/65cb67ea3bf6af458f67877b83e19d6f6aee462ba873473f205551bb48f9e3f7_s.jpg"
                            alt="">湖南铂美达 <span class="user-text">龙清<span class="vline"></span>招聘主管</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_53"
                   class="job-info" target="_blank">
                    <p>副总经理（广告传媒）<span class="salary">15K - 20K</span></p>
                    <p class="job-text">青岛<span class="vline"></span>5-10年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_53_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170307/091bbd8c2338d6fe5e204816ef16ec336859a37c3518fc97ce9f771e879fbad9_s.jpg"
                            alt="">合创互同传媒 <span class="user-text">刘晓婧<span class="vline"></span>人事经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_54"
                   class="job-info" target="_blank">
                    <p>其他传媒职位<span class="salary">6K - 11K</span></p>
                    <p class="job-text">武汉<span class="vline"></span>不限<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_54_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171129/419ba3c2b243dbdae6391e90439ca369b601a7604785064df3678a960b9d7e0b_s.jpg"
                            alt="">八七文化传媒 <span class="user-text">石我<span class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_55"
                   class="job-info" target="_blank">
                    <p>健康顾问<span class="salary">6K - 8K</span></p>
                    <p class="job-text">济南<span class="vline"></span>1年以内<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_55_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/3ede939fe1bf4b5671b008212ef8bf8300013a3ed8780dcd490c1cd49dc78667_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180410/3ede939fe1bf4b5671b008212ef8bf8300013a3ed8780dcd490c1cd49dc78667_s.jpg"
                             alt="">美兆健康医疗 <span class="user-text">谭亮<span class="vline"></span>销售总监</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_56"
                   class="job-info" target="_blank">
                    <p>平面设计师<span class="salary">5K - 10K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_56_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180408/3270b71b2bffae90eb2e4b1a5c8d1b8e50121fb313077a7811cca05ef7c0e383_s.jpg"
                            alt="">九鼎医疗健康 <span class="user-text">邓璇燕<span class="vline"></span>招聘专员</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_57"
                   class="job-info" target="_blank">
                    <p>IOS项目经理<span class="salary">10K - 15K</span></p>
                    <p class="job-text">沈阳<span class="vline"></span>5-10年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_57_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170717/08810b04386d9720ea18409cbbe25204b23516878fe5ca0fa141d2ee5fe7e0a7_s.jpg"
                            alt="">蓝卡（国际）健康集团 <span class="user-text">张明<span
                            class="vline"></span>技术经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_58"
                   class="job-info" target="_blank">
                    <p>项目经理<span class="salary">10K - 20K</span></p>
                    <p class="job-text">北京<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_58_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20161129/232909e3027f1ae0db395a099a303c5be291cb1eb13824848ebb4e4770e1dfc0_s.jpg"
                            alt="">康铂医疗健康 <span class="user-text">王云鹏<span class="vline"></span>Recruiting Mgr</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_59"
                   class="job-info" target="_blank">
                    <p>销售顾问<span class="salary">6K - 8K</span></p>
                    <p class="job-text">成都<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_59_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_11.png" alt="">第一健康
                        <span class="user-text">方晓梅<span class="vline"></span>销售经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_60"
                   class="job-info" target="_blank">
                    <p>护士长<span class="salary">6K - 8K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>3-5年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_60_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171010/73c45675135e686a2add978e96cccdaf0502900068654c5fa00e731aa4c172ce_s.jpg"
                            alt="">两岸大健康医美总院 <span class="user-text">周小姐<span
                            class="vline"></span>人事经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_61"
                   class="job-info" target="_blank">
                    <p>市场主管<span class="salary">5K - 7K</span></p>
                    <p class="job-text">福州<span class="vline"></span>3-5年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_61_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180227/3841da95c556c589ed46523e47fba430cfcd208495d565ef66e7dff9f98764da_s.jpg"
                            alt="">福建美兆健康医疗 <span class="user-text">黄维蓉<span class="vline"></span>HR</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_62"
                   class="job-info" target="_blank">
                    <p>医疗健康行业人力招聘专员<span class="salary">5K - 10K</span></p>
                    <p class="job-text">大连<span class="vline"></span>3-5年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_62_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170719/665dc3027fac7a0b1fe8202a07416637a66a9d74b42ffcdcfe2072c0d791c5e7_s.jpg"
                            alt="">美年大健康大连分公司 <span class="user-text">夏红丽<span
                            class="vline"></span>副总经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_63"
                   class="job-info" target="_blank">
                    <p>数据分析师<span class="salary">12K - 20K</span></p>
                    <p class="job-text">上海<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_63_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_4.png" alt="">平安医疗
                        <span class="user-text">唐晶<span class="vline"></span>精算与数据分析部产品总监</span></p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_64"
                   class="job-info" target="_blank">
                    <p>英语翻译<span class="salary">6K - 7K</span></p>
                    <p class="job-text">苏州<span class="vline"></span>1年以内<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_64_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/c43b19ff6b56b4eec16500fb4f9dbd272ed04546b033ac4d9bd518d2dbf709e9_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180307/c43b19ff6b56b4eec16500fb4f9dbd272ed04546b033ac4d9bd518d2dbf709e9_s.jpg"
                             alt="">星愿景 <span class="user-text">徐华<span class="vline"></span>CEO</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_65"
                   class="job-info" target="_blank">
                    <p>英语翻译<span class="salary">10K - 15K</span></p>
                    <p class="job-text">北京<span class="vline"></span>不限<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_65_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171101/5245f36141047bfaa4600f73f7367a743bed3e63646f30a9d9a6ba039fbbbb04_s.jpg"
                            alt="">津桥国际 <span class="user-text">张月<span class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_66"
                   class="job-info" target="_blank">
                    <p>英语翻译<span class="salary">5K - 8K</span></p>
                    <p class="job-text">北京<span class="vline"></span>不限<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_66_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171207/ee0bcb3b152aba7abd01c4f5756d9d52994eb33316e844f93c55e7d2749b9322_s.jpg"
                            alt="">信凯尔 <span class="user-text">郭凌志<span class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_67"
                   class="job-info" target="_blank">
                    <p>合规经理（法律方向）<span class="salary">6K - 12K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_67_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_2.png" alt="">中国金融认证中心
                        <span class="user-text">赵改侠<span class="vline"></span>招聘者</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_68"
                   class="job-info" target="_blank">
                    <p>英语翻译 擅长法律方向（包括合同类）<span class="salary">5K - 6K</span></p>
                    <p class="job-text">广州<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_68_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170930/a8008fe8b387557eb1a4ed1f7b7d299acfcd208495d565ef66e7dff9f98764da_s.jpg"
                            alt="">安华理达 <span class="user-text">Cici<span class="vline"></span>人事专员</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_69"
                   class="job-info" target="_blank">
                    <p>留学文书顾问（法律专业）<span class="salary">7K - 10K</span></p>
                    <p class="job-text">北京<span class="vline"></span>不限<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_69_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20160425/0eda0ee1ffc728b5eddbde3e67a7352d8c7dd922ad47494fc02c388e12c00eac_s.jpg"
                            alt="">天道教育集团 <span class="user-text">shirly<span
                            class="vline"></span>招聘经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_70"
                   class="job-info" target="_blank">
                    <p>其他咨询/翻译类职位<span class="salary">5K - 6K</span></p>
                    <p class="job-text">西安<span class="vline"></span>1年以内<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_70_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180223/d29f1df505ba3d880dbf6ef0dece966e48019dfee9ea25ee868ef932b491ad1d_s.jpg"
                            alt="">陕西中细软 <span class="user-text">王彦斌<span class="vline"></span>经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_71"
                   class="job-info" target="_blank">
                    <p>英语翻译<span class="salary">7K - 8K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_71_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20160412/aa4dab6f0361fff8463b80b2ad538f298c7dd922ad47494fc02c388e12c00eac_s.jpg"
                            alt="">美天顺达 <span class="user-text">刘经理<span class="vline"></span>首席代表</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_72"
                   class="job-info" target="_blank">
                    <p>英语翻译<span class="salary">6K - 10K</span></p>
                    <p class="job-text">上海<span class="vline"></span>1年以内<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_72_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170302/8ab9993be5fbe0448014422df7ae2ab98c7dd922ad47494fc02c388e12c00eac_s.jpg"
                            alt="">泛特宏景 <span class="user-text">田芸<span class="vline"></span>招聘经理</span></p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_73"
                   class="job-info" target="_blank">
                    <p>供应链专员<span class="salary">5K - 6K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>1-3年<span class="vline"></span>高中</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_73_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/d420d7058cc5e9a7471fbea5ab81ba9271b26d8c69f010d56470522aebcfa193_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180411/d420d7058cc5e9a7471fbea5ab81ba9271b26d8c69f010d56470522aebcfa193_s.jpg"
                             alt="">良邦物流 <span class="user-text">刘双阳<span class="vline"></span>文员</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_74"
                   class="job-info" target="_blank">
                    <p>供应链管理<span class="salary">15K - 20K</span></p>
                    <p class="job-text">太原<span class="vline"></span>1年以内<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_74_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180115/546e3f7b2620d9c5fc878cab678e45819d49357da51a365524a4e5983686c0b8_s.jpg"
                            alt="">快成物流 <span class="user-text">闫芳<span class="vline"></span>人事经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_75"
                   class="job-info" target="_blank">
                    <p>供应链专员<span class="salary">5K - 10K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1年以内<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_75_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180409/e3a4b1473fa6f4eac683d94e1b7c2cdd05f9a5721dcc2d9b1171b80548e326bb_s.jpg"
                            alt="">百家修 <span class="user-text">周亚楠<span class="vline"></span>未知</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_76"
                   class="job-info" target="_blank">
                    <p>供应链经理<span class="salary">5K - 8K</span></p>
                    <p class="job-text">成都<span class="vline"></span>1年以内<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_76_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_6.png" alt="">快刻递物流
                        <span class="user-text">罗长炜<span class="vline"></span>成都公司总经理</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_77"
                   class="job-info" target="_blank">
                    <p>供应链专员<span class="salary">6K - 8K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_77_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_6.png" alt="">车件儿 <span
                            class="user-text">于金彬<span class="vline"></span>联合创始人</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_78"
                   class="job-info" target="_blank">
                    <p>供应链经理<span class="salary">6K - 12K</span></p>
                    <p class="job-text">成都<span class="vline"></span>1年以内<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_78_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180130/3c9e381c8092006729a9d6b91d7032f39d07c4ab85fec85657c1182e2e832fcc_s.jpg"
                            alt="">越好冷链 <span class="user-text">刘付广<span class="vline"></span>人力资源经理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_79"
                   class="job-info" target="_blank">
                    <p>供应链拓展经理<span class="salary">6K - 10K</span></p>
                    <p class="job-text">广州<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_79_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180308/599d260335b3faa4cdb50dc960d1fb66cfcd208495d565ef66e7dff9f98764da_s.jpg"
                            alt="">奔力物流 <span class="user-text">李永锦<span
                            class="vline"></span>市场营销中心  总监</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_80"
                   class="job-info" target="_blank">
                    <p>供应链采购<span class="salary">5K - 10K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_80_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20171129/59beac1ad07495d1d6f5361dbb0c9f2cdf6438b848a368e4050a02435ef7483c_s.jpg"
                            alt="">巨晟 <span class="user-text">vita<span class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_81"
                   class="job-info" target="_blank">
                    <p>供应链专员<span class="salary">6K - 8K</span></p>
                    <p class="job-text">北京<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_81_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180328/20e5d819b6f093b0577dfec254e070a462d0f958be435d69ff520a39922ebcf0_s.jpg"
                            alt="">未来维度 <span class="user-text">张女士<span class="vline"></span>人事主管</span>
                    </p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_82"
                   class="job-info" target="_blank">
                    <p>采购跟单<span class="salary">10K - 11K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>1年以内<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_82_custompage"
                   target="_blank" class="user-info">
                    <p>
                        <img src="/static/home/images/ae51e6699f2c3cf57cfcbf5c93e1933d8fa46d662b47e6c9bf24635ecf64f02a_s.jpg"
                             data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180329/ae51e6699f2c3cf57cfcbf5c93e1933d8fa46d662b47e6c9bf24635ecf64f02a_s.jpg"
                             alt="">蕴讯贸易 <span class="user-text">谷婷婷<span class="vline"></span>人事专员</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_83"
                   class="job-info" target="_blank">
                    <p>采购专员<span class="salary">6K - 12K</span></p>
                    <p class="job-text">苏州<span class="vline"></span>1年以内<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_83_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180226/bf38ffb81bb0a66d4395a2150e6cf4de0a331a6cfdef0b909c8c1130d70a2376_s.jpg"
                            alt="">宏茂进出口贸易 <span class="user-text">查芸<span class="vline"></span>人事专员</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_84"
                   class="job-info" target="_blank">
                    <p>采购主管<span class="salary">6K - 12K</span></p>
                    <p class="job-text">武汉<span class="vline"></span>1-3年<span class="vline"></span>大专</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_84_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180303/84bb4318c3fddd4ccef719c9f5aa96f33c999132358f93528cb9a2e0d447c183_s.jpg"
                            alt="">球球商贸 <span class="user-text">徐丽萍<span class="vline"></span>人事</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_85"
                   class="job-info" target="_blank">
                    <p>采购<span class="salary">5K - 8K</span></p>
                    <p class="job-text">苏州<span class="vline"></span>不限<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_85_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170717/e25bfe59ad8713f3573ffad72f2da83f8c7dd922ad47494fc02c388e12c00eac_s.jpg"
                            alt="">美年华贸易 <span class="user-text">陈维维<span class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_86"
                   class="job-info" target="_blank">
                    <p>跟单采购<span class="salary">7K - 8K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>3-5年<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_86_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20180331/3540be39cad8a29c4483bef6fc1ce98a25b621f1340fc99c359414f8e1176a14_s.jpg"
                            alt="">亦优贸易 <span class="user-text">陈健<span class="vline"></span>总经办助理</span>
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_87"
                   class="job-info" target="_blank">
                    <p>采购专员（外采）<span class="salary">8K - 16K</span></p>
                    <p class="job-text">北京<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_87_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/mcs/useravatar/20150824/972088676d623b17ecb2023e5ae3afbd9ad8e96b68ed434026bb096cb39f4ffd_s.jpg"
                            alt="">京东集团 <span class="user-text">吴宗懋<span
                            class="vline"></span>Recruiter</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_88"
                   class="job-info" target="_blank">
                    <p>产品采购经理<span class="salary">10K - 15K</span></p>
                    <p class="job-text">杭州<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_88_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_1.png" alt="">丹奇商贸
                        <span class="user-text">柴嘉倩<span class="vline"></span>人事主管</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_89"
                   class="job-info" target="_blank">
                    <p>采购专员<span class="salary">6K - 8K</span></p>
                    <p class="job-text">泉州<span class="vline"></span>3-5年<span class="vline"></span>本科</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_89_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img.bosszhipin.com/beijin/mcs/useravatar/20170403/9b011045bc7b185dff62e9d226c8625a0d9b60578c1c8d84e88338acebc421d2_s.jpg"
                            alt="">泉州雅米贸易有限公司 <span class="user-text">尤永亮<span
                            class="vline"></span>淘宝美工</span></p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" ka="index_rcmd_job_90"
                   class="job-info" target="_blank">
                    <p>采购专员（贸易）<span class="salary">5K - 6K</span></p>
                    <p class="job-text">广州<span class="vline"></span>不限<span class="vline"></span>不限</p>
                </a>
                <a href="javascript:;" ka="index_rcmd_company_90_custompage"
                   target="_blank" class="user-info">
                    <p><img src="https://www.zhipin.com/"
                            data-src="https://img2.bosszhipin.com/boss/avatar/avatar_1.png" alt="">点阵商贸
                        <span class="user-text">刘小姐<span class="vline"></span>HR</span></p>
                </a>
            </div>
        </li>
    
    </ul>


</div>

        <!--公司tab列表-->
        <div class="common-tab-box company-tab-box">
    <h3>
        
        <span class="cur" ka="index_rcmd_companytype_1">热门企业</span>
        
        <span class="" ka="index_rcmd_companytype_2">行业巨头</span>
        
        <span class="" ka="index_rcmd_companytype_3">新锐公司</span>
        
        <span class="" ka="index_rcmd_companytype_4">上市公司</span>
    
    </h3>
    
    
    <ul class="cur">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_1_custompage" class="company-info">
                    <img src="/static/home/images/f5334d3d5b90866385dda22b0814a7b0cfcd208495d565ef66e7dff9f98764da.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170930/f5334d3d5b90866385dda22b0814a7b0cfcd208495d565ef66e7dff9f98764da.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>每日优鲜</h4>
                        <p>C轮<span class="vline"></span>电子商务</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_1_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">358</span>位BOSS在线</span>
                        <span class="text-blue">893</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_2_custompage" class="company-info">
                    <img src="/static/home/images/d95e62558f12411b5c0a660b4bd2029f6781890da05fe4d3a8899f02f63aaa82.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170223/d95e62558f12411b5c0a660b4bd2029f6781890da05fe4d3a8899f02f63aaa82.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>飞渔科技</h4>
                        <p>不需要融资<span class="vline"></span>游戏</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_2_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">2</span>位BOSS在线</span>
                        <span class="text-blue">9</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_3_custompage" class="company-info">
                    <img src="/static/home/images/20bce0bbc85943ec76c144ed44f238f4-2d94411c9267f68a3nJyxYf9RQU_.jpeg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20bce0bbc85943ec76c144ed44f238f4-2d94411c9267f68a3nJyxYf9RQU~.jpeg"
                         alt="">
                    <div class="conpany-text">
                        <h4>货拉拉科技</h4>
                        <p>C轮<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_3_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">77</span>位BOSS在线</span>
                        <span class="text-blue">557</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_4_custompage" class="company-info">
                    <img src="/static/home/images/9540933201df000f8a3d9f8127437d0a407776ae994bde7988d29edf44f775b7.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/20170715/9540933201df000f8a3d9f8127437d0a407776ae994bde7988d29edf44f775b7.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>滴滴出行</h4>
                        <p>D轮及以上<span class="vline"></span>移动互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_4_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">773</span>位BOSS在线</span>
                        <span class="text-blue">3842</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_5_custompage" class="company-info">
                    <img src="/static/home/images/fbdf52b25078105f5280b18102e706a93dda224f40204cb13e70d291a0cc2207.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170502/fbdf52b25078105f5280b18102e706a93dda224f40204cb13e70d291a0cc2207.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>洋钱罐</h4>
                        <p>不需要融资<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_5_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">7</span>位BOSS在线</span>
                        <span class="text-blue">60</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_6_custompage" class="company-info">
                    <img src="/static/home/images/8239.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/brand/8239.jpg" alt="">
                    <div class="conpany-text">
                        <h4>亚信科技</h4>
                        <p>已上市<span class="vline"></span>计算机软件</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_6_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">184</span>位BOSS在线</span>
                        <span class="text-blue">505</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_7_custompage" class="company-info">
                    <img src="/static/home/images/120bee2dc0aacfbc0100910c15403c0c119146beb1940b641b6e0f7e7f6c4bc8.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170605/120bee2dc0aacfbc0100910c15403c0c119146beb1940b641b6e0f7e7f6c4bc8.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>融贝网</h4>
                        <p>A轮<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_7_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">21</span>位BOSS在线</span>
                        <span class="text-blue">72</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_8_custompage" class="company-info">
                    <img src="/static/home/images/4c10a3ce5814297c4433859e352f00988f872e39f434913f431efdfa193aa055.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20180329/4c10a3ce5814297c4433859e352f00988f872e39f434913f431efdfa193aa055.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>平安普惠</h4>
                        <p>已上市<span class="vline"></span>O2O</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_8_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">1882</span>位BOSS在线</span>
                        <span class="text-blue">4859</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_9_custompage" class="company-info">
                    <img src="/static/home/images/c43900ef3a164e72f7bcbafb720a37d3be1bd4a3bd2a63f070bdbdada9aad826.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/20180305/c43900ef3a164e72f7bcbafb720a37d3be1bd4a3bd2a63f070bdbdada9aad826.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>51Talk</h4>
                        <p>已上市<span class="vline"></span>在线教育</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_9_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">113</span>位BOSS在线</span>
                        <span class="text-blue">461</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_10_custompage" class="company-info">
                    <img src="/static/home/images/a83cc4751f7657b745f20ba2261ffe5e21f4a9fc1471c216d6ab27843b6e3acc.jpg"
                         data-src="https://img2.bosszhipin.com/mcs/chatphoto/20160205/a83cc4751f7657b745f20ba2261ffe5e21f4a9fc1471c216d6ab27843b6e3acc.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>开科唯识</h4>
                        <p>未融资<span class="vline"></span>计算机软件</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_10_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">12</span>位BOSS在线</span>
                        <span class="text-blue">95</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_11_custompage" class="company-info">
                    <img src="/static/home/images/055446825fa98fc8c8cce5ae83fd1785163adfc5b33b8044079aacba248356e6.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170628/055446825fa98fc8c8cce5ae83fd1785163adfc5b33b8044079aacba248356e6.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>百度外卖</h4>
                        <p>B轮<span class="vline"></span>移动互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_11_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">117</span>位BOSS在线</span>
                        <span class="text-blue">335</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_12_custompage" class="company-info">
                    <img src="/static/home/images/9106.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/brand/9106.jpg" alt="">
                    <div class="conpany-text">
                        <h4>支付宝</h4>
                        <p>B轮<span class="vline"></span>移动互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_12_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">180</span>位BOSS在线</span>
                        <span class="text-blue">348</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_13_custompage" class="company-info">
                    <img src="/static/home/images/e9cf516c323d1b4de6bd9f9e5a9e8264-1f08e39131a365241XN-2sPnUAcH.jpeg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/e9cf516c323d1b4de6bd9f9e5a9e8264-1f08e39131a365241XN-2sPnUAcH.jpeg"
                         alt="">
                    <div class="conpany-text">
                        <h4>和信财富</h4>
                        <p>已上市<span class="vline"></span>互联网金融</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_13_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">79</span>位BOSS在线</span>
                        <span class="text-blue">224</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_14_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170123/a01723bca426bf87c0b50b8613d781a4c55539481f5e6b3e44d1f9171dfe5e28.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>大连链家</h4>
                        <p>C轮<span class="vline"></span>工程施工</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_14_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">303</span>位BOSS在线</span>
                        <span class="text-blue">979</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_15_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20160906/5e0373acaf493d43b4d630560f6e8444e26a909d4e08f33948b8c5716a9ac782.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>忠旺集团</h4>
                        <p>已上市<span class="vline"></span>其他行业</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_15_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">17</span>位BOSS在线</span>
                        <span class="text-blue">72</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_16_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20180223/bbe613c881aa9903fbea5fd70cc8f1d238b1a0c5b739ef4f13d5e98def6efc24.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>上海链家</h4>
                        <p>D轮及以上<span class="vline"></span>工程施工</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_16_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">181</span>位BOSS在线</span>
                        <span class="text-blue">204</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_17_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/e811185a869002f45858e8815b231b21-16b77f7ca8db1a6103J92MPnUAcH.jpeg"
                         alt="">
                    <div class="conpany-text">
                        <h4>中国联通</h4>
                        <p>已上市<span class="vline"></span>通信/网络设备</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_17_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">28</span>位BOSS在线</span>
                        <span class="text-blue">79</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_18_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170620/16d530bc134c5d8adebfb45954f4573162d33732e3c3720783e90d84d058bc15.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>85度C</h4>
                        <p>已上市<span class="vline"></span>生活服务</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_18_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">22</span>位BOSS在线</span>
                        <span class="text-blue">64</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_19_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/brand/168529.jpg" alt="">
                    <div class="conpany-text">
                        <h4>传音控股</h4>
                        <p>不需要融资<span class="vline"></span>移动互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_19_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">23</span>位BOSS在线</span>
                        <span class="text-blue">65</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_20_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20171006/292d66e46d54389bc34e0cafc2382e405115355f3bfdb4064177aee620f99d4f.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>碧桂园</h4>
                        <p>不需要融资<span class="vline"></span>工程施工</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_20_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">31</span>位BOSS在线</span>
                        <span class="text-blue">93</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_21_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170728/76beef244ac640576b64be63e9f4b6ccc67536a22f13a2bd046b61921d693cde.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>即有分期</h4>
                        <p>C轮<span class="vline"></span>互联网金融</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_21_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">171</span>位BOSS在线</span>
                        <span class="text-blue">347</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_22_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/brand/7262.jpg" alt="">
                    <div class="conpany-text">
                        <h4>OPPO</h4>
                        <p>不需要融资<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_22_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">82</span>位BOSS在线</span>
                        <span class="text-blue">355</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_23_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20171119/e02905c67cccd43567026073085be455cfcd208495d565ef66e7dff9f98764da.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>招商银行信用卡中心</h4>
                        <p>已上市<span class="vline"></span>互联网金融</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_23_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">469</span>位BOSS在线</span>
                        <span class="text-blue">1270</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_24_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170824/c348fded57fa1ddcdcb2eae64576a5020eb403d575c59339a87975f016ce2c64.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>聚思鸿</h4>
                        <p>已上市<span class="vline"></span>企业服务</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_24_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">26</span>位BOSS在线</span>
                        <span class="text-blue">84</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_25_custompage" class="company-info">
                    <img src="/static/home/images/36a162a3631f0f2740f7f70787ef74f6080e483a6cdda4db28bfc47a8f9add71.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20160906/36a162a3631f0f2740f7f70787ef74f6080e483a6cdda4db28bfc47a8f9add71.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>再惠</h4>
                        <p>B轮<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_25_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">45</span>位BOSS在线</span>
                        <span class="text-blue">170</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_26_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20160331/17f62af8e24bf31314f8a5ee118c0caff253b6ed816644942967ef79eb90aef5.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>中普</h4>
                        <p>B轮<span class="vline"></span>互联网金融</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_26_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">43</span>位BOSS在线</span>
                        <span class="text-blue">169</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_27_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20160616/a30cb2cb67d3ef42599ec88b2ed4e431a913d92db28697eac97819731866a743.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>洛基英语</h4>
                        <p>B轮<span class="vline"></span>在线教育</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_27_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">10</span>位BOSS在线</span>
                        <span class="text-blue">138</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_28_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img2.bosszhipin.com/mcs/chatphoto/20160218/20226f3400b4113c0a39bbdddd10e6c28ad5b3b96e5e0019080477eb312bdc9d.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>无讼</h4>
                        <p>B轮<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_28_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">7</span>位BOSS在线</span>
                        <span class="text-blue">43</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_29_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170421/373a91cd95b234f0955249643cb8f25656e98eb63a41a36fc65ad263ee7e7e7c.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>九创装饰</h4>
                        <p>未融资<span class="vline"></span>生活服务</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_29_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">94</span>位BOSS在线</span>
                        <span class="text-blue">216</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_30_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20160721/9f0a0cc6b2503732ef33a067b1f574f2d0a55d1b08c017d395032a0ba938ccd5.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>汇宜</h4>
                        <p>B轮<span class="vline"></span>移动互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_30_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">1</span>位BOSS在线</span>
                        <span class="text-blue">6</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_31_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/3f36e458cb99ed789e9ec4403e99e8ab-932d56ea2dc647c003N43NW-DggQl9s~.jpeg"
                         alt="">
                    <div class="conpany-text">
                        <h4>众智融金(钱包生活)</h4>
                        <p>B轮<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_31_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">68</span>位BOSS在线</span>
                        <span class="text-blue">255</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_32_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/brand/12914.jpg" alt="">
                    <div class="conpany-text">
                        <h4>二维火</h4>
                        <p>B轮<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_32_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">35</span>位BOSS在线</span>
                        <span class="text-blue">124</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_33_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img2.bosszhipin.com/mcs/chatphoto/20160309/53d8a8a9d7aa24ca940631d2fbbd810bb2a3ac97f4b841ce756fa433c70d2830.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>米么金服</h4>
                        <p>C轮<span class="vline"></span>互联网金融</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_33_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">44</span>位BOSS在线</span>
                        <span class="text-blue">122</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_34_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img2.bosszhipin.com/mcs/chatphoto/20160304/ded5ef0bf8119d5cf7b405a85e15374d43fa7bc8be3641c07948205823664d2f.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>农分期</h4>
                        <p>C轮<span class="vline"></span>电子商务</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_34_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">74</span>位BOSS在线</span>
                        <span class="text-blue">189</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_35_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/20180309/768a64617d5c2aab2594a873c79307d2be1bd4a3bd2a63f070bdbdada9aad826.png"
                         alt="">
                    <div class="conpany-text">
                        <h4>维也纳酒店</h4>
                        <p>D轮及以上<span class="vline"></span>生活服务</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_35_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">85</span>位BOSS在线</span>
                        <span class="text-blue">341</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_36_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170522/60b83c9cdfc9de03fe6bb52be07f4208e7a86b9d39932378a795bb97078e543d.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>智慧树</h4>
                        <p>B轮<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_36_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">20</span>位BOSS在线</span>
                        <span class="text-blue">169</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
    
    </ul>
    
    
    <ul class="">
        
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_37_custompage" class="company-info">
                    <img src="/static/home/images/460.jpg"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/brand/460.jpg" alt="">
                    <div class="conpany-text">
                        <h4>易宝软件</h4>
                        <p>已上市<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_37_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">13</span>位BOSS在线</span>
                        <span class="text-blue">138</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_38_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img2.bosszhipin.com/mcs/chatphoto/20160119/5bee2ac41146794de52b0f28c516a90848a120c1a87bb73f1bb1bac44a6c1ffd.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>星巴克咖啡</h4>
                        <p>已上市<span class="vline"></span>生活服务</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_38_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">175</span>位BOSS在线</span>
                        <span class="text-blue">340</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_39_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/brand/8952.jpg" alt="">
                    <div class="conpany-text">
                        <h4>欢聚时代</h4>
                        <p>已上市<span class="vline"></span>移动互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_39_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">32</span>位BOSS在线</span>
                        <span class="text-blue">300</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_40_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20160509/3509c77cf378fc2af88847e2732be2adc473ac228e16ffaa4e47d3573563c982.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>世纪文都教育</h4>
                        <p>已上市<span class="vline"></span>在线教育</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_40_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">21</span>位BOSS在线</span>
                        <span class="text-blue">78</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_41_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170105/fc84ad02fc68549c7b990c0141c0a8b69a50c7909d532a550bd09a8fcec1ba0a.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>华夏银行</h4>
                        <p>已上市<span class="vline"></span>互联网金融</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_41_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">69</span>位BOSS在线</span>
                        <span class="text-blue">138</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_42_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20160415/9a614010f2fc065586cdbc3315f653e0f1e4869499ec2409193a172a2554be94.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>昂立智立方</h4>
                        <p>已上市<span class="vline"></span>在线教育</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_42_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">133</span>位BOSS在线</span>
                        <span class="text-blue">324</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_43_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img2.bosszhipin.com/mcs/chatphoto/20160328/08b425bb0b6712672d74fe20c148310057af3d1e05319711bd94b247f9650129.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>搜狐集团</h4>
                        <p>已上市<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_43_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">8</span>位BOSS在线</span>
                        <span class="text-blue">18</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_44_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20170613/58e3fc5a67e713b1b6e527c16cd31f66ee7a989d6744ac3c107b2eafa0a2bdad.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>顶呱呱</h4>
                        <p>已上市<span class="vline"></span>企业服务</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_44_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">159</span>位BOSS在线</span>
                        <span class="text-blue">281</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_45_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/brand/284013.jpg" alt="">
                    <div class="conpany-text">
                        <h4>三七互娱</h4>
                        <p>已上市<span class="vline"></span>游戏</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_45_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">28</span>位BOSS在线</span>
                        <span class="text-blue">227</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_46_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20160620/8fa6805e4bf78df89ece3c7e83b54bc0a913d92db28697eac97819731866a743.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>顺顺留学</h4>
                        <p>已上市<span class="vline"></span>在线教育</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_46_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">43</span>位BOSS在线</span>
                        <span class="text-blue">93</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_47_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/bar/20180301/322024f8988ff11ace6c382cff708e41be1bd4a3bd2a63f070bdbdada9aad826.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>搜狐畅游</h4>
                        <p>已上市<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_47_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">13</span>位BOSS在线</span>
                        <span class="text-blue">110</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
        
        <li>
            <div class="sub-li">
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_companylogo_48_custompage" class="company-info">
                    <img src="https://www.zhipin.com/"
                         data-src="https://img.bosszhipin.com/beijin/mcs/chatphoto/20171207/bc63547013c5aa8aa7c477724026d4e5d51fd99bcde924c9119d9d2e6c601ade.jpg"
                         alt="">
                    <div class="conpany-text">
                        <h4>赛维网络</h4>
                        <p>已上市<span class="vline"></span>互联网</p>
                    </div>
                </a>
                <a href="javascript:;" target="_blank"
                   ka="index_rcmd_company_48_custompage" class="about-info">
                    <p>
                        <span class="pull-right"><span class="text-blue">8</span>位BOSS在线</span>
                        <span class="text-blue">85</span>个热招职位
                    </p>
                </a>
            </div>
        </li>
    
    </ul>


</div>

        <!-- 热招城市 -->
        <div class="common-tab-box hotcity-tab-box clearfix">
    <h3><span class="cur">城市热招</span></h3>
    <ul class="cur">
        
        <li>
            <a href="/search/index/?scity=101010100" ka="index_rcmd_city_1">
                <img src="/static/home/images/city_101010100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101020100" ka="index_rcmd_city_2">
                <img src="/static/home/images/city_101020100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101030100" ka="index_rcmd_city_3">
                <img src="/static/home/images/city_101030100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101110100" ka="index_rcmd_city_4">
                <img src="/static/home/images/city_101110100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101190400" ka="index_rcmd_city_5">
                <img src="/static/home/images/city_101190400.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101200100" ka="index_rcmd_city_6">
                <img src="/static/home/images/city_101200100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101210100" ka="index_rcmd_city_7">
                <img src="/static/home/images/city_101210100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101230200" ka="index_rcmd_city_8">
                <img src="/static/home/images/city_101230200.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101250100" ka="index_rcmd_city_9">
                <img src="/static/home/images/city_101250100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101270100" ka="index_rcmd_city_10">
                <img src="/static/home/images/city_101270100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101280100" ka="index_rcmd_city_11">
                <img src="/static/home/images/city_101280100.png" alt="">
                <div class="model"></div>
            </a>
        </li>
        
        <li>
            <a href="/search/index/?scity=101280600" ka="index_rcmd_city_12">
                <img src="/static/home/images/city_101280600.png" alt="">
                <div class="model"></div>
            </a>
        </li>
    
    </ul>
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