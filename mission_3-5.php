<?php
  $dsn='mysql:dbname=tt_763_99sv_coco_com;host=localhost';
  $user='tt-763.99sv-coco';
  $password='d6BC5qPx';
  $pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
  $sql=$pdo->prepare("INSERT INTO tbtest (id,name,comment) VALUES('1',:name,:comment)");
  $sql->bindParam(':name',$name,PDO::PARAM_STR);
  $sql->bindParam(':comment',$comment,PDO::PARAM_STR);
  $name='riri';
  $comment='0217';
  $sql->execute();
?>