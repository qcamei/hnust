<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">
    <title>后台管理主页</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css?v=3.3.6" />
    <link rel="stylesheet" type="text/css" href="/Public/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/style.css?v=4.1.0" />
    <style type="text/css">
    body {
        min-width: 1170px;
        overflow: scroll !important;
    }
    </style>
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">后台管理</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">后台管理
                        </div>
                    </li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope">分类</span>
                    </li>
                    <li>
                        <a class="J_menuItem" href="/index.php/admin?target=index_v1">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    <li class="line dk"></li>
                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope">分类</span>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">上传管理</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li><a class="J_menuItem" href="/index.php/admin?target=editorNews">编辑通知</a></li>
                            <li><a class="J_menuItem" href="/index.php/admin?target=inform_notice">通知管理</a></li>
                        </ul>
                    </li>
                    <?php if($nickname['authority'] == 0): ?><li class="line dk"></li>
                        <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                            <span class="ng-scope"></span>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">用户管理</span><span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li><a class="J_menuItem" href="/index.php/admin?target=regedit">注册</a></li>
                                <!-- del_user -->
                                <li><a class="J_menuItem" href="/index.php/admin?target=del_user">用户管理</a></li>
                            </ul>
                        </li><?php endif; ?>
                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1" style="min-width: 1170px;">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info" href="#"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <div class="dropdown pull-right" id="show" style="height: 100%;padding: 7px;">
                        <a class="dropdown-toggle btn btn-default">
                            <span class="glyphicon glyphicon-user"></span> <?php echo ($nickname['nickname']); ?>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="J_menuItem" href="/index.php/admin?target=change_password" alt="修改密码">修改密码</a></li>
                            <li><a href="/index.php/logout" alt="退出登录">退出登录</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main">
                <iframe id="J_iframe" width="100%" height="100%" src="/index.php/admin?target=index_v1" frameborder="0" data-id="_adminTPL_/index_v1.html" seamless></iframe>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>
    <!-- 全局js -->
    <script type="text/javascript" src="/Public/js/jquery.min.js?v=2.1.4"></script>
    <script type="text/javascript" src="/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script type="text/javascript" src="/Public/js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script type="text/javascript" src="/Public/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script type="text/javascript" src="/Public/js/plugins/layer/layer.min.js"></script>
    <script type="text/javascript" src="/Public/js/hAdmin.js?v=4.1.0"></script>
    <script type="text/javascript" src="/Public/js/index.js"></script>
    <script type="text/javascript">
    $('#show').hover(function(e) {
        // e.stopPropagation();
        $('.dropdown').addClass('open');
    },function(e){
        $('.dropdown').removeClass('open');
    });
    
    </script>
</body>

</html>