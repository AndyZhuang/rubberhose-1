<?php require_once('php/modules/ServerSideJSfunctioning.php') ?>
<html theme="blue">
  <head>
    <title>rubberhose</title>
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
      <div id="switcher">
        <span class="encrypt">encrypt</span>
        <label class="switch">
          <input id="themeSwitcher" type="checkbox">
          <div id="methodSlider" class="slider" onclick="changetheme()"></div>
        </label>
        <span class="decrypt">decrypt</span>
      </div>
      <form class="infobox" method="POST">
        <a id="upload" class="cta cta-upload"
           onmouseover="_activate('uploadText')"
           onmouseleave="_deactivate('uploadText')"
           onclick="rubberhose_upload(this)"
        ></a>
        <p><span id="uploadText" class="cta-upload"
           onmouseover="_activate('upload')"
           onmouseleave="_deactivate('upload')"
           onclick="rubberhose_upload(this)"
        >upload a file</span> or</p>
        <textarea id="input" name="rubberhose_text" placeholder="start typing.."
           onclick="rubberhose_type(this);"
        ></textarea>
        <?php include 'php/components/form/infobox_buttons.php' ?>
      </form>
      <?php include 'php/components/notifications.php' ?>
    </main>
    <?php include 'php/components/aside.php' ?>
    <?php include 'php/components/footer.php' ?>
    <script src="js/detect.js"></script>
    <script src="js/functions.js"></script>
    <script>
      if (sessionStorage.getItem('text_from_node') == 'true'){
        sessionStorage.removeItem('text_from_node');
        setTimeout(function(){
          document.querySelector('.slider').click();
          setTimeout(function(){
            var input = document.getElementById('input');
            input.click();
            input.innerText = sessionStorage.getItem('text_from_node_content');
            input.style.cssText = 'height:auto; padding:0';
            input.style.cssText = 'height:' + input.scrollHeight + 'px';
            sessionStorage.removeItem('text_from_node_content');
          }, 300)
        }, 300);
      }
    </script>
  </body>
</html>
<?php
  ssf('n', './js/node.js');
  ssf('1', './js/Cryptum.js');
?>
