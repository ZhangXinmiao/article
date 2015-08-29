<?php
	require_once('/Library/WebServer/Documents/article/connect.php');
	//读取旧信息
	$id = $_GET['id'];
	$query = mysql_query("select * from article where id=$id");
	$data = mysql_fetch_assoc($query);
?>

<html>
<meta charset="utf-8">
<head>
	<title>文章添加</title>
	<style type="text/css">
		body{
			background: rgb(253,226,186);
		}
		#outer{
			width: 1230px;
			height: 1050px;
			margin: 40px auto;
			padding-top: 10px;
			background: rgb(254,221,120);
		}
		#neco{
			width: 1210px;
			height: 150px;
		    background: rgb(246,174,106);
		    margin: 0 auto;
		}
		#doge{
			width: 1210px;
			margin: 10px auto;	
		}
		#left{
			width: 250px;
			height: 880px;
			float: left;
			background: rgb(246,174,106);
		}	
		#right{
			width: 950px;
			height: 880px;
			float: right;
			background: rgb(246,174,106);
		}
		#list{
			
		}
		li{
			list-style: none;
			height: 30px;
			border-bottom: groove 2px rgb(254,221,120);
			padding-top: 15px;
			margin-bottom: 0px;
		}
		a{
			text-decoration: none;
			color: #000000;
			font-size: 20px;
			padding: 0px;
			margin: 0px;
		}
		a:hover{
			font-size: 21px;
			margin-left: 1px;
			color: #999;
		}
		#tab{
			margin: 10px auto;
		}
		#tit{
			width: 500px;
			height: 100px;
			font-size: 60px;
		}
	</style>
</head>
<body>
<div id="outer">
	<div id="neco">
		<div id="tit">修改文章</div>
	</div>
	<div id="doge">
		<div id="left">
			<ul id=“list”>
				<li><a href="article.add.php">添加文章</a></li>
				<li><a href="article.manage.php">管理文章</a></li>
			</ul>
		</div>

		<div id="right">
			<form id="form1" namee="form1" method="post" action="article.modify.handle.php">
				<input type="hidden" name="id" value="<?php echo $data['id']?>"/>
				<table border="0" cellpadding="8" cellspacing="1" id="tab">
					<tr>
						<td>标题</td>
						<td><input type="text" name="title" id="title" value="<?php echo $data['title']?>"></td>
					</tr>
					<tr>
						<td>作者</td>
						<td><input type="text" name="author" id="author" value="<?php echo $data['author']?>"></td>
					</tr>
					<tr>
						<td>简介</td>
						<td><textarea rows="2" cols="100" name="description" id="description"><?php echo $data['description']?></textarea></td>
					</tr>
					<tr>
						<td>内容</td>
						<td><textarea rows="20" cols="100" name="content" id="content"><?php echo $data['content']?></textarea></td>
					</tr>
					<tr>
						<td colspan="2" align="right"><input type="submit" name="button" id="button" value="提交"></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html> 