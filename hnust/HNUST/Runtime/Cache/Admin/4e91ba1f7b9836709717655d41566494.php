<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> 公告文件</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico"> 
    <link href="/mooc/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/mooc/Public/css/font-awesome.css" rel="stylesheet">
    <link href="/mooc/Public/css/animate.css" rel="stylesheet">
    <link href="/mooc/Public/css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="/mooc/Public/css/style.css?v=4.1.0" rel="stylesheet">
    <script src="/mooc/Public/js/jquery.min.js?v=2.1.4"></script>
    <script type="text/javascript">
       var ROOT="/mooc";
       var APP="/mooc/index.php";
     var PUBLIC="/mooc/Public";
    </script>
</head>
<body class="gray-bg">
  <div class="wrapper wrapper-content">
    <div class="row">
      <div class="col-sm-12">
        <div class="ibox float-e-margins">
          <div class="ibox-title">
              <h5>编辑公告</h5>
          </div>
          <div class="ibox-content" id="eg">
            <div class="row" >
              <form class="form-horizontal " style="border-bottom:1px solid rgb(40,137,221); margin-bottom:10px;" >
                  <div class="form-group">
                    <label for="headline" class="col-sm-2 control-label">标题</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" id="headline" placeholder="标题" required>
                    </div>
                  </div>
                 <div class="form-group">
                    <label class="col-sm-2 control-label" >发布日期</label>
                    <div class="col-sm-7">
                        <input id="hello" class="laydate-icon form-control layer-date" data-mask="9999-99-99" required>
                    </div>
                   </div>
                  <div class="form-group">
                    <label for="type" class="col-sm-2 control-label">类型</label>
                    <div class="col-sm-3">
                      <select id="type_choice" class="form-control">
                        <option value="5">公告通知</option>
                      </select>
                    </div>
                  </div>
                </form>
            <!-- ueditor编辑器 -->
              <script id="editor" name="content" type="text/plain" style="height:400px;">
                  这里写你的初始化内容
              </script>
              <!-- 配置文件 -->
              <script type="text/javascript" src="utf8-php/ueditor.config.js"></script>
              <!-- 编辑器源码文件 -->
              <script type="text/javascript" src="utf8-php/ueditor.all.js"></script>
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
    <!-- 全局js -->
    <script src="/mooc/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <script src="/mooc/Public/js/plugins/iCheck/icheck.min.js"></script>
        <!-- 自定义js -->
    <script src="/mooc/Public/js/content.js?v=1.0.0"></script>
     <!-- layerDate plugin javascript -->
    <script src="/mooc/Public/js/plugins/layer/laydate/laydate.js"></script>
    <script src="/mooc/Public/js/own/notice.js"></script>
<script type="text/javascript">
  $(document).ready(function () {

    $('.i-checks').iCheck({
        checkboxClass: 'icheckbox_square-green',
        radioClass: 'iradio_square-green',
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
</body>

</html>