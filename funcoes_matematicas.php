<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $num = 7.5;

    echo ceil($num); // arredonda para cima
    echo "<br />";
    echo floor($num); // arredonda para baixo
    echo "<br />";
    // round()
    // 0 e .4 => baixo
    // >= .5 => cima
    echo round($num); // arredonda com base na fração
    echo "<br />";
    // rand(<inicio>, <fim>);
    echo rand(10, 20); // gerar um valor aleatório => 0 até randmax
    echo "<br />" . getrandmax(); // gera o maior valor aleatório possível
    echo "<br />";
    echo sqrt(8); // retorna a raiz quadrada de um número
  ?>
</body>
</html>
