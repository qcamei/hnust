<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="湖南科技大学本科教学评估网,湖南科技大学本科教学评估,评估网,教学评估,湖南科大评估">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>湖南科技大学本科教学工作审核评估网</title>
    <link rel="stylesheet" type="text/css" href="/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/main_page.css" />
    <link rel="stylesheet" type="text/css" href="/Public/css/jquery-letterfx.min.css" />
    <script type="text/javascript" src="/Public/js/jquery.min.js"></script>
    <script type="text/javascript" src="/Public/js/tuxsudo.min.js"></script>
    <script type="text/javascript" src="/Public/js/jquery-letterfx.min.js"></script>
    <script type="text/javascript" src="/Public/js/main.js"></script>
    <script type="text/javascript">
    var imgs = new Image();
    imgs.src = '/Public/img/hnust.png';
    </script>
    <style type="text/css">
    body {
        background-color: #f4f4f4;
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

    <div class="container" style="background-color: #fff;">
        <div class="row">
            <div class="col-sm-12 col-md-8">
                <div class="slider">
                    <div class="informhead">
                        <h4 class="pull-left">
                               评估动态
                               <small class="text-blue text-uppercase">assessment</small>
                            </h4>
                        <div class="inform-foot pull-right">
                            <h5>
                                  <a href="/index.php/more?type=4&d=inform" target="_blank">继续阅读</a>
                                  <img src="/Public/img/home_more.png" alt="" title="更多" />
                                </h5>
                        </div>
                    </div>
                    <div class="warp large-height">
                        <span class="to-left">&lt</span>
                        <span class="to-right">&gt</span>
                        <?php if(is_array($pg)): $i = 0; $__LIST__ = array_slice($pg,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><div class="inner">
                                <div class="left-inner">
                                    <a href="/index.php/<?php echo ($index['link']); ?>" title="<?php echo ($index['title']); ?>"><img src="/<?php echo ($index['imgurl']); ?>"></a>
                                </div>
                                <div class="right-inner">
                                    <h3 class="news-title show-oneline"><a href="/index.php/<?php echo ($index['link']); ?>" title="<?php echo ($index['title']); ?>"><?php echo ($index['title']); ?></a></h3>
                                    <div class="news-content">
                                        <p class="content">
                                            <?php echo (strip_tags(htmlspecialchars_decode($index['content']))); ?>
                                        </p>
                                    </div>
                                    <span class="news-time"><?php echo ($index['time']); ?></span>
                                    <span class="news-detail"><a href="/index.php/<?php echo ($index['link']); ?>">详细>></a></span>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                        <div class="ctrl">
                            <?php if(is_array($pg)): $i = 0; $__LIST__ = array_slice($pg,0,5,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><a href="javascript:void(0)"><img src="/<?php echo ($index['imgurl']); ?>"></a><?php endforeach; endif; else: echo "" ;endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 cancle_pading">
                <div class="informhead">
                    <h4 class="pull-left">
                        公告通知
                        <small class="text-blue text-uppercase">inform</small>
                    </h4>
                    <div class="inform-foot pull-right">
                        <h5><a href="/index.php/more?type=0&d=inform" target="_blank">继续阅读</a>
                    <img src="/Public/img/home_more.png" alt="" title="更多" />
                     </h5>
                    </div>
                </div>
                <div class="large-height" style="overflow: hidden;" id="inform-item">
                    <ul class="list-group show-item time-style">
                        <?php if(empty($informodle) == false): if(is_array($informodle)): $i = 0; $__LIST__ = $informodle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><li class="list-group-item">
                                    <?php if(($mod) == "1"): ?><span class="f1"><?php endif; ?>
                                        <?php if(($mod) == "0"): ?><span class="f2"><?php endif; ?>
                                        <?php $time=explode('-',$index['time']); ?>
                                        <b class="day"><?php echo ($time[2]); ?></b>
                                        <b class="year"><?php echo ($time[0]); ?>/<?php echo ($time[1]); ?></b>

                                    </span>
                                        <a title="<?php echo ($index['title']); ?>" href="/index.php/<?php echo ($index['link']); ?>"><?php echo ($index['title']); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php else: ?>
                            <p class="no-data">暂无数据</p><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-4 cancle_pading">
                <div class="informhead">
                    <h4 class="pull-left">
                        教学督导
                        <small class="text-blue text-uppercase">evaluation</small>
                    </h4>
                    <div class="inform-foot pull-right">
                        <h5><a href="/index.php/more?type=5&d=inform" target="_blank">继续阅读</a>
                    <img src="/Public/img/home_more.png" alt="" title="更多" />
                     </h5>
                    </div>
                </div>
                <div class="large-height">
                    <ul class="list-group show-item show-line">
                        <?php if(empty($evaluationmodle) == false): if(is_array($evaluationmodle)): $i = 0; $__LIST__ = $evaluationmodle;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><li class="list-group-item"><a title="<?php echo ($index['title']); ?>" href="/index.php/<?php echo ($index['link']); ?>"><?php echo ($index['title']); ?></a><span class="timer pull-right"><?php echo ($index['time']); ?></span></li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php else: ?>
                            <p class="no-data">暂无数据</p><?php endif; ?>
                    </ul>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 cancle_pading">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="informhead">
                            <h4 class="pull-left">
                        专项评估
                        <small class="text-blue text-uppercase">steering</small>
                    </h4>
                            <div class="inform-foot pull-right">
                                <h5><a href="/index.php/more?type=2&d=inform" target="_blank">继续阅读</a>
                    <img src="/Public/img/home_more.png" alt="" title="更多">
                     </h5>
                            </div>
                        </div>
                        <div class="small-height">
                            <ul class="list-group show-item time-style">
                                <?php if(empty($Steering) == false): if(is_array($Steering)): $i = 0; $__LIST__ = array_slice($Steering,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><li class="list-group-item">
                                            <?php $time=explode('-',$index['time']); ?>
                                            <span class="time-icon"><?php echo ($time[1]); ?>-<?php echo ($time[2]); ?><br/><?php echo ($time[0]); ?></span>
                                            <a title="<?php echo ($index['title']); ?>" href="/index.php/<?php echo ($index['link']); ?>"><?php echo ($index['title']); ?></a>
                                        </li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php else: ?>
                                    <p class="no-data">暂无数据</p><?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="informhead">
                            <h4 class="pull-left">
                        政策文件
                        <small class="text-blue text-uppercase">policydoc</small>
                    </h4>
                            <div class="inform-foot pull-right">
                                <h5>
                            <a href="/index.php/more?type=1&d=inform" target="_blank">继续阅读</a>
                    <img src="/Public/img/home_more.png" alt="" title="更多" />
                     </h5>
                            </div>
                        </div>
                        <div class="small-height">
                            <ul class="list-group show-item show-line">
                                <?php if(empty($qfile) == false): if(is_array($qfile)): $i = 0; $__LIST__ = array_slice($qfile,0,3,true);if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><li class="list-group-item">
                                            <a title="<?php echo ($index['title']); ?>" href="/index.php/<?php echo ($index['link']); ?>" style="max-width: 100%;"><?php echo ($index['title']); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                    <?php else: ?>
                                    <p class="no-data">暂无数据</p><?php endif; ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-md-4 cancle_pading">
                <div class="informhead">
                    <h4 class="pull-left">
                        教学礼拜
                        <small class="text-blue text-uppercase">Teachingworship</small>
                    </h4>
                    <div class="inform-foot pull-right">
                        <h5><a href="/index.php/more?type=3&d=inform" target="_blank">继续阅读</a>
                    <img src="/Public/img/home_more.png" alt="" title="更多" />
                     </h5>
                    </div>
                </div>
                <div class="large-height">
                    <ul class="list-group show-item show-line">
                        <?php if(empty($teacherWeek) == false): if(is_array($teacherWeek)): $i = 0; $__LIST__ = $teacherWeek;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$index): $mod = ($i % 2 );++$i;?><li class="list-group-item">
                                    <a title="<?php echo ($index['title']); ?>" href="/index.php/<?php echo ($index['link']); ?>"><?php echo ($index['title']); ?></a>
                                    <span class="timer pull-right"><?php echo ($index['time']); ?></span>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                            <?php else: ?>
                            <p class="no-data">暂无数据</p><?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 cancle_pading">
                <div class="flink-wrap">
                    <div class="flink-top pull-left">
                        友情链接
                        <small class="text-blue text-uppercase">friendlink</small>
                    </div>
                </div>
                <ul class="nav nav-tabs friendlink">
                    <li>
                        <a href="http://www.moe.gov.cn/" target="_blank"><img src="/Public/img/01.png" title="" alt="" width="212" height="103"></a>
                    </li>
                    <li>
                        <a href="http://www.pgzx.edu.cn/" target="_blank"><img src="/Public/img/02.png" title="" alt="" width="212" height="103"></a>
                    </li>
                    <li>
                        <a href="http://gov.hnedu.cn/" target="_blank"><img src="/Public/img/03.png" title="" alt="" width="212" height="103"></a>
                    </li>
                    <li>
                        <a href="http://jwc.hnust.cn/" target="_blank"><img src="/Public/img/04.png" title="" alt="" width="212" height="103"></a>
                    </li>
                </ul>
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
    // 文字超出部分显示省略号
    overFlower('.content', 260);
    overFlower('.time-style li a', 35);
    // 动画类
    var animition = new Animition();
    animition.textAnimition();
    animition.informRoll();
    $('#inform-item>ul').hover(function() {
        animition.Stop();
    }, function() {
        animition.informRoll();
    });

    $('.news-content > .content').each(function(){
        $(this).text($(this).text().replace(/\s+/g, ''));
    });
    </script>
    <!-- 轮播图 -->
    <script type="text/javascript">
    var Bind = function(object, fun) {
        var args = Array.prototype.slice.call(arguments).slice(2);
        return function() {
            return fun.apply(object, args.concat(Array.prototype.slice.call(arguments)));
        }
    }
    function Banner() {
        this.innergroup = $('.inner');
        this.length = this.innergroup.length;
        this._index = 0;
        this.pre = (this._index - 1 + this.length) % this.length;
        this.left = 0;
        this.opacity = 1;
        this.dir = 1;
        this.timer = null;
        this.Option();
        this.isAuto = true;
    }
    Banner.prototype = {
        Option: function() {
            $('.ctrl>a').each(function(i) {
                $(this).click(function() {
                    clearInterval(ban.timer);
                    // this.isAuto=false;
                    if (i == ban.pre)
                        return;
                    ban.pre = (ban._index - 1 + ban.length) % ban.length;
                    ban._index = i;
                    console.log(ban.pre);
                    console.log(i);
                    ban.dir = i > ban.pre ? 1 : -1;
                    ban.Go();
                    ban.dir = 1;
                });
            });
            $('.to-left').click(function() {
                clearInterval(ban.timer);
                console.log(ban.timer);
                ban.Go();
            });
            $('.to-right').click(function() {
                clearInterval(ban.timer);
                console.log(ban.timer);
                ban.dir = -1;
                ban.Go();
                ban.dir = 1;
            });
            $('.inner').hover(function() {
                clearInterval(ban.timer);

                console.log('in');
            }, function() {
                ban.timer = setInterval(Bind(ban, ban.Show), 4000);
                console.log('out');
            });
        },
        Show: function() {
            this.Move();
            this._index = (this._index + 1) % this.length;
            this.pre = (this._index - 1 + this.length) % this.length;
        },
        Go: function() {
            this.Show();
            this.timer = setInterval(Bind(this, this.Show), 4000);
        },
        Move: function() {
            $('.inner').eq(this._index).css('left', 100 * this.dir + '%');
            $('.inner').eq(this.pre).animate({
                left: -100 * this.dir + '%'
            }, 220);
            $('.inner').eq(this._index).animate({
                left: this.left + 'px'
            }, 200);
            $('.ctrl a').css('background-color', '#E87218');
            $('.ctrl a').eq(this._index).css('background-color', '#6879F2');
        }

    };
    ban = new Banner();
    ban.Go();
    </script>
    <script type="text/javascript" src="/Public/js/bootstrap.min.js"></script>
</body>

</html>