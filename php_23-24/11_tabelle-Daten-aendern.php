<!DOCTYPE HTML>
<html>

<head>
    <title> tabelle daten ändern.php </title>
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

    $sql = "UPDATE $tabname SET name = 'Der Dicke' WHERE name = 'Obelix'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo 'Name geändert';
    } else {
        echo "Fehler beim Ändern: " . mysqli_error($conn);
    }

    echo '<br>';

    $sql = "DELETE FROM $tabname WHERE name = 'Lucky Luke'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo 'Eintrag gelöscht';
    } else {
        echo "Fehler beim Löschen: " . mysqli_error($conn);
    }



    mysqli_close($conn);

    ?>

</body>

</html>