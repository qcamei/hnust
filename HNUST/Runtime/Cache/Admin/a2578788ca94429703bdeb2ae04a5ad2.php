<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> - 富文本编辑器</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/bootstrap.min.css?v=3.3.6" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="/pinggu/Public/css/style.css?v=4.1.0" />
    <script type="text/javascript" src="/pinggu/Public/js/jquery.min.js?v=2.1.4"></script>
    <script type="text/javascript" src="/pinggu/Public/js/bootstrap.min.js?v=3.3.6"></script>
    <style type="text/css">
    #eg .form-control {
        height: auto;
    }
    </style>
    <script type="text/javascript">
    var ROOT = "/pinggu";
    var APP = "/pinggu/index.php";
    var PUBLIC = "/pinggu/Public";
    </script>
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content">
        <div class="row">
            <div class="col-sm-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>请编辑新闻内容</h5>
                    </div>
                    <div class="ibox-content" id="eg">
                        <?php if(empty($news) == false): ?><div class="row" style="border-bottom:1px solid rgb(40,137,221); margin-bottom:10px;">
                                <div class="col-xs-10 col-xs-offset-1">
                                    <form class="form-horizontal" id="postfile" enctype="multipart/form-data" style="width:800px;margin:0 auto;">
                                        <input type="hidden" name="id" value="<?php echo ($news['id']); ?>">
                                        <div class="form-group">
                                            <label for="headline" class="col-sm-2 control-label">标题</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control" id="headline" placeholder="请输入标题" style="overflow-y: hidden; resize: none;" _height="88" required name="title"><?php echo ($news['title']); ?></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="author" class="col-sm-2 control-label">作者</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="author" placeholder="作者" name="author" value="<?php echo ($news['author']); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="source" class="col-sm-2 control-label">来源</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="source" placeholder="来源" required name="source" value="<?php echo ($news['source']); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">上传时间</label>
                                            <div class="col-sm-9">
                                                <input id="time" class="laydate-icon form-control layer-date" data-mask="9999-99-99" required name='time' value="<?php echo ($news['time']); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-2 control-label">点击数</label>
                                            <div class="col-sm-9">
                                                <input type="text" id="click-num" class="form-control" required name='click_num' value="<?php echo ($news['clicknum']); ?>">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="type" class="col-sm-2 control-label">类型</label>
                                            <div class="col-md-3">
                                                <select id="type_choice" class="form-control" onchange="img_show()" name="type" value="">
                                                    <option value="0">公告通知</option>
                                                    <option value="1">政策文件</option>
                                                    <option value="2">专项评估</option>
                                                    <option value="3">教学礼拜</option>
                                                    <option value="4">评估动态</option>
                                                    <option value="5">教学督导</option>
                                                    <option value="6">下载专区</option>
                                                    <option value="7">他山之石</option>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- 配置文件 -->
                                <div class="col-xs-10 col-xs-offset-1">
                                    <!-- ueditor编辑器 -->
                                    <script id="editor" name="content" type="text/plain" style="width:900px;height:400px;margin:0 auto">
                                    </script>
                                    <div style="width:800px;margin:10px auto 0 auto;">
                                        <button class="btn btn-primary" onclick="update()" style="margin-right:5px;">提交</button>
                                        <button class="btn btn-default" onclick="clearLocalData()" style="margin-right:5px;">清空</button>
                                    </div>
                                    <script type="text/javascript" src="/pinggu/Public/js/utf8-php/ueditor.config.js"></script>
                                    <!-- 编辑器源码文件 -->
                                    <script type="text/javascript" src="/pinggu/Public/js/utf8-php/ueditor.all.js"></script>
                                    <script type="text/javascript" src="/pinggu/Public/js/utf8-php/ueditor.parse.js"></script>
                                    <!-- 实例化编辑器 -->
                                </div>
                            </div>
                            <!-- <div class="panel-body" style="padding: 20px">
        {{content}}
    </div> -->
                            <!-- $content = strtr($news['content'], array("\r\n" => "\n")); -->
                            <!--   $rows = explode("\n", $content);  -->
                            <?php $content = strtr($news['content'], array("\r\n" => "\\","\n" => "\\","\r" => "\\")); ?>
                            <script type="text/javascript" src="/pinggu/Public/js/content.js?v=1.0.0"></script>
                            <script type="text/javascript" src="/pinggu/Public/js/plugins/iCheck/icheck.min.js"></script>
                            <script type="text/javascript" src="/pinggu/Public/js/plugins/layer/laydate/laydate.js"></script>
                            <script type="text/javascript" src="/pinggu/Public/js/own/editorNews.js"></script>
                            <script type="text/javascript">
                            $(document).ready(function() {
                                $('.i-checks').iCheck({
                                    checkboxClass: 'icheckbox_square-green',
                                    radioClass: 'iradio_square-green',
                                });
                                var ue = UE.getEditor('editor');
                                ue.ready(function() {
                                    ue.setContent('<?php echo (htmlspecialchars_decode($content)); ?>');
                                });

                                function update() {
                                    var formData = new formData($('#postfile')[0]);
                                    var mainbody = UE.getEditor('editor').getContent();
                                    formData.append('mainbody', mainbody);
                                    $.ajax({
                                        url: APP + '/updateinform',
                                        type: "post",
                                        data: formData,
                                        processData: false,
                                        contentType: false,
                                    });
                                }
                            });

                            $('#type_choice option[value="<?php echo ($news['type']); ?>"]').attr('selected', true);
                            </script>
                            <script>
                            //外部js调用
                            laydate({
                                elem: '#hello', //目标元素。由于laydate.js封装了一个轻量级的选择器引擎，因此elem还允许你传入class、tag但必须按照这种方式 '#id .class'
                                event: 'focus' //响应事件。如果没有传入event，则按照默认的click
                            });
                            </script>
                            <script type="text/javascript">
                            </script>
                            <?php else: ?> 暂无数据<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
</body>

</html>