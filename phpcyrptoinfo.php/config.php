  GNU nano 4.8                                       config.php                                                 
<?php
ob_start(); //Turns on output buffering 
session_start();

date_default_timezone_set("Europe/Prague");

try {
    $con = new PDO("mysql:dbname=studentdatabase;host=localhost", "dillon", "b");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
}
catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>






