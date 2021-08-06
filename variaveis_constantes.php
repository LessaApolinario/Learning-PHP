<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // Usamos a função define() para criar variáveis constantes
    // Passamos o nome da variável e o seu valor
    // É uma boa prática usar definir constantes com caixa alta
    define("BD_URL", "endereco_bd_dev");
    define("BD_USUARIO", "ususario_dev");
    define("BD_SENHA", "senha_dev");

    // OBS: Se redefinirmos a constante geramos um erro,
    // já que as constantes não podem ser modificadas.
    // define("BD_URL", "endereco_bd_prod"); => errado

    // Ao recuperar a variável não precisamos usar o "$"
    echo BD_URL . "<br />";
    echo BD_USUARIO . "<br />";
    echo BD_SENHA . "<br />";
  ?>
</body>
</html>
