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
// Reference: https://www.php.net/manual/en/book.strings.php

$string = "Hello my name is Julio";
echo strlen($string);
echo "<br>";

echo strtoupper($string);
echo "<br>";

echo strtolower($string);
echo "<br>";

echo str_word_count($string);
echo "<br>";



?>
</body>
</html>
