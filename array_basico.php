<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // sequenciais (numéricos)
    // podemos passar as informações separadas por vírgula entre parênteses
    //$lista_frutas = array("Banana", "Maçã", "Morango", "Uva", "Abacate");
    // Ou podemos passar os elementos entre colchetes
    /*
    $lista_frutas = ["Banana", "Maçã", "Morango", "Uva", "Abacate"];
    // a contagem começa do 0
    // podemos adicionar um novo índice da seguinte forma:
    $lista_frutas[] = "Abacaxi";

    // funções para imprimir o array no browser
    // são usadas para debug
    // podemos usar a tag <pre> do HTML para formatar a saída do array

    echo "<pre>";
      var_dump($lista_frutas); // retorna os elementos e o tipo de dado
    echo "</pre>";
    echo "<hr />";
    echo "<pre>";
      print_r($lista_frutas); // retorna somente o array
    echo "</pre>";


    // Podemos imprimir um elemento em específico do array passando o índice entre colchetes
    echo $lista_frutas[4]; // Abacate
    // echo $lista_frutas[6]; // undefined array key 6
    */

    // associativos -> os índices não serão sequenciais
    // usamos o operador igual maior (=>) para criar chaves para os elementos do array
    // ex: índice => valor
    $lista_frutas = [
      "a" => "Banana",
      "b" => "Maçã",
      "c" => "Morango",
      "d" => "Uva",
      "2" => "Abacate"
    ];

    $lista_frutas["e"] = "Abacaxi";

    echo "<pre>";
      var_dump($lista_frutas);
    echo "</pre>";

    echo $lista_frutas["e"];
  ?>
</body>
</html>
