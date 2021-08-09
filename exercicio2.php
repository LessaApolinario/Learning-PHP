<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exercício 2</title>
</head>
<body>
  <?php
    function calcularImpostoDeRenda($salario) {
      if ($salario <= 1903.98) {
        $imposto_de_renda = 0; // isento
      } else if ($salario >= 1903.99 && $salario <= 2826.65) {
        $imposto_de_renda = $salario * 0.075; // 7.5%
      } else if ($salario >= 2826.66 && $salario <= 3751.05) {
        $imposto_de_renda = $salario * 0.15; // 15%
      } else if ($salario >= 3751.06 && $salario <= 4664.68) {
        $imposto_de_renda = $salario * 0.225; // 22.5%
      } else {
        // Acima de 4664.68
        $imposto_de_renda = $salario  * 0.275; // 27.5%
      }

      return $imposto_de_renda;
    }

    echo calcularImpostoDeRenda(1000);
    echo"<br />";
    echo calcularImpostoDeRenda(2000);
    echo"<br />";
    echo calcularImpostoDeRenda(3000);
    echo"<br />";
    echo calcularImpostoDeRenda(4000);
    echo"<br />";
    echo calcularImpostoDeRenda(5000);
  ?>
</body>
</html>
