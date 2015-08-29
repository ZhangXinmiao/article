<?php
	require_once('/Library/WebServer/Documents/article/connect.php');
	$sql = "select * from article order by dateline desc";
	$query = mysql_query($sql);
	if ($query&&mysql_num_rows($query)) {
		while($row = mysql_fetch_assoc($query)){
			$data[] = $row;
		}
	}
?>

<html>
<meta charset="utf-8">
<head>
	<title>文章发布系统</title>
	<style type="text/css">
		#first{
			width: 100%;
			height: 150px;
			background: #66ccff;
		}
		#tit{
			font-size: 30px;
		}
		#auth{
			font-size: 15px;
			float: right;
			margin-right: 50px;
		}
		#des{
			font-size: 15px;
		}
		#second{
			width: 1200px;
			height: 800px;
			margin: 0 auto;
		}
		#left{
			height: 100%;
			float: left;
			width: 75%;
			border-right: solid 1px #000;
		}
		#right{
			float: right;
			width: 25%;
			height: 800px;
			margin-top: -800px;
		}
		a{
			
			text-decoration: none;
			font-size: 10px;
		}
		#find{
			margin: 40px 0 0 30px;
			width: 200px;
			height: 25px;
		}
	</style>
</head>
<body>
	<div id="first"></div>
	<div id="second">
		<div id="left">
			<div>
				<?php
					if (empty($data)) {
						echo "当前没有文章，请管理员在后台添加文章";
					}else{
						foreach ($data as $key => $value) {
				?>
				<h1 id="tit"><?php echo $value['title']?></h1>
				<h1 id="auth"><?php echo $value['author']?></h1>
				<br> 
				<h1 id="des"><?php echo $value['description']?></h1>
				<a href="article.show.php?id=<?php echo $value['id']?>">详细信息>></a>
				<hr width=95% align="left">
				<?php
						}
					}
				?>
			</div>
		</div>	
		<div id="right">
			<form id="form1" name="form1" method="get" action="article.find.handle.php">
				<td><input type="text" name="key" id="find"></td>
				<td><input type="submit" name="button" id="button" value="search"></td>
			</form>
		</div>
	</div>
</body>
</html>