<?php

  $textToEncrypt = "Andrea Leone";
  $encryptionMethod = "AES-256-CBC";
  $secretHash = "25c6c7ff35b9979b151f2136cd13b0ff";

  $iv_size = mcrypt_get_iv_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_CBC);
  $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);

  //To encrypt
  $encryptedMessage = openssl_encrypt($textToEncrypt,     $encryptionMethod,  $secretHash,  0,  $iv);

  //To Decrypt
  $decryptedMessage = openssl_decrypt($encryptedMessage,  $encryptionMethod,  $secretHash,  0,  $iv);

  //Result
  echo "Encrypted: $encryptedMessage <br>
        Decrypted: $decryptedMessage <br>";

?>
