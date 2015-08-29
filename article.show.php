<?php
	require_once('/Library/WebServer/Documents/article/connect.php');
	$id = $_GET["id"];
	$query = mysql_query("select * from article where id=$id");
	$data = mysql_fetch_assoc($query);
?>

<html>
<head>
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
		#con{
			font-size: 10px;
		}
		#find{
			margin: 40px 0 0 30px;
			width: 200px;
			height: 25px;
		}
		#button{
			height: 25px;
			width: 60px;
		}
	</style>
</head>
<body>
	<div id="first"></div>
	<div id="second">
		<div id="left">
			<div>
				<h1 id="tit"><?php echo $data['title']?></h1>
				<h1 id="auth"><?php echo $data['author']?></h1>
				<h1 id="con"><?php echo $data['content']?></h1>
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