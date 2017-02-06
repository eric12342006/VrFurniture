<?php

	session_start();
	$username = $_POST['user'];
	$password = $_POST['password'];
	$_SESSION['user']= $username;
	
	
	$username = stripcslashes($username);
	$password = stripcslashes($password);

	
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");

	
	$q = mysqli_query($con,"select * from users where username = '$username' and password = '$password'") ;
				
	$row = mysqli_fetch_array($q);
	
	if($row['username'] == $username && $row['password'] == $password){
		header("Location:../index.html");
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