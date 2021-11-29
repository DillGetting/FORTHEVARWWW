<html>
<head>
<title>CryptoData</title>

<style>
    table, th, td {
    border:1px solid black;
    }
</style>
</head>

<body>

<h2>CryptoData</h2>

<table style="width:80%">
<tr>
    <th>Name</th>
    <th>Symbol</th>
    <th>Price</th>
    <th>available_supply</th>
</tr>

<tr>
    <td>CRTCoin</td>
    <td>CRT</td>
    <td>$0.08</td>
    <td>71213</td>
</tr>

<tr>
    <td>Copperlark</td>
    <td>CLR</td>
    <td>$0.01</td>
    <td>8341299</td>
</tr>

<tr>
    <td><?php echo htmlspecialchars($_GET["Name"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Symbol"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Price"]);?></td>
    <td><?php echo htmlspecialchars($_GET["Available_Supply"]);?></td>
</tr>
</table>

<p>data from my coin table in the github repo</p>

<div>


<h3>Add a Row to the Table</h3>
<form action="table.php">
Name: <input type="text" name="Name">
<br><br>
Symbol: <input type="text" name="Symbol">
<br><br>
Price: <input type="text" name="Price">
<br><br>
Available_Supply: <input type="text" name="Available_Supply">
<br><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html>
