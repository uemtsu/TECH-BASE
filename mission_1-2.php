<?php
  //mission_1-2_uematsu��test�Ə�������
  $filename = "mission_1-2_uematsu.txt";
  $fp = fopen($filename, "w");
  fwrite($fp,"test");
  fclose($fp);
?>