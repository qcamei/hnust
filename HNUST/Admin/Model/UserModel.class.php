<?php
namespace Admin\Model;
use Think\Model;

class AdminModel extends Model{
	protected $_validate = array(
		array('userid','require','用户名不能为空'),
        array('userid','','该用户名已注册',0,'unique',1),
        array('userid','6,10','用户名长度为6-10位',0,'length'),
        array('password','require','密码不能为空',self::MUST_VALIDATE),
        array('password','5,20','密码长度为5-20位',self::MUST_VALIDATE,'length'),
	    array('nickname','require','昵称不能为空'),
	    );
}