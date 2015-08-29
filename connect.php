<?php
	require_once('/Library/WebServer/Documents/article/config.php');
	//连接数据库
	mysql_connect(HOST,USERNAME,PASSWORD)or die("数据库连接失败");
	//选择数据库
	mysql_select_db('school')or die("数据库选择失败");
	//告诉MySQL我们使用的是utf8字符集
	mysql_query("set names utf8");
?>