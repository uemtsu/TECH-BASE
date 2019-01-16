<html>
  <head>
    <title>mission_2-5-4.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      //my_name‚ª‹L“ü‚³‚ê‚Ä‚¢‚é‚©‚¢‚È‚¢‚©‚Åê‡•ª‚¯
      if(empty($_POST["my_name"]))
      {
	//mission_2-5-3.php‚É–ß‚é
        header("Location:http://tt-763.99sv-coco.com/mission_2-5-3.php");
      }
      else
      {
	$number2 = $_POST["number2"];
	$filename = "mission_2-5_uematsu.txt";
        $line = file($filename);
        $cnt = count( $line );
	$fp = fopen($filename, "a");
	ftruncate($fp,0);
        for($i = 0;$i < $cnt;$i++)
        {
	  $data = explode("<>",$line[$i]);
	  if($data[0] == $number2 )
	  {
	    fwrite($fp,$data[0]);
       	    fwrite($fp,"<>");
            fwrite($fp,htmlspecialchars($_POST["my_name"]));
	    fwrite($fp,"<>");
            fwrite($fp,htmlspecialchars($_POST["subject"]));
	    fwrite($fp,"<>");
	    fwrite($fp,date("Y/n/j G:i:s"));
	    fwrite($fp,"<>");
	    fwrite($fp,htmlspecialchars($_POST["pass"]));
	    fwrite($fp,"<>");
	    fwrite($fp,"\n");

	    
	  }
	  else
	  {
	    fwrite($fp,$line[$i]);
	  }
        }
	fclose($fp);

	//mission_2-5-1.php‚É–ß‚é
	header("Location:http://tt-763.99sv-coco.com/mission_2-5-1.php");
      }
   ?>
 </body>
</html>