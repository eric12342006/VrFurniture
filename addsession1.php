<?php
		session_start();
		$_SESSION['productname'] = "Red Sofa";
		$_SESSION['price'] = "1300";
		$_SESSION['image'] = "img/Furniture_ges1/bed2/1.PNG";
		
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