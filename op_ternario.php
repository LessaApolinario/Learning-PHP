<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $usuario_possui_cartao_loja = true;
    $valor_compra = 225;

    $valor_frete = 50;
    $recebeu_desconto_frete = true;

    $valor_frete = $usuario_possui_cartao_loja && $valor_compra >= 100 ? 0 : $valor_frete;
    /*
    if ($usuario_possui_cartao_loja && $valor_compra >= 100) {
      $valor_frete = 0;
    } else {
      $recebeu_deconto_frete = false;
    }
    */
  ?>

  <h1>Detalhes do pedido</h1>
  <p>Possui cartão da loja? <?= $usuario_possui_cartao_loja ? "SIM" : "NÃO"; ?>
    <?php
      // <condição> ? true : false;

      /*
      if ($usuario_possui_cartao_loja) {
        echo "SIM";
      } else {
        echo "NÂO";
      }
      */
    ?>
  </p>
  <p>Valor da compra: <?= $valor_compra ?></p>
  <p>Recebeu desconto no frete? <?= $recebeu_desconto_frete ? "SIM" : "NÃO"; ?>
    <?php
      /*
      $teste = $recebeu_desconto_frete ? "SIM" : "NÃO";

      echo $teste;
      /*
      if ($recebeu_desconto_frete) {
        echo "SIM";
      } else {
        echo "NÂO";
      }
      */
    ?>
  </p>
  <p>Valor do frete: <?= $valor_frete ?></p>
</body>
</html>
