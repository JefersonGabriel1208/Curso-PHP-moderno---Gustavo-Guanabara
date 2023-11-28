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
    $preco = $_REQUEST ['preco']?? 0;
    $reajuste = $_REQUEST ['reajuste']?? 0;
    ?>


    <main>

        <h1>Reajustador de Preços</h1>


        <form method="request" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <label for="preco">Preço do Produto(R$) </label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preco?>" >


            <label for="reajuste">Qual será o percentual de reajuste?(<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">
           
            <input type="submit" value="Reajustar">

        </form>

    </main>

    <?php 
     $aumento = ($preco * $reajuste) / 100;
     $novo=  $preco + $aumento;
    ?>

    <section>
        <h2>Resultado do Reajuste</h2>
        <p> O Produto que custava R$ <?=number_format($preco, 2 , ",", "." )?> , com <?= $reajuste ?> % de aumento vai passar a custar <strong>R$<?=number_format($novo, 2 , ",", "." )?></strong> a partir de agora.</p>

    </section>

    <script>
        //declarções automaticas
        mudaValor();

        function mudaValor(){
            p.innerText = reajuste.value;
        };

    </script>
</body>

</html>