<?php

  function ServerSideFunction($id, $js){
    $script_id = hash("sha512", $id);
    $script_js = file_get_contents($js, true) . "var _fID = document.getElementById('$script_id'); _fID.parentNode.removeChild(_fID);";
    $script = "<script id='$script_id'>eval(atob('".base64_encode($script_js)."'))</script>";
    echo $script;
  }
  function ServerSideFunctionWithVariables($id, $js, $vb){
    $script_id = hash("sha512", $id);
    $script_vb = "var ".$vb.";";
    $script_js = $script_vb . file_get_contents($js, true) . "var _fID = document.getElementById('$script_id'); _fID.parentNode.removeChild(_fID);";
    $script = "<script id='$script_id'>eval(atob('".base64_encode($script_js)."'))</script>";
    echo $script;
  }

  function ssf($id, $js){
    ServerSideFunction($id, $js);
  }
  function ssfv($id, $js, $vb){
    ServerSideFunctionWithVariables($id, $js, $vb);
  }

?>
