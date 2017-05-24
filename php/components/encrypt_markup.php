<html resultpage encrypt theme="blue">
 <head>
    <title>encrypt | rubberhose</title>
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
        <p id="encrypted-text"></p>
        <div id="encrypted-buttons">
          <button onclick=_setFormAction('php/actions/download-text.php')>Download</button>
          <input type="text" name="email-recipient" id="email-recipient">
          <button onclick=_setFormAction('php/actions/send-text.php')>Send</button>
        </div>
        <form id="encrypted-form" method="POST" hidden>
          <input type="text" name="text">
          <input type="text" name="recipient">
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
