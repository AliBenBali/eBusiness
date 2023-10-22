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
    ?>
</body>

</html>