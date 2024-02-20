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
// Reference: https://www.php.net/manual/en/ref.array.php

$list = [343, 543, 654, 75, 87, 345];
$linebreak = "<br>";
echo max($list);
echo $linebreak;

echo min($list);
echo $linebreak;

sort($list);
print_r($list);
echo $linebreak;


?>
</body>
</html>