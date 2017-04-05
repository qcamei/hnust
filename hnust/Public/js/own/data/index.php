<!doctype html>
<html>
<head>
	<meta http-equiv="content-type" content="text/html charset=utf-8">
	<title>口碑分析</title>
	<link rel="stylesheet" href="css/style.css" type="text/css" />
	 <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	 <link rel="stylesheet"  type="text/css" href="css/bootstrap-select.css">
	 <script type="text/javascript" src="js/jquery.min.js"></script>
	 <script type="text/javascript" src="js/bootstrap.min.js"></script>
	 <script type="text/javascript" src="js/d3.min.js"></script>
	 <script type="text/javascript" src="js/echarts.js"></script>
	 <script type="text/javascript" src="js/d3.layout.cloud.js"></script>
	 <script type="text/javascript" src="js/bootstrap-select.js"></script>
</head>
<body>
<!-- 登陆/注册+Logo -->
    <div class="topset clearfix">
         <!-- logo -->
          <span><strong>Tips:</strong>口碑分析</span>
         <div class="enter">
         	  <a href="#">登录</a>
         	  <a href="#">注册</a>
         </div>
    </div>
<!-- Tab切换+品牌的选择-->
<div class="container">
   <div class="mainbody">
      <div class="search">
      请选择你想了解的品牌：
         <select id="mainselect" class="selectpicker">
           <option value="m">蒙牛</option>
           <option value="y">伊利</option>
           <option value="g">光明</option>
         </select>
         <select  id="subselect" class="selectpicker"></select>
     </div></br>
     <!-- 切换图各个项目-->
       <ul class="nav nav-tabs row" id="list">
         <li class="col-md-2"><a href="#">口碑总揽</a></li>
         <li class="col-md-2"><a href="#">电商口碑</a></li>
         <li class="col-md-2"><a href="#">论坛口碑</a></li>
         <li class="col-md-2"><a href="#">词云</a></li>
         <li class="col-md-2"><a href="#">产品销量</a></li>
         <li class="col-md-2"><a href="#">代言人</a></li>
       </ul> 
       <!-- 有关属性的选择 -->
 <div class="row">
    <!-- 电商+论坛属性选择 -->
    <div class="platform" id="allplatform" style="display: none;">
          选择年份：
           <select class="selectpicker">
           	  <option>2015</option>
           	  <option>2016</option>
           	  <option>2017</option>
           	  <option>2018</option>
           	  <option>2019</option>
           	  <option>2020</option>
           </select>
             情感选择：
            <select class="selectpicker" id="kbselect">
                  <option value="0">显示全部</option>
                  <option value="1">惊</option>
                  <option value="2">哀</option>
                  <option value="3">怒</option>
                  <option value="4">乐</option>
                  <option value="5">好</option>
                  <option value="6">惧</option>
                  <option value="7">恶</option>
           </select>
   </div>
    <!-- 电商属性选择 -->
   <div class="platform" id="shopplatform" style="display: none">
        <!-- 时间的选择 -->
      <div  class="maintime">选择年月：
          <select class="selectpicker">
           	  <option>2015</option>
           	  <option>2016</option>
           	  <option>2017</option>
           	  <option>2018</option>
           	  <option>2019</option>
           	  <option>2020</option>
           </select>年
           <select class="selectpicker">
           	    <option>1</option>
           	    <option>2</option>
           	    <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option> 
                <option>10</option> 
                <option>11</option> 
                <option>12</option>
                <option>显示全部</option>
           </select>月
      </div></br>
       电商平台：
       <select class="selectpicker" id="shopselect">
                  <option value="3">整个平台</option>
                  <option value="0">淘宝</option>
                  <option value="1">天猫</option>
                  <option value="2">京东</option>
       </select>   
  </div>
  <!-- 论坛属性选择 -->
  <div class="platform" id="tbplatform" style="display: none;">
       <div  class="maintime">选择年月：
           <select class="selectpicker">
           	  <option>2015</option>
           	  <option>2016</option>
           	  <option>2017</option>
           	  <option>2018</option>
           	  <option>2019</option>
           	  <option>2020</option>
           </select>年
           <select class="selectpicker">
           	    <option>1</option>
           	    <option>2</option>
           	    <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option> 
                <option>10</option> 
                <option>11</option> 
                <option>12</option>
                <option>显示全部</option>
           </select>月
     </div></br>
            论坛平台：
            <select class="selectpicker" id="tbselect">
                  <option value="3">整个平台</option>
                  <option value="0">贴吧</option>
                  <option value="1">红网</option>
                  <option value="2">百度论坛</option>
           </select>
  </div>
  <!-- 口碑属性选择 -->
         <div class="platform" id="kbplatform" style="display: none;">
          选择年份：
           <select class="selectpicker">
           	  <option>2015</option>
           	  <option>2016</option>
           	  <option>2017</option>
           	  <option>2018</option>
           	  <option>2019</option>
           	  <option>2020</option>
           </select>
            情感选择：
            <select class="selectpicker" id="kbselect">
                  <option value="0">显示全部</option>
                  <option value="1">惊</option>
                  <option value="2">哀</option>
                  <option value="3">怒</option>
                  <option value="4">乐</option>
                  <option value="5">好</option>
                  <option value="6">惧</option>
                  <option value="7">恶</option>
           </select>
        </div>
        <!-- 其他属性选择 -->
       <div class="platform" id="otherplatform" style="display: none">
          <div  class="maintime">
          选择年月：<select class="selectpicker">
           	  <option>2015</option>
           	  <option>2016</option>
           	  <option>2017</option>
           	  <option>2018</option>
           	  <option>2019</option>
           	  <option>2020</option>
           </select>年
           <select class="selectpicker">
           	    <option>1</option>
           	    <option>2</option>
           	    <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option> 
                <option>10</option> 
                <option>11</option> 
                <option>12</option>
                <option>显示全部</option>
           </select>月
        </div>
   </div>
 </div>
 <!-- 展示图 -->
  <div class="contentView">
      <!-- 数据展示的区域 -->
       <center id="score"></center>
       <div class="row" id="resultset">
       	   <div id="myecharts" style="width:500px;height: 600px;z-index: 2"></div>
       </div>
   </div>
 </div>
