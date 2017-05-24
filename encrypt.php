<?php require_once('php/modules/ServerSideJSfunctioning.php');

  $strategy = $_POST['rubberhose_strategy'];
  $method = $_POST['rubberhose_method'];
  $key = $_POST['rubberhose_key'];
  
  $openfile = fopen($_FILES['rubberhose_file']['tmp_name'], 'r');
  $file = file_get_contents($_FILES['rubberhose_file']['tmp_name'], FILE_USE_INCLUDE_PATH);
  $text = $_POST['rubberhose_text'];
  
  require('php/components/encrypt_markup.php');

  ssf( '1', './js/Cryptum.js' );
  ssf( 'n', './js/node.js' );
  ssfv('e', './js/encrypt.js', '
    strategy   =    "'.$strategy.'",
    method     =    "'.$method.'",
    key        =    "'.$key.'",
    file       =    `'.$file.'`,
    text       =    `'.$text.'`'
  );

?>
