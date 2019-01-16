<html>
  <head>
    <title>mission_1-5-2.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <?php
      //my_nameが記入されているかいないかで場合分け
      if(empty($_POST["my_name"]))
      {
	//mission_1-5-1.phpに戻る
	header("Location:http://tt-763.99sv-coco.com/mission_1-5-1.php");
      }
      else
      {
	//mission_1-5_uematsu.txtに上書き
	$filename = "mission_1-5_uematsu.txt";
	$fp = fopen($filename, "w");
        fwrite($fp,htmlspecialchars($_POST["my_name"]));
        fclose($fp);

        $data1 = $_POST["my_name"];
	$data2 = 完了！ ;
	//data1とdata2の比較後、表示
	if(strcmp($data1,$data2)===0)
	{
	  print("おめでとう！");
	}
	else
	{
          print("「ご入力ありがとうございます");
	  print("<br>");
          print(date("Y/n/j G:i:s"));
          print("に");
          print($data1);
          print("を受け取りました」");
	}
      }
