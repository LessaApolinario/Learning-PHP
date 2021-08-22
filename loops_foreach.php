<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $itens = ["sofá", "mesa", "cadeira", "fogão", "geladeira"];

    echo "<pre>";
      print_r($itens);
    echo "</pre>";
    // passamos o array e após "as" a variável para receber cada um dos valores do array
    foreach($itens as $item) {
      echo "$item ";

      if ($item == "mesa") {
        echo " (*Compre uma mesa e ganhe 25% de desconto na compra de quatro cadeiras)";
      }

      echo "<br />";
    }
  ?>
</body>
</html>
