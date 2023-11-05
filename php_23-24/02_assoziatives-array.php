<!DOCTYPE HTML>
<html>

<head>
    <title> Monate </title>
    <meta charset="utf-8">
</head>

<body>

    <?php
// Zu date() siehe: https://www.php.net/manual/de/function.date.php


echo "<h1> Monate im Jahr " . date ('Y') . ": </h1>\n";
$month['Januar'] = 31;
//$month['Februar'] = 28;
//https://www.php.net/manual/de/function.date.php
$month['Februar'] = (date('L')? 29:28);
$month['März'] = 31;
$month['April'] = 30;
$month['Mai'] = 31;
$month['Juni'] = 30;
$month['Juli'] = 31;
$month['August'] = 31;
$month['September'] = 30;
$month['Oktober'] = 31;
$month['November'] = 30;
$month['Dezember'] = 31;

foreach($month as $name => $days) {

    echo "Der Monat $name hat $days Tage.<br>\n";
}
?>

</body>

</html>