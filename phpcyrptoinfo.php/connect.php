<?php
// Login constants
DEFINE('DB_USER', 'dildev');
DEFINE('DB_PASSWORD', 'b');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'wordbase1');

// create the database connection, the @ symbol prevents errors from being output, instead printing the die sta>
// This can be used to prevent connection information from leaking to the user
$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
    OR die('Could not connect to database ' . mysqli_connect_error());
?>





