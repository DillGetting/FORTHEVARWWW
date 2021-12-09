<?php 

require_once("../mysqli_connect.php");
$sql = "SELECT * FROM trader";
$stmt = $dbc->mysqli_query($sql);

$</html>result = $stmt->mysqli_fetch_assoc($stmt);
echo $result["name"];

?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>

	<div class="">





</body>
</html>
