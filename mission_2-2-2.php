<html>
  <head>
    <title>mission_2-2-2.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      //my_name���L������Ă��邩���Ȃ����ŏꍇ����
      if(empty($_POST["my_name"]))
      {
	//mission_2-2-1.php�ɖ߂�
        header("Location:http://tt-763.99sv-coco.com/mission_2-2-1.php");
      }
      else
      {
	//mission_2-2_uematsu.txt�ɒǋL
        $filename = "mission_2-2_uematsu.txt";
        $fp = fopen($filename, "a");
	$data = file_get_contents($filename);
	$data = explode("\n",$data);
	$cnt = count( $data );
	fwrite($fp,"$cnt");
       	fwrite($fp,"<>");
        fwrite($fp,htmlspecialchars($_POST["my_name"]));
	fwrite($fp,"<>");
        fwrite($fp,htmlspecialchars($_POST["subject"]));
	fwrite($fp,"<>");
	fwrite($fp,date("Y/n/j G:i:s"));
	fwrite($fp,"\n");
        fclose($fp);

	//mission_2-2-1.php�ɖ߂�
	header("Location:http://tt-763.99sv-coco.com/mission_2-2-1.php");
      }
   ?>
 </body>
</html>