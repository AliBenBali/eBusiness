<!DOCTYPE HTML>
<html>

<head>
    <title> Funktion.php </title>
    <meta charset="utf-8">
</head>

<body>

    <?php

define('STEUERSATZ', 0.19); // steuersatz  in dezimalschreibweise

function addiere_mwst($netto) {

    return round($netto * (1+STEUERSATZ), 2);
}

	
echo "10,00 € netto = ". number_format(addiere_mwst(10), 2, ',', '.')." € brutto<br>\n";
echo "15,00 € netto = ". number_format(addiere_mwst(15), 2, ',', '.')." € brutto<br>\n";
echo "2.212,50 € netto = ".number_format(addiere_mwst(2212.5), 2, ',', '.')." € brutto\n";
?>

</body>

</html>