</div>
    <!-- 评论区域的设置 -->
<div class="comment" id="commentshow">
      <!-- 评论头 -->
    <div style="text-align: center;background-color:#ff7800;padding: 5px;border-radius: 3px;color: #fff">
      <span style="float: left;font-size:20px;">相关链接</span>
      <span id="title" style="font-size: 30px;"></span>
      <span id="hide" style="float: right;font-size:20px;">隐藏</span>
    </div>
    <!-- 评论的链接 -->   
  <ul>
	  <li class="item clearfix"><a href="{{href}}">今天买了一箱蒙牛牛奶，真好喝</a><span>2016-12-10 18：44</span></li>
	  <li class="item clearfix"><a href="{{href}}">早上涛妹送的真果粒 满满的爱满满的幸福</a><span>2016-12-10 18：44</span></li>
	  <li class="item clearfix"><a href="{{href}}">超mini真果粒少女心爆棚</a><span>2016-12-10 18：44</span></li>
	  <li class="item clearfix"><a href="{{href}}">在双十一 买的蒙牛高钙牛奶的吸管都是这样一竖下来 断裂 </a><span>2016-12-10 18：44</span></li>
	  <li class="item clearfix"><a href="{{href}}">酸奶还是蒙牛的最好喝</a><span>2016-12-10 18：44</span></li>
	  <li class="item clearfix"><a href="{{href}}">看特仑苏今年陈道明的广告就很喜欢</a><span>2016-12-10 18：44</span></li>
	  <li class="item clearfix"><a href="{{href}}">冠益乳的新口味好喝到cry呀</a><span>2016-12-10 18：44</span></li>
	<ul>
</div>
      <script type="text/javascript" src="node.js"></script>
	  <script type="text/javascript" src="js/browserify.js"></script>
	  <script type="text/javascript" src="js/activity.js"></script>
</body>
</html>