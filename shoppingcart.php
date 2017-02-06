<?php
$con = mysqli_connect("localhost","root","","vr");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM cart");

echo "<table border='1'>
<tr>
<th>UserName</th>
<th>ProductName</th>
<th>Price</th>
<th>Image</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['username'] . "</td>";
echo "<td>" . $row['p_name'] . "</td>";
echo "<td>" . $row['price'] . "</td>";
echo "<img src = 'Image/".$row['image'].'" />';
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>