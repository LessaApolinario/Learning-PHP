<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // string
    $nome = 'Lessa apolinario';

    // int
    $idade = 21;

    // float
    $peso = 70.2;

    // boolean
    $fumante_sn = false; // true = 1 ou false = vazio
  ?>

  <h1>Ficha cadastral</h1>
  <br />
  <!--=? $nome ?-->
  <p>Nome: <?php echo $nome ?></p>
  <p>Idade: <?php echo $idade ?></p>
  <p>Peso: <?php echo $peso ?></p>
  <p>Fumante: <?php echo $fumante_sn ?></p>
</body>
</html>
