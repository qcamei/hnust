  //确认密码框获得焦点
        function blur1(){
           var new_password = $('#new_password').val();
           if(new_password ==""){
                alert('请输入新密码')
            }else{
                var confirm = $('#confirm_password').val();
                if(new_password != confirm ){
                    alert('新密码与确认密码不一致');
                }
            }
         };
        //兼容ie，判断是否为空
        function judge(){
             if($('#old_password').val() == ''){
                alert('密码不能为空');
                return false;
            }
             if($('#new_password').val() == ''){
                alert('新密码不能为空');
                return false;
            }
             if($('#confirm_password').val() == ''){
                alert('确认新密码不能为空');
                return false;
            }
            return true;
        }

        //点击提交事件
        $('#submit').click(function(){
            var old_password = $('#old_password').val();
            var new_password = $('#new_password').val();
            var confirm_password = $('#confirm_password').val();
            var flag = 0;
            //判断密码一致
            if(judge()){
                if($('#confirm_password').val() == $('#new_password').val()){
                    flag = 1;
                }else{
                    flag = 0;
                    alert('新密码不一致');
                }
            }
            //判断表单是否全部填写
            if(flag ==1){
                $.ajax({
                    type:'post',
                    url:APP+'/updatePSW',
                    data:{old:old_password,new:new_password,confirm:confirm_password},
                    success:function(result){
                        alert(result['msg']);
                        top.location.href=APP+"/login";
                    },
                    error:function(data){
                        alert('数据提交错误');
                    }
                })

            }

        });