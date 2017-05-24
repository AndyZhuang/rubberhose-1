<?php

  $textFromNode = $_POST['text'];
  echo "<h2 id='text' hidden>$textFromNode<h2>"

?>
<script>
  sessionStorage.setItem("text_from_node", true);
  sessionStorage.setItem("text_from_node_content", document.getElementById("text").innerText);
  window.location.href = "/";
</script>
