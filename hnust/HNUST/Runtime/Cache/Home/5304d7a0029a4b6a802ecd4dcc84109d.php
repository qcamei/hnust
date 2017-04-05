<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>湖南科技大学教学评估网</title>
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/main.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/mooc/Public/css/main_page.css" />
</head>

<body>
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
    <!-- 导航栏设置 -->
    <!-- <div class="body"> -->
    <div class="container">
        <div class="navwarp row">
            <div class="col-md-12 cancle_pading">
                <div class="navbar body">
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
                        <li><a href="http://www.hnust.edu.cn/" title="湖南科技大学主页" target="_blank">科大主页</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- </div> -->
    <div class="container contentbody">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12 slider cancle_pading">
                        <div class="informhead">
                            <div class="inform-l">
                                <span><p class="icon"></p>评估动态</span>
                            </div>
                            <div class="inform-r">
                                <a href="/mooc/index.php/more?type=4&d=inform" target="_blank">更多>></a>
                            </div>
                        </div>
                        <div class="warp">
                            <span class="to-left">&lt</span>
                            <span class="to-right">&gt</span> 
                               <?php echo ($pg); ?>
                            <div class="ctrl">
                                 <?php echo ($ctrl); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 cancle_pading">
                <div class="informhead">
                    <div class="inform-l">
                        <span><p class="icon"></p>公告通知</span>
                    </div>
                    <div class="inform-r">
                        <a href="/mooc/index.php/more?type=0&d=inform" target="_blank">更多>></a>
                    </div>
                </div>
                <div>
                    <ul class="list-group show-item" style="min-height:230px;">
                        <?php echo ($informodle); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 cancle_pading">
                <div class="informhead">
                    <div class="inform-l">
                        <span><p class="icon"></p>政策文件</span>
                    </div>
                    <div class="inform-r">
                        <a href="/mooc/index.php/more?type=1&d=inform" target="_blank">更多>></a>
                    </div>
                </div>
                <div>
                    <ul class="list-group show-item" style="min-height:230px;">
                        <?php echo ($qfile); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3 col-xs-3 cancle_pading">
                <div class="informhead">
                    <div class="inform-l">
                        <span><p class="icon"></p>专项评估</span>
                    </div>
                    <div class="inform-r">
                        <a href="/mooc/index.php/more?type=2&d=inform" target="_blank">更多>></a>
                    </div>
                </div>
                <div>
                    <ul class="list-group show-item">
                        <?php echo ($evaluationmodle); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 cancle_pading">
                <div class="informhead">
                    <div class="inform-l">
                        <span><p class="icon"></p>教学礼拜</span>
                    </div>
                    <div class="inform-r">
                        <a href="/mooc/index.php/more?type=3&d=inform" target="_blank">更多>></a>
                    </div>
                </div>
                <div>
                    <ul class="list-group show-item policyfile">
                        <?php echo ($teacherWeek); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 cancle_pading">
                <div class="informhead">
                    <div class="inform-l">
                        <span><p class="icon"></p>教学督导</span>
                    </div>
                    <div class="inform-r">
                        <a href="/mooc/index.php/more?type=5&d=inform" target="_blank">更多>></a>
                    </div>
                </div>
                <div>
                    <ul class="list-group show-item">
                        <?php echo ($Steering); ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-3 cancle_pading">
                <div class="informhead">
                    <div class="inform-l">
                        <span><p class="icon"></p>下载专区</span>
                    </div>
                    <div class="inform-r">
                        <a href="/mooc/index.php/more?type=6&d=file" target="_blank">更多>></a>
                    </div>
                </div>
                <div>
                    <ul class="list-group show-item">
                        <?php echo ($filedw); ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 cancle_pading">
                <div class="linkhead clearfix">
                    <div class="inform-l link-l">
                        <span><img src="/mooc/Public/img/link.png" width="25" height="25">友情链接</span>
                    </div>
                </div>
                <ul class="nav nav-tabs friendlink">
                    <li>
                        <a href="#"><img src="/mooc/Public/img/link01.jpg" title="" alt="" width="210" height="46"></a>
                    </li>
                    <li>
                        <a href="#"><img src="/mooc/Public/img/link02.jpg" title="" alt="" width="210" height="46"></a>
                    </li>
                    <li>
                        <a href="#"><img src="/mooc/Public/img/5.png" title="" alt="" width="210" height="46"></a>
                    </li>
                    <li>
                        <a href="#"><img src="/mooc/Public/img/2.png" title="" alt="" width="210" height="46"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="footer clearfix">
        <div class="login">
            <a href="/mooc/index.php/clogin" title="管理员登录">管理员登录</a>
        </div>
        <div class="footer-center">
            湖南科技大学大学版权所有©1996,2000,2010年
            <br> 邮箱：xcb@hnust.edu.cn 网址：www.hnust.edu.cn 地址：湖南·湘潭市桃园路(411201) 电话：0731-58290011
        </div>
    </div>
    <script type="text/javascript" src="/mooc/Public/js/jquery.min.js"></script>
    <script type="text/javascript">
    $('.content').each(function() {
        var maxLen = 140;
        if ($(this).text().length > maxLen) {
            $(this).text($(this).text().substring(0, maxLen) + "...");
            console.log($(this).text().length);
        }
    });
    </script>
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
</body>

</html>