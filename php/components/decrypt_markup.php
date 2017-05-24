<html resultpage decrypt theme="red">
 <head>
    <title>decrypt | rubberhose</title>
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
      <div id="mainTitle"><?php require('php/components/title.php') ?></div>
      <section class="databox">
        <p id="decrypted-text"></p>
        <div id="decrypted-buttons">
          <button onclick=_setFormAction('php/actions/upload-decrypted.php')>Upload</button>
          <button onclick=_setFormAction('php/actions/download-text.php')>Download</button>
        </div>
        <form id="decrypted-form" method="POST" hidden>
          <input type="text" name="text"></input>
          <input type="submit" name="submit">
        </form>
      </section>
    </main>
    <?php include ('php/components/aside.php'); ?>
    <footer></footer>
    <script src="js/detect.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>
