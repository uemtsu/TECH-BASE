<?php
  //mission_1-2_uematsuにtestと書き込み
  $filename = "mission_1-2_uematsu.txt";
  $fp = fopen($filename, "w");
  fwrite($fp,"test");
  fclose($fp);
?>