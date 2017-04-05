<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> - jqGird</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/bootstrap.min.css?v=3.3.6" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/font-awesome.css?v=4.4.0" />
    
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/plugins/jqgrid/ui.jqgrid.css?0820" />
  
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/style.css?v=4.1.0" />
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
    <script type="text/javascript" src="/mooc/Public/js/jquery.min.js?v=2.1.4"></script>
    <script type="text/javascript" src="/mooc/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script type="text/javascript" src="/mooc/Public/js/plugins/peity/jquery.peity.min.js"></script>
    <script type="text/javascript" src="/mooc/Public/js/plugins/jqgrid/i18n/grid.locale-cn.js?0820"></script>
    <script type="text/javascript" src="/mooc/Public/js/plugins/jqgrid/jquery.jqGrid.min.js?0820"></script>
    <!-- 自定义js -->
    <script type="text/javascript" src="/mooc/Public/js/content.js?v=1.0.0"></script>

    <!-- Page-Level Scripts -->
    <script>
     var ROOT="/mooc";
     var APP="/mooc/index.php";
     var URL="/mooc/index.php/Admin/Index";
        $.ajax({
            type:"GET",
            url:APP+"/getfileList",
            success:successget,
            error:errorfun
        });
        function errorfun(){
            alert('获取数据失败');
        }
        function successget(data){
             $.jgrid.defaults.styleUI = 'Bootstrap';
             var mydata =data;
             console.log(data);
            $("#table_list_2").jqGrid({
                data: mydata,
                datatype: "local",
                height: 450,
                autowidth: true,
                shrinkToFit: true,
                rowNum: 15,
                rowList: [10, 20, 30],
                cellsubmit:'remote',
                editurl:APP+'/updateFile',
                colNames: ['序号', '文件名', '分类', '作者', '来源', '时间'],
                colModel: [
                    {
                        name: 'id',
                        index: 'id',
                        editable: true,
                        width: 20,
                        sorttype: "int",
                        search: true
                    },
                    {
                        name: 'filename',
                        index: 'filename',
                        editable: true,
                        width: 130,
                        sorttype: "text",
                        formatter: "text"
                    },
                    {
                        name: 'type',
                        index: 'type',
                        editable: true,
                        width: 100
                    },
                    {
                        name: 'author',
                        index: 'author',
                        editable: true,
                        width: 80,
                        align: "right",
                        sorttype: "float",
                    },
                    {
                        name: 'link',
                        index: 'link',
                        editable: true,
                        width: 80,
                        align: "right",
                        sorttype: "float"
                    },
                    {
                        name: 'time',
                        index: 'time',
                        editable: true,
                        width: 80,
                        align: "right",
                        sorttype: "float"
                    },
                ],
                pager: "#pager_list_2",
                viewrecords: true,
                caption: "文件列表",
                add: true,
                edit: true,
                addtext: 'Add',
                edittext: 'Edit',
                hidegrid: false
            });

            // Add selection
            $("#table_list_2").setSelection(4, true);


            // Setup buttons
            $("#table_list_2").jqGrid('navGrid', '#pager_list_2', {
                edit: true,
                add: true,
                del: true,
                search: true
            }, {
                height: 200,
                reloadAfterSubmit: true,
            });

            // Add responsive to jqGrid
            $(window).bind('resize', function () {
                var width = $('.jqGrid_wrapper').width();
                $('#table_list_2').setGridWidth(width);
            });

        }     
    </script>
</body>

</html>