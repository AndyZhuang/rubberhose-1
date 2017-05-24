<input type="text" name="rubberhose_strategy" id="rubberhose_strategy" hidden>
<input type="file" name="rubberhose_file" id="rubberhose_file" onchange="selectfileValueChanged(this)" hidden>
<a id="selectFile" class="cta" onclick="selectfileTrigger()">
  <div class="icon"></div>
  <span class="name"></span>
  <span class="title">change file</span>
</a>
<div id="infobox_buttons">
  <div class="spans">
    <span class="method">Method: <?php include('select-method.php') ?></span>
    <span class="key">Key: <input type="text" name="rubberhose_key" id="rubberhose_key" placeholder="passphrase"></span>
  </div>
  <input class="submit" type="submit">
</div>
