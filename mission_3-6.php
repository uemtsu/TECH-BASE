<?php
  $dsn='mysql:dbname=tt_763_99sv_coco_com;host=localhost';
  $user='tt-763.99sv-coco';
  $password='d6BC5qPx';
  $pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
  $sql='SELECT*FROM tbtest';
  $stmt=$pdo->query($sql);
  $results=$stmt->fetchAll();
  foreach($results as $row)
  {
    echo $row['id'].',';
    echo $row['name'].',';
    echo $row['comment'].'<br>';
  }
?>