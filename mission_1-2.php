<?php
  //mission_1-2_uematsu‚Étest‚Æ‘‚«ž‚Ý
  $filename = "mission_1-2_uematsu.txt";
  $fp = fopen($filename, "w");
  fwrite($fp,"test");
  fclose($fp);
?>