<?php if ($_SESSION['node-link'] == true): ?>

  <section class="databox">
    <b><?php echo $_SESSION['node'] ?></b></br>
    <p id="node-text">
      </br><?php echo $nodes[$_SESSION['node']] ?></br></br>
    </p>
    <div id="node-buttons">
      <button onclick=_setNodeFormAction('php/actions/decrypt-text.php')>Decrypt</button>
    </div>
    <form id="node-form" method="POST" hidden>
      <input type="text" name="text"></input>
      <input type="submit" name="submit">
    </form>
  </section>
  <script>
    function _setNodeFormAction(v){
      var form = document.getElementById('node-form'),
          text = document.getElementById('node-text');
      form.setAttribute('action', v);
      form.querySelector('input[type="text"]').value = text.innerText
      form.querySelector('input[type="text"]');
      form.querySelector('input[type="submit"]').click();
    }
  </script>
  
  <?php require 'php/actions/node-kill.php' ?>

<?php else: ?>

  <section class="databox failure">
    <p id="node-text">
      <b>Your node does not exist or has already been opened.</b><br><br>
      <img id="img">
      <script>
        var egi = sessionStorage.getItem('easter_egg-iteration');
        function imager(m, n){
          if (egi == m){document.getElementById('img').src = n}
        }
        imager(0, "/images/easter_egg/doggy.gif");
        imager(1, "/images/easter_egg/paradise.gif");
        imager(2, "/images/easter_egg/ecorp.gif");
        imager(3, "/images/easter_egg/catty.gif");
        if (egi == null){
          document.getElementById('img').src = "/images/easter_egg/catty.gif";
          sessionStorage.setItem('easter_egg-iteration', 0);
        } else {
          egi++;
          sessionStorage.setItem('easter_egg-iteration', egi);
          (egi >= 4) ? (sessionStorage.setItem('easter_egg-iteration', 0)) : null;
        }
      </script>
    </p>
  </section>

<?php endif ?>
