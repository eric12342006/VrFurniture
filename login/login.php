<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" href="css/style.css">
	
	
    <script type="text/javascript">
        function checkPassword(){
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;
            if (password != confirm_password) {
                alert("password should be same");
                location.reload();
            }
        }
    </script>
</head>

<body>
<div class="form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="/" method="post">
          
            <div class="field-wrap">
              <label>
                Username<span class="req">*</span>
              </label>
              <input type="text" id="user" name="user"/>
            </div>    

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password" id="password" name="password"/>
          </div>
          
		  <div class="field-wrap">
            <label>
              Confirm Password<span class="req">*</span>
            </label>
            <input type="password" id="confirm_password" name="confirm_password" onchange="checkPassword()"/>
          </div>
          
		  
          <button type="submit" class="button button-block"/>Get Started</button>
          
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="process.php" method="post">
          
            <div class="field-wrap">
            <label>
              Username:<span class="req">*</span>
            </label>
            <input type="text" id="user" name="user"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" id="password" name="password"/>
          </div>
          
          
          <button class="button button-block"/>Log In</button>
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="js/index.js"></script>
</body>


</html>