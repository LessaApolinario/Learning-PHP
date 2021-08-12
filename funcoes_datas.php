<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Curso PHP</title>
</head>
<body>
  <?php
    // recuperação da data atual / data corrente
    echo date("d/m/Y H:i"); // dia/mês/ano horas:minutos
    // echo date("Y/m/d H:i"); // ano/mês/dia horas:minutos => padrão americano
    echo "<br />";
    echo date_default_timezone_get(); // recupera a timezone padrão da aplicação
    echo "<br />";
    echo date_default_timezone_set("America/Maceio"); // atualizar a timezone padrão da aplicação
    // echo date_default_timezone_set("America/Sao_Paulo");
    echo "<br />";
    echo date("d/m/Y H:i"); // dia/mês/ano horas:minutos
    echo "<br />";

    $data_inicial = "2021-08-12"; // padrão americano
    $data_final = "2021-08-15"; // padrão americano
    // timestamp => representação de tempo da data
    // 01/01/1970
    // quantidade de segundos entre 01/01/1970 e a data informada no strtotime
    $time_inicial = strtotime($data_inicial); // espera um parâmetro no formato americano => ano/mês/dia
    $time_final = strtotime($data_final);

    echo $data_inicial . " - " . $time_inicial;
    echo "<br />";
    echo $data_final . " - " . $time_final;

    $diferenca_times = abs($time_final - $time_inicial); // a função abs retorna o valor absoluto

    echo "<br />";
    echo "A diferença de segundos entre a data inicial  e a data final é " . $diferenca_times;

    $segundo_existem_dia = 24 * 60 * 60; // 86400 segundos

    echo "<br />";
    echo "Um dia possui " . $segundo_existem_dia . " segundos";

    $diferenca_de_dias_entre_as_datas = $diferenca_times / $segundo_existem_dia;

    echo "<br />";
    echo "A diferença em dias é: " . $diferenca_de_dias_entre_as_datas;
  ?>
</body>
</html>
