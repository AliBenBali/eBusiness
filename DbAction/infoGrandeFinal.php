<!DOCTYPE html>
<html lang="de">

<head>
    <link rel="stylesheet" href="styles.css">
    <meta name="author" content="AliBenBali">
    <meta name="description" content="Bruh">
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
    // Define variables and set to empty values
    $nameErr = $strasseErr = $plzErr = $ortErr = "";
    $info = $fName = $strasse = $plz = $ort = $jahreszeit = $wuensche = "";

    // Connect to the database
    $servername = "localhost:3306";
    $username = "stud022";
    $password = "999PWD!_5";
    $db = "stud022_dbDemo";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $db);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Create table with given variables which are not errors
    $createTableSQL = "CREATE TABLE IF NOT EXISTS infomaterial (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        info VARCHAR(30) NOT NULL,
        fName VARCHAR(30) NOT NULL,
        strasse VARCHAR(30) NOT NULL,
        plz VARCHAR(5) NOT NULL,
        ort VARCHAR(30) NOT NULL,
        jahreszeit VARCHAR(30) NOT NULL,
        wuensche TEXT,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";

    if ($conn->query($createTableSQL) === TRUE) {
        // Table created successfully
    } else {
        echo "Error creating table: " . $conn->error;
    }

    // Function to sanitize input data
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $info = $_POST["info"];

        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $fName = test_input($_POST["name"]);
        }

        if (empty($_POST["strasse"])) {
            $strasseErr = "Strasse is required";
        } else {
            $strasse = test_input($_POST["strasse"]);
        }

        if (empty($_POST["plz"])) {
            $plzErr = "PLZ is required";
        } else {
            $plz = test_input($_POST["plz"]);
        }

        if (empty($_POST["ort"])) {
            $ortErr = "Ort is required";
        } else {
            $ort = test_input($_POST["ort"]);
        }

        $jahreszeit = isset($_POST["jahreszeit"]) ? $_POST["jahreszeit"] : "";
        $wuensche = test_input($_POST["wuensche"]);

        // Insert data into the database
        $insertSQL = "INSERT INTO infomaterial (info, fName, strasse, plz, ort, jahreszeit, wuensche)
            VALUES ('$info', '$fName', '$strasse', '$plz', '$ort', '$jahreszeit', '$wuensche')";

        if ($conn->query($insertSQL) === TRUE) {
            echo "Data inserted successfully";
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    }

    // Close the database connection
    $conn->close();
    ?>

    <!-- Form -->
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
                    <label for="i4">PLZ:</label>
                </td>
                <td>
                    <input type="text" name="plz" id="i4" maxlength="5" style="width: 40px;" pattern="[0-9]+">
                    <span class="error">* <?php echo $plzErr; ?></span>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="i5">Ort:</label>
                </td>
                <td>
                    <input type="text" name="ort" id="i5" required>
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
</body>

</html>