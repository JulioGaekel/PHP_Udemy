<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$number = array(10, 20, 49);

echo $number[1] . "<br>";

// Associative arrays have labels
$names = array("first_name" => 'Julio', "last_name" => "Gaekel");
//print_r($names);
echo $names["first_name"] . " " . $names["last_name"];

?>
</body>
</html>
