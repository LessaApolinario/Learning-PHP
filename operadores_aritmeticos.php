<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $num1 = 8;
    $num2 = 4;

    echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
    echo "<br />";
    echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2);
    echo "<br />";
    echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
    echo "<br />";
    echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2);
    echo "<br />";
    echo "O resto da divisão entre $num1 e $num2 é " . ($num1 % $num2);
  ?>
</body>
</html>
