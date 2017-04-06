<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
// 登录验证
 public function login(){
 	if(IS_POST){
       $username=I('username','');
       $psw=I('password','');
       $user=M('admin');
       $truepsw=$user->field('password')->where(array("userid"=>$username))->select();
       if($psw!=''&&$psw==$truepsw[0]['password']){
        header("Content-Type:*/*;charset:utf-8");
        header("location:".__APP__.'/admin');
        $_SESSION['id']=$username;
        cookie('username',$username);
      }
    else{
       $this->assign("error","账号或密码错误");
       $this->display("Index:login");
    }
    }
   else{
   	  $this->display("Index:login");
   }
 }
 public function updatepsw(){
      
 }
 public function logout(){
    session('[destroy]');
    session(null);
    cookie(null);
    exit('<script>top.location.href="'.__APP__.'/login"</script>');
 }
 function regedit(){
  if(IS_POST){
   $data['userid']=I('username','');
   $data['password']=I('psw','');
   $data['nickname']=I('nickname','');
   $data['authority']=I('power','');
   // $data['nickname']=I('nickname','');
   $user=D('Admin');
   if(!$user->create($data)){
       $this->ajaxReturn(array('r'=>-1,'error'=>$user->getError()));
   }
   else{
      $result=$user->add();
      if(!$result){
          $this->ajaxReturn(array('r'=>-1,'error'=>'注册失败,请重新注册'));
      }
      else {
        $this->ajaxReturn(array('r'=>0,'error'=>'注册成功'));
      }
   }
 }
 else {
   $this->display("Index:regedit");
}
}
}