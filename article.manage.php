<?php
	require_once('/Library/WebServer/Documents/article/connect.php');
	//传入页码
	$page = $_GET["p"] == "" ? "1" : $_GET['p'];
	//编写sql获取分页数据 select * from 表名 limit 起始位置，显示条数
	$sql = "select * from article order by dateline desc limit ".((intval($page) - 1) * 10).",10";
	$query = mysql_query($sql);
	if ($query&&mysql_num_rows($query)) {
		while ($row = mysql_fetch_assoc($query)) {
			$data[] = $row;
		}
	}else{
			$data[] = array();
	}
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
		li{
			list-style: none;
			height: 30px;
			border-bottom: groove 2px rgb(254,221,120);
			padding-top: 15px;
			margin-bottom: 0px;
		}
		#list_left{
			text-decoration: none;
			color: #000000;
			font-size: 20px;
			padding: 0px;
			margin: 0px;
		}
		#list_left:hover{
			font-size: 21px;
			margin-left: 1px;
			color: #999;
		}
		#list_right{
			color: #000000;
		}
		#list_right:hover{
			color: #999;
		}
		#tit{
			width: 500px;
			height: 100px;
			font-size: 60px;
		}
		table{
			margin: 20px auto;
		}
		caption{
			font-size: 20px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
<div id="outer">
	<div id="neco">
		<div id="tit">管理文章</div>
	</div>
	<div id="doge">
		<div id="left">
			<ul id=“list”>
				<li><a id="list_left" href="article.add.php">添加文章</a></li>
				<li><a id="list_left" href="article.manage.php">管理文章</a></li>
			</ul>
		</div>

		<div id="right">
			<table border="1" cellspacing="0">
				<caption>文章管理列表</caption>
				<tr>
					<th width="700">文章标题</th>
					<th width="150">操作</th> 
				</tr>
		<?php
			if (!empty($data)) {
				foreach ($data as $value) {
		?>
		<tr>
			<td><?php echo $value['title']?></td>
			<td align="center"><a id="list_right" href="article.del.handle.php?id=<?php echo $value['id']?>">删除</a>&nbsp&nbsp&nbsp<a id="list_right" href="article.modify.php?id=<?php echo $value['id']?>">修改</a></td>
		</tr>
		<?php
				}
			}
		?>
			</table>
		</div>
	</div>
</div>
</body>
</html> 