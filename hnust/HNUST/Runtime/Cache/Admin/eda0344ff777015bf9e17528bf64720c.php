<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title>公告管理</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="/mooc/Public/favicon.ico"> 
    <link href="/mooc/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/mooc/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">

    <!-- jqgrid-->
    <link href="/mooc/Public/css/plugins/jqgrid/ui.jqgrid.css?0820" rel="stylesheet">

    <link href="/mooc/Public/css/animate.css" rel="stylesheet">
    <link href="/mooc/Public/css/style.css?v=4.1.0" rel="stylesheet">
    <script type="text/javascript">
       var ROOT="/mooc";
       var APP="/mooc/index.php";
       var PUBLIC="/mooc/Public";
    </script>

    <style>
        /* Additional style to fix warning dialog position */

        #alertmod_table_list_2 {
            top: 900px !important;
        }
    </style>

</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content  animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                
                    <div class="ibox-content">

                        <div class="jqGrid_wrapper">
                            <table id="table_list_2"></table>
                            <div id="pager_list_2"></div>
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