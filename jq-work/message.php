<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dbselect</title>
</head>
 <link href="style/footer.css" rel="stylesheet" type="text/css">
<link href="style/header.css" rel="stylesheet" type="text/css">
<link href="style/bg.css" rel="stylesheet" type="text/css">
<link href="style/main_index.css" rel="stylesheet" type="text/css">
<link href="style/try_return.css" rel="stylesheet" type="text/css"> 
	<link rel="stylesheet" type="text/css" href="style/style.css" />
</head>
<style>
		body {
			cursor: url('./mouse.ico)'), default;
		}
		</style>
<body style>
	<div class="simpleblock header">
		<div class="header-content">
			<div class="header-left">
					<a href="key社简介.html">key社简介</a>
					<a href="作品介绍1.html">作品介绍</a>
					<a href="鉴赏.html">鉴赏</a>
			</div>
			<div class="header-right">
				<a href="留言板.html" target="_blank">留言板</a>
					
			</div>
		</div>
	</div>
	<div class="logoplace">
		<a href="index.html"><img src="images/logo.png" alt="logo" style="column-pointer;"></a>
	</div>
	<div class="mainframe">
		<div class="main-content">
			<div class="bg-pic visible" >
				<img class="bg-img" alt src="images/background.jpg" style="opacity: 50%">
			</div>
			<div class="main">
				<div class="main_try">
					<h>留言板</h>
					<div class="main_try_main2">
						<table id="table">
							<tr><th style="width: 20%;">姓名/昵称</th><th>留言</th></tr>
							<?php
							
							$con=mysql_connect("localhost","root","yami");
							if(!$con){
								die("连接失败！");
								}
							
							mysql_select_db("jqwork",$con);
							
							$result=mysql_query("select * from message");
							while($row=mysql_fetch_array($result)){
								echo "<tr>";
								echo "<td>${row["name"]}</td>";
								echo "<td>${row["msg"]}</td>";
								echo "</tr>";
							}
							//查询完毕，记得人走带门
							mysql_close($con);
							 
							?>
						</table>
					</div>
				</div>
				<div class="main_foot2"></div>
			</div>
		</div>
	</div>
	<div class="footer">
		<div class="footer-content">
			<ul>
				<li><a href="https://www.bilibili.com/" target="_blank">哔哩哔哩</a></li>
				<li><a href="http://key.visualarts.gr.jp/" target="_blank">key社官网</a></li>
				<li><a href="http://www.dilidili.wang/" target="_blank">嘀哩嘀哩</a></li>
				<li><a href="https://tieba.baidu.com/f?kw=key%C9%E7&fr=ala0&tpl=5" target="_blank">key社百度贴吧</a></li>
				<li><a href="https://fgo.umowang.com/" target="_blank">fgowiki</a></li>
				<li><a href="http://wiki.joyme.com/blhx/首页" target="_blank">碧蓝航线wiki</a></li>
			</ul>
		</div>
		<div class="footer_I"><a href="#">返回顶部</a></div>
	</div>
</body>
</html>