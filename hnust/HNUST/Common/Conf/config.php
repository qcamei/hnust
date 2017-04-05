<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'=>true,                     //开启路由
	'URL_ROUTE_RULES'=>array(				   //路由规则定义
		'download'=>'Home/File/download',
		'upload'=>'Admin/Index/upload',
		'more'=>'Home/File/more',
		'nextPage'=>'Home/File/nextPage',
		'getfileList'=>'Admin/Index/getfileList',
		'getinformList'=>'Admin/Index/getinformList',
		'uploadinfor'=>'Admin/Index/uploadinfor',
		'updateFile'=>'Admin/Index/updateFile',
		'updateinform'=>'Admin/Index/updateInfor',
		'clogin'=>'Admin/Index/clogin',
		'admin'=>'Admin/Index/index',
		'login'=>'Admin/Index/login',
		'logout'=>'Admin/Index/logout',
		'updatepsw'=>'Admin/Index/updatepsw',
		),
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '127.0.0.1', // 服务器地址
	'DB_NAME'               =>  'hnust',          // 数据库名
	'DB_USER'               =>  'root',      // 用户名
	'DB_PWD'                =>  '123456',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>   'hnust_',
);