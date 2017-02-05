<?php
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");
	
	
	//$username = mysqli_real_escape_string($_POST['name']);
    //$email = mysqli_real_escape_string($_POST['email']);
    //$password = mysqli_real_escape_string($_POST['password']);
	
	$user = $_POST['user'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$q = mysqli_query($con,"insert into users(username,password,email) values('$user','$password','$email')");

	if($q){
		echo "successful";
	}else{
		echo "not allow";
	}




?>