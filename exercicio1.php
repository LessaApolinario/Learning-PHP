<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 1</title>
</head>
<body>
  <?php
      $peso = 50;
      $idade = 16;

      if (($idade >= 16 && $idade <= 69) && $peso >= 50) {
        echo "Atende aos requisitos";
      } else {
        echo "Não atende aos requisitos";
      }
  ?>
</body>
</html>
