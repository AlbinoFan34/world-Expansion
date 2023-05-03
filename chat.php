<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $data = json_decode(file_get_contents('php://input'), true); // Get the request data
  $message  = $data['message']; 
  $file = "messages.txt";
  file_put_contents($file,$message);
}
?>