<?php
	require_once('/Library/WebServer/Documents/article/connect.php');

	if (!(isset($_POST['title'])&&(!empty($_POST['title'])))) {
		echo '<script>alert("标题不能为空！");window.location.href="article.add.php"';
	}
	$title = $_POST['title'];
	$author = $_POST['author'];
	$description = $_POST['description'];
	$content = $_POST['content'];
	$dateline = time();
	$insert_sql = "insert into article(title,author,description,content,dateline)values('$title','$author','$description','$content',$dateline)";
	if (mysql_query($insert_sql)) {
		echo '<script>alert("成功添加一篇文章！");window.location.href="article.add.php";</script>';
	}else{
		echo '<script>alert("添加文章失败!");window.location.href="article.add.php";</script>';
	}
?>