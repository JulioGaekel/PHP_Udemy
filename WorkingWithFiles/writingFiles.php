<?php

$file = "example.txt";
$file2 = "thisWillBeDeleted.txt";

if ($handle = fopen($file, 'w')) {

    fwrite($handle, 'This is the text that will be written in the file.');
    echo "Data successfully written on example.txt";

    fclose($handle);
} else {
    echo "The application was not able to write on the file";
}

if ($handle = fopen($file2, 'w')) {

    fwrite($handle, 'This is the text that will be written in the file.');
    echo "Data successfully written on example.txt";

    fclose($handle);
} else {
    echo "The application was not able to write on the file";
}

