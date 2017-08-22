<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta name="keywords" content="湖南科技大学本科教学评估网,湖南科技大学本科教学评估,评估网,教学评估,湖南科大评估">
    <title>湖南科技大学教学评估网</title>
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/main_page.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/style_1.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/jquery-letterfx.min.css" />
    <script type="text/javascript" src="/pinggu/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/pinggu/Public/js/tuxsudo.min.js"></script>
    <script type="text/javascript" src="/pinggu/Public/js/jquery-letterfx.min.js"></script>
    <script type="text/javascript" src="/pinggu/Public/js/carousel.min.js"></script>
    <script type="text/javascript" src="/pinggu/Public/js/main.js"></script>
    <style type="text/css">
    body{
        overflow: scroll;
        min-width:1190px;
    }
    .container{
       min-width:1190px;
    }
    /*左边内容的外框*/
    .nav>li>a{
        padding: 5px 15px;
    }
    .left-wrap {
        padding: 10px 15px;
        width: 880px;
        float: left;
    }

    .right-wrap {
        padding: 10px 15px;
        width: 310px;
        float: left;
    }

    .list-group-item a {
        display: inline-block;
        text-decoration: none;
        font-size: 12px;
        color: #555;
    }

    .local {
        display: inline-block;
        width: 100%;
        height: 100%;
    }

    .news-title {
        /*height:60px;*/
        line-height: 30px;
        text-align: center;
        padding: 5px 10px;
    }

    .news-other {
        font-size: 14px;
        color: rgb(149, 149, 149);
        text-align: center;
        margin-bottom: 20px;
    }

    .split {
        border-bottom: 2px solid rgba(149, 149, 149, .6);
    }

    .list-style {
        margin-bottom: 0;
        border-radius: 5px;
    }

    .left {
        width: 100%;
        height: 48px;
        line-height: 26px;
        padding: 10px 15px;
        padding-left: 0;
        border-bottom: 2px solid #006BB1;
    }

    .left span.title {
        display: inline-block;
        font-size: 18px;
        font-weight: bold;
        color: #5d5d5d;
        padding-left: 5px;
        border-left: 3px solid #379296;
    }

    .left .postion a {
        color: #181717;
    }

    .left .postion a:hover {
        color: #379296;
    }

    .flink {
        text-align: center;
        background-color: #fff;
    }

    .wrap {
        width: 1190px;
        margin-top: 45px;
        margin: 0 auto;
    }

    @media(max-width:970px) {
        #new_show {
            display: none;
        }
    }

    .panel {
        border: 2px solid #eee;
        border-top: none;
    }

    .list-style {
        min-height: 0;
        background: none;
        border: none;
    }
    .panel-body {
        position: relative;
    }
    </style>
</head>

<body>
    <!-- 放置学校的logo,搜索框 -->
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

    <div class="wrap clearfix">
        <!-- 文件内容展示 -->
        <div class="left-wrap">
            <div class="left">
                <span class="title"></span>
                <span class="postion pull-right">您现在的位置： <a href="/pinggu" title="首页">首页</a> >> <a></a> >> 正文</span>
            </div>
            <div class="panel">
                <div class="panel-heading">
                    <h3 class="news-title"><?php echo ($content['title']); ?></h3>
                    <div class="news-other">
                        作者：<span><?php echo ($content['author']); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;来源：<span><?php echo ($content['source']); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;上传时间：<span><?php echo ($content['time']); ?></span>&nbsp;&nbsp;&nbsp;&nbsp;点击量：<span><?php echo ($content['clicknum']); ?></span>
                    </div>
                    <div class="split"></div>
                </div>
                
<?php if($content['newsimgs'] != null): $imgs = explode(',',$content['newsimgs']); ?>
    <div class="banner">
        <div class="large_box">
            <ul>
                <?php if(is_array($imgs)): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><li style="display: none;">
                        <img src="/pinggu/<?php echo ($img); ?>" width="100%" height="450">
                    </li><?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
        </div>
        <div class="small_box">
            <span class="mybtn left_btn"></span>
            <div class="small_list">
                <ul>
                    <?php if(is_array($imgs)): $i = 0; $__LIST__ = $imgs;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$img): $mod = ($i % 2 );++$i;?><li class="">
                            <img src="/pinggu/<?php echo ($img); ?>" width="100%" height="73">
                            <div class="bun_bg"></div>
                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <span class="mybtn right_btn"></span>
        </div>
    </div><?php endif; ?>

                <div class="panel-body">
                    <?php echo (htmlspecialchars_decode($content['content'])); ?>
                </div>
            </div>
        </div>
        <!-- 最近文件展示 -->
        <div class="right-wrap" id="new_show">
            <div class="row">
                <div class="left">
                    <span class="title">最新动态</span>
                </div>
                <ul class="list-group list-style">
                    <?php echo ($list); ?>
                </ul>
            </div>
            <div class="row" style="margin-top: 28px;">
                <div class="left">
                    <span class="title">友情链接</span>
                </div>
                <div class="friend">
                    <ul class="nav nav-stacked flink">
                        <li>
                            <a href="http://www.moe.gov.cn/" target="_blank"><img src="/pinggu/Public/img/01.png" title="" alt="" width="212" height="103"></a>
                        </li>
                        <li>
                            <a href="http://www.pgzx.edu.cn/" target="_blank"><img src="/pinggu/Public/img/02.png" title="" alt="" width="212" height="103"></a>
                        </li>
                        <li>
                            <a href="http://gov.hnedu.cn/" target="_blank"><img src="/pinggu/Public/img/03.png" title="" alt="" width="212" height="103"></a>
                        </li>
                        <li>
                            <a href="http://jwc.hnust.cn/" target="_blank"><img src="/pinggu/Public/img/04.png" title="" alt="" width="212" height="103"></a>
                        </li>
                    </ul>
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
    var locations = {
        'inform': ['公告通知', '政策文件', '专项评估', '教学礼拜', '评估动态', '教学督导', '下载专区', '他山之石']
    };
    $(function() {
        var search = location.search;
        searchArr = search.split(/&|=/);
        var t = parseInt(searchArr[1]);
        $('.left>.title').eq(0).text(locations['inform'][t]);
        $('.left>.postion>a').eq(1).text(locations['inform'][t]);
        $('.left>.postion>a').eq(1).attr('href', location);
        // 开始文字动画
        var animition = new Animition();
        animition.textAnimition();
        // 轮播缩略图
        $(".banner").thumbnailImg({
            large_elem: ".large_box",
            small_elem: ".small_list",
            left_btn: ".left_btn",
            right_btn: ".right_btn"
        });
    });
    </script>
</body>

</html>