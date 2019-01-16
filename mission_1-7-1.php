<html>
  <head>
    <title>mission_1-7-1.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <!送信フォーム>
    <form method = "POST"action = "mission_1-7-2.php">
      <input type = "text" name = "my_name">
      <input type = "submit" value = "送信">
    </form>

    <?php
      //mission_1-7_uematsu.txtを読み込み、<>を排除し表示
      $filename = "mission_1-7_uematsu.txt";
      $data = file_get_contents($filename);
      $data = explode("\n",$data);
      $cnt = count( $data );
      for($i = 0; $i < $cnt; $i++)
      {
	print($data[$i]);
	print("<br>");
      }
    ?>
  </body>
</html>