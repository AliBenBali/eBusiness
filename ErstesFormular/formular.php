<!DOCTYPE html>
<html>

<head>
    <title>Form Data Processing</title>
</head>

<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $website = $_POST["website"];
        $comment = $_POST["comment"];
        $gender = $_POST["gender"];

        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Website: " . $website . "<br>";
        echo "Comment: " . $comment . "<br>";
        echo "Gender: " . $gender . "<br>";
    }

    /*
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name= test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $website= test_input($_POST["website"]);
        $comment= test_input($_POST["comment"]);
        $gender= test_input($_POST["gender"]);
        
        echo "Name: " . $name . "<br>";
        echo "Email: " . $email . "<br>";
        echo "Website: " . $website . "<br>";
        echo "Comment: " . $comment . "<br>";
        echo "Gender: " . $gender . "<br>";
    }

    function test_input($data) {
        $data= trim($data);
        $data= stripslashes($data);
        $data= htmlspecialchars($data);
        return$data;
    }
    */
    ?>
</body>

</html>