<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Resultado da conversão</h1>
    

<?php
$url = 'https://economia.awesomeapi.com.br/last/USD-BRL';
$dados = json_decode(file_get_contents($url));

if ($dados && isset($dados->USDBRL->high)) {
    $cotacaoDolar = $dados->USDBRL->high;
    

    $real = $_REQUEST["din"] ?? 0;

    // Verifica se o valor do real é um número válido
    
        $dolar = $real / $cotacaoDolar;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
        echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
    } 
 else {
    echo "Não foi possível obter o valor do dólar.";
}

?>


    
    <button onclick="javascript:history.go(-1)"> Voltar</button>
</main>


</body>
</html>



