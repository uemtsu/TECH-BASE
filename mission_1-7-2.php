<html>
  <head>
    <title>mission_1-7-2.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      //my_name���L������Ă��邩���Ȃ����ŏꍇ����
      if(empty($_POST["my_name"]))
      {
	//mission_1-7-1.php�ɖ߂�
        header("Location:http://tt-763.99sv-coco.com/mission_1-7-1.php");
      }
      else
      {
	//mission_1-7_uematsu.txt�ɒǋL
        $filename = "mission_1-7_uematsu.txt";
        $fp = fopen($filename, "a");
        fwrite($fp,htmlspecialchars($_POST["my_name"]));
	fwrite($fp,"\n");
        fclose($fp);

	//mission_1-7-1.php�ɖ߂�
        header("Location:http://tt-763.99sv-coco.com/mission_1-7-1.php");
      }
    ?>
  </body>
</html>