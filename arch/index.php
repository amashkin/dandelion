<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dandelion</title>
</head>
<body>
<form method="post">

    <input type="submit" value="GO" name="GO">
   </form>

</body>
</html>

<?php
	if(isset($_POST['GO']))
	{
		//shell_exec("python3 /var/www/html/dandelion/pump.py");
	//	echo"success";

    $command = escapeshellcmd('python3 /var/www/html/dandelion/pump.py');
    $output = shell_exec($command);
    echo $command;
    echo $output;
    echo shell_exec("python /var/www/html/dandelion/test.py");


  }
?>
	