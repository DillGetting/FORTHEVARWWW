<?php
// import connection
require_once('../mysqli-connect.php');

$query = 'SELECT id, first_name, last_name from studentinfo;';
$response = @mysqli_query($dbc, $query);

echo '<html><body>';

if($response){
  // echo the table setup, including the headers
  echo '<table align="left" border=1>
  <tr>
    <th>SID#</th>
    <th>First Name</th>
    <th>Last Name</th>
  </tr>';
  while($row = mysqli_fetch_array($response)) {
    echo '<tr>
            <td>' . htmlspecialchars($row[0]) . '</td>
            <td>' . htmlspecialchars($row[1]) . '</td>
            <td>' . htmlspecialchars($row[2]) . '</td>
          </tr>';

  }
  echo '</table>';
}
else {
  echo "Couldn't issue database query<br>" 
     . mysqli_error($dbc);
}

echo '</body></html>';
msqli_close($dbc)
?>
