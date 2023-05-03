<?php
// Open the file for reading
$filename = "paintings.txt";
$file = fopen($filename, "r");
// Send the data to all clients
header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

if ($file) {
    while (($line = fgets($file)) !== false) {
        echo "data: $line\n\n";
        flush();
    }
    fclose($file);
}




?>