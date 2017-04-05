<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 富文本编辑器</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/bootstrap.min.css?v=3.3.6" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/style.css?v=4.1.0" />
    <script type="text/javascript">
    var ROOT = "/mooc";
    var APP = "/mooc/index.php";
    var PUBLIC = "/mooc/Public";
    </script>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>请编辑新闻内容</h5>
                    </div>
                    <div class="ibox-content" id="eg">
                        <div class="row" style="border-bottom:1px solid rgb(40,137,221); margin-bottom:10px;">
                            <div class="col-sm-8 col-md-8">
                                <form class="form-horizontal" id="postfile" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="headline" class="col-sm-3 control-label">标题</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" id="headline" placeholder="请输入标题" style="overflow-y: hidden; resize: none;" _height="88" required name="title"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="author" class="col-sm-3 control-label">作者</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="author" placeholder="作者" name="author">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="source" class="col-sm-3 control-label">来源</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="source" placeholder="来源" required name="source">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-3 control-label">上传时间</label>
                                        <div class="col-sm-9">
                                            <input id="time" class="laydate-icon form-control layer-date" data-mask="9999-99-99" required name='time'>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="col-sm-3 control-label">类型</label>
                                           <div class="col-md-3">
                                                <select id="type_choice" class="form-control" onchange="img_show()" name="type">
                                                    <option value="0">公告通知</option>
                                                    <option value="1">政策文件</option>
                                                    <option value="2">专项评估</option>
                                                    <option value="3">教学礼拜</option>
                                                    <option value="4">评估动态</option>
                                                    <option value="5">教学督导</option>
                                                    <option value="6">下载专区</option>
                                                    <option value="7">他山之石</option>
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-sm-4" id="files">
                                        <input type="file" id="up" name="file" />
                                        <div><img id="ImgPr" width="150" height="150" /></div>
                                    </div>
                            </div>
                            </form>
                        </div>
                        <!-- ueditor编辑器 -->
                        <div class="row">
                            <script id="editor" name="content" type="text/plain" style="width:100%;height:400px;">
                            </script>
                            <!-- 配置文件 -->
                            <script type="text/javascript" src="/mooc/Public/js/utf8-php/ueditor.config.js"></script>
                            <!-- 编辑器源码文件 -->
                            <script type="text/javascript" src="/mooc/Public/js/utf8-php/ueditor.all.js"></script>
                            <!-- 实例化编辑器 -->
                            <div style="margin-top:10px;">
                                <button class="btn btn-default" onclick="submit1()" style="margin-right:5px;margin-top">提交</button>
                                <button class="btn btn-default" onclick="clearLocalData()" style="margin-right:5px;">清空</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="/mooc/Public/js/jquery.min.js?v=2.1.4"></script>
    <script type="text/javascript" src="/mooc/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script type="text/javascript" src="/mooc/Public/js/content.js?v=1.0.0"></script>
    <script type="text/javascript" src="/mooc/Public/js/plugins/iCheck/icheck.min.js"></script>
    <script type="text/javascript" src="/mooc/Public/js/plugins/layer/laydate/laydate.js"></script>
    <script type="text/javascript" src="/mooc/Public/js/own/editorNews.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });

    });
    </script>
    <script type="text/javascript">
    $(function() {
        // 隐藏图片框
        $('#files').hide();

        $("#up").uploadPreview({
            Img: "ImgPr",
            Width: 150,
            Height: 150
        });
    });
    </script>
    <script>
    //外部js调用
    laydate({
        elem: '#hello', //目标元素。由于laydate.js封装了一个轻量级的选择器引擎，因此elem还允许你传入class、tag但必须按照这种方式 '#id .class'
        event: 'focus' //响应事件。如果没有传入event，则按照默认的click
    });
    </script>
    <!-- 自定义js -->
    <!-- <script src="js/content.js?v=1.0.0"></script> -->
    <!-- 全局js -->
</body>

</html>