<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    $registros = [
      [
        "titulo" => "Título notícia 1",
        "conteudo" => "Conteúdo notícia 1"
      ],
      [
        "titulo" => "Título notícia 2",
        "conteudo" => "Conteúdo notícia 2"
      ],
      [
        "titulo" => "Título notícia 3",
        "conteudo" => "Conteúdo notícia 3"
      ],
      [
        "titulo" => "Título notícia 4",
        "conteudo" => "Conteúdo notícia 4"
      ]
    ];

    echo "<pre>";
      print_r($registros); // debugando
    echo "</pre>";

    echo "<br /><br /><br />";

    echo "O array possui " . count($registros) . " registros";
    echo "<br />";

    $i = 0;

    /*
    // percorrendo com while
    while ($i < count($registros)) {

      echo '<h3>' . $registros[$i]['titulo'] . '</h3>';
      echo '<p>' . $registros[$i]['conteudo'] . "</p>";

      echo "<hr />";

      $i++;
    }
    */

    /*
    // percorrendo com do {} while
    do {
      echo '<h3>' . $registros[$i]['titulo'] . '</h3>';
      echo '<p>' . $registros[$i]['conteudo'] . "</p>";

      echo "<hr />";

      $i++;
    } while ($i < count($registros));
    */

    // percorrendo com o for
    for ($i = 0; $i < count($registros); $i++) {
      echo '<h3>' . $registros[$i]['titulo'] . '</h3>';
      echo '<p>' . $registros[$i]['conteudo'] . "</p>";

      echo "<hr />";
    }
  ?>
</body>
</html>
