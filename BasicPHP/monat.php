<html>

<head>
    <title>Untitled</title>
</head>

<body>
    <?php
 

	$months = array(
    "Januar" => "31",
    "Februar" => "28",
    "März" => "31",
    "April" => "30",
    "Mai" => "31",
    "Juni" => "30",
    "Juli" => "31",
    "August" => "31",
    "September" => "30",
    "Oktober" => "31",
    "November" => "30",
    "Dezember" => "31"
);

foreach ($months as $month => $days) {
    echo "$month has $days days.<br>";
}
?>

</body>

</html>