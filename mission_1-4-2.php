<html>
  <head>
    <title>mission_1-4-2.php</title>
    <meta charset="utf-8">
  </head>
  <body>
    <!送信フォームから受け取り、日時を付け表示>
    <?php
      print("「ご入力ありがとうございます。<br/>");
      print(date("Y/n/j G:i:s"));
      print("に");
      print(htmlspecialchars($_POST["my_name"]));
      print("を受け取りました」");
    ?>
  </body>
</html>