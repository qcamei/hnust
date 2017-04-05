<?php if (!defined('THINK_PATH')) exit();?> <div class="panel">
    <div class="panel-heading">
      <h3 class="news-title">{{title}}</h3>
      <div class="news-other">
        作者：<span id="author">{{author}}</span>&nbsp;&nbsp;&nbsp;&nbsp;来源：<span id="Source">{{source}}</span>&nbsp;&nbsp;&nbsp;&nbsp;上传时间：<span id="Time">{{time}}</span>
      </div>
      <div class="split"></div>
    </div>
  <div class="panel-body" id="panel-body" style="padding: 20px">
     {{content}}
  </div>
</div>