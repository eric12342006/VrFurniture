<!DOCTYPE html>
<html>
<head>
<title>My Account</title>
<meta charset="utf-8">

<link rel="stylesheet" href="css/base.css">
<link rel="stylesheet" href="css/layout.css">
<link rel="shortcut icon" href="images/favicon.ico">

  <script type="text/javascript">
        function checkPassword(){
            var password = document.getElementById("password1").value;
            var confirm_password = document.getElementById("password2").value;
            if (password != confirm_password) {
                alert("password should be same");
                location.reload();
            }
        }
    </script>

</head>

<body data-spy="scroll" data-target="#nav-wrap">
<header class="mobile">
	  <div class="row">
		<div class="col full">
		  <div class="logo"> <a href="#index"><img alt="" src="images/logo.png"></a> </div>
		  <nav id="nav-wrap"> <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a> <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
			<ul id="nav" class="nav">
			  <li><a href="index_.html">Home</a></li>
			  <li><a href="myaccount.php">My Account</a></li>
			  <li><a href="shoppingcart.php">Shopping Cart</a></li>
			  <li><a href="myorder.php">My Order</a></li>
			  <li><a href="login/logout.php">Logout</a></li>
			</ul>
		  </nav>
		</div>
	  </div>
	</header>
	<br/><br/>
	<form action="changepassword.php" method="post">
		<label>Old password:</label>
		<input type="password" id="password" name="password"/>
		
		<label>New password:</label>
		<input type="password" id="password1" name="password1"/>
		
		<label>Confirm New password:</label>
		<input type="password" id="password2" name="password2" onchange="checkPassword()"/>
		<br/><br/>
		<button type="submit" class="button button-block" value="submit" name="submit"/>Submit</button>
	
	</form>
</body>