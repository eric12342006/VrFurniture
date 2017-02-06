<?php
		session_start();
		$_SESSION['productname'] = "Red Sofa";
		$_SESSION['price'] = "1300";
		$_SESSION['image'] = "img/Furniture_ges1/bed2/1.PNG";
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