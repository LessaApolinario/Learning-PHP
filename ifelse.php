<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $ususario_possui_cartao_loja = true;
    $valor_compra = 225;

    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if ($ususario_possui_cartao_loja && $valor_compra >= 100) {
      $valor_frete = 0;
      $recebeu_desconto_frete = true;
    }
  ?>

  <h1>Detalhes do pedido</h1>
  <p>Possui cartão da loja?
    <?php
      if ($ususario_possui_cartao_loja) {
        echo "SIM";
      } else {
        echo "NÂO";
      }
    ?>
  </p>
  <p>Valor da compra: <?= $valor_compra ?></p>
  <p>Recebeu desconto no frete?
    <?php
      if ($recebeu_desconto_frete) {
        echo "SIM";
      } else {
        echo "NÂO";
      }
    ?>
  </p>
  <p>Valor do frete: <?= $valor_frete ?></p>
</body>
</html>
