<html>
  <head>
    <title>mission_2-4-2.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      //my_nameが記入されているかいないかで場合分け
      if(empty($_POST["my_name"]))
      {
	//何もしない
      }
      else
      {
	//mission_2-4_uematsu.txtに追記
        $filename = "mission_2-4_uematsu.txt";
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

	//number1が記入されているかいないかで場合分け
	if(empty($_POST["number1"]))
        {
	  //何もしない
	}
	else
	{
	  $number1 = $_POST["number1"];
	  $filename = "mission_2-4_uematsu.txt";
	  $line = file($filename);
	  $cnt = count( $line );
	  for($i = 0;$i < $cnt;$i++)
	  {
	    $data = explode("<>",$line[$i]);
	    if($data[0] == $number1)
	    {
	      unset($line[$i]);
	    }
	  }
	  file_put_contents($filename, $line);
	}

    //mission_2-4-1.phpに戻る
   header("Location:http://tt-763.99sv-coco.com/mission_2-4-1.php");
   ?>
 </body>
</html>