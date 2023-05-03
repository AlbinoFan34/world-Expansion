<?php
$filename = "messages.txt";
$file = fopen($filename, "r");

// Read the file contents
$data = fread($file, filesize($filename));

$data2 = array(
    "message" => $data,
);

$json_string = json_encode($data2);
fclose($file);

header('Content-Type: text/event-stream');
header('Cache-Control: no-cache');

echo "data: $json_string\n\n";
flush();



?>