<?php

  function generateRandomString($l){
    return substr(str_shuffle(
      str_repeat(
        $x = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ',
        ceil($l / strlen($x))
      )
    ), 1, $l);
  }

?>
