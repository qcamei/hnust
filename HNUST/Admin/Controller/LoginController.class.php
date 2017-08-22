<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller
{
    public function login()
    {
        if(IS_POST){
            $username = I('username', '', 'addslashes');
            $psw = I('password', '', 'addslashes');
            $user = M('user');
            $truepsw = $user->field('password')->where(array("username" => $username))->select();
            if (password_verify($psw,$truepsw[0]['password'])) {
                header("Content-Type:*/*;charset:utf-8");
                header("location:".__APP__ . '/admin');
                $_SESSION['id'] = $username;
                cookie('username', $username);
            } else {
                $this->assign("error", "账号或密码错误");
                $this->display("Index:login");
            }
        } else {
            $this->display("Index:login");
        }
    }
    public function updatepsw(){

    }
    public function logout()
    {
        header("location:" . __APP__ . '/login');
        session('[destroy]');
        session(null);
        cookie(null);
    }
    public function regedit()
    {
        if (IS_POST) {
            $data['username'] = I('username','');
            $data['password'] = password_hash(I('psw', ''), PASSWORD_DEFAULT);
            $data['nickname'] = I('nickname', '');
            $data['authority'] = I('power', '');
            $user = D('User');
            if (!$user->create($data)) {
               $this->ajaxReturn(array('r'=>-1,'error'=>$user->getError()));
            } else {
                $result=$user->add();
                if(!$result){
                    $this->ajaxReturn(array('r' => -1, 'error' => '注册失败,请重新注册'));
                }
                else {
                    $this->ajaxReturn(array('r' => 0, 'error' => '注册成功'));
                }
            }
        } else {
            $this->display("Index:regedit");
        }
    }
}