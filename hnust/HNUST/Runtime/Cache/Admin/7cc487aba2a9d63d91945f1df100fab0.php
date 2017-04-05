<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/bootstrap.min.css?v=3.3.6" />
    <script type="text/javascript" src="/mooc/Public/js/jquery.min.js?v=2.1.4"></script>
    <style type="text/css">
    /*#oldpsw,
    #newpsw,
    #cnewpsw {
        width: 300px;
    }*/
    
    #uppsw {
        width: 600px;
        margin-left: auto;
        margin-right: auto;
        /*height: 600px;*/
        margin-top: 100px;
    }
    #cpsw:empty{
         display: none;
    }
    #cpsw{
    	  text-align: center;
    }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
             <div class="col-xs-10">
                <div class="alert alert-warning" id="cpsw"></div>
             </div>
            <form rol="form" method="post" id="uppsw" class="form-horizontal">
                <div class="form-group">
                    <label for="oldpsw" class="control-label col-xs-4">旧密码:</label>
                    <div class="col-xs-6">
                        <input id="oldpsw" type="password" name="old" placeholder="请输入旧密码" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="newpsw" class="control-label col-xs-4">新密码:</label>
                    <div class="col-xs-6">
                        <input id="newpsw" type="password" name="new" placeholder="请输入新密码" class="form-control">
                    </div>
                    <div class="help-block"></div>
                </div>
                <div class="form-group">
                    <label for="cnewpsw" class="control-label col-xs-4">再次输入新密码:</label>
                    <div class="col-xs-6">
                        <input id="cnewpsw" type="password" name="cnew" placeholder="请再次输入新密码" class="form-control">
                    </div>
                    <div class="help-block"></div>
                </div>
                <div class="form-group col-xs-10">
                    <button type="button" class="btn btn-info pull-right" id="submit">提交</button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript">
    $('#submit').on('click', function(e) {
    	var oldpsw = $('#oldpsw').val();
        var newpsw = $('#newpsw').val();
        var cnewpsw = $('#cnewpsw').val();
        if(newpsw==''||cnewpsw==''||oldpsw==''){
        	 $('.alert').fadeIn(1000).text('密码不能为空').fadeOut(3000);
        }
        if(newpsw!=cnewpsw){
             $('.alert').fadeIn(1000).text('两次输入的密码不一致').fadeOut(3000);
        }
    });
    $('#newpsw,#cnewpsw').on('keyup', function(e) {
        var v=$(this).val();
        var check=v.match(/^[^\w\d\s]$/);
        if(check){
          $('.help-block').text('包含非法字符');
          $(this).parent().parent().addClass('has-error');
        }else{
          $('.help-block').text('');
          $(this).parent().parent().removeClass('has-error');
        }
    });
    </script>
</body>

</html>