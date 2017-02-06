<?php
	function del(name){
		alert();
		window.location.href='delcart.php';
	}
?>

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
echo "<td>".$row['quality']."</td>";
//echo "<td><input type='button' value='Delete' onclick="header('Location:delcart.php)"></td>";
echo "<td><input type='button' name ='' value='Delete' onclick='del($p_name)'></td>";

echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>