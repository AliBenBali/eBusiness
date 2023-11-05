<!DOCTYPE HTML>
<html>

<head>
    <title> tabelle-daten-auslesen.php </title>
    <meta charset="utf-8">

    <style>
    table,
    tr,
    td,
    th {
        border: 1px solid black;
        border-collapse: collapse;
    }
    </style>

</head>

<body>
    <?php

include "connect.php";
$tabname = "Entenhausen";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Verbindung fehlgeschlagen: " .mysqli_connect_error());
}

$sql = "SELECT name, email FROM $tabname";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0)
{
    ?>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>E-Mail</th>
            </tr>
        </thead>
        <tbody>
            <?php

                        while($row = mysqli_fetch_assoc($result))
                        {
                            echo '<tr><td>'.$row['name'].'</td><td>'.$row['email'].'</td></tr>';
                        }

                    ?>
        </tbody>
    </table>


    <?php

} else {
    echo 'keine Daten in der Tabelle';
}

mysqli_close($conn);

?>

</body>

</html>