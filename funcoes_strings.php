<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $texto = "Curso completo de PHP";

    // string to lower
    echo $texto;
    echo "<br />";
    echo strtolower($texto);

    echo "<hr />";
    // string to upper
    echo strtoupper($texto);

    echo "<hr />";
    // upper case first
    echo ucfirst($texto);

    echo "<hr />";
    // string length
    echo strlen($texto);

    // str_replace(<procurar por>, <substituir por>, $texto);
    echo "<hr />";
    // string replace
    // echo str_replace("P", "F", $texto);
    echo str_replace(".", ",", "22.20");

    // substr($texto, <posição inicial>, <qtde caracteres>);
    echo "<hr />";
    // substring
    echo substr($texto, 6, 8) . "...";
  ?>
</body>
</html>
