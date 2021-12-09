<?php
// import connection
require_once('../mysqli_connect.php');

$query = 'SELECT id, name from trader;';
$response = @mysqli_query($dbc, $query);

echo '<html><body>';

if($response){
  
  echo '<table align="left" cellspaceing="5" cellpadding="8" border="2">

  <tr>
    <th>id</th>
    <br>
    <th>name</th>
  </tr>';

  while($row = mysqli_fetch_array($response)) {
    echo '<tr>
            <td>' . htmlspecialchars($row[0]) . '</td>
            <td>' . htmlspecialchars($row[1]) . '</td>
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
