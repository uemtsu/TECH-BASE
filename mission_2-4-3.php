<html>
  <head>
    <title>mission_2-4-3.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $number2 = $_POST["number2"];
      $filename = "mission_2-4_uematsu.txt";
      $line = file($filename);
      $cnt = count( $line );
      for($i = 0;$i < $cnt;$i++)
      {
	$data = explode("<>",$line[$i]);
	if($data[0] == $number2)
	{
	  $my_name = $data[1];
	  $subject = $data[2];
	}
      }	
    ?>
    編集フォーム
    <form method = "POST"action = "mission_2-4-4.php">
      名前:<br>
      <input type = "text" name = "my_name" value = <?php print($my_name);?>>
      <br>
      コメント:<br>
      <input type = "text" name  = "subject" value = <?php print($subject);?>>
      <input type = "hidden" name  = "number2" value = <?php print($number2); ?>>
      <input type = "submit" value = "送信">
    </form>

    <?php
      $filename = "mission_2-4_uematsu.txt";
      //mission_2-4_uematsu.txtがあるかないかで場合分け
      if(file_exists($filename))
      {
	//mission_2-4_uematsu.txtを読み込み<>を排除し表示
        $fp = fopen($filename,"r");
        while(!feof($fp))
        {
          $data = fgets($fp);
          $data = explode("<>",$data);
          $cnt = count( $data );
          for($i = 0; $i < $cnt; $i++)
          {
	    print($data[$i]);
          }
          print("<br>");
        }
      }
      else
      {
        print("既存のデータはありません");
      }
    ?>
  </body>
</html>