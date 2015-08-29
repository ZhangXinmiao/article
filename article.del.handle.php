<?php
	require_once('/Library/WebServer/Documents/article/connect.php');
	$id = $_GET['id'];
	$delete_sql = "delete from article where id=$id";
	if (mysql_query($delete_sql)) {
		echo '<script>alert("删除文章成功！");window.location.href="article.manage.php"</script>';
	}else{
		echo '<script>alert("删除文章失败!");window.location.href="article.manage.php"</script>';
	}
?>