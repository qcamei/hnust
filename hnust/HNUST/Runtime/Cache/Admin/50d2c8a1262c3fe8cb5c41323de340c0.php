<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <link href="/mooc/Public/css/loginstyle.css" rel='stylesheet' type='text/css' />
    <link href="/mooc/Public/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <script src="/mooc/Public/js/jquery.min.js"></script>
</head>

<body>
    <script>
    $(document).ready(function(c) {
        $('.close').on('click', function(c) {
            $('.login-form').fadeOut('slow', function(c) {
                $('.login-form').remove();
            });
        });
    });
    </script>
    <!--SIGN UP-->
    <h1>湖南科技大学教学评估管理登录</h1>
    <div class="login-form">
        <div class="close"> </div>
        <div class="head-info">
            <label class="lbl-1"> </label>
            <label class="lbl-2"> </label>
            <label class="lbl-3"> </label>
        </div>
        <div class="clear"> </div>
        <div class="avtar">
            <img src="/mooc/Public/img/avtar.png" />
        </div>
        <form method="post" action="/mooc/index.php/login" id="login">
            <div class="help-block" style="color: red;font-size:16px"><?php echo ($error); ?></div>
            <input type="text" class="text" name="username" placeholder="请输入用户名" id='username'>
            <div class="key">
                <input type="password" name="password" placeholder="请输入密码" id="psw">
            </div>
            <div class="signin">
                <input type="submit" value="登录">
            </div>
        </form>
    </div>
    <script type="text/javascript">
    $('input[type="submit"]').click(function(e) {
        console.log('111111');
        e.preventDefault();
        if ($('#username').val() == '') {
            $('#login .help-block').text('用户名不能为空');
        } else if ($('#psw').val() == '') {
            $('#login .help-block').text('密码不能为空');
        } else {
            $('#login').submit();
        }
    });
    </script>
</body>

</html>