<?php

  session_start();
  $_SESSION['node-link'] = false;

  require 'php/modules/load-db-connection.php';

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  $sql = "SELECT * FROM contents";
  $result = mysqli_query($conn, $sql);

  $nodes = [];
  while ($record = mysqli_fetch_assoc($result)){
    $nodes[$record['hash']] = $record['ciphertext'];
    if ($record['hash'] == $_SESSION['node']){
      $_SESSION['node-link'] = true;
    }
  } mysqli_close($conn);

?>
