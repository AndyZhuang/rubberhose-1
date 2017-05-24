<?php require_once('php/modules/ServerSideJSfunctioning.php') ?>
<html theme="blue">
  <head>
    <title>rubberhose</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta author="Andrea Leone <github@andrealeone.xyz>">
    <meta description="rubberhose">
    <link href="images/favicon.ico" rel="shortcut icon">
    <link href="images/favicon.ico" rel="icon">
  </head>
  <body>
    <code>Rubberhose is currently a prototype and your browser does not support it.<br>Try with Google Chrome.</code>
    <script src="js/functions.js"></script>
  </body>
</html>
<?php
  ssf('n', './js/node.js');
  ssf('1', './js/Cryptum.js');
?>
