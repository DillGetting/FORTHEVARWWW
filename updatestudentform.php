<!DOCTYPE html>
<html>
<body>

<h3>Update student</h3>
<form action="/updatestudent.php" method="get">
<?php
require_once('../mysqli-connect.php');

// Example of a 'UPDATE' form. This uses a prepared select statement to pre-populate the form with existing values


// Create a template for the prepared statement
$sql = "select id, first_name, last_name from studentinfo where id=?;";
$id = filter_input(INPUT_GET, "id", FILTER_VALIDATE_INT);
//$first_name = "";
//$last_name = "";
// Create a prepared statement
$stmt = mysqli_stmt_init($dbc);
if(mysqli_stmt_prepare($stmt, $sql)) {
    // Binding the parameters to the statment
    // The second parameter specifies types: s=string, i=integer, b=BLOB, d=double
    // The third through last parameters replace the question marks in $sql
    mysqli_stmt_bind_param($stmt, "i", $id);
    // Execute the prepared statement in the database
    mysqli_stmt_execute($stmt);
    // Get the result
    $result = mysqli_stmt_get_result($stmt);
    
    if ($dbc -> error) {
	    echo "Error reading student: " . $dbc -> error . '<br>';
    }
    else {
	    $row = mysqli_fetch_assoc($result);
	    $first_name = $row['first_name'];
	    $last_name = $row['last_name'];
    }
}
else {
    echo "Error processing SQL: " . $dbc -> connect_error . '<br>';
}

  echo '<label for="id">Student ID:</label><br>' . "\n";
  echo '<input type="text" id="id" name="id" value="' . $id . '" readonly><br>' . "\n";
  echo '<label for="first_name">First Name: </label><br>' . "\n";
  echo '<input type="text" id="first_name" name="first_name" value="' . $first_name . '"><br>' . "\n";
  echo '<label for="last_name">Last Name: </label><br>' . "\n";
  echo '<input type="text" id="last_name" name="last_name" value = "' . $last_name . '">' . "\n";
?>
  <input type="submit" value="Submit">
</form>

</body>
</html>
