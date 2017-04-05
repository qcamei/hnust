
 //图片上传
  jQuery.fn.extend({
    uploadPreview: function (opts) {
        var _self = this,
            _this = $(this);
        opts = jQuery.extend({
            Img: "ImgPr",
            Width: 150,
            Height: 150,
            ImgType: ["gif", "jpeg", "jpg", "bmp", "png"],
            Callback: function () {}
        }, opts || {});
        _self.getObjectURL = function (file) {
            var url = null;
            if (window.createObjectURL != undefined) {
                url = window.createObjectURL(file)
            } else if (window.URL != undefined) {
                url = window.URL.createObjectURL(file)
            } else if (window.webkitURL != undefined) {
                url = window.webkitURL.createObjectURL(file)
            }
            return url
        };
        _this.change(function () {
            if (this.value) {
                if (!RegExp("\.(" + opts.ImgType.join("|") + ")$", "i").test(this.value.toLowerCase())) {
                    alert("选择文件错误,图片类型必须是" + opts.ImgType.join("，") + "中的一种");
                    this.value = "";
                    return false
                }
                if ($.browser.msie) {
                    try {
                        $("#" + opts.Img).attr('src', _self.getObjectURL(this.files[0]))
                    } catch (e) {
                        var src = "";
                        var obj = $("#" + opts.Img);
                        var div = obj.parent("div")[0];
                        _self.select();
                        if (top != self) {
                            window.parent.document.body.focus()
                        } else {
                            _self.blur()
                        }
                        src = document.selection.createRange().text;
                        document.selection.empty();
                        obj.hide();
                        obj.parent("div").css({
                            'filter': 'progid:DXImageTransform.Microsoft.AlphaImageLoader(sizingMethod=scale)',
                            'width': opts.Width + 'px',
                            'height': opts.Height + 'px'
                        });
                        div.filters.item("DXImageTransform.Microsoft.AlphaImageLoader").src = src
                    }
                } else {
                    $("#" + opts.Img).attr('src', _self.getObjectURL(this.files[0]))
                }
                opts.Callback()
            }
        })
    }
});

var ue = UE.getEditor('editor',{
  toolbars: [
    ['attachment','undo','redo','bold','indent','italic','underline','subscript','superscript', 'formatmatch', 'blockquote','pasteplain','preview','insertrow','insertcol','mergeright', 'mergedown','deleterow', 'deletecol', 'splittorows','splittocols', 'splittocells', 'deletecaption', 'inserttitle', 'mergecells','deletetable', 'insertparagraphbeforetable', 'fontfamily', 'fontsize', 'paragraph', 'simpleupload', 'insertimage','edittable', 'edittd', 'link',  'spechars','searchreplace','insertvideo', 'justifyleft', 'justifyright', 'justifycenter', 'justifyjustify', 'forecolor', 'backcolor', 'insertorderedlist', 'insertunorderedlist', 'fullscreen', 'rowspacingtop', 
    'rowspacingbottom', 'imageleft', 'imageright', 'imagecenter',  'wordimage',  'lineheight', 'edittip ', 'autotypeset',  'touppercase',  'tolowercase',  'background', 'template',  'inserttable','charts', ]
  ]
});
  function createEditor() {
    enableBtn();
    UE.getEditor('editor');
  }
  //检查必填字段是否为空
  function check(){
    if($('#headline').val()=="" || $('#hello').val()==''){
      alert('请检查作者和日期必填字段是否填写');
      return 0;
    }else{
      return 1;
    }
  }
  // 显示图片
function img_show(){
   $('#files').hide();
  if($('#type_choice').val()==4){
    $('#files').show();
    }
}

  function submit1(){
    var flag = check();
    if(flag ){
      getAllHtml();
    }
  }
  // 提交所有数据
  function getAllHtml() {
    // 获取图片,无图片时 image值为null
    var formData=new FormData($('#postfile')[0]);
    var mainbody = UE.getEditor('editor').getContent();
    formData.append('mainbody',mainbody);
    $.ajax({
      type:"post",
      url:APP+"/uploadinfor",
      data:formData,
      cache:false, 
      processData: false,
      contentType: false,
      success:function(result){
       alert('数据提交成功');
       $('#headline,#author,#source,#time').val('');
       clearLocalData();
      },
      error:function(result){
          alert('数据提交失败');
      }
    });
  }
  function clearLocalData (){
    // console.log('ssss');
    UE.getEditor('editor').setContent('');
    // alert("已清空内容")
  }
