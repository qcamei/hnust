<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>公告管理</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/mooc/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/mooc/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- jqgrid-->
    <link href="/mooc/Public/css/plugins/jqgrid/ui.jqgrid.css?0820" rel="stylesheet">

    <link href="/mooc/Public/css/animate.css" rel="stylesheet">
    <link href="/mooc/Public/css/style.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript">
        var PUBLIC='/mooc/Public';
        var APP='/mooc/index.php';
    </script>
    <style>
        /* Additional style to fix warning dialog position */

        #alertmod_table_list_2 {
            top: 900px !important;
        }
        html,body{
            height: 100%;
        }
        .p1{height:30px;line-height: 30px;}
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                    <div class="form-group" style="margin-bottom:40px;height:100%;">
                        <p for="type" class="col-sm-1 control-label p1">查询类型</p>
                        <div class="col-sm-3">
                            <select id="select" class="form-control" name="type" required style="margin:0;padding:0;" >
                                <option value="0">公告通知</option>
                                <option value="1">政策文件</option>
                                <option value="2">专项评估</option>
                                <option value="3">教学礼拜</option>
                                <option value="4">评估动态</option>
                                <option value="5">教学督导</option>
                                <option value="6">下载专区</option>
                            </select>
                        </div>
                    </div>
                    <div class="ibox-content">
                        <div class="jqGrid_wrapper">
                            <table id="table_list_2"></table>
                            <div id="pager_list_2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 全局js -->
    <script src="/mooc/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/mooc/Public/js/bootstrap.min.js?v=3.3.6"></script>

    <!-- Peity -->
    <script src="/mooc/Public/js/plugins/peity/jquery.peity.min.js"></script>

    <!-- jqGrid -->
    <script src="/mooc/Public/js/plugins/jqgrid/i18n/grid.locale-cn.js?0820"></script>
    <script src="/mooc/Public/js/plugins/jqgrid/jquery.jqGrid.min.js?0820"></script>

    <!-- 自定义js -->
    <script src="/mooc/Public/js/content.js?v=1.0.0"></script>

    <!-- Page-Level Scripts -->
    <script src="/mooc/Public/js/own/inform_notice.js"></script>
</body>

</html>