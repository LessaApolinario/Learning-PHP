<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $nome = "Maria";
    $cor = "amarelo";
    $idade = 25;
    $atividade_preferida = "andar de bicicleta";

    // operador .
    // Usamos para concatenar string com variáveis
    // Converte as variáveis na saída do echo para strings
    echo "Olá " . $nome . ", vi que sua cor favorita é " . $cor . ", estou vendo também que você possui " . $idade . " anos e que gosta de " . $atividade_preferida;

    // aspas duplas
    echo "<br />";

    echo "Olá $nome, vi que sua cor favorita é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida";

    //Não funciona com aspas simples
    echo "<br />";

    echo 'Olá $nome, vi que sua cor favorita é $cor, estou vendo também que você possui $idade anos e que gosta de $atividade_preferida';

    /*
      OBS: Se formos imprimir apenas texto devemos usar aspas simples,
      caso queiramos imprimir variáveis o idealé usar aspas duplas.
    */
  ?>
</body>
</html>
