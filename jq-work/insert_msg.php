
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dbinsert.php</title>
</head>
 
<body>
<?php
//首先从dbselect.php的表单中接受操作的数据
//dbselect.php故意用到get方法，只是想说明php中对get与post的处理同样可以通过$_REQUEST["变量名"]来实现
$name=$_POST['name'];
$age=$_POST['age'];
$pn=$_POST['pn'];
$msg=$_POST['msg'];
//操作数据库的指定动作同dbselect.php。
$con=mysql_connect("localhost","root","yami");
if(!$con){
	die("连接失败！");
	}
mysql_select_db("jqwork",$con);
//控制数据库比dbselect.php更加简单，因为不用对数据库的查询结果进行处理
//只是要注意，这里连接字符串是用到.的，而不是jsp的+，asp的&，请注意！
mysql_query("insert into message(name,age,pn,msg) values ('$name','$age','$pn','$msg');");
mysql_close($con);
?>
<script>
window.location.href="message.php";
</script>
</body>
</html>