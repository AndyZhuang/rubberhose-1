<?php

  $node_k = $_SESSION['node'];

  $conn_k = mysqli_connect($servername, $username, $password, $dbname);
  $sql_k = "DELETE FROM contents WHERE hash='$node_k';";
  $result_k = mysqli_query($conn_k, $sql_k);

?>
