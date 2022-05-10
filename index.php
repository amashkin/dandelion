<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dandelion</title>
</head>
<body>

<input type="button" id='script' name="scriptbutton" value=" Run Script " onclick="goPython()">

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

    <script>
        function goPython(){
            $.ajax({
              url: "./pump.py",
             context: document.body
            }).done(function() {
             alert('finished python script');;
            });
        }
    </script>

</body>
</html>