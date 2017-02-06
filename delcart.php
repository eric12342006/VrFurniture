<?php
	session_start();
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");
	
		$username = $_SESSION['user'];
		$productname = $_SESSION['productname'];
		$price = $_SESSION['price'];
		$image = $_SESSION['image'];
		
		$result = mysqli_query($con,"SELECT * FROM cart");
		while($row = mysqli_fetch_array($result)){
			if($row['username'] == $username && $row['p_name'] == $productname){
				$check = true;
				$quality = $row['quality'];
			}
		}
		
		if($quality == 1){
			mysqli_query($con,"delete from cart where p_name= '$productname'");
			header("Location:index.html");
		}else{
			$quality--;
			mysqli_query($con,"update cart set quality= '$quality' where p_name= '$productname'");
			header("Location:index.html");
		}



?>