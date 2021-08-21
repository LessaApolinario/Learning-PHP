<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    /*
    // is_array(array) => verifica se o parâmetro é um array
    // retorna true ou false
    $array = [];
    $retorno = is_array($array);

    if ($retorno) {
      echo "Sim, é um array";
    } else {
      echo "Não, não é um array";
    }
    */

    /*
    // array_keys(array) => retorna um array com todas as chaves de um array passado por parâmetro
    $array = [1 => "a", 7 => "b", 18 => "c"];

    echo "<pre>";
      print_r($array);
    echo "<pre />";

    $chaves_array = array_keys($array);

    echo "<br />";
    echo "<pre>";
      print_r($chaves_array);
    echo "</pre>";
    */

    /*
    // sort(array) => ordena um array e reajusta seus índices
    $array = array("teclado", "mouse", "cabo hdmi", "gabinete", "fonte atx", "notebook");

    echo "<pre>";
      print_r($array);
    echo "<pre />";

    sort($array); // retorna true ou false para a tentativa de ordenação do array

    echo "<br />";

    echo "<pre>";
      print_r($array);
    echo "<pre />";
    */

    /*
    // asort() => ordena e preserva os índices
    $array = array("teclado", "mouse", "cabo hdmi", "gabinete", "fonte atx", "notebook");

    echo "<pre>";
      print_r($array);
    echo "<pre />";

    asort($array); // retorna true ou false para a tentativa de ordenação do array

    echo "<br />";

    echo "<pre>";
      print_r($array);
    echo "<pre />";
    */

    /*
    // count(array) => conta os elementos de um array
    $array = array("teclado", "mouse", "cabo hdmi", "gabinete", "fonte atx", "notebook");

    echo "<pre>";
      print_r($array);
      echo count($array);
    echo "<pre />";
    */

    /*
    // array_merge(array) => funde um ou mais arrays
    $array1 = ["osx", "windows"];
    $array2 = array("linux");
    $array3 = ["solaris"];

    // passamos dois ou mais parâmetros
    $novo_array = array_merge($array1, $array2, $array3);

    echo "<pre>";
      print_r($novo_array);
    echo "<pre />";
    */

    /*
    // explode(array) => divide uma string baseada num delimitador
    $string = "26/04/2018";

    $array_retorno = explode("/", $string); // retorna um array

    echo "<pre>";
      echo $string . "<br  />";
      print_r($array_retorno);
      echo $array_retorno[2] . "-" . $array_retorno[1] . "-" . $array_retorno[0]; // padrão americano
    echo "<pre />";
    */

    // implode(array) => junta elementos de um array em uma string
    $array = ["a", "b", "x", "y"];

    $string_retorno = implode(",", $array);

    echo $string_retorno;
  ?>
</body>
</html>
