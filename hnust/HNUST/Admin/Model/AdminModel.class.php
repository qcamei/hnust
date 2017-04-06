<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
	protected $_validate = array(
		array('userid','require','用户名不能为空'),
        array('userid','','该用户名已注册',0,'unique',1),
        array('password','require','密码不能为空',self::MUST_VALIDATE),
	    array('nickname','require','昵称不能为空'),
	    );
}