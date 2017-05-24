<?php
  
  $name = "rubberhose.txt";
  $str = nl2br($_POST['text']);

  header('Content-Disposition: attachment; filename="' . $name . '"');
  header('Content-Type: text/plain');
  header('Content-Length: ' . strlen($str));
  header('Connection: close');

  echo $str;

?>
