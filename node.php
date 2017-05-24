<?php
  session_start();
  require 'php/actions/node-validation.php';
?>
<html node resultpage theme="yellow">
  <head>
    <title>nodes | rubberhose</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <meta author="Andrea Leone <github@andrealeone.xyz>">
    <meta description="rubberhose">
    <link href="css/main.css" rel="stylesheet">
    <link href="images/favicon.ico" rel="shortcut icon">
    <link href="images/favicon.ico" rel="icon">
  </head>
  <body>
    <main>
      <div id="mainTitle"><?php require 'php/components/title.php' ?></div>
      <?php require 'php/components/node_markup.php' ?>
    </main>
    <footer>
    </footer>
    <script src="js/detect.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>
<?php
  session_unset();
  session_destroy();
  ssf('1', '../../js/Cryptum.js');
  ssf('N', '../../js/node.js');
?>
