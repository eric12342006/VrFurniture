<?php
	session_start();
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");
	
	if(isset($_SESSION['user'])) {
		$username = $_SESSION['user'];
		$productname = "Blue Sofa";
		$price = "1500";
		$image = "img/Furniture_ges1/bed1/2.PNG";
		
		$q = mysqli_query($con,"insert into cart(username,p_name,price,image) values('$username','$productname','$price','$image')");
	}else{
		header("Location:login.php");
	}




?>