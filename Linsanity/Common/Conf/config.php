<?php
return array(
	//'配置项'=>'配置值'
	'MODULE_ALLOW_LIST' => array('Home','Jeffery','User'),  //允许访问的模块
	'DEFAULT_MODULE' => 'Home', //默认模块
    'URL_MODEL' => '2', //URL模式
    'SESSION_AUTO_START' => true, //是否开启session

    'URL_HTML_SUFFIX'       =>  'html|shtml',  // URL伪静态后缀设置
    'URL_DENY_SUFFIX'       =>  'ico|png|gif|jpg|pdf', // URL禁止访问的后缀设置
  
    // 数据库连接 
    'DB_TYPE' => 'mysql', // 数据库类型
    'DB_HOST' => 'localhost', // 服务器地址
    'DB_NAME' => 'a1017192808', // 数据库名
    'DB_USER' => 'root', // 用户名
    'DB_PWD' => 'root', // 密码
    'DB_PORT' => '3306', // 端口
    'DB_PREFIX' => '', // 数据库表前缀

);