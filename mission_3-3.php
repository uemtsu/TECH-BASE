<?php
  $dsn='mysql:dbname=tt_763_99sv_coco_com;host=localhost';
  $user='tt-763.99sv-coco';
  $password='d6BC5qPx';
  $pdo=new PDO($dsn,$user,$password,array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_WARNING));
?>
<?php
  $sql='SHOW TABLES';
  $result=$pdo->query($sql);
  foreach($result as $row)
  {
    echo $row[0];
    echo "<br>";
  }
  echo "<hr>";
?>