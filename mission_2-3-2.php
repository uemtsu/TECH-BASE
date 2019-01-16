<html>
  <head>
    <title>mission_2-3-2.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      //my_name‚ª‹L“ü‚³‚ê‚Ä‚¢‚é‚©‚¢‚È‚¢‚©‚Åê‡•ª‚¯
      if(empty($_POST["my_name"]))
      {
	//‰½‚à‚µ‚È‚¢
      }
      else
      {
	//mission_2-3_uematsu.txt‚É’Ç‹L
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

	//number‚ª‹L“ü‚³‚ê‚Ä‚¢‚é‚©‚¢‚È‚¢‚©‚Åê‡•ª‚¯
	if(empty($_POST["number"]))
        {
	  //‰½‚à‚µ‚È‚¢
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

    //mission_2-3-1.php‚É–ß‚é
   header("Location:http://tt-763.99sv-coco.com/mission_2-3-1.php");
   ?>
 </body>
</html>