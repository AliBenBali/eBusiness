<html>

<head>
    <title>Untitled</title>
</head>

<body>
    <?php
    //Ausgabe mit echo
    echo "<h1>Mein erstes PHP-Skript</h1>";

    $y = 1;

    for ($i = 1; $i <= 10; $i++) {
        for ($j = 1; $j <= 10; $j++) {
            echo  $y++, " ";
        }
        echo "</br> \n";
    }

    echo "<table border='1'>";
    echo "<th>Zahl</th><th>Quadrat der Zahl</th>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr>";

        echo "<td>$i</td><td>", $i ** $i, "</td>";

        echo "</tr>";
    }
    echo "</table>";


    ?>

</body>

</html>