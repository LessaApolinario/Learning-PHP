<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    echo 'Utiizando a tag padrão';
  ?>
  <br />
  <!--
    Se for apenas uma instrução por tag,
    o ponto e vírgula é opcional.
  -->
  <?= 'Utiizando a tag impressão' ?>
  <br />
  <!--?
    Descontinuada no PHP 8.
    'Utilizando a tag curta'
    mas pode ser habilitada no arquivo php.ini,
    para tanto devemos procurar pela configuração
    "shot_open_tag" teclando "Ctrl + F" no bloco de notas.
    No shot_open_tag=Off configuramos de Off para On.
  ?-->
  <!-- "short_open_tag=On" -->
  <? echo 'Utilizando a tag curta, agora funcionando' ?>
</body>
</html>
