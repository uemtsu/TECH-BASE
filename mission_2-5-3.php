<html>
  <head>
    <title>mission_2-5-3.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      $number2 = $_POST["number2"];
      $pass3 = $_POST["pass3"];
      $filename = "mission_2-5_uematsu.txt";
      $line = file($filename);
      $cnt = count( $line );
      for($i = 0;$i < $cnt;$i++)
      {
	$data = explode("<>",$line[$i]);
	if($data[0] == $number2 && $data[4] == $pass3)
	{
	  $my_name = $data[1];
	  $subject = $data[2];
	}
	else
	{
	  //mission_2-5-1.php�ɖ߂�
   	  header("Location:http://tt-763.99sv-coco.com/mission_2-5-1.php");
	}
      }
    ?>
    �ҏW�t�H�[��
    <form method = "POST"action = "mission_2-5-4.php">
      <input type = "text" name = "my_name" value = <?php print($my_name);?>>
      <br>
      <input type = "text" name  = "subject" value = <?php print($subject);?>>
      <br>
      <input type = "password" name  = "pass" placeholder = "�p�X���[�h">
      <input type = "hidden" name  = "number2" value = <?php print($number2); ?>>
      <input type = "submit" value = "�ҏW">
    </form>

    <?php
      $filename = "mission_2-5_uematsu.txt";
      //mission_2-5_uematsu.txt�����邩�Ȃ����ŏꍇ����
      if(file_exists($filename))
      {
	//mission_2-5_uematsu.txt��ǂݍ���<>��r�����\��
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
        print("�����̃f�[�^�͂���܂���");
      }
    ?>
  </body>
</html>