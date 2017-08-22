<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <title> 修改密码</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link href="/Public/css/bootstrap.min.css?v=3.3.6" rel="stylesheet">
    <link href="/Public/css/font-awesome.css?v=4.4.0" rel="stylesheet">
    <link href="/Public/css/animate.css" rel="stylesheet">
    <link href="/Public/css/style.css?v=4.1.0" rel="stylesheet">
    <style type="text/css">
    .wrapper1{
      margin-top: 60px;
    }
    </style>
    <script type="text/javascript">
        var APP="/index.php";
        var PUBLIC="/Public";
    </script>
</head>

<body class="gray-bg" >
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 wrapper1">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>修改密码</h5>
                        <div class="ibox-tools">

                        </div>
                    </div>
                    <div class="ibox-content">
                        <form class="form-horizontal m-t" id="signupForm" autocomplete="false">
                            <div class="form-group">
                                <label class="col-sm-3 control-label">旧密码：</label>
                                <div class="col-sm-8">
                                    <input id="old_password" name="old_password" class="form-control" type="password" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label">新密码：</label>
                                <div class="col-sm-8">
                                    <input id="new_password" name="new_password" class="form-control" type="password" required>
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请输入您的新密码</span>
                                </div>
                            </div>
                             <div class="form-group">
                                <label class="col-sm-3 control-label">确认新密码：</label>
                                <div class="col-sm-8">
                                    <input id="confirm_password" name="confirm_password" class="form-control" type="password" required onBlur="blur1()">
                                    <span class="help-block m-b-none"><i class="fa fa-info-circle"></i> 请再次输入您的新密码</span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-3">
                                    <button id="submit" class="btn btn-primary" type="button">提交</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- 全局js -->
    <script src="/Public/js/jquery.min.js?v=2.1.4"></script>
    <script src="/Public/js/bootstrap.min.js?v=3.3.6"></script>

    <!-- 自定义js -->
    <script src="/Public/js/content.js?v=1.0.0"></script>
    <script src="/Public/js/own/change_password.js"></script>

</body>

</html>