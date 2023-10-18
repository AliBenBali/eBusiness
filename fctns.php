<html>

<head>
    <title>Untitled</title>
</head>

<body>
    <?php
    //Ausgabe mit echo
    echo "<h1>Mein erstes PHP-Skript</h1>";

    function nettoZuBrutto($netto)
    {
        $brutto = $netto * 1.19;
        return round($brutto, 2);
    }

    for ($i = 1 ; $i <= 10; $i++) {
        echo "Netto ", $i, " ist Brutto ", nettoZuBrutto($i), "</br> \n";
    }

    ?>

</body>

</html>