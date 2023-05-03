<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true); // Get the request data
  $color = $data['color']; 
  $mouseX = $data['mouseX']; 
  $mouseY = $data['mouseY'];
  $data = array(
    "color" => $color,
    "mouseX" => $mouseX,
    "mouseY" => $mouseY
  );

  $json_string = json_encode($data);
  $json_string2 = $json_string . "\n";
  $file = "paintings.txt";
  file_put_contents($file,$json_string2, FILE_APPEND);
}
?>
