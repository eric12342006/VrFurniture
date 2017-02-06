<html>
<head>

<link rel="stylesheet" href="css/shoppingcart.css">
<link rel="stylesheet" href="css/layout.css">
</head>

<script>
	function del(){
		window.location.href='delcart.php';
	}
</script>
<body>
<header id="top" class="static">
  <div class="row">
    <div class="col full">
      <div class="logo"> <a href="index.html"><img alt="" src="images/logo.png"></a> </div>
      <nav id="nav-wrap"> <a class="mobile-btn" href="#nav-wrap" title="Show navigation">Show navigation</a> <a class="mobile-btn" href="#" title="Hide navigation">Hide navigation</a>
        <ul id="nav" class="nav">
          <li><a href="index.html">Site</a></li>
          <li class="active"><a href="#">Journal</a></li>
        </ul>
      </nav>
    </div>
  </div>
</header>
</br>
</br>
<?php
session_start();
$x = 0;

if(!isset($_SESSION['user'])) {
	echo "Please login first";
}

$username = $_SESSION['user'];

$con = mysqli_connect("localhost","root","","vr");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM cart where username='$username'");

echo "<table border='1'>
<tr>
<th>Image</th>
<th>ProductName</th>
<th>Price</th>
<th>Quality</th>
<th>Delete</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td><img src='".$row['image']. "' alt='' height='100' width='100' /></td> ";
//echo "<td>" . $row['username'] . "</td>";
$p_name = $row['p_name'];
echo "<td>" . $row['p_name'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<td>".$row['quantity']."</td>";
//echo "<td><input type='button' value='Delete' onclick="header('Location:delcart.php)"></td>";
?>
<td><input type='button' name ='' value='Delete' onclick='del()'></td>
<?php
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>

</body>
</html>