<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // operadores condicionais/comparação
    // ==
    // ===
    // != ou <>
    // !==
    // <
    // >
    // <=
    // >=

    // operadores lógicos
    // E: && ou  AND -> retorna verdadeiro se todos os resultados das expressões forem verdadeiros.
    // OU:: || ou OR -> retorna verdadeiro se pelo menos um dos resultados das expressões for verdadeiro.
    // XOR: XOR -> retorna verdadeiro se uma das expressões for verdadeira e a outra for falsa, ou vice-versa.
    // ! -> inverte o resultado retornado pela expressão.

    // () estabelecer precedência
    if ((22 == 22 && 3 == 3) || 5 != 5) {
      echo "Verdadeiro";
    } else {
      echo "Falso";
    }
  ?>
</body>
</html>
