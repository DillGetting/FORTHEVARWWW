<html>
<head><title>Updating a student</title></head>

<body>

<?php
require_once('../mysqli-connect.php');

// Example of using a prepared statement to update values in a database
$id = htmlspecialchars($_GET["id"]);
$first_name = htmlspecialchars($_GET["first_name"]);
$last_name = htmlspecialchars($_GET["last_name"]);

// Create a template for the prepared statement
$sql = "update studentinfo set first_name = ?, last_name = ? where id=?;";
// Create a prepared statement
$stmt = mysqli_stmt_init($dbc);
if(mysqli_stmt_prepare($stmt, $sql)) {
    // Binding the parameters to the statment
    // The second parameter specifies types: s=string, i=integer, b=BLOB, d=double
    // The third through last parameters replace the question marks in $sql
    mysqli_stmt_bind_param($stmt, "ssi", $first_name, $last_name, $id);
    // Execute the prepared statement in the database
    mysqli_stmt_execute($stmt);

    $affected_rows = mysqli_stmt_affected_rows($stmt);
    if($affected_rows == 1) {
        echo 'Student updated successfully<br>' . "\n";
    }
    elseif ($affected_rows == 0) {
	    echo "No changes were made<br>\n";
    }
    else {
	    echo "Error updating student: " . $dbc -> error . "<br>\n";
    }
	echo '<a href="filter.php">Click to return</a><br>' . "\n";
    
}
else {
    echo "Error processing SQL: " . $dbc -> connect_error . '<br>';
}


?>

</body>
</html>
