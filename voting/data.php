<?php
header('Content-Type: application/json');
$con = mysqli_connect("localhost","root","","test");
$query = "SELECT name,votes FROM votes ORDER BY votes DESC";
$result = mysqli_query($con,$query);
$data = array();
foreach ($result as $row)
{
	$data[] = $row;
}
$result->close();
$con->close();

print json_encode($data);
?>