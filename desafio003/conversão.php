<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <h1>Resultado da conversão</h1>
    <?php
    
    $cotacaodolar= 4.84;
    $real= $_REQUEST["din"] ?? 0; //aqui pega o objeto definido no html em label e no input
    
    $dolar= $real/$cotacaodolar;
    $padrao= numfmt_create("pt_BR",NumberFormatter::CURRENCY);
    
    echo "Seus ". numfmt_format_currency($padrao, $real, "BRL") . " equivalem à ". numfmt_format_currency($padrao, $dolar, "USD") ;
    
    
    ?>

    <button onclick="javascript:history.go(-1)"> Voltar</button>
</main>
</body>
</html>



