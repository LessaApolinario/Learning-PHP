<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // in_array() -> true ou false para a existência do que está sendo procurado
    // array_search -> retorna o índice do valor pesquisado, caso ele exista
    $lista_frutas = ["Banana", "Maçã", "Morango", "Uva"];

    /*
    echo "<pre>";
      print_r($lista_frutas);
    echo "</pre>";


    // in_array(elemento, array);
    // echo in_array("Maçã", $lista_frutas);
    // true = 1
    // false = vazio

    // array_search(elemento, array);
    $existe = array_search("Uva", $lista_frutas);
    // quando o elemento não existe no array o retorno é null


    // $existe = in_array("Morango", $lista_frutas);

    if ($existe != null) {
      echo "Sim, o valor pesquisado existe no array";
    } else {
      echo "Não, o valor pesquisado não existe no array";
    }
    */

    $lista_coisas = [
      "frutas" => $lista_frutas,
      "pessoas" => ["João", "Maria"]
    ];

    echo "<pre>";
      print_r($lista_coisas);
    echo "</pre>";

    // pesquisando detro do array contido na posição especificada do array principal
    echo in_array("Uva", $lista_coisas["frutas"]);
  ?>
</body>
</html>
