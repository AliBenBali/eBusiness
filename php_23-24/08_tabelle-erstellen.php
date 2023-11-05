<!DOCTYPE HTML>
<html>

<head>
  <title> tabelle erstellen.php </title>
  <meta charset="utf-8">
</head>

<body>
  <?php
  //Infos zu der Verbindung zum Datenbankserver einbinden
  include "connect.php";

  //Verbindung herstellen
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (!$conn) {
    die("Verbindung fehlgeschlagen: " . mysqli_connect_error());
  }

  //SQL-Befehl bauen	
  $sql = "CREATE TABLE `Entenhausen` (
          `id` INT NOT NULL AUTO_INCREMENT,
          `name` VARCHAR(255) NOT NULL,
          `email` VARCHAR(255) NOT NULL,
          `datetime` DATETIME NOT NULL ,
        PRIMARY KEY (`id`));";

  //SQL-Befehl absenden und auswerten
  if (mysqli_query($conn, $sql)) {
    echo "Tabelle erstellt";
  } else {
    echo "Fehler: " . mysqli_error($conn);
  }

  mysqli_close($conn);

  ?>

</body>

</html>