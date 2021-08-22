<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 3</title>
</head>
<body>
  <?php
    $array_numeros = [];

    for ($i = 0; $i < 6; $i++) {
      $numero = rand(1, 60);

      if (!in_array($numero, $array_numeros)) {
        $array_numeros[$i] = $numero;
      }
    }

    echo "<pre>";
      print_r($array_numeros);
    echo "</pre>";
  ?>
</body>
</html>
