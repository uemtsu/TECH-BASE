<html>
  <head>
    <title>mission_2-5-1.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <!送信フォーム>
    <form method = "POST" action = "mission_2-5-2.php">
      <input type = "text" name = "my_name" placeholder = "名前">
      <br>
      <input type = "text" name  = "subject" placeholder = "コメント">
      <br>
      <input type = "password" name  = "pass1" placeholder = "パスワード">
      <input type = "submit" value = "送信">
      <br>
      <br>
      <input type = "text" name  = "number1" placeholder = "削除対象番号">
　　　<br>
      <input type = "password" name  = "pass2" placeholder = "パスワード">
      <input type = "submit" value = "削除">
    </form>
    <form method = "POST" action = "mission_2-5-3.php">
      <input type = "text" name  = "number2" placeholder = "編集対象番号">
      <br>
      <input type = "password" name  = "pass3" placeholder = "パスワード">
      <input type = "submit" value = "編集">
    </form>

    <?php
      $filename = "mission_2-5_uematsu.txt";
      //mission_2-5_uematsu.txtがあるかないかで場合分け
      if(file_exists($filename))
      {
	//mission_2-5_uematsu.txtを読み込み<>を排除し表示
        $fp = fopen($filename,"r");
        while(!feof($fp))
        {
          $data = fgets($fp);
          $data = explode("<>",$data);
          $cnt = count( $data );
          for($i = 0; $i < $cnt-2; $i++)
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