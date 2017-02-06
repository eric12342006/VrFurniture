<?php

	session_start();
	$username = $_POST['user'];
	$password = $_POST['password'];
	$_SESSION['user']= $username;
	
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	
	include_once 'conn.php';
	mysql_select_db("vr");
	
	$result = mysql_query("select * from users where username = '$username' and password = '$password'") 
				or die("Failed to query database".mysql_error());
	$row = mysql_fetch_array($result);
	
	if($row['username'] == $username && $row['password'] == $password){
		header("Location:../index_.html");
		?>
		 <script type="text/javascript">
			alert("message successfully sent"); 
		</script>
  <?php
		  exit;
	}else{
		echo '<script type="text/javascript">alert("It works.");</script>';
		header("Location:login.php");
	}
?>