<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // $parametro = "2"; também funciona, porque
    // o PHP usa o operador de igualdade "==" para
    // converter os tipos de dados nos cases do switch
    $parametro = true;

    // Se uma variável passada ao switch for true
    // O case 1 será executado se aparecer antes case true

    switch ($parametro) {
      case 1:
        echo "Entrou no case 1";
        break;
      case "abc":
        echo "Entrou no case 2";
        break;
      case true:
        echo "Entrou no case 3";
        break;
      default:
        echo "Entrou no default";
        break;
    }
  ?>
</body>
</html>
