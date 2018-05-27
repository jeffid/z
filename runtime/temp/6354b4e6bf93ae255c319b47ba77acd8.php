<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:70:"D:\APP\wamp\www\XDL\zhipin\public/../application/home\view\resume.html";i:1524500777;s:65:"D:\APP\wamp\www\XDL\zhipin\application\home\view\public\base.html";i:1524500054;}*/ ?>
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
    

        
<div id="main" class="inner">
<div class="job-box">
    <div class="resume">
        <div class="resume-box">
            <div class="resume-item" id="resume-userinfo">
                <div class="item-primary">
                    <form upload-base64-url="/geek/upload/avatar64.json" upload="uploadURL=/user/upload/avatar/?c=uploadPortrit&amp;jsCallback=uploadOk" action="https://www.zhipin.com/geek/update/headImg.json" method="post">
                        <div class="profile_form zw_form figure">
                            <dl class="clearfix avatar_line">
                                <dd class="txt Rcheck avatar_box">
                                    <img src="./resume_files/45c2fe73c89ffd50cb77fd5188ff50b1cfcd208495d565ef66e7dff9f98764da_s.jpg" class="avatar">
                                    <div class="sel_avatar">
                                        <a ka="choose-avatar" data-title="头像设置" class="upload-layer"></a>
                                    </div>
                                    <input name="large" value="https://img.bosszhipin.com/beijin/mcs/useravatar/20180413/45c2fe73c89ffd50cb77fd5188ff50b1cfcd208495d565ef66e7dff9f98764da.jpg" type="hidden" class="kz_input required avatar_url" datatype="z" nullmsg="请上传头像！">
                                    <input name="tiny" value="https://img.bosszhipin.com/beijin/mcs/useravatar/20180413/45c2fe73c89ffd50cb77fd5188ff50b1cfcd208495d565ef66e7dff9f98764da_s.jpg" type="hidden" class="kz_input required avatar_url" datatype="z" nullmsg="请上传头像！">
                                </dd>
                            </dl>
                        </div>
                    </form>
                    <h2 class="name">邓华杰 <i class="fz-resume fz-male"></i><div class="op"><a data-url="/geek/user/info.json" href="javascript:;" ka="user-resume-edit-userinfo" class="link-edit"><i class="fz-resume fz-edit"></i>编辑</a></div></h2>
                    <div class="info-labels">
                        <p class="row-base"><span class="label-text"><i class="fz-resume fz-experience"></i>1年以内经验</span><em class="vline"></em><span class="label-text"><i class="fz-resume fz-degree"></i>大专学历</span> <em class="vline"></em><span class="label-text"><i class="fz-resume fz-status"></i>在职-暂不考虑</span></p>
                        <p class="row-contact"><span class="label-text"><i class="fz-resume fz-tel"></i>17665450001</span><em class="vline"></em><span class="label-text span-wechat"><i class="fz-resume fz-weixin"></i>1111</span><em class="vline"></em><span class="label-text span-email"><i class="fz-resume fz-mail"></i>aaa@qq.com</span></p>
                    </div>
                </div>
                <div class="item-form" style="display: block;"><form action="/geek/user/save.json" method="post" class="form-resume">
                    <h3 class="title">个人信息</h3>
                    <div class="form-row">
                        <dl>
                            <dt>姓名 <span class="gray"></span></dt>
                            <dd><input type="text" class="ipt required" placeholder="输入您的姓名" data-range="1,12" data-blank="请输入姓名" data-format="请填写真实姓名" maxlength="24" ka="et-uname" name="name" value="邓华杰"></dd>
                        </dl>
                        <dl>
                            <dt>当前的求职状态</dt>
                            <dd>
                                <span class="dropdown-select"><i class="icon-select-arrow"></i><input value="在职-暂不考虑" type="text" class="ipt" placeholder="请选择" readonly=""><input type="hidden" class="required" data-blank="请选择求职状态" name="applyStatus" value="1"></span>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li data-val="0">离职-随时到岗</li>
                                        <li data-val="1" class="selected">在职-暂不考虑</li>
                                        <li data-val="2">在职-考虑机会</li>
                                        <li data-val="3">在职-月内到岗</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row">
                        <dl>
                            <dt>性别</dt>
                            <dd><div class="radio-list"><label class="radio-square radio-checked" data-val="1">男</label><label class="radio-square " data-val="0">女</label><input type="hidden" name="gender" class="required" data-blank="请选择性别" value="1"></div></dd>
                        </dl>
                        <dl>
                            <dt>开始工作时间</dt>
                            <dd>
                <span class="dropdown-select">
                <i class="icon-select-arrow"></i>
                <input type="text" ka="geek-birthday" class="ipt ipt-workyear required" placeholder="参加工作时间" readonly="true" autocomplete="off" data-min="1990" data-max="2018" data-blank="请选择参加工作时间" data-fill="startWorkYearCode" name="startWorkYear" value="2017-10">
                <input type="hidden" name="startWorkYearCode" value="2017-10">
                </span>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row">
                        <dl>
                            <dt>生日</dt>
                            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" class="ipt ipt-datetimepicker required" data-type="y-m" data-format="yyyy-mm" placeholder="选择年月" readonly="" autocomplete="off" data-latest="2001" data-blank="请选择生日" name="birthday" value="1993-11" disabled="">
                </span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>微信号</dt>
                            <dd><input name="weixin" value="1111" type="text" class="ipt" placeholder="输入微信号" data-range="0,50" data-blank="请填写微信号" data-format="请填写真实的微信号" maxlength="50"></dd>
                        </dl>
                    </div>
                    <div class="form-row">
                        <dl>
                            <dt>邮箱</dt>
                            <dd><input name="email" ka="email_edit" value="aaa@qq.com" type="text" class="ipt" placeholder="请输入您的邮箱" data-range="0,40" data-blank="请填写邮箱" data-format="请填写真实的邮箱" maxlength="50"></dd>
                        </dl>
                    </div>
                    <div class="form-btns"><button class="btn btn-back" type="button" ka="user-resume-user-info-cancel">取消</button><button class="btn vali_btn" type="submit" ka="user-resume-user-info-ok">完成</button></div>
                </form></div>
            </div>
            
            
            <div class="resume-item" id="resume-summary">
                <div class="item-primary">
                    <h3 class="title">我的优势<div class="op"><a data-url="/geek/getUserDescForm.json" href="javascript:;" ka="user-resume-edit-desc" class="link-edit"><i class="fz-resume fz-edit"></i>编辑</a></div></h3>
                    <div class="text">
                        <p>努力444</p>
                    </div>
                </div>
                <!--+++++++++++++++++++++++++++++++++++++++++++++++++++-->
                <div class="item-form" style="display: block;">
                    <form action="/geek/saveUserDesc.json" method="post" class="form-resume">
                    <h3 class="title">我的优势</h3>
                    <div class="form-row row-area item-form-through">
                        <dl>
                            <dd><textarea placeholder="例如：两年UI设计经验，熟悉IOS和Android的界面设计规范，对产品本色有独特见解，有一定的手绘基础" class="ipt ipt-area required" data-range="1,140" data-blank="不能为空" data-format="请输入 140 个以内的文字" maxlength="280" name="advantage">努力444</textarea><span class="count-num"><em>4</em>/140</span></dd>
                        </dl>
                    </div>
                    <div class="form-btns"><button class="btn btn-back" type="button" ka="user-resume-desc-edit-cancel">取消</button><button class="btn" type="submit" ka="user-resume-desc-edit-ok">完成</button></div>
                </form></div>
            </div>
            <div class="resume-item" id="resume-history">
                <div class="item-primary">
                    <h3 class="title">
                        工作经历
                        <div class="op">
                            <a data-url="/geek/getWorkExperienceForm.json" href="javascript:;" ka="user-resume-add-workexp" class="link-add"><i class="fz-resume fz-add"></i>添加</a>
                        </div>
                    </h3>
                    <div class="history-project">
                        
                        
                        <div class="history-item" id="row-f5446a23250fac101nB92NW8F1c~">
                            <div class="op">
                                <a href="javascript:;" data-url="/geek/getWorkExperienceForm.json?id=f5446a23250fac101nB92NW8F1c~" ka="user-resume-edit-workexp1" class="link-edit"><i class="fz-resume fz-edit"></i>编辑</a>
                                
                                <em class="vline"></em>
                                <a href="javascript:;" data-url="/geek/delWorkExperience.json?id=f5446a23250fac101nB92NW8F1c~" ka="user-resume-del-workexp1" class="link-delete"><i class="fz-resume fz-delete"></i>删除</a>
                            
                            </div>
                            <span class="period">2017.10-至今</span>
                            <h4 class="name">杰杰斐奥科技</h4>
                            <div class="text">
                                <h4>PHP</h4>
                                
                                <div class="text">
                                    <h4>工作内容</h4>
                                    <p>基础代码</p>
                                </div>
                            
                            
                            </div>
                            
                            <div class="text">
                                <h4>
                                    
                                    <span>PHP</span>
                                    
                                    <span>HTML/CSS</span>
                                    
                                    <span>JS</span>
                                
                                </h4>
                            </div>
                        
                        </div>
                        
                        <div class="history-item" id="row-5a1382f3195815d81nF60t20FVc~">
                            <div class="op">
                                <a href="javascript:;" data-url="/geek/getWorkExperienceForm.json?id=5a1382f3195815d81nF60t20FVc~" ka="user-resume-edit-workexp2" class="link-edit"><i class="fz-resume fz-edit"></i>编辑</a>
                                
                                <em class="vline"></em>
                                <a href="javascript:;" data-url="/geek/delWorkExperience.json?id=5a1382f3195815d81nF60t20FVc~" ka="user-resume-del-workexp2" class="link-delete"><i class="fz-resume fz-delete"></i>删除</a>
                            
                            </div>
                            <span class="period">2009.02-2010.04</span>
                            <h4 class="name">天下科技</h4>
                            <div class="text">
                                <h4>123</h4>
                                
                                <div class="text">
                                    <h4>工作内容</h4>
                                    <p>工作内容</p>
                                </div>
                                
                                
                                <div class="text">
                                    <h4>工作业绩</h4>
                                    <p>工作业绩</p>
                                </div>
                            
                            </div>
                            
                            <div class="text">
                                <h4>
                                    
                                    <span>Hadoop</span>
                                    
                                    <span>HTML/CSS</span>
                                
                                </h4>
                            </div>
                        
                        </div>
                    
                    
                    </div>
                </div>
                <div class="item-form" style="display:block;"><form action="/geek/saveWorkExperience.json" method="post" class="form-resume">
                    <input type="hidden" name="id" value="f5446a23250fac101nB92NW8F1c~">
                    <h3 class="title">编辑工作经历</h3>
                    <div class="form-row">
                        <dl>
                            <dt>公司名称</dt>
                            <dd>
                                <input type="text" ka="work-company" name="company" value="杰杰斐奥科技" class="ipt required" placeholder="例如：北京百度科技有限公司" data-range="1,46" data-blank="必填" data-format="请输入不超过 46 个中文字符" maxlength="92">
                            </dd>
                        </dl>
                        <dl>
                            <dt>职位类型</dt>
                            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" ka="work-position" value="PHP" class="ipt" placeholder="选择职位类型" readonly="">
                    <input type="hidden" value="100103" level2="100100" name="position" class="required" data-blank="必选">
                </span>
                                <div class="dropdown-menu">
                                    <script>
                                        var jobData = [{"id":100000,"name":"技术","children":[{"id":100100,"name":"后端开发","children":[{"id":100101,"name":"Java","children":[],"firstChar":[],"rank":0},{"id":100102,"name":"C++","children":[],"firstChar":[],"rank":0},{"id":100103,"name":"PHP","children":[],"firstChar":[],"rank":0},{"id":100104,"name":"数据挖掘","children":[],"firstChar":[],"rank":0},{"id":100105,"name":"C","children":[],"firstChar":[],"rank":0},{"id":100106,"name":"C#","children":[],"firstChar":[],"rank":0},{"id":100107,"name":".NET","children":[],"firstChar":[],"rank":0},{"id":100108,"name":"Hadoop","children":[],"firstChar":[],"rank":0},{"id":100109,"name":"Python","children":[],"firstChar":[],"rank":0},{"id":100110,"name":"Delphi","children":[],"firstChar":[],"rank":0},{"id":100111,"name":"VB","children":[],"firstChar":[],"rank":0},{"id":100112,"name":"Perl","children":[],"firstChar":[],"rank":0},{"id":100113,"name":"Ruby","children":[],"firstChar":[],"rank":0},{"id":100114,"name":"Node.js","children":[],"firstChar":[],"rank":0},{"id":100115,"name":"搜索算法","children":[],"firstChar":[],"rank":0},{"id":100116,"name":"Golang","children":[],"firstChar":[],"rank":0},{"id":100117,"name":"自然语言处理","children":[],"firstChar":[],"rank":0},{"id":100118,"name":"推荐算法","children":[],"firstChar":[],"rank":0},{"id":100119,"name":"Erlang","children":[],"firstChar":[],"rank":0},{"id":100120,"name":"算法工程师","children":[],"firstChar":[],"rank":0},{"id":100121,"name":"语音/视频/图形开发","children":[],"firstChar":[],"rank":0},{"id":100122,"name":"数据采集","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":100200,"name":"移动开发","children":[{"id":100201,"name":"HTML5","children":[],"firstChar":[],"rank":0},{"id":100202,"name":"Android","children":[],"firstChar":[],"rank":0},{"id":100203,"name":"iOS","children":[],"firstChar":[],"rank":0},{"id":100204,"name":"WP","children":[],"firstChar":[],"rank":0},{"id":100205,"name":"web前端","children":[],"firstChar":[],"rank":0},{"id":100206,"name":"Flash","children":[],"firstChar":[],"rank":0},{"id":100208,"name":"JavaScript","children":[],"firstChar":[],"rank":0},{"id":100209,"name":"U3D","children":[],"firstChar":[],"rank":0},{"id":100210,"name":"COCOS2DX","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":100300,"name":"测试","children":[{"id":100301,"name":"测试工程师","children":[],"firstChar":[],"rank":0},{"id":100302,"name":"自动化测试","children":[],"firstChar":[],"rank":0},{"id":100303,"name":"功能测试","children":[],"firstChar":[],"rank":0},{"id":100304,"name":"性能测试","children":[],"firstChar":[],"rank":0},{"id":100305,"name":"测试开发","children":[],"firstChar":[],"rank":0},{"id":100306,"name":"移动端测试","children":[],"firstChar":[],"rank":0},{"id":100307,"name":"游戏测试","children":[],"firstChar":[],"rank":0},{"id":100308,"name":"硬件测试","children":[],"firstChar":[],"rank":0},{"id":100309,"name":"软件测试","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":100400,"name":"运维/技术支持","children":[{"id":100401,"name":"运维工程师","children":[],"firstChar":[],"rank":0},{"id":100402,"name":"运维开发工程师","children":[],"firstChar":[],"rank":0},{"id":100403,"name":"网络工程师","children":[],"firstChar":[],"rank":0},{"id":100404,"name":"系统工程师","children":[],"firstChar":[],"rank":0},{"id":100405,"name":"IT技术支持","children":[],"firstChar":[],"rank":0},{"id":100406,"name":"系统管理员","children":[],"firstChar":[],"rank":0},{"id":100407,"name":"网络安全","children":[],"firstChar":[],"rank":0},{"id":100408,"name":"系统安全","children":[],"firstChar":[],"rank":0},{"id":100409,"name":"DBA","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":100500,"name":"数据","children":[{"id":100506,"name":"ETL工程师","children":[],"firstChar":[],"rank":0},{"id":100507,"name":"数据仓库","children":[],"firstChar":[],"rank":0},{"id":100508,"name":"数据开发","children":[],"firstChar":[],"rank":0},{"id":100509,"name":"数据挖掘","children":[],"firstChar":[],"rank":0},{"id":100511,"name":"数据分析师","children":[],"firstChar":[],"rank":0},{"id":100512,"name":"数据架构师","children":[],"firstChar":[],"rank":0},{"id":100513,"name":"算法研究员","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":100600,"name":"项目管理","children":[{"id":100601,"name":"项目经理","children":[],"firstChar":[],"rank":0},{"id":100602,"name":"项目主管","children":[],"firstChar":[],"rank":0},{"id":100603,"name":"项目助理","children":[],"firstChar":[],"rank":0},{"id":100604,"name":"项目专员","children":[],"firstChar":[],"rank":0},{"id":100605,"name":"实施顾问","children":[],"firstChar":[],"rank":0},{"id":100606,"name":"实施工程师","children":[],"firstChar":[],"rank":0},{"id":100607,"name":"需求分析工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":100800,"name":"硬件开发","children":[{"id":100801,"name":"硬件","children":[],"firstChar":[],"rank":0},{"id":100802,"name":"嵌入式","children":[],"firstChar":[],"rank":0},{"id":100803,"name":"自动化","children":[],"firstChar":[],"rank":0},{"id":100804,"name":"单片机","children":[],"firstChar":[],"rank":0},{"id":100805,"name":"电路设计","children":[],"firstChar":[],"rank":0},{"id":100806,"name":"驱动开发","children":[],"firstChar":[],"rank":0},{"id":100807,"name":"系统集成","children":[],"firstChar":[],"rank":0},{"id":100808,"name":"FPGA开发","children":[],"firstChar":[],"rank":0},{"id":100809,"name":"DSP开发","children":[],"firstChar":[],"rank":0},{"id":100810,"name":"ARM开发","children":[],"firstChar":[],"rank":0},{"id":100811,"name":"PCB工艺","children":[],"firstChar":[],"rank":0},{"id":100812,"name":"模具设计","children":[],"firstChar":[],"rank":0},{"id":100813,"name":"热传导","children":[],"firstChar":[],"rank":0},{"id":100814,"name":"材料工程师","children":[],"firstChar":[],"rank":0},{"id":100815,"name":"精益工程师","children":[],"firstChar":[],"rank":0},{"id":100816,"name":"射频工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":100900,"name":"前端开发","children":[{"id":100901,"name":"web前端","children":[],"firstChar":[],"rank":0},{"id":100902,"name":"Javascript","children":[],"firstChar":[],"rank":0},{"id":100903,"name":"Flash","children":[],"firstChar":[],"rank":0},{"id":100904,"name":"HTML5","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":101000,"name":"通信","children":[{"id":101001,"name":"通信技术工程师","children":[],"firstChar":[],"rank":0},{"id":101002,"name":"通信研发工程师","children":[],"firstChar":[],"rank":0},{"id":101003,"name":"数据通信工程师","children":[],"firstChar":[],"rank":0},{"id":101004,"name":"移动通信工程师","children":[],"firstChar":[],"rank":0},{"id":101005,"name":"电信网络工程师","children":[],"firstChar":[],"rank":0},{"id":101006,"name":"电信交换工程师","children":[],"firstChar":[],"rank":0},{"id":101007,"name":"有线传输工程师","children":[],"firstChar":[],"rank":0},{"id":101008,"name":"无线射频工程师","children":[],"firstChar":[],"rank":0},{"id":101009,"name":"通信电源工程师","children":[],"firstChar":[],"rank":0},{"id":101010,"name":"通信标准化工程师","children":[],"firstChar":[],"rank":0},{"id":101011,"name":"通信项目专员","children":[],"firstChar":[],"rank":0},{"id":101012,"name":"通信项目经理","children":[],"firstChar":[],"rank":0},{"id":101013,"name":"核心网工程师","children":[],"firstChar":[],"rank":0},{"id":101014,"name":"通信测试工程师","children":[],"firstChar":[],"rank":0},{"id":101015,"name":"通信设备工程师","children":[],"firstChar":[],"rank":0},{"id":101016,"name":"光通信工程师","children":[],"firstChar":[],"rank":0},{"id":101017,"name":"光传输工程师","children":[],"firstChar":[],"rank":0},{"id":101018,"name":"光网络工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":101400,"name":"电子/半导体","children":[{"id":101401,"name":"电子工程师","children":[],"firstChar":[],"rank":0},{"id":101402,"name":"电气工程师","children":[],"firstChar":[],"rank":0},{"id":101403,"name":"FAE","children":[],"firstChar":[],"rank":0},{"id":101404,"name":"电气设计工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":100700,"name":"高端技术职位","children":[{"id":100701,"name":"技术经理","children":[],"firstChar":[],"rank":0},{"id":100702,"name":"技术总监","children":[],"firstChar":[],"rank":0},{"id":100703,"name":"测试经理","children":[],"firstChar":[],"rank":0},{"id":100704,"name":"架构师","children":[],"firstChar":[],"rank":0},{"id":100705,"name":"CTO","children":[],"firstChar":[],"rank":0},{"id":100706,"name":"运维总监","children":[],"firstChar":[],"rank":0},{"id":100707,"name":"技术合伙人","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":101300,"name":"人工智能","children":[{"id":101301,"name":"机器学习","children":[],"firstChar":[],"rank":0},{"id":101302,"name":"深度学习","children":[],"firstChar":[],"rank":0},{"id":101303,"name":"图像算法","children":[],"firstChar":[],"rank":0},{"id":101304,"name":"图像处理","children":[],"firstChar":[],"rank":0},{"id":101305,"name":"语音识别","children":[],"firstChar":[],"rank":0},{"id":101306,"name":"图像识别","children":[],"firstChar":[],"rank":0},{"id":101307,"name":"算法研究员","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":101200,"name":"软件销售支持","children":[{"id":101201,"name":"售前工程师","children":[],"firstChar":[],"rank":0},{"id":101202,"name":"售后工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":101100,"name":"其他技术职位","children":[{"id":101101,"name":"其他技术职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":110000,"name":"产品","children":[{"id":110100,"name":"产品经理","children":[{"id":110101,"name":"产品经理","children":[],"firstChar":[],"rank":0},{"id":110102,"name":"网页产品经理","children":[],"firstChar":[],"rank":0},{"id":110103,"name":"移动产品经理","children":[],"firstChar":[],"rank":0},{"id":110104,"name":"产品助理","children":[],"firstChar":[],"rank":0},{"id":110105,"name":"数据产品经理","children":[],"firstChar":[],"rank":0},{"id":110106,"name":"电商产品经理","children":[],"firstChar":[],"rank":0},{"id":110107,"name":"游戏策划","children":[],"firstChar":[],"rank":0},{"id":110108,"name":"产品专员","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":110300,"name":"高端产品职位","children":[{"id":110302,"name":"产品总监","children":[],"firstChar":[],"rank":0},{"id":110303,"name":"游戏制作人","children":[],"firstChar":[],"rank":0},{"id":110304,"name":"产品VP","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":110400,"name":"其他产品职位","children":[{"id":110401,"name":"其他产品职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":120000,"name":"设计","children":[{"id":120100,"name":"视觉设计","children":[{"id":120101,"name":"视觉设计师","children":[],"firstChar":[],"rank":0},{"id":120102,"name":"网页设计师","children":[],"firstChar":[],"rank":0},{"id":120103,"name":"Flash设计师","children":[],"firstChar":[],"rank":0},{"id":120104,"name":"APP设计师","children":[],"firstChar":[],"rank":0},{"id":120105,"name":"UI设计师","children":[],"firstChar":[],"rank":0},{"id":120106,"name":"平面设计师","children":[],"firstChar":[],"rank":0},{"id":120107,"name":"美术设计师（2D/3D）","children":[],"firstChar":[],"rank":0},{"id":120108,"name":"广告设计师","children":[],"firstChar":[],"rank":0},{"id":120109,"name":"多媒体设计师","children":[],"firstChar":[],"rank":0},{"id":120110,"name":"原画师","children":[],"firstChar":[],"rank":0},{"id":120111,"name":"游戏特效","children":[],"firstChar":[],"rank":0},{"id":120112,"name":"游戏界面设计师","children":[],"firstChar":[],"rank":0},{"id":120113,"name":"游戏场景","children":[],"firstChar":[],"rank":0},{"id":120114,"name":"游戏角色","children":[],"firstChar":[],"rank":0},{"id":120115,"name":"游戏动作","children":[],"firstChar":[],"rank":0},{"id":120116,"name":"三维/CAD/制图","children":[],"firstChar":[],"rank":0},{"id":120117,"name":"美工","children":[],"firstChar":[],"rank":0},{"id":120118,"name":"包装设计","children":[],"firstChar":[],"rank":0},{"id":120119,"name":"设计师助理","children":[],"firstChar":[],"rank":0},{"id":120120,"name":"动画设计师","children":[],"firstChar":[],"rank":0},{"id":120121,"name":"插画师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":120200,"name":"交互设计","children":[{"id":120201,"name":"交互设计师","children":[],"firstChar":[],"rank":0},{"id":120202,"name":"无线交互设计师","children":[],"firstChar":[],"rank":0},{"id":120203,"name":"网页交互设计师","children":[],"firstChar":[],"rank":0},{"id":120204,"name":"硬件交互设计师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":120300,"name":"用户研究","children":[{"id":120301,"name":"数据分析师","children":[],"firstChar":[],"rank":0},{"id":120302,"name":"用户研究员","children":[],"firstChar":[],"rank":0},{"id":120303,"name":"游戏数值策划","children":[],"firstChar":[],"rank":0},{"id":120304,"name":"UX设计师","children":[],"firstChar":[],"rank":0},{"id":120407,"name":"用户研究经理","children":[],"firstChar":[],"rank":0},{"id":120408,"name":"用户研究总监","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":120400,"name":"高端设计职位","children":[{"id":120401,"name":"设计经理/主管","children":[],"firstChar":[],"rank":0},{"id":120402,"name":"设计总监","children":[],"firstChar":[],"rank":0},{"id":120403,"name":"视觉设计经理","children":[],"firstChar":[],"rank":0},{"id":120404,"name":"视觉设计总监","children":[],"firstChar":[],"rank":0},{"id":120405,"name":"交互设计经理/主管","children":[],"firstChar":[],"rank":0},{"id":120406,"name":"交互设计总监","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":120600,"name":"非视觉设计","children":[{"id":120601,"name":"服装设计","children":[],"firstChar":[],"rank":0},{"id":120602,"name":"工业设计","children":[],"firstChar":[],"rank":0},{"id":120603,"name":"橱柜设计","children":[],"firstChar":[],"rank":0},{"id":120604,"name":"家具设计","children":[],"firstChar":[],"rank":0},{"id":120605,"name":"家居设计","children":[],"firstChar":[],"rank":0},{"id":120606,"name":"珠宝设计","children":[],"firstChar":[],"rank":0},{"id":120607,"name":"室内设计","children":[],"firstChar":[],"rank":0},{"id":120608,"name":"陈列设计","children":[],"firstChar":[],"rank":0},{"id":120610,"name":"景观设计","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":120500,"name":"其他设计职位","children":[{"id":120501,"name":"其他设计职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":130000,"name":"运营","children":[{"id":130100,"name":"运营","children":[{"id":130101,"name":"用户运营","children":[],"firstChar":[],"rank":0},{"id":130102,"name":"产品运营","children":[],"firstChar":[],"rank":0},{"id":130103,"name":"数据运营","children":[],"firstChar":[],"rank":0},{"id":130104,"name":"内容运营","children":[],"firstChar":[],"rank":0},{"id":130105,"name":"活动运营","children":[],"firstChar":[],"rank":0},{"id":130106,"name":"商家运营","children":[],"firstChar":[],"rank":0},{"id":130107,"name":"品类运营","children":[],"firstChar":[],"rank":0},{"id":130108,"name":"游戏运营","children":[],"firstChar":[],"rank":0},{"id":130109,"name":"网络推广","children":[],"firstChar":[],"rank":0},{"id":130110,"name":"网站运营","children":[],"firstChar":[],"rank":0},{"id":130111,"name":"新媒体运营","children":[],"firstChar":[],"rank":0},{"id":130112,"name":"社区运营","children":[],"firstChar":[],"rank":0},{"id":130113,"name":"微信运营","children":[],"firstChar":[],"rank":0},{"id":130114,"name":"微博运营","children":[],"firstChar":[],"rank":0},{"id":130115,"name":"策略运营","children":[],"firstChar":[],"rank":0},{"id":130116,"name":"线下拓展运营","children":[],"firstChar":[],"rank":0},{"id":130117,"name":"电商运营","children":[],"firstChar":[],"rank":0},{"id":130118,"name":"运营助理/专员","children":[],"firstChar":[],"rank":0},{"id":130120,"name":"内容审核","children":[],"firstChar":[],"rank":0},{"id":130119,"name":"销售运营","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":130200,"name":"编辑","children":[{"id":130201,"name":"副主编","children":[],"firstChar":[],"rank":0},{"id":130202,"name":"内容编辑","children":[],"firstChar":[],"rank":0},{"id":130203,"name":"文案策划","children":[],"firstChar":[],"rank":0},{"id":130204,"name":"网站编辑","children":[],"firstChar":[],"rank":0},{"id":130205,"name":"记者","children":[],"firstChar":[],"rank":0},{"id":130206,"name":"采编","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":130300,"name":"客服","children":[{"id":130301,"name":"售前咨询","children":[],"firstChar":[],"rank":0},{"id":130302,"name":"售后咨询","children":[],"firstChar":[],"rank":0},{"id":130303,"name":"网络客服","children":[],"firstChar":[],"rank":0},{"id":130304,"name":"客服经理","children":[],"firstChar":[],"rank":0},{"id":130305,"name":"客服专员/助理","children":[],"firstChar":[],"rank":0},{"id":130306,"name":"客服主管","children":[],"firstChar":[],"rank":0},{"id":130307,"name":"客服总监","children":[],"firstChar":[],"rank":0},{"id":130308,"name":"电话客服","children":[],"firstChar":[],"rank":0},{"id":130309,"name":"咨询热线/呼叫中心客服","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":130400,"name":"高端运营职位","children":[{"id":130401,"name":"主编","children":[],"firstChar":[],"rank":0},{"id":130402,"name":"运营总监","children":[],"firstChar":[],"rank":0},{"id":130403,"name":"COO","children":[],"firstChar":[],"rank":0},{"id":130404,"name":"客服总监","children":[],"firstChar":[],"rank":0},{"id":130405,"name":"运营经理/主管","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":130500,"name":"其他运营职位","children":[{"id":130501,"name":"其他运营职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":140000,"name":"市场","children":[{"id":140100,"name":"市场/营销","children":[{"id":140101,"name":"市场营销","children":[],"firstChar":[],"rank":0},{"id":140102,"name":"市场策划","children":[],"firstChar":[],"rank":0},{"id":140103,"name":"市场顾问","children":[],"firstChar":[],"rank":0},{"id":140104,"name":"市场推广","children":[],"firstChar":[],"rank":0},{"id":140105,"name":"SEO","children":[],"firstChar":[],"rank":0},{"id":140106,"name":"SEM","children":[],"firstChar":[],"rank":0},{"id":140107,"name":"商务渠道","children":[],"firstChar":[],"rank":0},{"id":140108,"name":"商业数据分析","children":[],"firstChar":[],"rank":0},{"id":140109,"name":"活动策划","children":[],"firstChar":[],"rank":0},{"id":140110,"name":"网络营销","children":[],"firstChar":[],"rank":0},{"id":140111,"name":"海外市场","children":[],"firstChar":[],"rank":0},{"id":140112,"name":"政府关系","children":[],"firstChar":[],"rank":0},{"id":140113,"name":"APP推广","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":140200,"name":"公关媒介","children":[{"id":140201,"name":"媒介经理","children":[],"firstChar":[],"rank":0},{"id":140202,"name":"广告协调","children":[],"firstChar":[],"rank":0},{"id":140203,"name":"品牌公关","children":[],"firstChar":[],"rank":0},{"id":140204,"name":"媒介专员","children":[],"firstChar":[],"rank":0},{"id":140205,"name":"活动策划执行","children":[],"firstChar":[],"rank":0},{"id":140206,"name":"媒介策划","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":140500,"name":"会务会展","children":[{"id":140501,"name":"会议活动销售","children":[],"firstChar":[],"rank":0},{"id":140502,"name":"会议活动策划","children":[],"firstChar":[],"rank":0},{"id":140503,"name":"会议活动执行","children":[],"firstChar":[],"rank":0},{"id":140504,"name":"会展活动销售","children":[],"firstChar":[],"rank":0},{"id":140505,"name":"会展活动策划","children":[],"firstChar":[],"rank":0},{"id":140506,"name":"会展活动执行","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":140600,"name":"广告","children":[{"id":140601,"name":"广告创意","children":[],"firstChar":[],"rank":0},{"id":140602,"name":"美术指导","children":[],"firstChar":[],"rank":0},{"id":140603,"name":"广告设计师","children":[],"firstChar":[],"rank":0},{"id":140604,"name":"策划经理","children":[],"firstChar":[],"rank":0},{"id":140605,"name":"文案","children":[],"firstChar":[],"rank":0},{"id":140607,"name":"广告制作","children":[],"firstChar":[],"rank":0},{"id":140608,"name":"媒介投放","children":[],"firstChar":[],"rank":0},{"id":140609,"name":"媒介合作","children":[],"firstChar":[],"rank":0},{"id":140610,"name":"媒介顾问","children":[],"firstChar":[],"rank":0},{"id":140611,"name":"广告审核","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":140400,"name":"高端市场职位","children":[{"id":140401,"name":"市场总监","children":[],"firstChar":[],"rank":0},{"id":140404,"name":"CMO","children":[],"firstChar":[],"rank":0},{"id":140405,"name":"公关总监","children":[],"firstChar":[],"rank":0},{"id":140406,"name":"媒介总监","children":[],"firstChar":[],"rank":0},{"id":140407,"name":"创意总监","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":140700,"name":"其他市场职位","children":[{"id":140701,"name":"其他市场职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":150000,"name":"职能/高级管理","children":[{"id":150100,"name":"人力资源","children":[{"id":150101,"name":"人力资源主管","children":[],"firstChar":[],"rank":0},{"id":150102,"name":"招聘","children":[],"firstChar":[],"rank":0},{"id":150103,"name":"HRBP","children":[],"firstChar":[],"rank":0},{"id":150104,"name":"人力资源专员/助理","children":[],"firstChar":[],"rank":0},{"id":150105,"name":"培训","children":[],"firstChar":[],"rank":0},{"id":150106,"name":"薪资福利","children":[],"firstChar":[],"rank":0},{"id":150107,"name":"绩效考核","children":[],"firstChar":[],"rank":0},{"id":150403,"name":"人力资源经理","children":[],"firstChar":[],"rank":0},{"id":150406,"name":"人力资源VP/CHO","children":[],"firstChar":[],"rank":0},{"id":150108,"name":"人力资源总监","children":[],"firstChar":[],"rank":0},{"id":150109,"name":"员工关系","children":[],"firstChar":[],"rank":0},{"id":150110,"name":"组织发展","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":150200,"name":"行政","children":[{"id":150201,"name":"行政专员/助理","children":[],"firstChar":[],"rank":0},{"id":150202,"name":"前台","children":[],"firstChar":[],"rank":0},{"id":150204,"name":"行政主管","children":[],"firstChar":[],"rank":0},{"id":150205,"name":"经理助理","children":[],"firstChar":[],"rank":0},{"id":150207,"name":"后勤","children":[],"firstChar":[],"rank":0},{"id":150208,"name":"商务司机","children":[],"firstChar":[],"rank":0},{"id":150401,"name":"行政经理","children":[],"firstChar":[],"rank":0},{"id":150209,"name":"行政总监","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":150300,"name":"财务","children":[{"id":150301,"name":"会计","children":[],"firstChar":[],"rank":0},{"id":150302,"name":"出纳","children":[],"firstChar":[],"rank":0},{"id":150303,"name":"财务顾问","children":[],"firstChar":[],"rank":0},{"id":150304,"name":"结算","children":[],"firstChar":[],"rank":0},{"id":150305,"name":"税务","children":[],"firstChar":[],"rank":0},{"id":150306,"name":"审计","children":[],"firstChar":[],"rank":0},{"id":150307,"name":"风控","children":[],"firstChar":[],"rank":0},{"id":150402,"name":"财务经理","children":[],"firstChar":[],"rank":0},{"id":150404,"name":"CFO","children":[],"firstChar":[],"rank":0},{"id":150308,"name":"财务总监","children":[],"firstChar":[],"rank":0},{"id":150309,"name":"财务主管","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":150500,"name":"法务","children":[{"id":150203,"name":"法务专员/助理","children":[],"firstChar":[],"rank":0},{"id":150502,"name":"律师","children":[],"firstChar":[],"rank":0},{"id":150503,"name":"专利","children":[],"firstChar":[],"rank":0},{"id":150504,"name":"法律顾问","children":[],"firstChar":[],"rank":0},{"id":150505,"name":"法务主管","children":[],"firstChar":[],"rank":0},{"id":150506,"name":"法务经理","children":[],"firstChar":[],"rank":0},{"id":150507,"name":"法务总监","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":150400,"name":"高级管理职位","children":[{"id":150407,"name":"CEO/总裁/总经理","children":[],"firstChar":[],"rank":0},{"id":150408,"name":"副总裁/副总经理","children":[],"firstChar":[],"rank":0},{"id":150409,"name":"事业部负责人","children":[],"firstChar":[],"rank":0},{"id":150410,"name":"区域/分公司/代表处负责人","children":[],"firstChar":[],"rank":0},{"id":150411,"name":"总裁/总经理/董事长助理","children":[],"firstChar":[],"rank":0},{"id":150412,"name":"合伙人","children":[],"firstChar":[],"rank":0},{"id":150413,"name":"创始人","children":[],"firstChar":[],"rank":0},{"id":150414,"name":"董事会秘书","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":150600,"name":"其他职能职位","children":[{"id":150601,"name":"其他职能职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":160000,"name":"销售","children":[{"id":140300,"name":"销售","children":[{"id":140301,"name":"销售专员","children":[],"firstChar":[],"rank":0},{"id":140302,"name":"销售经理","children":[],"firstChar":[],"rank":0},{"id":140303,"name":"客户代表","children":[],"firstChar":[],"rank":0},{"id":140304,"name":"大客户代表","children":[],"firstChar":[],"rank":0},{"id":140305,"name":"BD经理","children":[],"firstChar":[],"rank":0},{"id":140306,"name":"商务渠道","children":[],"firstChar":[],"rank":0},{"id":140307,"name":"渠道销售","children":[],"firstChar":[],"rank":0},{"id":140308,"name":"代理商销售","children":[],"firstChar":[],"rank":0},{"id":140309,"name":"销售助理","children":[],"firstChar":[],"rank":0},{"id":140310,"name":"电话销售","children":[],"firstChar":[],"rank":0},{"id":140311,"name":"销售顾问","children":[],"firstChar":[],"rank":0},{"id":140312,"name":"商品经理","children":[],"firstChar":[],"rank":0},{"id":140313,"name":"广告销售","children":[],"firstChar":[],"rank":0},{"id":140314,"name":"网络营销","children":[],"firstChar":[],"rank":0},{"id":140315,"name":"营销主管","children":[],"firstChar":[],"rank":0},{"id":140316,"name":"销售工程师","children":[],"firstChar":[],"rank":0},{"id":140317,"name":"客户经理","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":160100,"name":"销售管理","children":[{"id":140402,"name":"销售总监","children":[],"firstChar":[],"rank":0},{"id":140403,"name":"商务总监","children":[],"firstChar":[],"rank":0},{"id":160101,"name":"区域总监","children":[],"firstChar":[],"rank":0},{"id":160102,"name":"城市经理","children":[],"firstChar":[],"rank":0},{"id":160103,"name":"销售VP","children":[],"firstChar":[],"rank":0},{"id":160104,"name":"团队经理","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":160200,"name":"其他销售职位","children":[{"id":160201,"name":"其他销售职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":170000,"name":"传媒","children":[{"id":170100,"name":"采编/写作/出版","children":[{"id":170101,"name":"记者","children":[],"firstChar":[],"rank":0},{"id":170102,"name":"编辑","children":[],"firstChar":[],"rank":0},{"id":170103,"name":"采编","children":[],"firstChar":[],"rank":0},{"id":170104,"name":"撰稿人","children":[],"firstChar":[],"rank":0},{"id":170105,"name":"出版发行","children":[],"firstChar":[],"rank":0},{"id":170106,"name":"校对录入","children":[],"firstChar":[],"rank":0},{"id":170107,"name":"总编","children":[],"firstChar":[],"rank":0},{"id":170108,"name":"自媒体","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":170300,"name":"公关媒介","children":[{"id":170301,"name":"媒介经理","children":[],"firstChar":[],"rank":0},{"id":170302,"name":"媒介专员","children":[],"firstChar":[],"rank":0},{"id":170303,"name":"广告协调","children":[],"firstChar":[],"rank":0},{"id":170304,"name":"品牌公关","children":[],"firstChar":[],"rank":0},{"id":170305,"name":"活动策划执行","children":[],"firstChar":[],"rank":0},{"id":170306,"name":"媒介策划","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":170400,"name":"会务会展","children":[{"id":170401,"name":"会议活动销售","children":[],"firstChar":[],"rank":0},{"id":170402,"name":"会议活动策划","children":[],"firstChar":[],"rank":0},{"id":170403,"name":"会议活动执行","children":[],"firstChar":[],"rank":0},{"id":170404,"name":"会展活动销售","children":[],"firstChar":[],"rank":0},{"id":170405,"name":"会展活动策划","children":[],"firstChar":[],"rank":0},{"id":170406,"name":"会展活动执行","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":170200,"name":"广告","children":[{"id":170201,"name":"广告创意","children":[],"firstChar":[],"rank":0},{"id":170202,"name":"美术指导","children":[],"firstChar":[],"rank":0},{"id":170203,"name":"广告设计师","children":[],"firstChar":[],"rank":0},{"id":170204,"name":"策划经理","children":[],"firstChar":[],"rank":0},{"id":170205,"name":"文案","children":[],"firstChar":[],"rank":0},{"id":170207,"name":"广告制作","children":[],"firstChar":[],"rank":0},{"id":170208,"name":"媒介投放","children":[],"firstChar":[],"rank":0},{"id":170209,"name":"媒介合作","children":[],"firstChar":[],"rank":0},{"id":170210,"name":"媒介顾问","children":[],"firstChar":[],"rank":0},{"id":170211,"name":"广告审核","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":170600,"name":"影视媒体","children":[{"id":170617,"name":"助理","children":[],"firstChar":[],"rank":0},{"id":170618,"name":"统筹制片人","children":[],"firstChar":[],"rank":0},{"id":170619,"name":"执行制片人","children":[],"firstChar":[],"rank":0},{"id":170601,"name":"导演/编导","children":[],"firstChar":[],"rank":0},{"id":170602,"name":"摄影/影像师","children":[],"firstChar":[],"rank":0},{"id":170603,"name":"视频编辑","children":[],"firstChar":[],"rank":0},{"id":170604,"name":"音频编辑","children":[],"firstChar":[],"rank":0},{"id":170605,"name":"经纪人","children":[],"firstChar":[],"rank":0},{"id":170606,"name":"后期制作","children":[],"firstChar":[],"rank":0},{"id":170607,"name":"影视制作","children":[],"firstChar":[],"rank":0},{"id":170608,"name":"影视发行","children":[],"firstChar":[],"rank":0},{"id":170609,"name":"影视策划","children":[],"firstChar":[],"rank":0},{"id":170610,"name":"主持人/主播/DJ","children":[],"firstChar":[],"rank":0},{"id":170611,"name":"演员/配音/模特","children":[],"firstChar":[],"rank":0},{"id":170612,"name":"化妆/造型/服装","children":[],"firstChar":[],"rank":0},{"id":170613,"name":"放映管理","children":[],"firstChar":[],"rank":0},{"id":170614,"name":"录音/音效","children":[],"firstChar":[],"rank":0},{"id":170615,"name":"制片人","children":[],"firstChar":[],"rank":0},{"id":170616,"name":"编剧","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":170500,"name":"其他传媒职位","children":[{"id":170501,"name":"其他传媒职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":180000,"name":"金融","children":[{"id":180100,"name":"投融资","children":[{"id":180101,"name":"投资经理","children":[],"firstChar":[],"rank":0},{"id":180103,"name":"行业研究","children":[],"firstChar":[],"rank":0},{"id":180104,"name":"资产管理","children":[],"firstChar":[],"rank":0},{"id":180112,"name":"投资总监","children":[],"firstChar":[],"rank":0},{"id":180113,"name":"投资VP","children":[],"firstChar":[],"rank":0},{"id":180114,"name":"投资合伙人","children":[],"firstChar":[],"rank":0},{"id":180115,"name":"融资","children":[],"firstChar":[],"rank":0},{"id":180116,"name":"并购","children":[],"firstChar":[],"rank":0},{"id":180117,"name":"投后管理","children":[],"firstChar":[],"rank":0},{"id":180118,"name":"投资助理","children":[],"firstChar":[],"rank":0},{"id":180111,"name":"其他投融资职位","children":[],"firstChar":[],"rank":0},{"id":180119,"name":"投资顾问","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":180200,"name":"风控","children":[{"id":180201,"name":"风控","children":[],"firstChar":[],"rank":0},{"id":180202,"name":"律师","children":[],"firstChar":[],"rank":0},{"id":180203,"name":"资信评估","children":[],"firstChar":[],"rank":0},{"id":180204,"name":"合规稽查","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":180300,"name":"税务审计","children":[{"id":180301,"name":"审计","children":[],"firstChar":[],"rank":0},{"id":180302,"name":"法务","children":[],"firstChar":[],"rank":0},{"id":180303,"name":"会计","children":[],"firstChar":[],"rank":0},{"id":180304,"name":"清算","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":180400,"name":"银行","children":[{"id":180401,"name":"信用卡销售","children":[],"firstChar":[],"rank":0},{"id":180102,"name":"分析师","children":[],"firstChar":[],"rank":0},{"id":180402,"name":"柜员","children":[],"firstChar":[],"rank":0},{"id":180403,"name":"商务渠道","children":[],"firstChar":[],"rank":0},{"id":180404,"name":"大堂经理","children":[],"firstChar":[],"rank":0},{"id":180105,"name":"理财顾问","children":[],"firstChar":[],"rank":0},{"id":180405,"name":"客户经理","children":[],"firstChar":[],"rank":0},{"id":180406,"name":"信贷管理","children":[],"firstChar":[],"rank":0},{"id":180107,"name":"风控","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":180500,"name":"互联网金融","children":[{"id":180501,"name":"金融产品经理","children":[],"firstChar":[],"rank":0},{"id":180502,"name":"风控","children":[],"firstChar":[],"rank":0},{"id":180503,"name":"催收员","children":[],"firstChar":[],"rank":0},{"id":180504,"name":"分析师","children":[],"firstChar":[],"rank":0},{"id":180505,"name":"投资经理","children":[],"firstChar":[],"rank":0},{"id":180106,"name":"交易员","children":[],"firstChar":[],"rank":0},{"id":180506,"name":"理财顾问","children":[],"firstChar":[],"rank":0},{"id":180108,"name":"合规稽查","children":[],"firstChar":[],"rank":0},{"id":180109,"name":"审计","children":[],"firstChar":[],"rank":0},{"id":180110,"name":"清算","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":180700,"name":"保险","children":[{"id":180701,"name":"保险业务","children":[],"firstChar":[],"rank":0},{"id":180702,"name":"精算师","children":[],"firstChar":[],"rank":0},{"id":180703,"name":"保险理赔","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":180600,"name":"其他金融职位","children":[{"id":180601,"name":"其他金融职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":180800,"name":"证券","children":[{"id":180801,"name":"证券经纪人","children":[],"firstChar":[],"rank":0},{"id":180802,"name":"证券分析师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":230000,"name":"汽车","children":[{"id":230100,"name":"汽车设计与研发","children":[{"id":230101,"name":"汽车设计","children":[],"firstChar":[],"rank":0},{"id":230102,"name":"车身设计","children":[],"firstChar":[],"rank":0},{"id":230103,"name":"底盘设计","children":[],"firstChar":[],"rank":0},{"id":230104,"name":"机械设计","children":[],"firstChar":[],"rank":0},{"id":230105,"name":"动力系统设计","children":[],"firstChar":[],"rank":0},{"id":230106,"name":"电子工程设计","children":[],"firstChar":[],"rank":0},{"id":230107,"name":"零部件设计","children":[],"firstChar":[],"rank":0},{"id":230108,"name":"汽车工程项目管理","children":[],"firstChar":[],"rank":0},{"id":230110,"name":"内外饰设计工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":230400,"name":"汽车生产与制造","children":[{"id":230210,"name":"总装工程师","children":[],"firstChar":[],"rank":0},{"id":230211,"name":"焊接工程师","children":[],"firstChar":[],"rank":0},{"id":230212,"name":"冲压工程师","children":[],"firstChar":[],"rank":0},{"id":230109,"name":"质量工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":230200,"name":"汽车销售与服务","children":[{"id":230201,"name":"汽车销售","children":[],"firstChar":[],"rank":0},{"id":230202,"name":"汽车配件销售","children":[],"firstChar":[],"rank":0},{"id":230203,"name":"汽车售后服务","children":[],"firstChar":[],"rank":0},{"id":230204,"name":"汽车维修","children":[],"firstChar":[],"rank":0},{"id":230205,"name":"汽车美容","children":[],"firstChar":[],"rank":0},{"id":230206,"name":"汽车定损理赔","children":[],"firstChar":[],"rank":0},{"id":230207,"name":"二手车评估师","children":[],"firstChar":[],"rank":0},{"id":230208,"name":"4S店管理","children":[],"firstChar":[],"rank":0},{"id":230209,"name":"汽车改装工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":230300,"name":"其他汽车职位","children":[{"id":230301,"name":"其他汽车职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":190000,"name":"教育培训","children":[{"id":190100,"name":"教育产品研发","children":[{"id":190101,"name":"课程设计","children":[],"firstChar":[],"rank":0},{"id":190102,"name":"课程编辑","children":[],"firstChar":[],"rank":0},{"id":190103,"name":"教师","children":[],"firstChar":[],"rank":0},{"id":190104,"name":"培训研究","children":[],"firstChar":[],"rank":0},{"id":190105,"name":"培训师","children":[],"firstChar":[],"rank":0},{"id":190107,"name":"培训策划","children":[],"firstChar":[],"rank":0},{"id":190106,"name":"其他教育产品研发职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":190200,"name":"教育行政","children":[{"id":190201,"name":"校长","children":[],"firstChar":[],"rank":0},{"id":190202,"name":"教务管理","children":[],"firstChar":[],"rank":0},{"id":190203,"name":"教学管理","children":[],"firstChar":[],"rank":0},{"id":190204,"name":"班主任/辅导员","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":190300,"name":"教师","children":[{"id":190301,"name":"教师","children":[],"firstChar":[],"rank":0},{"id":190302,"name":"助教","children":[],"firstChar":[],"rank":0},{"id":190303,"name":"高中教师","children":[],"firstChar":[],"rank":0},{"id":190304,"name":"初中教师","children":[],"firstChar":[],"rank":0},{"id":190305,"name":"小学教师","children":[],"firstChar":[],"rank":0},{"id":190306,"name":"幼教","children":[],"firstChar":[],"rank":0},{"id":190307,"name":"理科教师","children":[],"firstChar":[],"rank":0},{"id":190308,"name":"文科教师","children":[],"firstChar":[],"rank":0},{"id":190309,"name":"外语教师","children":[],"firstChar":[],"rank":0},{"id":190310,"name":"音乐教师","children":[],"firstChar":[],"rank":0},{"id":190311,"name":"美术教师","children":[],"firstChar":[],"rank":0},{"id":190312,"name":"体育教师","children":[],"firstChar":[],"rank":0},{"id":190313,"name":"就业老师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":190400,"name":"IT培训","children":[{"id":190401,"name":"JAVA培训讲师","children":[],"firstChar":[],"rank":0},{"id":190402,"name":"Android培训讲师","children":[],"firstChar":[],"rank":0},{"id":190403,"name":"ios培训讲师","children":[],"firstChar":[],"rank":0},{"id":190404,"name":"PHP培训讲师","children":[],"firstChar":[],"rank":0},{"id":190405,"name":".NET培训讲师","children":[],"firstChar":[],"rank":0},{"id":190406,"name":"C++培训讲师","children":[],"firstChar":[],"rank":0},{"id":190407,"name":"Unity 3D培训讲师","children":[],"firstChar":[],"rank":0},{"id":190408,"name":"Web前端培训讲师","children":[],"firstChar":[],"rank":0},{"id":190409,"name":"软件测试培训讲师","children":[],"firstChar":[],"rank":0},{"id":190410,"name":"动漫培训讲师","children":[],"firstChar":[],"rank":0},{"id":190411,"name":"UI设计培训讲师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":190500,"name":"职业培训","children":[{"id":190501,"name":"财会培训讲师","children":[],"firstChar":[],"rank":0},{"id":190502,"name":"HR培训讲师","children":[],"firstChar":[],"rank":0},{"id":190503,"name":"培训师","children":[],"firstChar":[],"rank":0},{"id":190504,"name":"拓展培训","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":190600,"name":"招生","children":[{"id":190601,"name":"课程顾问","children":[],"firstChar":[],"rank":0},{"id":190602,"name":"招生顾问","children":[],"firstChar":[],"rank":0},{"id":190603,"name":"留学顾问","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":190700,"name":"教练","children":[{"id":190701,"name":"舞蹈教练","children":[],"firstChar":[],"rank":0},{"id":190702,"name":"瑜伽教练","children":[],"firstChar":[],"rank":0},{"id":190703,"name":"瘦身顾问","children":[],"firstChar":[],"rank":0},{"id":190704,"name":"游泳教练","children":[],"firstChar":[],"rank":0},{"id":190705,"name":"健身教练","children":[],"firstChar":[],"rank":0},{"id":190706,"name":"篮球/羽毛球教练","children":[],"firstChar":[],"rank":0},{"id":190707,"name":"跆拳道教练","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":190800,"name":"其他教育培训职位","children":[{"id":190801,"name":"其他教育培训职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":210000,"name":"医疗健康","children":[{"id":210800,"name":"药店","children":[{"id":210801,"name":"店长","children":[],"firstChar":[],"rank":0},{"id":210802,"name":"执业药师/驻店药师","children":[],"firstChar":[],"rank":0},{"id":210803,"name":"店员/营业员","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":210100,"name":"医疗技术","children":[{"id":210112,"name":"医生助理","children":[],"firstChar":[],"rank":0},{"id":210113,"name":"医学影像","children":[],"firstChar":[],"rank":0},{"id":210114,"name":"B超医生","children":[],"firstChar":[],"rank":0},{"id":210115,"name":"生物制药","children":[],"firstChar":[],"rank":0},{"id":210116,"name":"药品注册","children":[],"firstChar":[],"rank":0},{"id":210117,"name":"药品生产","children":[],"firstChar":[],"rank":0},{"id":210118,"name":"临床研究","children":[],"firstChar":[],"rank":0},{"id":210119,"name":"临床协调","children":[],"firstChar":[],"rank":0},{"id":210120,"name":"临床数据分析","children":[],"firstChar":[],"rank":0},{"id":210121,"name":"医疗器械注册","children":[],"firstChar":[],"rank":0},{"id":210122,"name":"医疗器械生产/质量管理","children":[],"firstChar":[],"rank":0},{"id":210101,"name":"医学编辑","children":[],"firstChar":[],"rank":0},{"id":210102,"name":"药学编辑","children":[],"firstChar":[],"rank":0},{"id":210103,"name":"医师","children":[],"firstChar":[],"rank":0},{"id":210104,"name":"药剂师","children":[],"firstChar":[],"rank":0},{"id":210105,"name":"医疗器械研究","children":[],"firstChar":[],"rank":0},{"id":210106,"name":"医学总监","children":[],"firstChar":[],"rank":0},{"id":210108,"name":"医药研发","children":[],"firstChar":[],"rank":0},{"id":210109,"name":"验光师","children":[],"firstChar":[],"rank":0},{"id":210110,"name":"放射科医师","children":[],"firstChar":[],"rank":0},{"id":210111,"name":"检验科医师","children":[],"firstChar":[],"rank":0},{"id":210107,"name":"其他医疗技术职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":210200,"name":"护士/护理","children":[{"id":210202,"name":"护士长","children":[],"firstChar":[],"rank":0},{"id":210201,"name":"护士/护理","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":210300,"name":"医师/医生","children":[{"id":210301,"name":"医师","children":[],"firstChar":[],"rank":0},{"id":210302,"name":"中医","children":[],"firstChar":[],"rank":0},{"id":210303,"name":"心理医生","children":[],"firstChar":[],"rank":0},{"id":210304,"name":"牙科医生","children":[],"firstChar":[],"rank":0},{"id":210305,"name":"康复治疗师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":210400,"name":"健康整形","children":[{"id":210401,"name":"营养师","children":[],"firstChar":[],"rank":0},{"id":210402,"name":"整形师","children":[],"firstChar":[],"rank":0},{"id":210403,"name":"理疗师","children":[],"firstChar":[],"rank":0},{"id":210404,"name":"针灸推拿","children":[],"firstChar":[],"rank":0},{"id":210405,"name":"美容师/顾问","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":210500,"name":"市场销售","children":[{"id":210506,"name":"医疗器械销售","children":[],"firstChar":[],"rank":0},{"id":210501,"name":"医学总监","children":[],"firstChar":[],"rank":0},{"id":210502,"name":"医药代表","children":[],"firstChar":[],"rank":0},{"id":210503,"name":"导医","children":[],"firstChar":[],"rank":0},{"id":210504,"name":"健康顾问","children":[],"firstChar":[],"rank":0},{"id":210505,"name":"医美咨询","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":210600,"name":"健身","children":[{"id":210601,"name":"瑜伽教练","children":[],"firstChar":[],"rank":0},{"id":210602,"name":"瘦身顾问","children":[],"firstChar":[],"rank":0},{"id":210603,"name":"游泳教练","children":[],"firstChar":[],"rank":0},{"id":210604,"name":"美体教练","children":[],"firstChar":[],"rank":0},{"id":210605,"name":"舞蹈教练","children":[],"firstChar":[],"rank":0},{"id":210606,"name":"健身教练","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":210700,"name":"其他医疗健康类职位","children":[{"id":210701,"name":"其他医疗健康类职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":250000,"name":"采购/贸易","children":[{"id":250100,"name":"采购","children":[{"id":250101,"name":"采购总监","children":[],"firstChar":[],"rank":0},{"id":250102,"name":"采购经理","children":[],"firstChar":[],"rank":0},{"id":250103,"name":"采购专员","children":[],"firstChar":[],"rank":0},{"id":250104,"name":"买手","children":[],"firstChar":[],"rank":0},{"id":250105,"name":"采购工程师","children":[],"firstChar":[],"rank":0},{"id":250106,"name":"采购主管","children":[],"firstChar":[],"rank":0},{"id":250107,"name":"采购助理","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":250200,"name":"进出口贸易","children":[{"id":250201,"name":"外贸经理","children":[],"firstChar":[],"rank":0},{"id":250202,"name":"外贸专员","children":[],"firstChar":[],"rank":0},{"id":250203,"name":"外贸业务员","children":[],"firstChar":[],"rank":0},{"id":250204,"name":"贸易跟单","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":250300,"name":"其他采购/贸易职位","children":[{"id":250301,"name":"其他采购/贸易类职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":240000,"name":"供应链/物流","children":[{"id":240100,"name":"物流","children":[{"id":240101,"name":"供应链专员","children":[],"firstChar":[],"rank":0},{"id":240102,"name":"供应链经理","children":[],"firstChar":[],"rank":0},{"id":240103,"name":"物流专员","children":[],"firstChar":[],"rank":0},{"id":240104,"name":"物流经理","children":[],"firstChar":[],"rank":0},{"id":240105,"name":"物流运营","children":[],"firstChar":[],"rank":0},{"id":240106,"name":"物流跟单","children":[],"firstChar":[],"rank":0},{"id":240107,"name":"贸易跟单","children":[],"firstChar":[],"rank":0},{"id":240108,"name":"物仓调度","children":[],"firstChar":[],"rank":0},{"id":240109,"name":"物仓项目","children":[],"firstChar":[],"rank":0},{"id":240110,"name":"运输经理/主管","children":[],"firstChar":[],"rank":0},{"id":240111,"name":"货运代理专员","children":[],"firstChar":[],"rank":0},{"id":240112,"name":"货运代理经理","children":[],"firstChar":[],"rank":0},{"id":240113,"name":"水/空/陆运操作","children":[],"firstChar":[],"rank":0},{"id":240114,"name":"报关员","children":[],"firstChar":[],"rank":0},{"id":240115,"name":"报检员","children":[],"firstChar":[],"rank":0},{"id":240116,"name":"核销员","children":[],"firstChar":[],"rank":0},{"id":240117,"name":"单证员","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":240200,"name":"仓储","children":[{"id":240201,"name":"仓储物料经理","children":[],"firstChar":[],"rank":0},{"id":240202,"name":"仓储物料专员","children":[],"firstChar":[],"rank":0},{"id":240203,"name":"仓储物料项目","children":[],"firstChar":[],"rank":0},{"id":240204,"name":"仓储管理","children":[],"firstChar":[],"rank":0},{"id":240205,"name":"仓库文员","children":[],"firstChar":[],"rank":0},{"id":240206,"name":"配/理/拣/发货","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":240300,"name":"运输","children":[{"id":240301,"name":"货运司机","children":[],"firstChar":[],"rank":0},{"id":240302,"name":"集装箱管理","children":[],"firstChar":[],"rank":0},{"id":240303,"name":"配送","children":[],"firstChar":[],"rank":0},{"id":240304,"name":"快递","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":240400,"name":"高端供应链职位","children":[{"id":240401,"name":"供应链总监","children":[],"firstChar":[],"rank":0},{"id":240402,"name":"物流总监","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":240500,"name":"其他供应链职位","children":[{"id":240501,"name":"其他供应链职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":220000,"name":"房地产/建筑","children":[{"id":220100,"name":"房地产规划开发","children":[{"id":220101,"name":"房产策划","children":[],"firstChar":[],"rank":0},{"id":220102,"name":"地产项目管理","children":[],"firstChar":[],"rank":0},{"id":220103,"name":"地产招投标","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":220200,"name":"设计装修与市政建设","children":[{"id":220201,"name":"高级建筑工程师","children":[],"firstChar":[],"rank":0},{"id":220202,"name":"建筑工程师","children":[],"firstChar":[],"rank":0},{"id":220203,"name":"建筑设计师","children":[],"firstChar":[],"rank":0},{"id":220204,"name":"土木/土建/结构工程师","children":[],"firstChar":[],"rank":0},{"id":220205,"name":"室内设计","children":[],"firstChar":[],"rank":0},{"id":220206,"name":"园林设计","children":[],"firstChar":[],"rank":0},{"id":220207,"name":"城市规划设计","children":[],"firstChar":[],"rank":0},{"id":220208,"name":"工程监理","children":[],"firstChar":[],"rank":0},{"id":220209,"name":"工程造价","children":[],"firstChar":[],"rank":0},{"id":220210,"name":"预结算","children":[],"firstChar":[],"rank":0},{"id":220211,"name":"工程资料管理","children":[],"firstChar":[],"rank":0},{"id":220212,"name":"建筑施工现场管理","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":220300,"name":"房地产经纪","children":[{"id":220301,"name":"地产置业顾问","children":[],"firstChar":[],"rank":0},{"id":220302,"name":"地产评估","children":[],"firstChar":[],"rank":0},{"id":220303,"name":"地产中介","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":220400,"name":"物业管理","children":[{"id":220401,"name":"物业管理","children":[],"firstChar":[],"rank":0},{"id":220402,"name":"物业租赁销售 ","children":[],"firstChar":[],"rank":0},{"id":220403,"name":"物业招商管理","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":220500,"name":"高端房地产职位","children":[{"id":220501,"name":"地产项目总监","children":[],"firstChar":[],"rank":0},{"id":220502,"name":"地产策划总监","children":[],"firstChar":[],"rank":0},{"id":220503,"name":"地产招投标总监","children":[],"firstChar":[],"rank":0},{"id":220504,"name":"物业总监","children":[],"firstChar":[],"rank":0},{"id":220505,"name":"房地产销售总监","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":220600,"name":"其他房地产职位","children":[{"id":220601,"name":"其他房地产职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":260000,"name":"咨询/翻译/法律","children":[{"id":260100,"name":"咨询/调研","children":[{"id":260101,"name":"企业管理咨询","children":[],"firstChar":[],"rank":0},{"id":260102,"name":"数据分析师","children":[],"firstChar":[],"rank":0},{"id":260103,"name":"财务咨询顾问","children":[],"firstChar":[],"rank":0},{"id":260104,"name":"IT咨询顾问","children":[],"firstChar":[],"rank":0},{"id":260105,"name":"人力资源顾问","children":[],"firstChar":[],"rank":0},{"id":260106,"name":"咨询项目管理","children":[],"firstChar":[],"rank":0},{"id":260107,"name":"战略咨询","children":[],"firstChar":[],"rank":0},{"id":260108,"name":"猎头顾问","children":[],"firstChar":[],"rank":0},{"id":260109,"name":"市场调研","children":[],"firstChar":[],"rank":0},{"id":260110,"name":"其他咨询顾问","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":260200,"name":"律师","children":[{"id":260201,"name":"事务所律师","children":[],"firstChar":[],"rank":0},{"id":260202,"name":"公司法务","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":260300,"name":"翻译","children":[{"id":260301,"name":"英语翻译","children":[],"firstChar":[],"rank":0},{"id":260302,"name":"日语翻译","children":[],"firstChar":[],"rank":0},{"id":260303,"name":"韩语/朝鲜语翻译","children":[],"firstChar":[],"rank":0},{"id":260304,"name":"法语翻译","children":[],"firstChar":[],"rank":0},{"id":260305,"name":"德语翻译","children":[],"firstChar":[],"rank":0},{"id":260306,"name":"俄语翻译","children":[],"firstChar":[],"rank":0},{"id":260307,"name":"西班牙语翻译","children":[],"firstChar":[],"rank":0},{"id":260308,"name":"其他语种翻译","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":260400,"name":"高端咨询类职位","children":[{"id":260401,"name":"咨询总监","children":[],"firstChar":[],"rank":0},{"id":260402,"name":"咨询经理","children":[],"firstChar":[],"rank":0},{"id":260403,"name":"高级翻译","children":[],"firstChar":[],"rank":0},{"id":260404,"name":"同声传译  ","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":260500,"name":"其他咨询类职位","children":[{"id":260501,"name":"其他咨询/翻译类职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":270000,"name":"实习生/管培生","children":[{"id":270100,"name":"实习生/培训生/储备干部","children":[{"id":270101,"name":"实习生","children":[],"firstChar":[],"rank":0},{"id":270102,"name":"管理培训生","children":[],"firstChar":[],"rank":0},{"id":270103,"name":"储备干部","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":270200,"name":"其他实习/培训/储备职位","children":[{"id":270201,"name":"其他实习/培训/储备职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":280000,"name":"旅游","children":[{"id":280100,"name":"旅游服务","children":[{"id":280101,"name":"计调","children":[],"firstChar":[],"rank":0},{"id":280102,"name":"签证","children":[],"firstChar":[],"rank":0},{"id":280103,"name":"旅游顾问","children":[],"firstChar":[],"rank":0},{"id":280104,"name":"导游","children":[],"firstChar":[],"rank":0},{"id":280105,"name":"预定票务","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":280200,"name":"旅游产品开发/策划","children":[{"id":280201,"name":"旅游产品经理","children":[],"firstChar":[],"rank":0},{"id":280202,"name":"旅游策划师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":280300,"name":"其他旅游职位","children":[{"id":280301,"name":"其他旅游职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":290000,"name":"酒店/餐饮/零售","children":[{"id":290100,"name":"酒店","children":[{"id":290101,"name":"收银","children":[],"firstChar":[],"rank":0},{"id":290102,"name":"酒店前台","children":[],"firstChar":[],"rank":0},{"id":290103,"name":"客房服务员","children":[],"firstChar":[],"rank":0},{"id":290104,"name":"酒店经理","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":290200,"name":"餐饮","children":[{"id":290201,"name":"收银","children":[],"firstChar":[],"rank":0},{"id":290202,"name":"服务员","children":[],"firstChar":[],"rank":0},{"id":290203,"name":"厨师","children":[],"firstChar":[],"rank":0},{"id":290204,"name":"咖啡师","children":[],"firstChar":[],"rank":0},{"id":290205,"name":"送餐员","children":[],"firstChar":[],"rank":0},{"id":290206,"name":"餐饮店长","children":[],"firstChar":[],"rank":0},{"id":290207,"name":"领班","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":290300,"name":"零售","children":[{"id":290301,"name":"收银","children":[],"firstChar":[],"rank":0},{"id":290302,"name":"导购","children":[],"firstChar":[],"rank":0},{"id":290303,"name":"店员/营业员","children":[],"firstChar":[],"rank":0},{"id":290304,"name":"门店店长","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":290400,"name":"其他酒店/餐饮/零售职位","children":[{"id":290401,"name":"其他酒店/餐饮/零售职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":300000,"name":"生产制造","children":[{"id":300100,"name":"生产营运","children":[{"id":300101,"name":"厂长/工厂经理","children":[],"firstChar":[],"rank":0},{"id":300102,"name":"生产总监","children":[],"firstChar":[],"rank":0},{"id":300103,"name":"生产经理/车间主任","children":[],"firstChar":[],"rank":0},{"id":300104,"name":"生产组长/拉长","children":[],"firstChar":[],"rank":0},{"id":300105,"name":"生产员","children":[],"firstChar":[],"rank":0},{"id":300106,"name":"生产设备管理","children":[],"firstChar":[],"rank":0},{"id":300107,"name":"生产计划/物料控制","children":[],"firstChar":[],"rank":0},{"id":300108,"name":"生产跟单","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":300200,"name":"质量安全","children":[{"id":300201,"name":"质量管理/测试","children":[],"firstChar":[],"rank":0},{"id":300202,"name":"可靠度工程师","children":[],"firstChar":[],"rank":0},{"id":300203,"name":"故障分析师","children":[],"firstChar":[],"rank":0},{"id":300204,"name":"认证工程师","children":[],"firstChar":[],"rank":0},{"id":300205,"name":"体系工程师","children":[],"firstChar":[],"rank":0},{"id":300206,"name":"审核员","children":[],"firstChar":[],"rank":0},{"id":300207,"name":"安全员","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":300300,"name":"机械设计/制造","children":[{"id":300301,"name":"机械工程师","children":[],"firstChar":[],"rank":0},{"id":300302,"name":"机械设计师","children":[],"firstChar":[],"rank":0},{"id":300303,"name":"机械设备工程师","children":[],"firstChar":[],"rank":0},{"id":300304,"name":"机械维修/保养","children":[],"firstChar":[],"rank":0},{"id":300305,"name":"机械制图","children":[],"firstChar":[],"rank":0},{"id":300306,"name":"机械结构工程师","children":[],"firstChar":[],"rank":0},{"id":300307,"name":"工业工程师","children":[],"firstChar":[],"rank":0},{"id":300308,"name":"工艺/制程工程师","children":[],"firstChar":[],"rank":0},{"id":300309,"name":"材料工程师","children":[],"firstChar":[],"rank":0},{"id":300310,"name":"机电工程师","children":[],"firstChar":[],"rank":0},{"id":300311,"name":"CNC/数控","children":[],"firstChar":[],"rank":0},{"id":300312,"name":"冲压工程师","children":[],"firstChar":[],"rank":0},{"id":300313,"name":"夹具工程师","children":[],"firstChar":[],"rank":0},{"id":300314,"name":"模具工程师","children":[],"firstChar":[],"rank":0},{"id":300315,"name":"焊接工程师","children":[],"firstChar":[],"rank":0},{"id":300316,"name":"注塑工程师","children":[],"firstChar":[],"rank":0},{"id":300317,"name":"铸造/锻造工程师","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":300400,"name":"化工","children":[{"id":300401,"name":"化工工程师","children":[],"firstChar":[],"rank":0},{"id":300402,"name":"实验室技术员","children":[],"firstChar":[],"rank":0},{"id":300403,"name":"化学分析","children":[],"firstChar":[],"rank":0},{"id":300404,"name":"涂料研发","children":[],"firstChar":[],"rank":0},{"id":300405,"name":"化妆品研发","children":[],"firstChar":[],"rank":0},{"id":300406,"name":"食品/饮料研发","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":300500,"name":"服装/纺织/皮革","children":[{"id":300501,"name":"服装设计","children":[],"firstChar":[],"rank":0},{"id":300502,"name":"女装设计","children":[],"firstChar":[],"rank":0},{"id":300503,"name":"男装设计","children":[],"firstChar":[],"rank":0},{"id":300504,"name":"童装设计","children":[],"firstChar":[],"rank":0},{"id":300505,"name":"内衣设计","children":[],"firstChar":[],"rank":0},{"id":300506,"name":"面料设计","children":[],"firstChar":[],"rank":0},{"id":300507,"name":"面料辅料开发","children":[],"firstChar":[],"rank":0},{"id":300508,"name":"面料辅料采购","children":[],"firstChar":[],"rank":0},{"id":300509,"name":"打样/制版","children":[],"firstChar":[],"rank":0},{"id":300510,"name":"服装/纺织/皮革跟单","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":300600,"name":"技工/普工","children":[{"id":300601,"name":"普工/操作工","children":[],"firstChar":[],"rank":0},{"id":300602,"name":"叉车","children":[],"firstChar":[],"rank":0},{"id":300603,"name":"铲车","children":[],"firstChar":[],"rank":0},{"id":300604,"name":"焊工","children":[],"firstChar":[],"rank":0},{"id":300605,"name":"氩弧焊工","children":[],"firstChar":[],"rank":0},{"id":300606,"name":"电工","children":[],"firstChar":[],"rank":0},{"id":300608,"name":"木工","children":[],"firstChar":[],"rank":0},{"id":300609,"name":"漆工","children":[],"firstChar":[],"rank":0},{"id":300610,"name":"车工","children":[],"firstChar":[],"rank":0},{"id":300611,"name":"磨工","children":[],"firstChar":[],"rank":0},{"id":300612,"name":"铣工","children":[],"firstChar":[],"rank":0},{"id":300613,"name":"钳工","children":[],"firstChar":[],"rank":0},{"id":300614,"name":"钻工","children":[],"firstChar":[],"rank":0},{"id":300615,"name":"铆工","children":[],"firstChar":[],"rank":0},{"id":300616,"name":"钣金","children":[],"firstChar":[],"rank":0},{"id":300617,"name":"抛光","children":[],"firstChar":[],"rank":0},{"id":300618,"name":"机修工","children":[],"firstChar":[],"rank":0},{"id":300619,"name":"折弯工","children":[],"firstChar":[],"rank":0},{"id":300620,"name":"电镀工","children":[],"firstChar":[],"rank":0},{"id":300621,"name":"喷塑工","children":[],"firstChar":[],"rank":0},{"id":300622,"name":"注塑工","children":[],"firstChar":[],"rank":0},{"id":300623,"name":"组装工","children":[],"firstChar":[],"rank":0},{"id":300624,"name":"包装工","children":[],"firstChar":[],"rank":0},{"id":300625,"name":"空调工","children":[],"firstChar":[],"rank":0},{"id":300626,"name":"电梯工","children":[],"firstChar":[],"rank":0},{"id":300627,"name":"锅炉工","children":[],"firstChar":[],"rank":0},{"id":300628,"name":"学徒工","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":300700,"name":"其他生产制造职位","children":[{"id":300701,"name":"其他生产制造职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0},{"id":200000,"name":"其他","children":[{"id":200100,"name":"其他职位类别","children":[{"id":200101,"name":"其他职位","children":[],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}],"firstChar":[],"rank":0}];
                                    </script>
                                    <div class="select-tree" data-level="3"><ul class="tree-1"><li data-id="100000">技术</li><li data-id="110000">产品</li><li data-id="120000">设计</li><li data-id="130000">运营</li><li data-id="140000">市场</li><li data-id="150000">职能/高级管理</li><li data-id="160000">销售</li><li data-id="170000">传媒</li><li data-id="180000">金融</li><li data-id="230000">汽车</li><li data-id="190000">教育培训</li><li data-id="210000">医疗健康</li><li data-id="250000">采购/贸易</li><li data-id="240000">供应链/物流</li><li data-id="220000">房地产/建筑</li><li data-id="260000">咨询/翻译/法律</li><li data-id="270000">实习生/管培生</li><li data-id="280000">旅游</li><li data-id="290000">酒店/餐饮/零售</li><li data-id="300000">生产制造</li><li data-id="200000">其他</li></ul><ul class="tree-2"><li class="blank">选择职类</li></ul><ul class="tree-3"></ul></div>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row">
                        <dl>
                            <dt>职位名称</dt>
                            <dd>
                                <input type="text" ka="work-position-name" name="positionName" value="PHP" class="ipt required" placeholder="例如：UI设计师" data-range="1,12" data-blank="必填" data-format="请输入 12 字以内的职位名称" maxlength="24">
                            </dd>
                        </dl>
                        <dl>
                            <dt>所属行业</dt>
                            <dd>
                <span class="">
                    <input type="text" ka="work-industry" value="" name="industryCategory" class="ipt ipt-industry" placeholder="选择行业" readonly="">
                    <input type="hidden" value="0" name="industryCode" class="required" data-blank="必选">
                </span>
                
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row">
                        <dl>
                            <dt>在职时间</dt>
                            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" ka="work-start-date" name="startDate" value="2017-10" class="ipt ipt-datetimepicker date-range required" data-type="y-m" data-minyear="1989" data-format="yyyy-mm" placeholder="选择年月" readonly="" autocomplete="off" data-blank="请选择在职时间">
					<em class="prefix-minyear">1990以前</em>
                </span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>&nbsp;</dt>
                            <dd>
                                <span class="prefix-day">至</span>
                                <span class="dropdown-select show-prefix-today">
                    <i class="icon-select-arrow"></i>
                    <input type="text" ka="work-end-date" name="endDate" data-today="true" value="" class="ipt ipt-datetimepicker date-range " data-type="y-m" data-format="yyyy-mm" placeholder="选择年月" readonly="" autocomplete="off" data-blank="请选择在职时间">
                    <input type="hidden" name="now" value="1">
                    <em class="prefix-today">至今</em>
                </span>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row">
                        <dl>
                            <dt>技能标签</dt>
                            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" ka="work-skills" class="ipt" value="PHP·HTML/CSS·JS" placeholder="选择技能标签" readonly="">
                    <input type="hidden" name="workEmphasis" value="PHP·HTML/CSS·JS" class="required" data-blank="必填" data-format="最多可选 3 个技能标签">
                </span>
                                <div class="dropdown-menu">
                                    <div class="select-industry select-tags">
                                        <div class="industry-title tags-title">
                                            <div class="btns"><button class="btn btn-back" type="button">取消</button><button class="btn" type="button">确定</button></div>
                                            <input type="text" class="ipt" placeholder="添加新标签"><button class="btn btn-addtag">添加</button>
                                            <p class="gray">最多可选 3 个技能标签</p>
                                        </div>
                                        <div class="industry-cells tags-cells"><span ka="tag-.NET">.NET</span><span ka="tag-Android">Android</span><span ka="tag-ASP">ASP</span><span ka="tag-C#">C#</span><span ka="tag-C/C++">C/C++</span><span ka="tag-Cocos2d-X">Cocos2d-X</span><span ka="tag-Delphi">Delphi</span><span ka="tag-erlang">erlang</span><span ka="tag-ERP">ERP</span><span ka="tag-Flash">Flash</span><span ka="tag-GO">GO</span><span ka="tag-Golang">Golang</span><span ka="tag-Hadoop">Hadoop</span><span class="selected" ka="tag-HTML/CSS">HTML/CSS</span><span ka="tag-HTML5">HTML5</span><span ka="tag-iOS">iOS</span><span ka="tag-Java">Java</span><span ka="tag-Javascript">Javascript</span><span ka="tag-java爬虫">java爬虫</span><span class="selected" ka="tag-JS">JS</span><span ka="tag-Linux">Linux</span><span ka="tag-NLP">NLP</span><span ka="tag-Node.js">Node.js</span><span ka="tag-Perl">Perl</span><span class="selected" ka="tag-PHP">PHP</span><span ka="tag-Python">Python</span><span ka="tag-python爬虫">python爬虫</span><span ka="tag-Ruby">Ruby</span><span ka="tag-SAP">SAP</span><span ka="tag-Shell">Shell</span><span ka="tag-Swift">Swift</span><span ka="tag-Unity3D">Unity3D</span><span ka="tag-VB">VB</span><span ka="tag-VOIP">VOIP</span><span ka="tag-Web前端">Web前端</span><span ka="tag-WP">WP</span><span ka="tag-中间件">中间件</span><span ka="tag-人脸识别">人脸识别</span><span ka="tag-企业软件">企业软件</span><span ka="tag-信息检索">信息检索</span><span ka="tag-光通信">光通信</span><span ka="tag-全栈">全栈</span><span ka="tag-分布式视频编解码系统">分布式视频编解码系统</span><span ka="tag-前端开发">前端开发</span><span ka="tag-后端开发">后端开发</span><span ka="tag-图像算法">图像算法</span><span ka="tag-图像编程">图像编程</span><span ka="tag-图像识别">图像识别</span><span ka="tag-广告算法">广告算法</span><span ka="tag-抓取">抓取</span><span ka="tag-推荐算法">推荐算法</span><span ka="tag-搜索">搜索</span><span ka="tag-搜索算法">搜索算法</span><span ka="tag-数字信号处理">数字信号处理</span><span ka="tag-数字音频水印">数字音频水印</span><span ka="tag-数据库">数据库</span><span ka="tag-数据抓取">数据抓取</span><span ka="tag-数据挖掘">数据挖掘</span><span ka="tag-数据采集">数据采集</span><span ka="tag-机器学习">机器学习</span><span ka="tag-模式识别">模式识别</span><span ka="tag-流媒体转封装">流媒体转封装</span><span ka="tag-游戏开发">游戏开发</span><span ka="tag-爬虫工程师">爬虫工程师</span><span ka="tag-爬虫架构">爬虫架构</span><span ka="tag-目标检测">目标检测</span><span ka="tag-移动开发">移动开发</span><span ka="tag-系统架构">系统架构</span><span ka="tag-系统集成">系统集成</span><span ka="tag-纠错编码">纠错编码</span><span ka="tag-网络优化">网络优化</span><span ka="tag-网络爬虫">网络爬虫</span><span ka="tag-自然语言处理">自然语言处理</span><span ka="tag-视频流转码">视频流转码</span><span ka="tag-视频算法">视频算法</span><span ka="tag-视频编解码">视频编解码</span><span ka="tag-视频识别">视频识别</span><span ka="tag-视频预处理">视频预处理</span><span ka="tag-解决方案">解决方案</span><span ka="tag-计算广告">计算广告</span><span ka="tag-计算机视觉">计算机视觉</span><span ka="tag-语音处理">语音处理</span><span ka="tag-语音算法">语音算法</span><span ka="tag-通信">通信</span><span ka="tag-需求分析">需求分析</span><span ka="tag-音频处理">音频处理</span><span ka="tag-音频编解码">音频编解码</span><span ka="tag-项目实施">项目实施</span></div>
                                    </div>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>所属部门</dt>
                            <dd>
                                <input type="text" ka="work-department" name="department" value="" class="ipt" placeholder="选填" data-range="0,6" data-blank="选填" data-format="请输入 6 字以内的部门名称" maxlength="12">
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row row-area item-form-through">
                        <dl>
                            <dt>工作内容</dt>
                            <dd>
                                <textarea name="responsibility" ka="work-responsibility" placeholder="例如： 1、主要负责新员工入职培训； 2、分析制定员工每个月个人销售业绩； 3、帮助员工提高每日客单价，整体店面管理等工作； " class="ipt ipt-area required" data-range="1,1600" data-blank="必填" data-format="请输入 1600 字以内的工作内容" maxlength="3200">基础代码</textarea>
                                <span class="count-num"><em>4</em>/1600</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row row-area item-form-through">
                        <dl>
                            <dt>工作业绩</dt>
                            <dd>
                                <textarea name="workPerformance" ka="work-performance" placeholder="(选填)填写完整、有吸引力的工作业绩，有助于您更多地吸引Boss的关注 例如：1.取得的成绩… 2.实现的突破… 3.获得的表彰…" class="ipt ipt-area" data-range="0,300" data-blank="必填" data-format="请输入 300 字以内的工作业绩" maxlength="600"></textarea>
                                <div class="hidden-row">
                                    <label class="checkbox">
                                        <input type="checkbox" ka="work-hide" name="isPublic" value="1" checked="checked">
                                        <span>对该公司隐藏我的简历</span>
                                    </label>
                                </div>
                                <span class="count-num"><em>0</em>/300</span>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-btns"><button class="btn btn-delete" data-url="/geek/delWorkExperience.json?id=f5446a23250fac101nB92NW8F1c~" ka="work-delete" type="button">删除本条</button><button class="btn btn-back" ka="work-cancel" type="button">取消</button><button class="btn" ka="work-save" type="submit">完成</button></div>
                </form></div>
            </div>
            <div class="resume-item" id="resume-education">
                <div class="item-primary">
                    <h3 class="title">教育经历
                        <div class="op">
                            <a href="javascript:;" data-url="/geek/getEduExperienceForm.json" ka="user-resume-add-eduexp" class="link-add"><i class="fz-resume fz-add"></i>添加</a>
                        </div>
                    </h3>
                    <div class="history-education">
                        
                        
                        <div class="history-item" id="row-846a940cfc2fe5551nZ539u8EFs~">
                            <div class="op">
                                <a href="javascript:;" data-url="/geek/getEduExperienceForm.json?id=846a940cfc2fe5551nZ539u8EFs~" ka="user-resume-edit-eduexp1" class="link-edit"><i class="fz-resume fz-edit"></i>编辑</a>
                                
                                <em class="vline"></em>
                                <a href="javascript:;" data-url="/geek/delEduExperience.json?id=846a940cfc2fe5551nZ539u8EFs~" ka="user-resume-del-eduexp1" class="link-delete"><i class="fz-resume fz-delete"></i>删除</a>
                            
                            </div>
                            <span class="period">2012-2015</span>
                            <h4 class="name">广东岭南职业技术学院</h4>
                            <div class="text">
                                <h4>数控技术<em class="vline"></em>大专</h4>
                            
                            </div>
                        </div>
                        
                        <div class="history-item" id="row-2bc96c95dc8dec101nZ83ty9GVI~">
                            <div class="op">
                                <a href="javascript:;" data-url="/geek/getEduExperienceForm.json?id=2bc96c95dc8dec101nZ83ty9GVI~" ka="user-resume-edit-eduexp2" class="link-edit"><i class="fz-resume fz-edit"></i>编辑</a>
                                
                                <em class="vline"></em>
                                <a href="javascript:;" data-url="/geek/delEduExperience.json?id=2bc96c95dc8dec101nZ83ty9GVI~" ka="user-resume-del-eduexp2" class="link-delete"><i class="fz-resume fz-delete"></i>删除</a>
                            
                            </div>
                            <span class="period">2012-2015</span>
                            <h4 class="name">岭南学院</h4>
                            <div class="text">
                                <h4>数控技术<em class="vline"></em>大专</h4>
                                
                                <p>11111111111</p>
                            
                            </div>
                        </div>
                    
                    
                    </div>
                </div>
                <div class="item-form" style="display:block;">
                    <form action="/geek/saveEduExperience.json" method="post" class="form-resume">
                    <input type="hidden" name="id" value="07b5df7e131fbe2e1w~~">
                    <h3 class="title">添加教育经历</h3>
                    <div class="form-row">
                        <dl>
                            <dt>学校名称</dt>
                            <dd><input type="text" ka="edu-school" name="school" value="" class="ipt ipt-autocomplete required" data-url="/autocomplete/school.json" autocomplete="off" placeholder="例如：北京大学" data-range="1,20" data-blank="必填" data-format="请输入 20 字以内的学校名称" maxlength="40"><div class="suggest-complete"></div></dd>
                        </dl>
                        <dl>
                            <dt>专业名称</dt>
                            <dd><input type="text" ka="edu-major" name="major" value="" class="ipt ipt-autocomplete required" data-url="/autocomplete/major.json" autocomplete="off" placeholder="例如：计算机科学与技术" data-range="1,20" data-blank="必填" data-format="请输入 20 字以内的专业名称" maxlength="40"><div class="suggest-complete"></div></dd>
                        </dl>
                    </div>
                    <div class="form-row">
                        <dl>
                            <dt>学历</dt>
                            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" ka="edu-degree" value="" class="ipt" placeholder="选择学历" readonly="">
                    <input type="hidden" name="degree" value="" class="required" data-blank="请选择学历">
                </span>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li data-val="207">中专及以下</li>
                                        <li data-val="206">高中</li>
                                        <li data-val="202">大专</li>
                                        <li data-val="203">本科</li>
                                        <li data-val="204">硕士</li>
                                        <li data-val="205">博士</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row">
                        <dl>
                            <dt>时间段</dt>
                            <dd>
                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" ka="edu-start-date" value="" class="ipt ipt-range" data-range="start" data-type="y" placeholder="选择年份" readonly="">
                    <input type="hidden" name="startDateCode" value="" class="required" data-blank="请选择时间段">
                </span>
                                <div class="dropdown-menu">
                                    <ul>
                                        <li data-val="2018">2018</li>
                                        <li data-val="2017">2017</li>
                                        <li data-val="2016">2016</li>
                                        <li data-val="2015">2015</li>
                                        <li data-val="2014">2014</li>
                                        <li data-val="2013">2013</li>
                                        <li data-val="2012">2012</li>
                                        <li data-val="2011">2011</li>
                                        <li data-val="2010">2010</li>
                                        <li data-val="2009">2009</li>
                                        <li data-val="2008">2008</li>
                                        <li data-val="2007">2007</li>
                                        <li data-val="2006">2006</li>
                                        <li data-val="2005">2005</li>
                                        <li data-val="2004">2004</li>
                                        <li data-val="2003">2003</li>
                                        <li data-val="2002">2002</li>
                                        <li data-val="2001">2001</li>
                                        <li data-val="2000">2000</li>
                                        <li data-val="1999">1999</li>
                                        <li data-val="1998">1998</li>
                                        <li data-val="1997">1997</li>
                                        <li data-val="1996">1996</li>
                                        <li data-val="1995">1995</li>
                                        <li data-val="1994">1994</li>
                                        <li data-val="1993">1993</li>
                                        <li data-val="1992">1992</li>
                                        <li data-val="1991">1991</li>
                                        <li data-val="1990">1990</li>
                                        <li data-val="1989">1990年以前</li>
                                    </ul>
                                </div>
                            </dd>
                        </dl>
                        <dl>
                            <dt>&nbsp;</dt>
                            <dd>
                                <span class="prefix-day">至</span>
                                <span class="dropdown-select">
                    <i class="icon-select-arrow"></i>
                    <input type="text" ka="edu-end-date" value="" class="ipt ipt-range" data-range="end" data-type="y" placeholder="选择年份" readonly="">
                    <input type="hidden" name="endDateCode" value="" class="required" data-blank="请选择时间段">
                </span>
                                <div class="dropdown-menu">
                                    <ul><li data-val="-1">至今</li><li data-val="2018">2018</li><li data-val="2017">2017</li><li data-val="2016">2016</li><li data-val="2015">2015</li><li data-val="2014">2014</li><li data-val="2013">2013</li><li data-val="2012">2012</li><li data-val="2011">2011</li><li data-val="2010">2010</li><li data-val="2009">2009</li><li data-val="2008">2008</li><li data-val="2007">2007</li><li data-val="2006">2006</li><li data-val="2005">2005</li><li data-val="2004">2004</li><li data-val="2003">2003</li><li data-val="2002">2002</li><li data-val="2001">2001</li><li data-val="2000">2000</li><li data-val="1999">1999</li><li data-val="1998">1998</li><li data-val="1997">1997</li><li data-val="1996">1996</li><li data-val="1995">1995</li><li data-val="1994">1994</li><li data-val="1993">1993</li><li data-val="1992">1992</li><li data-val="1991">1991</li><li data-val="1990">1990</li></ul>
                                </div>
                            </dd>
                        </dl>
                    </div>
                    <div class="form-row row-area item-form-through">
                        <dl>
                            <dt>在校经历</dt>
                            <dd><textarea placeholder="选填" ka="edu-description" name="eduDescription" class="ipt ipt-area" data-range="0,300" data-blank="必填" data-format="请输入 300 个以内的文字" maxlength="600"></textarea><span class="count-num"><em>0</em>/300</span></dd>
                        </dl>
                    </div>
                    <div class="form-btns"><button class="btn btn-back" ka="edu-cancel" type="button">取消</button><button class="btn" ka="edu-save" type="submit">完成</button></div>
                </form></div>
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