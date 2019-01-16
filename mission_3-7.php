<?php
  $dsn='mysql:dbname=tt_763_99sv_coco_com;host=localhost';
  $user='tt-763.99sv-coco';
  $password='d6BC5qPx';
  $pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
  $id=1;
  $name="ririka";
  $comment="0917";
  $sql='update tbtest set name=:name,comment=:comment where id=:id';
  $stmt=$pdo->prepare($sql);
  $stmt->bindParam(':name',$name,PDO::PARAM_STR);
  $stmt->bindParam(':comment',$comment,PDO::PARAM_STR);
  $stmt->bindParam(':id',$id,PDO::PARAM_STR);
  $stmt->execute();
?>