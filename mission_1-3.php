<html>
  <head>
    <title>mission_1-3</title>
  </head>

  <body>
    <?php
	//mission_1-2_uematsu.txt‚ð“Ç‚Ýž‚ÝA•\Ž¦
	$filename = "mission_1-2_uematsu.txt";
	$contents = file_get_contents($filename);
	echo "$contents";
    ?>
  </body>
</html>