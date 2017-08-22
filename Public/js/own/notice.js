


var ue = UE.getEditor('editor',{
  toolbars: [
    ['undo','redo', 'bold','formatmatch', 'inserttable', 'fontfamily', 'fontsize', 'attachment' ]
  ]
});
  function createEditor() {
    enableBtn();
    UE.getEditor('editor');
  }
  // 提交所有数据
  function getAllHtml() {
    //得到数据
    var headline = $('#headline').val();
    var time = $('#hello').val();
    var type_choice = $('#type_choice').val();
    var mainbody = UE.getEditor('editor').getContent();
    $.ajax({
      type:"post",
      url:"/download/mooc/index.php/home/file/uploadinfor",
      data:{
        author : author,headline : headline,source :source,time : time,type:type_choice,image:image, mainbody : mainbody
      },
    success:function(result){
      console.log(result);
      var data=json.parse(result);
      // if(data['state']=='success')
      console.log(data);
       location.reload();
      },
      error:function(){  
      }
    });
  }

  // 清空内容
  function clearLocalData () {
    ue.execCommand('cleardoc');
  }
