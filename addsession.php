<?php
		session_start();
		$_SESSION['productname'] = "Blue Sofa";
		$_SESSION['price'] = "1500";
		$_SESSION['image'] = "img/Furniture_ges1/bed1/2.PNG";
		if (isset($_GET["w1"])){
			 $num = $_GET["w1"];
		 }
		 if($num == 1){
?>
		<script type="text/javascript">
			window.location.href = "orderone.php";
		</script>
<?php
		 }else{
?>
		<script type="text/javascript">
			alert("items insert into shopping cart!");
			window.location.href = "insertcart.php";
		</script>
<?php
		 }
?>