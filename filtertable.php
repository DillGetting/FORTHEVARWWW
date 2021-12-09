<?php

require_once('../mysqli-connect.php');

// Example of a 'SELECT' prepared statement that could be used for filtering/searching.


// Create a template for the prepared statement
$sql = "select id, first_name, last_name from studentinfo where (id like ?) and (first_name like ?) and (last_name like ?);";
// Create a prepared statement
$stmt = mysqli_stmt_init($dbc);
if(mysqli_stmt_prepare($stmt, $sql)) {
    // Binding the parameters to the statment
    // The second parameter specifies types: s=string, i=integer, b=BLOB, d=double
    // The third through last parameters replace the question marks in $sql
    mysqli_stmt_bind_param($stmt, "sss", $filter_id, $filter_first, $filter_last);
    // Execute the prepared statement in the database
    mysqli_stmt_execute($stmt);
    // Get the result
    $result = mysqli_stmt_get_result($stmt);
    
    if ($dbc -> error) {
	    echo "Error inserting student: " . $dbc -> error . '<br>';
    }
    else {
	    echo '<table border=1>';
	    echo '<tr><th>Student ID</th><th>First Name</th><th>Last Name</th><th></th></tr>' . "\n";
	    while ($row = mysqli_fetch_assoc($result)) {
		    echo '<tr><td><a href="updatestudentform.php?id=' . $row['id'] . '">' . $row['id'] . '</a></td><td>' . $row['first_name'] . '</td><td>' . $row['last_name'] . '</td><td><form action="delstudent.php"><input type="hidden" name="id" value="' . $row["id"] . '"> <input type="submit" onclick="return confirm(\'Are you sure?\')" value = Delete></form></td></tr>' . "\n";
	    }
	    echo '</table>';
    }
}
else {
    echo "Error processing SQL: " . $dbc -> connect_error . '<br>';
}

?>
