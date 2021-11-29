<?php
$f = $c = ' ';

if(isset($_GET['submitButton'])) {
$f = sanatizeString($_GET['f']);
$c = sanatizeString($_GET['c']);


if ($f != ' ')
{
    $c = intval((5 / 9) * ($f - 32));
    $out = "$f f equalce $c c";

}
elseif($c != ' ')
{
    $f = intval((9 / 5) * $c +32);
    $out = "$c c equals $f f";
}
else $out = " ";

echo<<<_END
<html>
<head>
<title>Temperature Converter</title>
</head>
<body>
<pre>
Enter either Farenheit or Celsius and click on Convert

<b>$out</b>
<form method="get" action=" ">
Farenheit <input type="text" name="f" size="7">
Celcius <input type="text" name="c" size="7">
<input type="submit" name="submitButton" value="Convert">
</form>
</pre>
</body>
</html>
_END;

function sanatizeSting($var)
{
    $var = stripslashes($var);
    $var  = strip_tags($var);
    $var = htmlentities($var);
    return $var;
}
}
?>
