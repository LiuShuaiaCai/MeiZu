<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Bootstrap Admin Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/Admin/admin.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">


    <!-- Custom CSS -->
    <link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="/xiangmu/xiangmu/MeiZu-SunShine/Public/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="index.html">魅族后台管理系统</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#"> <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-messages">
            <li>
                <a href="#">
                    <div> <strong>John Smith</strong>
                        <span class="pull-right text-muted"> <em>Yesterday</em>
                        </span>
                    </div>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div> <strong>John Smith</strong>
                        <span class="pull-right text-muted"> <em>Yesterday</em>
                        </span>
                    </div>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <strong>John Smith</strong>
                        <span class="pull-right text-muted">
                            <em>Yesterday</em>
                        </span>
                    </div>
                    <div>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eleifend...
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    <strong>Read All Messages</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
        <!-- /.dropdown-messages --> </li>
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-tasks fa-fw"></i>
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-tasks">
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 1</strong>
                            <span class="pull-right text-muted">40% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                <span class="sr-only">40% Complete (success)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 2</strong>
                            <span class="pull-right text-muted">20% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
                                <span class="sr-only">20% Complete</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 3</strong>
                            <span class="pull-right text-muted">60% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                <span class="sr-only">60% Complete (warning)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <p>
                            <strong>Task 4</strong>
                            <span class="pull-right text-muted">80% Complete</span>
                        </p>
                        <div class="progress progress-striped active">
                            <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                <span class="sr-only">80% Complete (danger)</span>
                            </div>
                        </div>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    <strong>See All Tasks</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
        <!-- /.dropdown-tasks --> </li>
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-bell fa-fw"></i>
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-alerts">
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-comment fa-fw"></i>
                        New Comment
                        <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-twitter fa-fw"></i>
                        3 New Followers
                        <span class="pull-right text-muted small">12 minutes ago</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-envelope fa-fw"></i>
                        Message Sent
                        <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-tasks fa-fw"></i>
                        New Task
                        <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="#">
                    <div>
                        <i class="fa fa-upload fa-fw"></i>
                        Server Rebooted
                        <span class="pull-right text-muted small">4 minutes ago</span>
                    </div>
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a class="text-center" href="#">
                    <strong>See All Alerts</strong>
                    <i class="fa fa-angle-right"></i>
                </a>
            </li>
        </ul>
        <!-- /.dropdown-alerts --> </li>
    <!-- /.dropdown -->
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i>
            <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            <li>
                <a href="#">
                    <i class="fa fa-user fa-fw"></i>
                    User Profile
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-gear fa-fw"></i>
                    Settings
                </a>
            </li>
            <li class="divider"></li>
            <li>
                <a href="<?php echo U('Index/index');?>">
                    <i class="fa fa-sign-out fa-fw"></i>
                    Logout
                </a>
            </li>
        </ul>
        <!-- /.dropdown-user --> </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->
            <div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li class="sidebar-search">
                <div class="input-group custom-search-form">
                    <input type="text" class="form-control" placeholder="Search...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button"> <i class="fa fa-search"></i>
                        </button>
                    </span>
                </div>
                <!-- /input-group --> </li>
             <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    管理员管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Meizuadmin/meizuadmin');?>">管理员列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Meizuadmin/add_meizuadmin');?>">添加管理员</a>
                    </li>
                </ul>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    管理员分组管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Authgroup/auth_group');?>">管理员分组列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Authgroup/add_auth_group');?>">添加管理员分组</a>
                    </li>
                </ul>
            </li>

             <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    权限管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Authrule/auth_rule');?>">权限列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Authrule/add_auth_rule');?>">添加权限</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    用户管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('User/index');?>">用户列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('User/add');?>">添加用户</a>
                    </li>
                </ul>
            </li>
         <!-- /.nav-second-level --> 
             <li>
                <a href="#">
                    <i class="fa fa-table fa-fw"></i>
                    商品管理
                    <span class="fa arrow"></span>
                </a>
                 <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Type/index');?>">商品分类</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Type/add');?>">添加分类</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Goods/index');?>">商品列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Images/indexdetail');?>">展示图</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Details/index');?>">详情列表</a>
                    </li>
                 
                    
                    <li>
                        <a href="<?php echo U('Goodspl/index');?>">商品评论</a>
                    </li>
                </ul>
            </li>
            
             <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    公告管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Notice/index');?>">公告列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Notice/add_notice');?>">添加公告</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    订单管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Order/order');?>">订单列表</a>
                    </li>
                </ul>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    收件地址管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Adress/adress');?>">地址列表</a>
                    </li>
                </ul>
            </li>
             <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    评论管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Post/post');?>">评论列表</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    视频管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Video/video');?>">视频列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Video/add_video');?>">添加视频</a>
                    </li>
                </ul>
            </li>
          
			<li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    链接管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Link/index');?>">链接列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Link/add');?>">添加链接</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    轮播管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Banner/banner');?>">轮播列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Banner/add_banner');?>">添加轮播</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    网站配置管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Config/config');?>">网站配置列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Config/add_config');?>">配置网站</a>
                    </li>
                </ul>
            </li>

              <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    热门问题管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Question/question');?>">热门问题列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Question/add_question');?>">增加热门问题</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    积分兑换管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Dgoods/index');?>">积分商品列表</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Dgoods/add');?>">增加商品</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    常见问题管理
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Qtype/index');?>">常见问题分类</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Qtype/add');?>">增加分类</a>
                    </li>
                    <li>
                        <a href="<?php echo U('Qpost/index');?>">问题列表</a>
                    </li>
                     <li>
                        <a href="<?php echo U('Qreply/index');?>">回复列表</a>
                    </li>
                     
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fa fa-bar-chart-o fa-fw"></i>
                    回收站
                    <span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo U('Drop/drop');?>">商品回收站列表</a>
                    </li>
                </ul>
            </li>
          
           
                <!-- /.nav-second-level --> </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                <h1 class="page-header">公告添加</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            

