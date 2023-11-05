<!DOCTYPE html>
<html lang="de">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta name="author" content="AliBenBali">
    <meta name="Beschreibung" content="Bruh">
    <meta charset="UTF-8">
    <style>
        .error {
            color: #FF0000;
        }
    </style>
    <title>Infomaterial</title>
</head>

<body>
    <?php
    // define variables and set to empty values
    $nameErr = $strasseErr = $plzErr = $ortErr = "";
    $info = $name = $strasse = $plz = $ort = $jahreszeit = $wuensche = "";

    //Check if values are not empty and if they are valid
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $info = $_POST["info"];
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
        }
        if (empty($_POST["strasse"])) {
            $strasseErr = "Strasse is required";
        } else {
            $strasse = test_input($_POST["strasse"]);
        }
        if (empty($_POST["plz"])) {
            $plzErr = "Plz is required";
        } else {
            $plz = test_input($_POST["plz"]);
        }
        if (empty($_POST["ort"])) {
            $ortErr = "Ort is required";
        } else {
            $ort = test_input($_POST["ort"]);
        }
        $jahreszeit = $_POST["jahreszeit"];
        $wuensche = $_POST["wuensche"];
    }
    //Check if input is valid
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <!-- Formular -->
    <form name="Infomaterial" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h1>Infomaterial</h1>
        <p><span class="error">* required field</span></p>
        <p>Bitte senden Sie mir Infomaterial!</p>

        <table class="infoTabelle">
            <tr>
                <td>
                    <label for="i1"> Anrede:</label>
                </td>
                <td>
                    <select name="info" id="i1">
                        <option value="Familie">Familie</option>
                        <option value="Frau">Frau</option>
                        <option value="Herr">Herr</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="i2">Name:</label>
                </td>
                <td>

                    <input type="text" id="i2" name="name" autofocus>
                    <span class="error">* <?php echo $nameErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="i3">Strasse:</label>
                </td>
                <td>
                    <input type="text" name="strasse" id="i3">
                    <span class="error">* <?php echo $strasseErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Plz</label>
                </td>
                <td>
                    <input type="text" name="plz" maxlength="5" style="width: 40px;" pattern="[0-9]+">
                    <span class="error">* <?php echo $plzErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Ort:</label>
                </td>
                <td>
                    <input type="text" name="ort" required>
                    <span class="error">* <?php echo $ortErr; ?></span>
                </td>
            </tr>
        </table>
        <br>
        <label>Ich beabsichtige einen Aufenthalt:</label>
        <br> <br>

        <table class="infoTabelle">
            <tr>
                <td>
                    <input type="radio" name="jahreszeit" value="Sommer">Sommer
                </td>
            </tr>
            <tr>
                <td>
                    <input type="radio" name="jahreszeit" value="Winter"> Winter
                </td>
            </tr>
        </table>

        <br> <br>
        <label for="t1">Ich habe folgende Wünsche:</label>
        <br>
        <textarea name="wuensche" id="t1" cols="28" rows="4"></textarea>
        <br> <br>
        <input type="submit" value="absenden" />
        <input type="reset" value="Formular leeren">
    </form>
    <!-- Showing posted values-->
    <p>Anrede: <?php echo empty($info) ? '' : $info; ?></p>
    <p>Name: <?php echo empty($name) ? '' : $name; ?></p>
    <p>Strasse: <?php echo empty($strasse) ? '' : $strasse; ?></p>
    <p>PLZ: <?php echo empty($plz) ? '' : $plz; ?></p>
    <p>Ort: <?php echo empty($ort) ? '' : $ort; ?></p>
    <p>Ich beabsichtige einen Aufenthalt: <?php echo empty($jahreszeit) ? '' : $jahreszeit; ?></p>
    <p>Ich habe folgende Wünsche: <?php echo empty($wuensche) ? '' : $wuensche; ?></p>

</body>

</html>