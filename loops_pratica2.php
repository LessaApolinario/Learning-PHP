<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $funcionarios = [
      [
        "nome" => "João",
        "salario" => 2500
      ],
      [
        "nome" => "Maria",
        "salario" => 3000
      ],
      [
        "nome" => "Júlia",
        "salario" => 2200
      ]
    ];

    echo "<pre>";
      print_r($funcionarios);
    echo "</pre>";

    // após o "as" a primeira variável é o índice e a segunda o elemento
    // array as índice => elemento
    foreach($funcionarios as $i => $funcionario) {
      foreach($funcionario as $j => $valor) {
        echo "$j - $valor <br />";
      }

      echo "<hr />";
    }
  ?>
</body>
</html>
