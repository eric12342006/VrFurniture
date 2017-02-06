<?php session_start() ?>
<?php
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

$result = mysqli_query($con,"SELECT * FROM orderlist where username='$username'");

echo "<table border='1'>
<tr>
<th>OrderID</th>
<th>ProductName</th>
<th>TotalPrice</th>
<th>OrderDate</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
$x ++;
echo "<tr>";
$p_name = $row['p_name'];
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['p_name'] . "</td>";
echo "<td>".$row['t_price']."</td>";
echo "<td>".$row['date']."</td>";
echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>