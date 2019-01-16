<?php
  $dsn='mysql:dbname=tt_763_99sv_coco_com;host=localhost';
  $user='tt-763.99sv-coco';
  $password='d6BC5qPx';
  $pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
  $sql="CREATE TABLE IF NOT EXISTS tbtest"
  ."("
  ."id INT,"
  ."name char(32),"
  ."comment TEXT"
  .");";
  $stmt=$pdo->query($sql);
?>