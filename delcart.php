<?php
	session_start();
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");
	
		$username = $_SESSION['user'];
		$productname = $_SESSION['productname'];
		$price = $_SESSION['price'];
		$image = $_SESSION['image'];
		 if (isset($_GET["w1"])){
			 $num = $_GET["w1"];
		 }
		 if($num == 1){
			 $del = "Blue Sofa";
		 }else{
			 $del = "Red Sofa";
		 }
		 
		//echo '<script language="javascript">';
		//echo "alert('$del')";
		//echo '</script>';
		
		
		$result = mysqli_query($con,"SELECT * FROM cart where p_name ='$del'");
		while($row = mysqli_fetch_array($result)){
			if($row['username'] == $username){
				$check = true;
				$quantity = $row['quantity'];
			}
		}
		
		if($quantity == 1){
			mysqli_query($con,"delete from cart where p_name= '$del'");
			header("Location:shoppingcart.php");
		}else{
			$quantity--;
			mysqli_query($con,"update cart set quantity= '$quantity' where p_name= '$del'");
			header("Location:shoppingcart.php");
		}



?>