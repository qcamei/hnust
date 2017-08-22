<?php
return array(
	//'配置项'=>'配置值'
	'URL_ROUTER_ON'=>true,                     //开启路由
	'URL_ROUTE_RULES'=>array(				   //路由规则定义
		'download'=>'Home/File/download',
		'upload'=>'Admin/Index/upload',
		'more'=>'Home/File/more',
		'nextPage'=>'Home/File/nextPage',
		'getusersList'=>'Admin/Index/getusersList',
		'getinformList'=>'Admin/Index/getinformList',
		'uploadinform'=>'Admin/Index/uploadinform',
		'updateinform'=>'Admin/Index/updateInform',
		'updateNews'=>'Admin/Index/editNews',
		'deleteinform'=>'Admin/Index/deleteInform',
		'deleteuser'=>'Admin/Index/deleteUser',
		'admin'=>'Admin/Index/index',
		'login'=>'Admin/Login/login',
		'logout'=>'Admin/Login/logout',
		'regedit'=>'Admin/Login/regedit',
		'updatePSW'=>'Admin/Index/updatePSW',
		),
	'DB_TYPE'               =>  'mysql',     // 数据库类型
	'DB_HOST'               =>  '112.74.103.170', // 服务器地址
	'DB_NAME'               =>  'hnust',          // 数据库名
	'DB_USER'               =>  'hnust',      // 用户名
	'DB_PWD'                =>  'hnustuser',          // 密码
	'DB_PORT'               =>  '3306',        // 端口
	'DB_PREFIX'             =>   'hnust_',
);