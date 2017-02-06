<?php
		session_start();
		$_SESSION['productname'] = "Red Sofa";
		$_SESSION['price'] = "1300";
		$_SESSION['image'] = "img/Furniture_ges1/bed2/1.PNG";
	
		header("Location:insertcart.php");
?>