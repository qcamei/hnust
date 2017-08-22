<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖南科技大学教学评估网</title>
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/main_page.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/jquery-letterfx.min.css" />
    <script type="text/javascript" src="/pinggu/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/pinggu/Public/js/tuxsudo.min.js"></script>
    <script type="text/javascript" src="/pinggu/Public/js/jquery-letterfx.min.js"></script>
    <script type="text/javascript" src="/pinggu/Public/js/main.js"></script>
    <style type="text/css">
    body {
        overflow: scroll;
        background: #F4F4F4;
        min-width: 1190px;
    }

    .container {
        min-width: 1190px;
    }

    .Container {
        width: 900px;
        margin: 0 auto;
    }

    .inform-title {
        background-image: url('/pinggu/Public/img/inform-title.jpg');
        background-size: 100% 52px;
        height: 52px;
        line-height: 52px;
        text-align: center;
        color: #fff;
        font-size: 24px;
    }

    .list-group-item a {
        display: inline-block;
        text-decoration: none;
        font-size: 12px;
        color: #555;
    }

    #new_show {
        padding: 0;
        margin: 0;
    }

    .local {
        display: inline-block;
        width: 100%;
        height: 100%;
    }

    .news-title {
        /*height: 60px;*/
        line-height: 60px;
        text-align: center;
        padding: 5px 10px;
    }

    .news-other {
        font-size: 12px;
        color: rgb(149, 149, 149);
        text-align: center;
        margin-bottom: 20px;
    }

    .news-other span {
        font-size: 12px;
    }

    .split {
        border-bottom: 2px solid rgba(149, 149, 149, .6);
    }
    .panel-body {
        position: relative;
    }
    </style>
</head>

<body>
    <!-- 放置学校的logo,搜索框 -->
    <div class="top-body">
    <div class="hwrap">
        <img src="/pinggu/Public/img/3hnust.png" width="100%" height="100%">
    </div>
    <div class="head clearfix">
        <a class="logo" href="javascript:void(0)" title="本科教学工作评估网">
            <img src="/pinggu/Public/img/banner3.png" alt="暂无图片" title="湖南科技大学">
        </a>
        <span href="javascript:void(0)" class="banner-text">本科教学工作审核评估网</span>
        <div class="top-title">以评<strong>促建</strong> 以评<strong>促</strong>改 以评<strong>促</strong>管 评建<strong>结合</strong> 重在<strong>建设</strong></div>
    </div>
</div>

    <!-- 导航栏设置 -->
    <!-- <div class="body"> -->
<div class="container body">
    <div class="navwarp row">
        <div class="navbar">
            <div class="navbar-header">
                <button class="navbar-toggle banner-responsive" type="button" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="/">网站首页</a></li>
                    <li><a href="/pinggu/index.php/more?type=4&d=inform">评估动态</a></li>
                    <li><a href="/pinggu/index.php/more?type=0&d=inform">公告通知</a></li>
                    <li><a href="/pinggu/index.php/more?type=1&d=inform">政策文件</a></li>
                    <li><a href="/pinggu/index.php/more?type=2&d=inform">专项评估</a></li>
                    <li><a href="/pinggu/index.php/more?type=3&d=inform">教学礼拜</a></li>
                    <li><a href="/pinggu/index.php/more?type=5&d=inform">教学督导</a></li>
                    <li><a href="/pinggu/index.php/more?type=6&d=file">下载专区</a></li>
                    <li><a href="/pinggu/index.php/more?type=7&d=file">他山之石</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="http://www.hnust.edu.cn/" title="湖南科技大学主页" target="_blank">科大主页</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->

    <div class="Container">
        <!-- 导航栏设置 -->
        <!-- 文件内容展示 -->
        <div class="" style="padding-left:10px;">
            <div style="padding-top:40px"></div>
            <div class="inform-title">公告通知</div>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="news-title"><?php echo ($content['title']); ?></h3>
                    <div class="news-other">
                        作者：<span><?php echo ($content['author']); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;来源：<span><?php echo ($content['source']); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;上传时间：<span><?php echo ($content['time']); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;点击量：<span><?php echo ($content['clicknum']); ?></span>
                    </div>
                    <div class="split"></div>
                </div>
                <div class="panel-body" style="padding: 20px">
                    <?php echo (htmlspecialchars_decode($content['content'])); ?>
                </div>
            </div>
        </div>
    </div>
    <!-- 底部设置 -->
     <div class="footer clearfix">
        <!-- <div class="login">
            <a href="/pinggu/index.php/login" title="管理员登录" target="_blank">管理员登录</a>
        </div> -->
        <div class="footer-center">
            湖南科技大学大学版权所有©1996,2000,2010年
            <br>地址：湖南·湘潭市桃园路(411201) 电话：0731-58290102
        </div>
</div>
    <script type="text/javascript">
    var animition = new Animition();
    animition.textAnimition();
    </script>
</body>

</html>