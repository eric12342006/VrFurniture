<?php
	session_start();
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");
	
	if(isset($_SESSION['user'])) {
		$username = $_SESSION['user'];
		$productname;
		$price;
		$totalprice;
		$date = date("Y/m/d");
		
		$result = mysqli_query($con,"SELECT * FROM cart");
		while($row = mysqli_fetch_array($result)){
			if($row['username'] == $username ){
				$quantity = $row['quantity'];
				$productname .= " ".$row['p_name']."(".$quantity.")";
				$price = $row['price'];	
				$totalprice += $quantity * $price;
			}
		}
		
		mysqli_query($con,"delete from cart where username = '$username'");
		mysqli_query($con,"insert into orderlist(username,t_price,date,p_name) values('$username','$totalprice','$date','$productname')");
		
		header("Location:index_.html");
	}
		
?>