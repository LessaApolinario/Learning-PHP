<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // gettype() => retorna o tipo da variável
    $valor = true;
    // $valor2 = (float) $valor; // Convertendo de int para float
    // $valor2 = (double) $valor; // Convertendo int para float
    // $valor2 = (string) $valor; // Convertendo int para string

    // $valor2 = (int) $valor; // Convertendo de float para int ou integer
    // $valor2 = (string) $valor; // Convertendo de float para string

    // $valor2 = (integer) $valor; // Convertendo de string para int
    // $valor2 = (float) $valor; // Convertendo de string para float
    // $valor2 = (boolean) $valor; // Convertendo de string para boolean
    // $valor2 = (bool) $valor; // Convertendo de string para boolean

    // $valor2 = (int) $valor; // Convertendo de boolean para int
    $valor2 = (string) $valor; // Convertendo de boolean para string

    echo $valor . " " . gettype($valor); // integer
    echo "<br />";
    echo $valor2 . " " . gettype($valor2); // double

    // Conversões:
    // int => float ou string
    // float => int ou string
    // string => int, float ou boolean
    // boolean => int ou string
  ?>
</body>
</html>
