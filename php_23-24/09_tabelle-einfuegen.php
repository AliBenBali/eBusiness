<!DOCTYPE HTML>
<html>

<head>
    <title> tabelle-daten-einfuegen.php </title>
    <meta charset="utf-8">
</head>

<body>
    <?php

    include "connect.php";
    $tabname = "Entenhausen";


    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
    }

    $sql = "INSERT INTO $tabname (name, email, datetime) VALUES 
        ('Donald Duck', 'Donald.Duck@Entenhausen.de', now()),
        ('Lucky Luke', 'LL@saloon.com', now()),
        ('Daniel Düsentrieb', 'Erfinder@Entenhausen.de', now()),
        ('Obelix', 'Obelix@Gallien.fr', now());
";

    if (mysqli_query($conn, $sql)) {
        echo "Daten eingefügt";
    } else {
        echo "Fehler: " . mysqli_error($conn);
    }

    mysqli_close($conn);
    ?>

</body>

</html>