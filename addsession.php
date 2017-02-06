<?php
		session_start();
		$_SESSION['productname'] = "Blue Sofa";
		$_SESSION['price'] = "1500";
		$_SESSION['image'] = "img/Furniture_ges1/bed1/2.PNG";
		
?>

<?php	
		if(isset($_SESSION['user'])){
?>
			<script type="text/javascript">
			alert('item has been added into shopping cart'); 
			window.location.href = "insertcart.php";
			</script>
<?php
				}else{
?>
			<script type="text/javascript">
					alert("Please login first");
					window.location.href = "login/login.php";
			</script>
<?php
				}
?>