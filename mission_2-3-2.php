<html>
  <head>
    <title>mission_2-3-2.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      //my_name���L������Ă��邩���Ȃ����ŏꍇ����
      if(empty($_POST["my_name"]))
      {
	//�������Ȃ�
      }
      else
      {
	//mission_2-3_uematsu.txt�ɒǋL
        $filename = "mission_2-3_uematsu.txt";
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
      }

	//number���L������Ă��邩���Ȃ����ŏꍇ����
	if(empty($_POST["number"]))
        {
	  //�������Ȃ�
	}
	else
	{
	  $number = $_POST["number"];
	  $filename = "mission_2-3_uematsu.txt";
	  $line = file($filename);
	  $cnt = count( $line );
	  for($i = 0;$i < $cnt;$i++)
	  {
	    $data = explode("<>",$line[$i]);
	    if($data[0] == $number)
	    {
	      unset($line[$i]);
	    }
	  }
	  file_put_contents($filename, $line);
	}

    //mission_2-3-1.php�ɖ߂�
   header("Location:http://tt-763.99sv-coco.com/mission_2-3-1.php");
   ?>
 </body>
</html>