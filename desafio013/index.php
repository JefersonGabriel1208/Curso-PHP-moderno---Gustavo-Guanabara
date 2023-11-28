<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio PHP</title>
    <link rel="stylesheet" href="style.css">

    <style>
        img.nota{
            height: 50px;
            margin: 5px
        }
    </style>
</head>

<body>

    <?php 
    $saque= $_REQUEST['saque'] ?? 0 ;

    
    ?>
    <main>

        <h1>Caixa eletrônico </h1>


        <form method="request" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <label for="saque">Qualvalor você deseja sacar?(R$) <sup>*</sup> </label>
            <input type="number" name="saque" id="saque"  step="7" required value="<?=$saque?>">

            <p style="font-size: 0.7em"><sup>*</sup>
        Notas disponíveis: R$100, R$50, R$20, R$10, R$5, R$2 e moeda de R$1/p>
            <input type="submit" value="sacar">

        </form>

    </main>

    <?php 
   $resto= $saque;
    //saque de 100
    $tot100 = floor($resto/100);
    $resto %=100;

    //saque de 50
    $tot50 = floor($resto/50);
    $resto %=50;

    //saque de 20
    $tot20 = floor($resto/20);
    $resto %=20;

    //saque de 10
    $tot10 = floor($resto/10);
    $resto %=10;

    //saque de 5
    $tot5 = floor($resto/5);
    $resto %=5;

    //saque de 2
    $tot2 = floor($resto/2);
    $resto %=2;

    //saque de 1
    $tot1 = floor($resto/1);
    $resto %=1;

    ?>

    <section>
        <h2>Saque de <strong><?= number_format($saque, 2, "," , ".")?></strong> </h2>
        
        
       
        <ul>
            <li>  <img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x <?=$tot100 ?> </li>
            <li> <img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota"> x <?=$tot50 ?> </li>
            <li> <img src="imagens/20-reais.jpg" alt="Nota de 20" class="nota"> X <?=$tot20 ?>  </li>
            <li> <img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota"> X <?=$tot10 ?>  </li>
            <li> <img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota"> X <?=$tot5 ?>  </li>
            <li> <img src="imagens/2-reais.jpg" alt="Nota de 2" class="nota"> X <?=$tot2 ?>  </li>
            <li> <img src="imagens/1-real.jpg" alt="Moeda de 1" class="nota"> X <?=$tot1 ?>  </li>
            
        </ul>

    </section>

</body>

</html>