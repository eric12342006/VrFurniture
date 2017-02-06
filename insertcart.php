<?php
	session_start();
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");
	$check = false;
	
	if(isset($_SESSION['user'])) {
		$username = $_SESSION['user'];
		$productname = $_SESSION['productname'];
		$price = $_SESSION['price'];
		$image = $_SESSION['image'];
		
		$result = mysqli_query($con,"SELECT * FROM cart");
		while($row = mysqli_fetch_array($result)){
			if($username == $row['username'] && $productname == $row['p_name']){
				$check = true;
				$quantity = $row['quantity'];
			}
		}
		if($check){
			$quantity++;
			mysqli_query($con,"update cart set quantity = '$quantity'");
			header("Location:index.html");
		}else{
			$q = mysqli_query($con,"insert into cart(username,p_name,price,image,quantity) values('$username','$productname','$price','$image',1)");
			header("Location:index.html");
		}
	}else{
		header("Location:login.php");
	}




?>