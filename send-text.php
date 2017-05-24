<?php

  $email = $_POST['recipient'];
  $ciphertext = $_POST['text'];
  $hash = MD5($_POST['text']);
  $mex = "Rubberhose \n Message generated on: http://rubberhose.andrealeone.xyz/nodes/".substr($hash, 0, -2).".";

  require '../modules/load-db-connection.php';

  $conn_w = mysqli_connect($servername, $username, $password, $dbname);
  $sql_w = "INSERT INTO contents (ciphertext, hash) VALUES ('$ciphertext', '$hash')";
  $result_w = mysqli_query($conn_w, $sql_w);

  mail($email, 'Rubberhose', $mex, "From: no-reply@rubberhose");

?>
<script>
  
  sessionStorage.setItem('uploadSuccess', true);
  window.location.pathname = '/';

</script>
