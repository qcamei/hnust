<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/bootstrap.min.css" />,
    <script type="text/javascript" src="/mooc/Public/js/jquery.min.js"></script>
    <style type="text/css">
    body {
        background: #f6f6f6;
    }
    
    .wrap {
        background: #fff;
        box-shadow: 0 0 5px;
        padding: 20px;
        border-radius: 5px;
        margin-top: 100px;
        display: none;
    }
    
    #regedit {
        width: 600px;
        margin-left: auto;
        margin-right: auto;
        /*height: 600px;*/
        margin-top: 50px;
        padding: 20px 15px;
        border-radius: 5px;
    }
    
    #msg:empty,
    #error:empty {
        display: none;
    }
    
    #msg,
    #error {
        text-align: center;
    }
    
    .form-group:not(:last-child) {
        margin-bottom: 30px;
    }
    
    .heading {
        padding: 10px 15px;
        font-size: 20px;
        border-bottom: 1px solid #ddd;
    }
    
    .icon {
        border-left: 3px solid #59AfE4;
        margin-right: 3px;
    }
    
    #regedit .btn {
        padding: 10px;
        font-size: 20px;
        width: 100%;
    }
    
    .hint>.alert {
        position: absolute;
        top: 20px;
        left: 0;
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 hint">
                <div class="alert alert-danger" id="error"></div>
            </div>
            <div class="col-xs-8 col-xs-offset-2  wrap">
                <div class="col-xs-12">
                    <div class="alert alert-warning" id="msg"></div>
                </div>
                <div class="heading"><span class="icon"></span>注册账号</div>
                <form rol="form" method="post" id="regedit" class="form-horizontal">
                    <div class="form-group">
                        <label for="username" class="control-label col-xs-4">用户名:</label>
                        <div class="col-xs-6">
                            <input id="username" type="text" name="nickname" placeholder="请输入用户名" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nickname" class="control-label col-xs-4">昵称:</label>
                        <div class="col-xs-6">
                            <input id="nickname" type="text" name="nickname" placeholder="请输入昵称" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="oldpsw" class="control-label col-xs-4">密码:</label>
                        <div class="col-xs-6">
                            <input id="oldpsw" type="password" name="old" placeholder="请输入旧密码" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="newpsw" class="control-label col-xs-4">确认密码:</label>
                        <div class="col-xs-6">
                            <input id="newpsw" type="password" name="new" placeholder="请输入新密码" class="form-control">
                        </div>
                        <div class="help-block"></div>
                    </div>
                    <div class="form-group">
                        <div class=" col-xs-6 col-xs-offset-4 ">
                            <div class=" radio-inline">
                                <label>
                                    <input type="radio" name="power" value="0" checked>管理员
                                </label>
                            </div>
                            <div class="radio-inline">
                                <label>
                                    <input type="radio" name="power" value="1">用户
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class=" col-xs-6 col-xs-offset-4 ">
                            <button type="button" class="btn btn-info pull-right" id="submit">注册</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    $('.wrap').fadeIn(1000);
    $('#submit').on('click', function(e) {
        var username = $('#username').val().trim();
        var nickname = $('#nickname').val().trim();
        var oldpsw = $('#oldpsw').val().trim();
        var newpsw = $('#newpsw').val().trim();
        var power = $('input[type="radio"]:checked').val();
        if (username == '') {
            $('#msg').fadeIn(1000).text('用户名不能为空').fadeOut(3000);
        } else if (nickname == '') {
            $('#msg').fadeIn(1000).text('昵称不能为空').fadeOut(3000);
        } else if (newpsw == '' || oldpsw == '') {
            $('#msg').fadeIn(1000).text('密码不能为空').fadeOut(3000);
        } else if (newpsw != oldpsw) {
            $('#msg').fadeIn(1000).text('两次输入的密码不一致').fadeOut(1000);
        } else {
            $.ajax({
                url: '/mooc/index.php/regedit',
                type: 'post',
                data: {
                    username: username,
                    nickname: nickname,
                    psw: oldpsw,
                    power: power
                },
                success: function(res) {
                    document.getElementById('error').className='';
                    if (res['r'] == 0){
                        $('#error').addClass('alert alert-success').fadeIn(1000).text(res['error']).fadeOut(1000);
                    }
                    else{
                       $('#error').addClass('alert alert-danger').fadeIn(1000).text(res['error']).fadeOut(1000);
                    }
                },
                error: function(){
                    // console.log(data);
                    alert('服务器错误,请稍后提交');
                }
            });
        }
    });
    $('#newpsw,#oldpsw,#username').on('keyup', function(e) {
        var v = $(this).val();
        var check = v.match(/^[^\w\d\s\$]$/);
        if (check) {
            $('.help-block').text('不能包含非法字符');
            if (!$(this).parent().parent().hasClass('has-error'))
                $(this).parent().parent().addClass('has-error');
        } else {
            $('.help-block').text('');
            if (!$(this).parent().parent().hasClass('has-error'))
                $(this).parent().parent().removeClass('has-error');
        }
    });
    </script>
</body>

</html>