<?php
  $dsn='mysql:dbname=tt_763_99sv_coco_com;host=localhost';
  $user='tt-763.99sv-coco';
  $password='d6BC5qPx';
  $pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
  $id=1;
  $sql='delete from tbtest where id=:id';
  $stmt=$pdo->prepare($sql);
  $stmt->bindParam(':id',$id,PDO::PARAM_INT);
  $stmt->execute();
?>