<?php
	session_start();
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");
	
	if(isset($_SESSION['user'])) {
		$username = $_SESSION['user'];
		$productname = $_SESSION['productname'];
		$price = $_SESSION['price'];
		$totalprice;
		$quantity = 1;
		$date = date("Y/m/d");
		if (isset($_GET["w1"])){
			 $num = $_GET["w1"];
		 }
		 if($num == 1){
			 $order = "Blue Sofa";
		 }else{
			 $order = "Red Sofa";
		 }
		
		$result = mysqli_query($con,"SELECT * FROM cart where p_name ='$order'");
		while($row = mysqli_fetch_array($result)){
			if($row['username'] == $username){
					$quantity = $row['quantity'];
					$totalprice = $quantity * $price;
			}
		}
		
		mysqli_query($con,"delete from cart where p_name= '$order'");
		mysqli_query($con,"insert into orderlist(username,t_price,date,p_name) values('$username','$totalprice','$date','$order')");
		
	}
		
?>
		<script type="text/javascript">
			alert("Order successful!");
			window.location.href = "index_.html";
		</script>