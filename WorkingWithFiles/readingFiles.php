<?php

$file = "example.txt";

if ($handle = fopen($file, 'r')) {

    echo $content = fread($handle, filesize($file)); // Length is in bytes (input int). Every byte is equal to one character. In order to read entire file regardless of size, php has a built-in function called filesize(), notice the parameter is the variable where the file name is stored.

    fclose($handle);
} else {
    echo "The application was not able to write on the file";
}

