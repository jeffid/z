<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"D:\APP\wamp\www\XDL\zhipin\public/../application/admin\view\message\edit.html";i:1525632639;s:73:"D:\APP\wamp\www\XDL\zhipin\application\admin\view\adminpublic\public.html";i:1525632639;}*/ ?>
<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
<head>
<meta charset="utf-8">

<!-- Viewport Metatag -->
<meta name="viewport" content="width=device-width,initial-scale=1.0">

<!-- Plugin Stylesheets first to ease overrides -->
<link rel="stylesheet" type="text/css" href="/static/admins/plugins/colorpicker/colorpicker.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/custom-plugins/wizard/wizard.css" media="screen">

<!-- Required Stylesheets -->
<link rel="stylesheet" type="text/css" href="/static/admins/bootstrap/css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/fonts/ptsans/stylesheet.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/fonts/icomoon/style.css" media="screen">

<link rel="stylesheet" type="text/css" href="/static/admins/css/mws-style.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/icons/icol16.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/icons/icol32.css" media="screen">

<!-- Demo Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admins/css/demo.css" media="screen">

<!-- jQuery-UI Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admins/jui/css/jquery.ui.all.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/jui/jquery-ui.custom.css" media="screen">

<!-- Theme Stylesheet -->
<link rel="stylesheet" type="text/css" href="/static/admins/css/mws-theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/themer.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/my.css" media="screen">
<link rel="stylesheet" type="text/css" href="/static/admins/css/tc.css" media="screen">


<title>消息修改</title>
    <!--<link rel="stylesheet" href="../../../../public/static/admins/css/tc.css">-->

</head>

<body>
    <!-- Header -->
    <div id="mws-header" class="clearfix">
    
        <!-- Logo Container -->
        <div id="mws-logo-container">
        
            <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
            <div id="mws-logos-wrap">
                <!--<img src="/static/admins/images/mws-logo.png" alt="mws admin">-->
                <i class="icon-monitor"></i>
                <a style="color: #0cccb5;text-decoration: none;" href="/admin/index"><span>BOOS直聘管理系统</span></a>
            </div>
        </div>
        
        <!-- User Tools (notifications, logout, profile, change password) -->
        <div id="mws-user-tools" class="clearfix">
        
            <!-- Notifications -->
            <div id="mws-user-notif" class="mws-dropdown-menu">
                
                
               
                
                <!-- Notifications dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-notifications">
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Messages -->
            <div id="mws-user-message" class="mws-dropdown-menu">
                
                
                <!-- Unred messages count -->
                
                
                <!-- Messages dropdown -->
                <div class="mws-dropdown-box">
                    <div class="mws-dropdown-content">
                        <ul class="mws-messages">
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="read">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                            <li class="unread">
                                <a href="#">
                                    <span class="sender">John Doe</span>
                                    <span class="message">
                                        Lorem ipsum dolor sit amet
                                    </span>
                                    <span class="time">
                                        January 21, 2012
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="mws-dropdown-viewall">
                            <a href="#">View All Messages</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- User Information and functions section -->
            <div id="mws-user-info" class="mws-inset">
            
                <!-- User Photo -->
                <div id="mws-user-photo">
                    <img src="/static/admins/example/profile.jpg" alt="User Photo">
                    
                </div>
                
                <!-- Username and Functions -->
                <div id="mws-user-functions">
                    <div id="mws-username">
                        Hello, <?php echo \think\Session::get('username'); ?>
                    </div>
                    <ul>
                        
                        <li>
                            <a><?php echo \think\Session::get('name'); ?></a>
                        </li>
                        <li><a href="/login/logout">注销登录</a></li>
                    </ul>
                    
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- Start Main Wrapper -->
    <div id="mws-wrapper">
    
        <!-- Necessary markup, do not remove -->
        <div id="mws-sidebar-stitch"></div>
        <div id="mws-sidebar-bg"></div>
        
        <!-- Sidebar Wrapper -->
        <div id="mws-sidebar">
        
            <!-- Hidden Nav Collapse Button -->
            <div id="mws-nav-collapse">
                <span></span>
                <span></span>
                <span></span>
            </div>
            
            <!-- Searchbox -->
           
            
            <!-- Main Navigation -->
            <div id="mws-navigation">
                <ul>
                    <li>
                        <a href="/admin/index"><i class="icon-th-list"></i>运营管理</a>
                        
                    </li>

                    <li>
                        <a href="#"><i class="icon-user"></i>用户管理</a>
                        <ul class="closed">
                            <li><a href="/adminuser/index">用户列表</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="#"><i class="icon-qrcode"></i>职业类型管理</a>
                        <ul class="closed">
                            <li><a href="/category/add">职业类型添加</a></li>
                            <li><a href="/category/index">职业类型列表</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-cogs"></i> 权限管理</a>
                        <ul class="closed">
                            <li><a href="/permissions/index">管理员列表</a></li>
                            <li><a href="/permissions/adminadd">管理员添加</a></li>
                            <li><a href="/permissions/permissionsadd">权限组添加</a></li>
                            <li><a href="/permissions/permissions">权限组列表</a></li>
                            <li><a href="/permissions/roleadd">权限点添加</a></li>
                            <li><a href="/permissions/adminpermissions">权限点列表</a></li>
                            
                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="icon-lastfm"></i>入驻公司管理</a>
                        <ul class="closed">
                            <li><a href="/company/add">添加</a></li>
                            <li><a href="/company/index">列表</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="#"><i class="icon-edit"></i>站内信</a>
                        <ul class="closed">
                            <li><a href="/message/add">消息添加</a></li>
                            <li><a href="/message/index?scope=3">系统消息列表</a></li>
                        </ul>
                    </li>
    
    
                    <li>
                        <a href="#"><i class="icon-picture"></i>广告模块</a>
                        <ul class="closed">
                            <li><a href="/advertising/add">广告添加</a></li>
                            <li><a href="/advertising/index">广告列表</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="#"><i class="icon-pictures"></i>轮播图管理模块</a>
                        <ul class="closed">
                            <li><a href="/carousel/add">轮播图添加</a></li>
                            <li><a href="/carousel/index">轮播图列表</a></li>
                        </ul>
                    </li>
    
                    <li>
                        <a href="#"><i class="icon-github-3"></i>友情链接模块</a>
                        <ul class="closed">
                            <li><a href="/links/add">友情链接添加</a></li>
                            <li><a href="/links/index">友情链接列表</a></li>
                        </ul>
                    </li>
    
                    
                </ul>
            </div>         
        </div>
        
        <!-- Main Container Start -->
        <div id="mws-container" class="clearfix">
                <div class="container">
                    
