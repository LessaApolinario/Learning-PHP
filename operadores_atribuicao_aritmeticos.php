<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $x = 10;
    $y = 8;

    $x %= $y; // $x = $x + $y; => 15
    // $x -= $y // $x = $x - $y; => 2
    // $x *= $y // $x = $x * $y => 80
    // $x /= $y // $x = $x / $y => 1.25
    // $x %= $y // $x = $x % $y; => 2

    echo $x;
  ?>
</body>
</html>
