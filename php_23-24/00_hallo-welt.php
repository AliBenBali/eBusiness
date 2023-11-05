<!DOCTYPE HTML>
<html>

<head>
    <title> Hallo Welt.php </title>
    <meta charset="utf-8">
</head>

<body>
    <?php

//define("gruss","<h1>Hallo Welt</h1>");
	
//Zur Übersichtlichkeit des HTML-Quelltextes noch besser so:	
define("gruss","<h1>Hallo Welt</h1>\n");
	
echo gruss;

$x = 4;
$y = 2;

echo "Die Summe von ", $x, " und " , $y , " ist ", $x+$y, "!<br> \n";
echo "Die Summe von ".$x." und ".$y." ist ".($x+$y)."!<br> \n";
$ausgabe= "Die Summe von ".$x." und ".$y." ist ".($x+$y)."!<br> \n";	
echo $ausgabe;

	
?>

</body>

</html>