<script  charset="utf-8" src="/static/admins/ueditor/ueditor.config.js"></script>
<script  charset="utf-8" src="/static/admins/ueditor/ueditor.all.min.js"> </script>
<script  charset="utf-8" src="/static/admins/ueditor/lang/zh-cn/zh-cn.js"></script>

  <div class="mws-panel grid_8">
  <div class="mws-panel-header">
    <span>消息修改</span>
  </div>
  <div class="mws-panel-body no-padding">
    <form class="mws-form" action="/message/update" method="post" enctype="multipart/form-data">
      <div class="mws-form-inline">
        <div class="mws-form-row">
          <label class="mws-form-label">标题:</label>
          <div class="mws-form-item">
            <input type="text" class="large" name="title" value="<?php echo $msg['title']; ?>" minlength="2" maxlength="30" required>
          </div>
        </div>
        
        <div class="mws-form-row">
          <label class="mws-form-label">内容:</label>
          <div class="mws-form-item">
              <!--因script标签中带有样式属性,语法检查报错-->
            <script id="editor" type="text/plain"  name="content" style="width:100%;height:500px;">
              <?php echo $msg['content']; ?>
            </script>
          </div>
        </div>

      </div>
      <div class="mws-button-row">
        <input name="id" type="hidden" value="<?php echo $msg['id']; ?>">
        <input name="url" type="hidden" value="<?php echo $url; ?>">
        <input type="submit" value="添加" class="btn btn-danger">
        <input type="reset" value="Reset" class="btn ">
            
            </div>
    </form>
  </div>
</div>

<script >
//               var ue = UE.getEditor('editor');
          
               var ue = UE.getEditor('editor',{
                   toolbars: [
                       ['fullscreen', 'source', 'undo', 'redo'],
                       ['bold', 'italic', 'underline', 'fontborder', 'strikethrough', 'superscript', 'subscript', 'removeformat', 'formatmatch', 'autotypeset', 'blockquote', 'pasteplain', '|', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'selectall', 'cleardoc']
                   ]
               });
</script>

            

                               
                    <!-- Panels End -->
                </div>
                <!-- footer -->

        </div>
        <!-- Main Container End -->
        
    </div>

    <!-- JavaScript Plugins -->
    <script src="/static/admins/js/libs/jquery-1.8.3.min.js"></script>
    <script src="/static/admins/js/libs/jquery.mousewheel.min.js"></script>
    <script src="/static/admins/js/libs/jquery.placeholder.min.js"></script>
    <script src="/static/admins/custom-plugins/fileinput.js"></script>
    
    <!-- jQuery-UI Dependent Scripts -->
    <script src="/static/admins/jui/js/jquery-ui-1.9.2.min.js"></script>
    <script src="/static/admins/jui/jquery-ui.custom.min.js"></script>
    <script src="/static/admins/jui/js/jquery.ui.touch-punch.js"></script>

    <!-- Plugin Scripts -->
    <script src="/static/admins/plugins/datatables/jquery.dataTables.min.js"></script>
    <!--[if lt IE 9]>
    <script src="js/libs/excanvas.min.js"></script>
    <![endif]-->
    <script src="/static/admins/plugins/flot/jquery.flot.min.js"></script>
    <script src="/static/admins/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
    <script src="/static/admins/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
    <script src="/static/admins/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
    <script src="/static/admins/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
    <script src="/static/admins/plugins/colorpicker/colorpicker-min.js"></script>
    <script src="/static/admins/plugins/validate/jquery.validate-min.js"></script>
    <script src="/static/admins/custom-plugins/wizard/wizard.min.js"></script>

    <!-- Core Script -->
    <script src="/static/admins/bootstrap/js/bootstrap.min.js"></script>
    <script src="/static/admins/js/core/mws.js"></script>

    <!-- Themer Script (Remove if not needed) -->
    <script src="/static/admins/js/core/themer.js"></script>

    <!-- Demo Scripts (remove if not needed) -->
    <script src="/static/admins/js/demo/demo.dashboard.js"></script>
    <script src="/static/home/js/sub.js"></script>

</body>
</html>