<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test php</title>
</head>
<body>

  <h1>

    <?php 

      $name = $_GET['name'];
      $mail = $_GET['mail'];
      $age = $_GET['age'];

      echo $name . '<br>' . $mail . "<br>" . $age;

    ?></h1>
  
</body>
</html>