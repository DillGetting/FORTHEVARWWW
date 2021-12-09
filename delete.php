<html>
<head><title>Deleting a student</title></head>

<body>

<?php
require_once('../mysqli-connect.php');

// Example of using a prepared statement to delete a row

// Create a template for the prepared statement
$sql = "delete from studentinfo where id=?";
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
// Create a prepared statement
$stmt = mysqli_stmt_init($dbc);
if(mysqli_stmt_prepare($stmt, $sql)) {
    // Binding the parameters to the statment
    // The second parameter specifies types: s=string, i=integer, b=BLOB, d=double
    // The third through last parameters replace the question marks in $sql
    mysqli_stmt_bind_param($stmt, "i", $id);
    // Execute the prepared statement in the database
    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);
    if($affected_rows == 1) {
        echo 'Student deleted successfully<br>' . "\n";
	echo '<a href="filter.php">Click to return</a><br>' . "\n";
    }
    else {
	    echo "Error deleting student: " . $dbc -> error . '<br>';
    }
    
}
else {
    echo "Error processing SQL: " . $dbc -> connect_error . '<br>';
}


?>

</body>
</html>