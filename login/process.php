<?php

	$username = $_POST['user'];
	$password = $_POST['password'];
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	
	include_once 'conn.php';
	mysql_select_db("login");
	
	$result = mysql_query("select * from user where username = '$username' and password = '$password'") 
				or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	
	if($row['username'] == $username && $row['password'] == $password){
		echo "Login success!!!! Welcome ".$row['username'];	
	}else{
		echo "Failed to Login";
	}
?>