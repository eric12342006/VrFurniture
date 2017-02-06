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
				$quantity = $row['quantity'];
			}
		}
		
		if($quantity == 1){
			mysqli_query($con,"delete from cart where p_name= '$productname'");
			header("Location:shoppingcart.php");
		}else{
			$quantity--;
			mysqli_query($con,"update cart set quantity= '$quantity' where p_name= '$productname'");
			header("Location:shoppingcart.php");
		}



?>