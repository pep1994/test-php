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

    if (strlen($name) > 3 && strpos($mail, "@") && strpos($mail, ".") && is_numeric($age)) {
      echo "Accesso consentito";
    } else {
      echo "Accesso negato";
    }


    ?></h1>

  <p>
    <?php
    echo $name;
    ?>
  </p>

  <p>
    <?php
    echo $mail;
    ?>
  </p>

  <p>
    <?php
    echo $age;
    ?>
  </p>

</body>

</html>