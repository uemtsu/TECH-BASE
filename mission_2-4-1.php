<html>
  <head>
    <title>mission_2-4-1.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <!送信フォーム>
    <form method = "POST"action = "mission_2-4-2.php">
      名前:<br>
      <input type = "text" name = "my_name">
      <br>
      コメント:<br>
      <input type = "text" name  = "subject">
      <input type = "submit" value = "送信">
      <br>
      削除対象番号:<br>
      <input type = "text" name  = "number1">
      <input type = "submit" value = "削除">
    </form>
    <form method = "POST"action = "mission_2-4-3.php">
      編集対象番号:<br>
      <input type = "text" name  = "number2">
      <input type = "submit" value = "編集">
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