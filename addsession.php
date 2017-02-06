<?php
		session_start();
		$_SESSION['productname'] = "Blue Sofa";
		$_SESSION['price'] = "1500";
		$_SESSION['image'] = "img/Furniture_ges1/bed1/2.PNG";
	
		header("Location:insertcart.php");
?>