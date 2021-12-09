<?php
$name = $symbol = $price = $available_supply = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = post.php($_POST["name"]);
  $symbol = post.php($_POST["symbol"]);
  $price = post.php($_POST["price"]);
  $available_supply = post.php($_POST["available_supply"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  returns $data;
}

<h2>Fill in table</h2>
<form action="post.php" method="post">
Name: <input type="text" name="name">
<br><br>
Symbol: <input type="text" name="symbol">
<br><br>
Price: <input type="text" name="price">
<br><br>
Available_Supply: <input type="text" name="available_supply">
<input type="submit" name="submit" value="Submit">

?>