<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖南科技大学教学评估网_工作动态展示</title>
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/main_page.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/public_list.css" />
    <script type="text/javascript" src="/js/jquery.min.js"></script>
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>
    <style type="text/css">
    body {
        background: #F4F4F4;
    }
    
    .inform-title {
        background-image: url('/mooc/Public/img/inform-title.jpg');
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
        height: 60px;
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
    </style>
</head>

<body>
    <!-- 放置学校的logo,搜索框 -->
    <div class="hwrap">
        <div class="bg-shadow"></div>
    </div>
    <!-- 放置学校的logo,搜索框 -->
    <div class="container">
        <div class="row">
            <div class="head clearfix">
                <div class="head_img">
                    <a class="bg">
                        <img src="/mooc/Public/img/banner3.png" alt="暂无图片" title="湖南科技大学" height="180">
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="body">
        <div class="container">
            <div class="navwarp">
                <div class="navbar">
                    <ul class="nav navbar-nav">
                        <li><a href="/mooc">网站首页</a></li>
                        <li><a href="/mooc/index.php/more?type=4&d=inform">评估动态</a></li>
                        <li><a href="/mooc/index.php/more?type=1&d=inform">政策文件</a></li>
                        <li><a href="/mooc/index.php/more?type=2&d=inform">专项评估</a></li>
                        <li><a href="/mooc/index.php/more?type=3&d=inform">教学礼拜</a></li>
                        <li><a href="/mooc/index.php/more?type=5&d=inform">教学督导</a></li>
                        <li><a href="/mooc/index.php/more?type=6&d=file">下载专区</a></li>
                        <li><a href="/mooc/index.php/more?type=7&d=file">他山之石</a></li>
                    </ul>
                    <ul class="nav navbar-nav pull-right">
                        <li><a href="#" title="湖南科技大学主页" target="_blank">科大主页</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- 导航栏设置 -->
        <div class="row">
            <!-- 文件内容展示 -->
            <div class="col-md-12" style="padding-left:10px;">
                <div style="padding-top:40px"></div>
                <div class="inform-title">公告通知</div>
                <?php echo (htmlspecialchars_decode($content)); ?>
            </div>
        </div>
    </div>
    <div class="footer clearfix">
        <div class="footer-center">
            湖南科技大学大学版权所有©1996,2000,2010年
            <br> 邮箱：xcb@hnust.edu.cn 网址：www.hnust.edu.cn 地址：湖南·湘潭市桃园路(411201) 电话：0731-58290011
            <br> 招生：0731-58273804(05、08)
        </div>
    </div>
</body>

</html>