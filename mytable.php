<html>
<body>
<head>
<title>notmytable</title>
<style>
    table, th, td {
    border:1px solid black;
    }
</style>
</head>

<body>

<h2>HTML static table for CryptoData</h2>

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
<td><?php echo htmlspecialchars ($_GET["Name"]);?></td>
<td><?php echo htmlspecialchars ($_GET["Symbol"])?></td>
<td><?php echo htmlspecialchars ($_GET["Price"])?></td>
<td><?php echo htmlspecialchars ($_GET["Available_Supply"])?></td>
</tr>
</table>


</body>
</html>
