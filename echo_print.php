<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <!--
    Impressão de conteúdos do bloco PHP
    nas páginas HTML.
  -->

  <!--
    Podemos usar áspas simples ou duplas.
  -->

  <!--
    Não é obrigatório usar o ponto e vírgula
    na última instrução. Mas é recomendável
    usar mesmo quando não é necessário.
  -->

  <!--
    Podemos imprimir os elementos HTML com echo e no print,
    como por exemplo o <br> e <hr>.
  -->

  <!--
    O print inicial no PHP foi considerado uma função e
    retorna 1 se for executada corretamente e retorna 0 se
    ocorrer o contrário.
  -->

  <?php
    echo 'Comando echo<br />';
    // print "Comando print<hr />";
    echo print("Comando print<hr />");
  ?>
</body>
</html>
