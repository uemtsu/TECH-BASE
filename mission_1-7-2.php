<html>
  <head>
    <title>mission_1-7-2.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      //my_name‚ª‹L“ü‚³‚ê‚Ä‚¢‚é‚©‚¢‚È‚¢‚©‚Åê‡•ª‚¯
      if(empty($_POST["my_name"]))
      {
	//mission_1-7-1.php‚É–ß‚é
        header("Location:http://tt-763.99sv-coco.com/mission_1-7-1.php");
      }
      else
      {
	//mission_1-7_uematsu.txt‚É’Ç‹L
        $filename = "mission_1-7_uematsu.txt";
        $fp = fopen($filename, "a");
        fwrite($fp,htmlspecialchars($_POST["my_name"]));
	fwrite($fp,"\n");
        fclose($fp);

	//mission_1-7-1.php‚É–ß‚é
        header("Location:http://tt-763.99sv-coco.com/mission_1-7-1.php");
      }
    ?>
  </body>
</html>