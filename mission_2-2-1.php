<html>
  <head>
    <title>mission_2-2-1.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <!送信フォーム>
    <form method = "POST"action = "mission_2-2-2.php">
      名前:<br>
      <input type = "text" name = "my_name">
      <br>
      コメント:<br>
      <input type = "text" name  = "subject">
      <input type = "submit" value = "送信">
    </form>

    <?php
      $filename = "mission_2-2_uematsu.txt";
      //mission_2-2_uematsu.txtがあるかないかで場合分け
      if(file_exists($filename))
      {
        //mission_2-2_uematsu.txtを読み込み<>を排除し表示
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