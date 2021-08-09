<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <h3>Pós-incremento</h3>
  <?php
    $a = 7;

    echo "O valor de a é $a<br />";
    echo "O valor de a após o incremento é " . $a++ . "<br />"; // 7
    echo "O valor atualizado de a é $a<br />";
  ?>

  <h3>Pré-incremento</h3>
  <?php
    $a = 7;

    echo "O valor de a é $a<br />";
    echo "O valor de a pré incremento é " . ++$a . "<br />"; // 7
    echo "O valor atualizado de a é $a<br />";
  ?>

<h3>Pós-decremento</h3>
  <?php
    $a = 7;

    echo "O valor de a é $a<br />";
    echo "O valor de a após o decremento é " . $a-- . "<br />"; // 7
    echo "O valor atualizado de a é $a<br />";
  ?>

  <h3>Pré-decremento</h3>
  <?php
    $a = 7;

    echo "O valor de a é $a<br />";
    echo "O valor de a pré decremento é " . --$a . "<br />"; // 7
    echo "O valor atualizado de a é $a<br />";
  ?>
</body>
</html>
