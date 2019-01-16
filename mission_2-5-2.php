<html>
  <head>
    <title>mission_2-5-2.php</title>
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
	//mission_2-5_uematsu.txtに追記
        $filename = "mission_2-5_uematsu.txt";
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
       	fwrite($fp,"<>");
	fwrite($fp,htmlspecialchars($_POST["pass1"]));
	fwrite($fp,"<>");
	fwrite($fp,"\n");
        fclose($fp);
      }


	//削除機能
	//number1が記入されているかいないかで場合分け
	if(empty($_POST["number1"]))
        {
	  //何もしない
	}
	else
	{
	  $number1 = $_POST["number1"];
	  $pass2 = $_POST["pass2"];
	  $filename = "mission_2-5_uematsu.txt";
	  $line = file($filename);
	  $cnt = count( $line );
	  for($i = 0;$i < $cnt;$i++)
	  {
	    $data = explode("<>",$line[$i]);
	    if($data[0] == $number1 && $data[4] == $pass2)
	    {
	      unset($line[$i]);
	    }
	  }
	  file_put_contents($filename, $line);
	}

    //mission_2-5-1.phpに戻る
   header("Location:http://tt-763.99sv-coco.com/mission_2-5-1.php");
   ?>
 </body>
</html>