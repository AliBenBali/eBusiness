<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
    define("servername", "localhost:3306");
    define("username", "stud022");
    define("password", "999PWD!_5");
    define("db", "stud022_dbDemo");

    // Create connection 
    $conn = new mysqli(servername, username, password, db);

    // Check connection	
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //create tabel with name and email and timestamp
    $sql = "CREATE TABLE MyGuests (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(30) NOT NULL,
        email VARCHAR(50),
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";

    //insert data into table with sql
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $sql = "INSERT INTO MyGuests (name, email)
        VALUES ('$name', '$email')";
        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }

    //insert data into table with sql 5 times
    $sql = "INSERT INTO MyGuests (name, email)
    VALUES ('John', 'john@example.com');";
    $sql .= "INSERT INTO MyGuests (name, email)
    VALUES ('Mary', 'mary@example.com');";
    $sql .= "INSERT INTO MyGuests (name, email)
    VALUES ('Julie', 'julie@example.com');";
    $sql .= "INSERT INTO MyGuests (name, email)
    VALUES ('Donald', 'donald@example.com');";

    //show data from table in html table
    $sql = "SELECT id, name, email FROM MyGuests";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    //delete donald
    $sql = "DELETE FROM MyGuests WHERE id=4";
    //update john to johnny
    $sql = "UPDATE MyGuests SET name='Johnny' WHERE id=1";
    //show data from table in html table
    $sql = "SELECT id, name, email FROM MyGuests";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        echo "<table><tr><th>ID</th><th>Name</th><th>Email</th></tr>";
        // output data of each row
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>" . $row["id"] . "</td><td>" . $row["name"] . "</td><td>" . $row["email"] . "</td></tr>";
        }
        echo "</table>";
    } else {
        echo "0 results";
    }

    //vscode comment block: shift + alt + a

    //close connection
    mysqli_close($conn);
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="">Name: </label>
        <input type="text" name="name" id="name">
        <br>
        <label for="">Email: </label>
        <input type="email" name="email" id="email">
        <br>
        <input type="submit" name="senden">
    </form>

</body>

</html>