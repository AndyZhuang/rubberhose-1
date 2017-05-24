<?php
  
  $URI = $_SERVER[REQUEST_URI];
  
  session_start();
  
  $nodes = explode('/', $URI);
  $_SESSION['node'] = $nodes[2];
  
  echo "<script>window.location.href = '/node.php'</script>";

?>
