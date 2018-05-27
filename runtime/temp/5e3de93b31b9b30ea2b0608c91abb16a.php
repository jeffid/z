<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:74:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\index\test.html";i:1524818400;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1524643953;s:71:"D:\APP\wamp\www\XDL\zhipin\application\home\view\index\test_search.html";i:1524878374;}*/ ?>
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
    

        
<!--主体main-->
<div id="main" class="inner home-inner">
    <div class="home-box">

        <div class="home-main">
            <!--搜索框-->
            /*
<div class="search-box">
    <div class="search-form ">
        <form action="https://www.zhipin.com/job_detail/" method="get" class="">
            <div class="search-form-con">
                <div class="city-sel">
                    <i class="line"></i>
                    <span class="label-text"><b>深圳</b><i class="icon-arrow-down"></i></span>
                </div>
                <div class="industry-sel" ka="search_bos_sel_industry">
                    <i class="line"></i>
                    <span class="label-text"><b>行业不限</b><i class="icon-arrow-down"></i></span>
                </div>
                <div class="position-sel" ka="search_box_sel_jobtype">
                    <i class="line"></i>
                    <span class="label-text"><b>职位类型不限</b><i class="icon-arrow-down"></i></span>
                </div>
                <p class="ipt-wrap"><input type="text" name="query" class="ipt-search"
                                           autocomplete="off" maxlength="50" placeholder="搜索职位、公司"></p>
            </div>
            <input type="hidden" name="scity" class="city-code" value="101280600">
            <input type="hidden" name="industry" class="industry-code" value="">
            <input type="hidden" name="position" class="position-code" value="">
            <button class="btn btn-search">搜索</button>
            <div class="suggest-result" style="display: none;">
                <ul>
                    <li>php 工程师</li>
                    <li>php 实习生</li>
                    <li>php</li>
                </ul>
            </div>
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
            <div class="position-box">
                <div class="dropdown-menu">
                    <script>
                        var jobData = positionList;
                    </script>
                    <div class="select-tree" data-level="3">
                        <ul class="tree-1">
                            <li data-id="0" class="">不限</li>
                            <li data-id="100000">技术</li>
                            <li data-id="110000">产品</li>
                            <li data-id="120000">设计</li>
                            <li data-id="130000">运营</li>
                            <li data-id="140000">市场</li>
                            <li data-id="150000">职能/高级管理</li>
                            <li data-id="160000">销售</li>
                            <li data-id="170000">传媒</li>
                            <li data-id="180000">金融</li>
                            <li data-id="230000">汽车</li>
                            <li data-id="190000">教育培训</li>
                            <li data-id="210000">医疗健康</li>
                            <li data-id="250000">采购/贸易</li>
                            <li data-id="240000">供应链/物流</li>
                            <li data-id="220000">房地产/建筑</li>
                            <li data-id="260000">咨询/翻译/法律</li>
                            <li data-id="270000">实习生/管培生</li>
                            <li data-id="280000">旅游</li>
                            <li data-id="290000">酒店/餐饮/零售</li>
                            <li data-id="300000">生产制造</li>
                            <li data-id="200000">其他</li>
                        </ul>
                        <ul class="tree-2">
                            <li class="blank">选择职类</li>
                        </ul>
                        <ul class="tree-3"></ul>
                    </div>
                </div>
            </div>
        </form>
    </div>

</div>
/










            <!--主推文案-->
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
<script class="refreshjs" src="/static/home/js/main.js" ></script>
<script src="/static/home/js/sub.js"></script>


</body>
</html>