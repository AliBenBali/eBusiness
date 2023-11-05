<html>

<head>
    <title>Untitled</title>
</head>

<body>
    <?php
    //Ausgabe mit echo
    echo "<p>Mein erstes PHP-Skript</p>";

    define("GREETING", "Hello you! How are you today?");
    echo constant("GREETING");

    $y = 4;
    $x = 2;
    echo "Die Summe von" . $x . " und" . $y . " ist " . ($y + $x) . "!</br> \n";
    echo "Die Summe von " . $x . " und" . $y . " ist ", $y + $x, "!</br> \n";
    $ausgabe = "Die Summe von " . $x . " und " . $y . " ist " . ($y + $x) . "!</br> \n";
    echo $ausgabe;
    echo "<table border='1'>";
    for ($i = 1; $i <= 3; $i++) {
        echo "<tr>";
        for ($j = 1; $j <= 3; $j++) {
            echo "<td>Zelle $i # $j</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    ?>

</body>

</html>