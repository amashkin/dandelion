<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dandelion</title>
</head>
<body>

$command = escapeshellcmd('python3 pump.py');

<input type="button" id='script' name="scriptbutton" value=" Run Script " onclick="shell_exec(command);">


</body>
</html>