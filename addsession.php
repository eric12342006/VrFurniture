<?php
		session_start();
		$_SESSION['productname'] = "Blue Sofa";
		$_SESSION['price'] = "1500";
		$_SESSION['image'] = "img/Furniture_ges1/bed1/2.PNG";
?>
		<script type="text/javascript">
			alert("items insert into shopping cart!");
			window.location.href = "insertcart.php";
		</script>