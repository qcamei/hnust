<?php if (!defined('THINK_PATH')) exit();?><div class="col-xs-6 col-md-3">
    <a href="{{link}}" class="thumbnail">
        <img src="/{{imgurl}}" style="height: 180px; width: 100%; display: block;" alt="">
    </a>
    <div class="caption">
        <a class="show-oneline h4" title="{{title}}" href="{{link}}">{{title}}</a>
        <p class="content" style="height: 170px;">{{content}}</p>
        <p>
            <span class="news-time">{{time}}</span>
            <span class="news-detail"><a href="{{link}}">详细>></a></span>
        </p>
    </div>
</div>