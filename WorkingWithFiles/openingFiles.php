<?php

$file = "example.txt";

$handle = fopen($file, 'w'); // takes two parameters: name of the file and mode
fclose($handle);