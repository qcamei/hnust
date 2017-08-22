<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖南科技大学教学评估网</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/main_page.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/jquery-letterfx.min.css" />
    <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/js/tuxsudo.min.js"></script>
    <script type="text/javascript" src="/Public/js/jquery-letterfx.min.js"></script>
    <script type="text/javascript" src="/Public/js/main.js"></script>
    <style type="text/css">
    body {
        background-color: #f4f4f4;
    }

    .show {
        min-height: 400px;
        position: relative;
    }

    .loading {
        position: absolute;
        top: 50%;
        left: 0;
        background-color: rgba(7, 17, 27, .5);
        width: 100%;
        height: auto;
        text-align: center;
        z-index: 100;
        display: none;
    }

    .left {
        width: 100%;
        height: 48px;
        line-height: 26px;
        padding: 10px 15px;
        /*此处有不同*/
        /*border-bottom:2px solid #eee;*/
    }

    .left span.title {
        display: inline-block;
        font-size: 18px;
        font-weight: bold;
        color: #1692e0;
        padding-left: 5px;
        border-left: 3px solid #379296;
    }

    .left .postion a {
        color: #181717;
    }

    .left .postion a:hover {
        color: #379296;
    }

    .wrap {
        background-clip: padding-box;
        background-color: #fff;
    }

    .list {
        border-top: 2px solid #eee;
    }
    </style>
</head>

<body>
    <!-- 放置学校的logo,搜索框 -->
    <div class="top-body">
    <div class="hwrap">
        <img src="/Public/img/3hnust.png" width="100%" height="100%">
    </div>
    <div class="head clearfix">
        <a class="logo" href="javascript:void(0)" title="本科教学工作评估网">
            <img src="/Public/img/banner3.png" alt="暂无图片" title="湖南科技大学">
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
                    <li><a href="/index.php/more?type=4&d=inform">评估动态</a></li>
                    <li><a href="/index.php/more?type=0&d=inform">公告通知</a></li>
                    <li><a href="/index.php/more?type=1&d=inform">政策文件</a></li>
                    <li><a href="/index.php/more?type=2&d=inform">专项评估</a></li>
                    <li><a href="/index.php/more?type=3&d=inform">教学礼拜</a></li>
                    <li><a href="/index.php/more?type=5&d=inform">教学督导</a></li>
                    <li><a href="/index.php/more?type=6&d=file">下载专区</a></li>
                    <li><a href="/index.php/more?type=7&d=file">他山之石</a></li>
                </ul>
                <ul class="nav navbar-nav pull-right">
                    <li><a href="http://www.hnust.edu.cn/" title="湖南科技大学主页" target="_blank">科大主页</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->

    <div class="container wrap">
        <!-- 导航栏设置 -->
        <div class="row">
            <!-- 显示位置 -->
            <div>
                <div class="left">
                    <span class="title"></span>
                    <span class="postion pull-right">您现在的位置： <a href="" title="首页">首页</a> >> <a></a></span>
                </div>
            </div>
            <div>
                <div class="loading"><img src="/Public/img/loading.gif" width="65" height="65"></div>
                <!-- <?php echo ($content); ?> -->
                <div class="show"></div>
            </div>
            <div>
                <div class="col-md-12 col-sm-12">
                    <nav aria-label="..." class="pull-right">
                        <ul class="pager">
                            <li><a href="javascript:void(0)" data-page='-1'>前一页</a></li>
                            <li><a href="javascript:void(0)" data-page='1'>后一页</a></li>
                            <li><a href="javascript:void(0)" data-page='0'>首页</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <!-- 底部设置 -->
    ﻿ <div class="footer clearfix">
              <div class="footer-center">
            湖南科技大学大学版权所有©1996,2000,2010年
            <br>地址：湖南·湘潭市桃园路(411201) 电话：0731-58290102
        </div>
</div>
    <script type="text/javascript">
    var animition = new Animition();
    animition.textAnimition();
    </script>
    <script type="text/javascript">
      // 控制评估动态的文本显示，超出的显示...
    function limitShow(maxLen) {
        $('.content').each(function() {
             $(this).text($(this).text().replace(/\s+/g, ''));
            if ($(this).text().length > maxLen) {
                $(this).text($(this).text().substring(0, maxLen-4) + "...");
            }
        });
    }
    var locations = {
        'inform': ['公告通知', '政策文件', '专项评估', '教学礼拜', '评估动态', '教学督导', '下载专区', '他山之石']
    };
    // 缓存
    var buf = [];
    // 当前页面
    var page = 1;
    var url = location.href.replace(/more/, "nextPage");
    var maxLen = 170;
    $(window).resize(function() {
        var w = parseInt($('body').innerWidth());
        console.log(maxLen);
        if (w > 1200) {
            maxLen = 170;
            limitShow(maxLen);
        } else if(w>970){
            maxLen = 128;
            limitShow(maxLen);
        } else {
            maxLen = 210;
            limitShow(maxLen);
        }
    })
    $(window).resize();
    $(document).ready(function() {
        var search = location.search;
        searchArr = search.split(/&|=/);
        var t = parseInt(searchArr[1]);
        $('.left>.title').eq(0).text(locations['inform'][t]);
        $('.left>.postion>a').eq(1).text(locations['inform'][t]);
        $('.left>.postion>a').eq(1).attr('href', location);
        $.ajax({
            url: url,
            type: 'get',
            beforeSend: function() {
                $('.loading').show();
            },
            success: function(res) {
                $('.pager li').show();
                buf[page] = res;
                html = res['data'];
                next = res['next'];
                $('.show').html(html);
                if (next == '') {
                    $('.pager li').eq(1).hide();
                }
                if (page == 1) {
                    $('.pager li').eq(0).hide();
                }
                limitShow(maxLen);
            },
            error: function(res) {
                alert('请求发生错误！');
            },
            complete: function() {
                $('.loading').hide();
            }
        });
        $('.pager a').each(function() {
            $(this).click(function(e) {
                e.preventDefault();
                var index = parseInt($(this).attr('data-page'));
                if (index == 0) {
                    page = 1;
                } else {
                    page = (page + index) > 0 ? (page + index) : 1;
                }
                // 判断是否有缓存
                if (buf[page]) {
                    $('.pager li').show();
                    next = buf[page]['next'];
                    $('.show').html(buf[page]['data']);
                    if (next == '') {
                        $('.pager li').eq(1).hide();
                    }
                    if (page == 1) {
                        $('.pager li').eq(0).hide();
                    }
                    limitShow(maxLen);
                } else {
                    $.ajax({
                        url: url,
                        type: 'get',
                        data: {
                            page: page,
                        },
                        success: function(res) {
                            $('.pager li').show();
                            buf[page] = res;
                            html = res['data'];
                            next = res['next'];
                            $('.show').html(html);
                            if (next == '') {
                                $('.pager li').eq(1).hide();
                            }
                            if (page == 1) {
                                $('.pager li').eq(0).hide();
                            }
                            limitShow(maxLen);
                        },
                        error: function(res) {
                            alert('请求发生错误！');
                        }
                    });
                }

            });
        });
    });
    </script>
</body>

</html>