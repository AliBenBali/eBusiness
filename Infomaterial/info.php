<!DOCTYPE html>
<html lang="de">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta name="author" content="AliBenBali">
    <meta name="Beschreibung" content="Bruh">
    <meta charset="UTF-8">
    <title>Infomaterial</title>
</head>

<body>
    <form name="Infomaterial" action="script.php">
        <h1>Infomaterial</h1>
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
                </td>
            </tr>
            <tr>
                <td>
                    <label for="i3">Strasse:</label>
                </td>
                <td>
                    <input type="text" name="strasse" id="i3">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Plz</label>
                </td>
                <td>
                    <input type="text" name="plz" maxlength=" 5" style="width: 40px;" pattern="[0-9]+" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Ort:</label>
                </td>
                <td>
                    <input type="text" name="ort" required>
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
        <label for=" t1">Ich habe folgende Wünsche:</label>
        <br>
        <textarea name="wuensche" id="t1" cols="28" rows="4"></textarea>
        <br> <br>
        <input type="submit" value="absenden" />
        <input type="reset" value="Formular leeren">

    </form>

    <?php
    if (isset($info)) {
        echo "Anrede: " . $info . "<br>";
    }
    if (isset($name)) {
        echo "Name: " . $name . "<br>";
    }
    if (isset($strasse)) {
        echo "Strasse: " . $strasse . "<br>";
    }
    if (isset($plz)) {
        echo "Plz: " . $plz . "<br>";
    }
    if (isset($ort)) {
        echo "Ort: " . $ort . "<br>";
    }

    ?>
</body>

</html>