<!DOCTYPE HTML>
<html>

<head>
    <title> Schleifen1.php </title>
    <meta charset="utf-8">
</head>

<body>

    <?php

    for ($i = 1; $i <= 100; $i++) {

        echo $i;
        if ($i % 10 == 0) {
            echo "<br>\n";
        } else {
            echo ' - ';
        }
    }

    ?>

</body>

</html>