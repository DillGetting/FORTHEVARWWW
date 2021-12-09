<html>
<head><title>Put it in me</title></head>

<body>

<?php
require_once('../mysqli_connect.php');

// Example of using a prepared statement to insert values into a database
$id = htmlspecialchars($_GET["id"]);
$first_name = htmlspecialchars($_GET["name"]);


// Create a template for the prepared statement
$sql = "insert into  (id, first_name, last_name) values (?, ?, ?);";
// Create a prepared statement
$stmt = mysqli_stmt_init($dbc);
if(mysqli_stmt_prepare($stmt, $sql)) {
    // Binding the parameters to the statment
    // The second parameter specifies types: s=string, i=integer, b=BLOB, d=double
    // The third through last parameters replace the question marks in $sql
    mysqli_stmt_bind_param($stmt, "iss", $id, $first_name, $last_name);
    // Execute the prepared statement in the database
    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);
    if($affected_rows == 1) {
	    echo 'Student entered successfully' . "<br>\n";
	    echo '<a href="filter.php">Click to return</a>' . "\n";

    }
    else {
	    echo "Error inserting student: " . $dbc -> error . '<br>';
    }
    
}
else {
    echo "Error processing SQL: " . $dbc -> connect_error . '<br>';
}


?>

</body>
</html>

