<html>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $info = htmlspecialchars($_POST["info"]);
        $name = htmlspecialchars($_POST["name"]);
        if (isset($name)) {
            echo "Name is set and not null: " . $name;
        } else {
            echo "Name is either null or not set.";
        }
        $strasse = htmlspecialchars($_POST["strasse"]);
        if ($strasse !== null) {
            echo "Name is not null: " . $strasse;
        } else {
            echo "Name is null.";
        }
        $plz = htmlspecialchars($_POST["plz"]);
        $ort = htmlspecialchars($_POST["ort"]);
        $jahrerszeit = htmlspecialchars($_POST["jahrerszeit"]);
        $wuensche = htmlspecialchars($_POST["wuensche"]);
    }

    ?>
</body>

</html>