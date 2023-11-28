<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php 
    $total = $_REQUEST['seg'] ?? 0 ;

    
    ?>
    <main>

        <h1>Calculadora de Tempo</h1>


        <form method="request" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <label for="seg">Qual é o total em segundos? </label>
            <input type="number" name="seg" id="seg" min="0" step="1" required value="<?=$total?>">
            <input type="submit" value="Calcular">

        </form>

    </main>

    <?php 
    $sobra= $total;

    //total de semanas
    $semana = (int)($sobra/604_800);
    $sobra = $sobra % 604_800;

    //total de dias 
    $dia = (int)($sobra/86400);
    $sobra = $sobra % 86400;

    //total de horas
    $horas = (int)($sobra/3600);
    $sobra = $sobra % 3600;

    //total de minutos
    $minutos = (int)($sobra/60);
    $sobra = $sobra % 60;

    //total de segundos
    $segundo = $sobra; 
    
    ?>

    <section>
        <h2>Totalizando tudo</h2>
        <p>Analisando o valor que você digitou, <strong><?= number_format($total, 0, "," , "." )?>
    </strong> segundos equivalem a um total de:
        </p>

        <ul>
            <li> <?=$semana?> semanas</li>
            <li> <?=$dia?> dias </li>
            <li> <?=$horas?> horas</li>
            <li> <?=$minutos?> minutos</li>
            <li> <?=$segundo?> segundos</li>
        </ul>

    </section>

</body>

</html>