<?php

  $email = $_POST['recipient'];
  $ciphertext = $_POST['text'];
  $hash = MD5($_POST['text']);
  $mex = "Rubberhose \n Message generated on: http://rubberhose.andrealeone.xyz/nodes/".substr($hash, 0, -2).".";

  require '../modules/load-db-connection.php';
  require '../modules/generateRandomString.php';

  $conn_w = mysqli_connect($servername, $username, $password, $dbname);
  $sql_w = "INSERT INTO contents (ciphertext, hash) VALUES ('$ciphertext', '$hash')";
  $result_w = mysqli_query($conn_w, $sql_w);

  $r_w2 = rand(10, 35);
  while ($r_w2 > 0){

    $encryption_w2 = "AES-256-CBC";
    $hashing_w2 = "25c6c7ff35b9979b151f2136cd13b0ff";
    $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
    $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
    
    $ciphertext_w2 = openssl_encrypt(generateRandomString(rand(30, 80)), $encryption_w2,  $hashing_w2,  0,  $iv);
    $hash_w2 = MD5($ciphertext_w2);

    $sql_w2 = "INSERT INTO contents (ciphertext, hash) VALUES ('$ciphertext_w2', '$hash_w2')";
    $result_w2 = mysqli_query($conn_w, $sql_w2);
    $r_w2 = $r_w2 - 1;
  }
  if (mysqli_query($conn_w, $sql_w2)) {
    echo "Tabella lista_utenti creata con successo";
  } else {
    echo "Errore nella creazione della tabella: " . mysqli_error($conn);
  }

  mail($email, 'Rubberhose', $mex, "From: no-reply@rubberhose");

?>
<script>
  
  sessionStorage.setItem('uploadSuccess', true);
  window.location.pathname = '/';

</script>
