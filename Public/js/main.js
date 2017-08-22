// 定义动画类
function Animition() {
    this.timer = null;
}
Animition.prototype = {
    // 文字展示效果
    textAnimition: function() {
        $('.top-title').letterfx(
            {
            "fx":"fall",
            "words":true,
            "timing":500,
            "element_end":"stay"
            }
            );
        setTimeout(this.textAnimition.bind(this), 5000);
    },
    // 通知条目滚动效果
    informRoll: function() {
        var informItemHeg = $('#inform-item li').innerHeight();
        var informHeg = $('#inform-item>ul').innerHeight();
        var informWrapHeg = $('#inform-item').innerHeight();
        var length = $('#inform-item li').length;
        var informMargin = $('#inform-item>ul').css('top');
        var informTop = parseInt(informMargin);
        if (informHeg - Math.abs(informTop) <= informWrapHeg) {
            $('#inform-item>ul').css('top', 0);
        }
        if (informHeg > informWrapHeg) {
            $('#inform-item>ul').animate({
                'top': '-=' + informItemHeg + 'px'
            }, 1000);
        }
        this.timer = setTimeout(this.informRoll.bind(this), 2000);
    },
    Stop: function() {
        $('#inform-item>ul').stop(false, true);
        clearTimeout(this.timer);
    }
}
// 文字超出显示省略号
function overFlower(ele, maxLen) {
    $(ele).each(function() {
        if ($(this).text().length > maxLen) {
            $(this).text($(this).text().substring(0, maxLen-3) + "...");
            // console.log($(this).text().length);
        }
    });
}


// 登录验证类
function CheckLogin(){
}
CheckLogin.prototype={
    checkEmpty:function(element){
        if($(element).val().trim()==''){
            return true;
        }
        return false;
    },
    checkLength:function(element,leftLength,rightLength){
       leftLength=='undefine'?0:leftLength;
       rightLength=='undefine'?20:rightLength;
       var len=$(element).val().trim().length;
       if(len>=leftLength&&len<=rightLength)
         return true;
       return false;
    },
    checkIllege:function(element){
        var patten=/[^\$\w\d_]/;
        if(patten.test($(element).val().trim()))
            return false;
        return true;
    },
    checkDiff:function(ele1,ele2){
        if($(ele1).val().trim()===$(ele2).val().trim())
             return true;
        return false;
    }
};