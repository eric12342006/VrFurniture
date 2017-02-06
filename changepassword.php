<?php
	session_start();
	$con = mysqli_connect("localhost","root","");
	mysqli_select_db($con,"vr");
	
	$username = $_SESSION['user'];
	$oldpw = $_POST['password'];
	$newpw = $_POST['password1'];
	
	$result = mysqli_query($con,"SELECT * FROM users where username='$username'");
	
	while($row = mysqli_fetch_array($result)){
		if($row['password'] == $oldpw){
			mysqli_query($con,"update users set password = '$newpw' where username='$username'");
?>	
			<script type="text/javascript">
				alert("Password changed!");
				window.location.href = "myaccount.php";
			</script>
<?php
		}else{
?>
		<script type="text/javascript">
			alert("Your old password insert wrong");
			window.location.href = "password.php";
		</script>
<?php			
		}
	}
	
?>