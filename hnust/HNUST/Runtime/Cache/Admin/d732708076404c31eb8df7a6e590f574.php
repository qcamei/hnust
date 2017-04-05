<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 基本表单</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/bootstrap.min.css?v=3.3.6" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/font-awesome.css?v=4.4.0" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/plugins/iCheck/custom.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/style.css?v=4.1.0" />
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>请填写文件相关信息 </h5>
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <form class="form-horizontal" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="filename" class="col-sm-2 control-label">文件名</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="filename" placeholder="文件名" name="filename">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="Uploader" class="col-sm-2 control-label">上传者</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="Uploader" placeholder="上传者" name="author">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="fileclassify" class="col-sm-2 control-label">选择文件分类</label>
                                    <div class="col-sm-6">
                                        <select class="form-control" name="type">
                                            <option value="0">政策文件</option>
                                            <option value="1">下载专区</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">上传时间</label>
                                    <div class="col-sm-10">
                                        <input id="hello" class="laydate-icon form-control layer-date">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputFile" class="col-sm-2 control-label">选择文件</label>
                                    <div class="col-sm-10">
                                        <input type="file" id="exampleInputFile" name="myfile[]" multiple>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-sm btn-info">确定</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 全局js -->
    <script type="text/javascript" src="/mooc/Public/js/jquery.min.js?v=2.1.4"></script>
    <script type="text/javascript" src="/mooc/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script type="text/javascript" src="/mooc/Public/js/content.js?v=1.0.0"></script>
    <script type="text/javascript" src="/mooc/Public/js/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="/mooc/Public/js/plugins/layer/laydate/laydate.js"></script>
    <!-- 自定义js -->
    <!-- <script src="js/content.js?v=1.0.0"></script> -->
    <!-- iCheck -->
    <!-- <script src="js/plugins/iCheck/icheck.min.js"></script> -->
    <script>
    var ROOT = "/mooc";
    var APP = "/mooc/index.php";
    var URL = "/mooc/index.php/Admin/Index";
    $(document).ready(function() {
        $('form').attr("action", APP + "/upload");
        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });
    </script>
    <!-- layerDate plugin javascript -->
    <!-- <script src="js/plugins/layer/laydate/laydate.js"></script> -->
    <script>
    //外部js调用
    laydate({
        elem: '#hello', //目标元素。由于laydate.js封装了一个轻量级的选择器引擎，因此elem还允许你传入class、tag但必须按照这种方式 '#id .class'
        event: 'focus' //响应事件。如果没有传入event，则按照默认的click
    });
    </script>
</body>

</html>