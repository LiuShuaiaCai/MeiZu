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
                <h1 class="page-header">商品列表</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
  <div class="panel panel-default">
        <div class="panel-heading">
             商品列表
        </div>
        <div class="panel-body">
            <div class="dataTable_wrapper">
                <div class="dataTables_wrapper form-inline dt-bootstrap no-footer" id="dataTables-example_wrapper">
                
                <br>
                <div class="row">
                  <div class="col-sm-12">
                    <table aria-describedby="dataTables-example_info" role="grid" class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example">
                        <thead>
                          <tr role="row">
                            
                            <th aria-label="Platform(s): activate to sort column ascending" style="width: 150px;" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">
                              商品名称
                            </th>
                          
                                <th aria-label="Engine version: activate to sort column ascending" style="width: 80px;" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">
                                    状态
                                </th>
                                <th aria-label="Engine version: activate to sort column ascending" style="width: 80px;" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">
                                    热卖
                                </th>
                                <th aria-label="Engine version: activate to sort column ascending" style="width: 80px;" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">
                                    价格
                                </th>
                                
                                
                                <th aria-label="Engine version: activate to sort column ascending" style="width: 100px;" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">
                                    图片
                                </th>
                                
                            <th aria-label="CSS grade: activate to sort column ascending" style="width: 170px;" colspan="1" rowspan="1" aria-controls="dataTables-example" tabindex="0" class="sorting">
                              操作
                            </th>
                          </tr>
                        </thead>
                        <tbody>
                            <?php if(is_array($data)): foreach($data as $key=>$vo): ?><tr role="row" class="gradeA odd">
                                
                                <td><?php echo ($vo['tname']); ?></td>
                               
                                <td><?php echo ($vo['drop']==1 ? '正常' : '加入回收站'); ?></td>
                                <td>
                                <?php switch($vo["hot"]): case "1": ?>特惠<?php break;?>
                                    <?php case "2": ?>现货<?php break;?>
                                    <?php case "3": ?>赠品<?php break;?>
                                    <?php case "4": ?>热卖<?php break;?>
                                    <?php case "5": ?>新品<?php break; endswitch;?>
                                </td>

                                <td><?php echo ($vo['price']); ?></td>
                                <td><img src="/xiangmu/xiangmu/MeiZu-SunShine/Public/<?php echo empty($vo['pic']) ? 'default.jpg' : $vo['pic'];?>" width="80" alt="" height="30"></td>
                                
                                <td>&nbsp;&nbsp;&nbsp;<a href="<?php echo U('Drop/enable');?>?id=<?php echo ($vo['id']); ?>&dels=<?php echo ($vo['dels']); ?>
                    "><?php echo ($vo['dels']==1?'加入回收站':'恢复'); ?></a></td>
                            </tr><?php endforeach; endif; ?>
                        </tbody>
                        </table>
                    </div>
                    </div>
                  <div class="row">
                            <div class="col-sm-8">
                                <div aria-live="polite" role="status" id="dataTables-example_info" class="dataTables_info">
                                </div>
                            </div>
                        <div class="col-sm-4">
                            <div id="dataTables-example_paginate" class="dataTables_paginate paging_simple_numbers">
                                <ul class="pagination">
                                    <li id="dataTables-example_previous" tabindex="0" aria-controls="dataTables-example" class="paginate_button previous disabled">
                                        <tr>
                                            <td><?php echo ($show); ?></td>
                                        </tr>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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