<div class="col-lg-6">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>主要内容区main</title>
<link href="../../public/admin/css/css.css" type="text/css" rel="stylesheet" />
<link href="../../public/admin/css/main.css" type="text/css" rel="stylesheet" />
<link rel="../../public/admin/shortcut icon" href="images/main/favicon.ico" />
<style>
body{overflow-x:hidden; background:#f2f0f5; padding:15px 0px 10px 5px;}
#searchmain{ font-size:12px;}
#search{ font-size:12px; background:#548fc9; margin:10px 10px 0 0; display:inline; width:100%; color:#FFF}
#search form span{height:40px; line-height:40px; padding:0 0px 0 10px; float:left;}
#search form input.text-word{height:24px; line-height:24px; width:180px; margin:8px 0 6px 0; padding:0 0px 0 10px; float:left; border:1px solid #FFF;}
#search form input.text-but{height:24px; line-height:24px; width:55px; background:url(images/main/list_input.jpg) no-repeat left top; border:none; cursor:pointer; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666; float:left; margin:8px 0 0 6px; display:inline;}
#search a.add{ background:url(../../public/admin/images/main/add.jpg) no-repeat 0px 6px; padding:0 10px 0 26px; height:40px; line-height:40px; font-size:14px; font-weight:bold; color:#FFF}
#search a:hover.add{ text-decoration:underline; color:#d2e9ff;}
#main-tab{ border:1px solid #eaeaea; background:#FFF; font-size:12px;}
#main-tab th{ font-size:12px; background:url(../../public/admin/images/main/list_bg.jpg) repeat-x; height:32px; line-height:32px;}
#main-tab td{ font-size:12px; line-height:40px;}
#main-tab td a{ font-size:12px; color:#548fc9;}
#main-tab td a:hover{color:#565656; text-decoration:underline;}
.bordertop{ border-top:1px solid #ebebeb}
.borderright{ border-right:1px solid #ebebeb}
.borderbottom{ border-bottom:1px solid #ebebeb}
.borderleft{ border-left:1px solid #ebebeb}
.gray{ color:#dbdbdb;}
td.fenye{ padding:10px 0 0 0; text-align:right;}
.bggray{ background:#f9f9f9; font-size:14px; font-weight:bold; padding:10px 10px 10px 0; width:120px;}
.main-for{ padding:10px;}
.main-for input.text-word{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; padding:0 10px;}
.main-for select{ width:310px; height:36px; line-height:36px; border:#ebebeb 1px solid; background:#FFF; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#666;}
.main-for input.text-but{ width:100px; height:40px; line-height:30px; border: 1px solid #cdcdcd; background:#e6e6e6; font-family:"Microsoft YaHei","Tahoma","Arial",'宋体'; color:#969696; float:left; margin:0 10px 0 0; display:inline; cursor:pointer; font-size:14px; font-weight:bold;}
#addinfo a{ font-size:14px; font-weight:bold; background:url(../../public/admin/images/main/addinfoblack.jpg) no-repeat 0 1px; padding:0px 0 0px 20px; line-height:45px;}
#addinfo a:hover{ background:url(../../public/admin/images/main/addinfoblue.jpg) no-repeat 0 1px;}
</style>
</head>
<body>
<!--main_top-->
<table width="99%" border="0" cellspacing="0" cellpadding="0" id="searchmain">
  <tr>
    <td width="99%" align="left" valign="top">您的位置：公告管理&nbsp;&nbsp;>&nbsp;&nbsp;添加公告</td>
  </tr>
  <tr>
    <td align="left" valign="top" id="addinfo">
    <a href="add.html" target="mainFrame" onFocus="this.blur()" class="add">添加公告信息</a>
    </td>
  </tr>
  <tr>
    <td align="left" valign="top">
    <form method="post" action="<?php echo U('Notice/insert');?>">
    <table width="100%" border="0" cellspacing="0" cellpadding="0" id="main-tab">
      
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">公告内容：</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input type="text" name="content" value="" class="text-word">
        </td>
        </tr>
         
        <input type="hidden" name="ntime" value="<?php echo time();?>" class="text-word">
        
      <tr onMouseOut="this.style.backgroundColor='#ffffff'" onMouseOver="this.style.backgroundColor='#edf5ff'">
        <td align="right" valign="middle" class="borderright borderbottom bggray">&nbsp;</td>
        <td align="left" valign="middle" class="borderright borderbottom main-for">
        <input name="" type="submit" value="提交" class="text-but">
        <input name="" type="reset" value="重置" class="text-but"></td>
        </tr>
    </table>
    </form>
    </td>
    </tr>
</table>
</body>
</html>                                   
                                     
                                
                                 

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Admin/adress.js"></script>
    <!-- <script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/Admin/jquery-1.11.3.min.js"></script> -->

    <!-- Metis Menu Plugin JavaScript -->
    <script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/dist/js/sb-admin-2.js"></script>

    
    <script>
    var url = '/xiangmu/xiangmu/MeiZu-SunShine/index.php/Admin';
    </script>
    <script>var src='/xiangmu/xiangmu/MeiZu-SunShine/Public';</script>
    <script src="/xiangmu/xiangmu/MeiZu-SunShine/Public/dist/js/user_list.js"></script>



</body>

</html>