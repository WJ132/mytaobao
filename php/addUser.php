<?php
	
	header("content-type","text/html;charset=utf-8");
	
	//一、接收前端传来的数据
	$username = $_POST["username"];
	$userPass = $_POST["userpass"];
	
	//二、保存数据
	include("./conndb.php");
	
	//2、执行SQL语句
	$sqlStr = "insert into vip(username,userPass)
              values('$username','$userPass')";
	//echo $sqlStr;
	
	$result = mysql_query($sqlStr,$con);
	
	//3、关闭数据库
	mysql_close($con);
	
	//三、给前端响应
    if($result==1){
		echo "success";//表示注册成功
	}else{
		echo "fail";//表示注册失败
	}

?>