<?php
	
	header("content-type","text/html;charset=utf-8");
	
	//一、接收前端传来的数据
	$username = $_POST["username"];
	$userpass = $_POST["userpass"];
	
	//二、保存数据
	//1、建立连接并选择数据库
	$conn = mysql_connect("localhost","root","root");
	if(!$conn){
		//die("连接失败".mysql_error());
		echo "0";	
	}	
	mysql_select_db("2001logo",$conn);
	
	//2、执行SQL语句
	$sqlStr = "insert into vip(username,userPass)
              values('$username','$userpass')";
	//echo $sqlStr;
	
	$result = mysql_query($sqlStr,$conn);
	
	//3、关闭数据库
	mysql_close($conn);
	
	//三、给前端响应
    if($result==1){
		echo "success";//表示注册成功
	}else{
		echo "fail";//表示注册失败
	}

?>