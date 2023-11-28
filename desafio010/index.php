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
        
        //neste ecercício achar função que detecte o ano atual

        $atual= date("Y");
        $anonascimento= $_REQUEST['anonascimento'] ?? '2000';
        $idadeemqueano= $_REQUEST['idadeemqueano'] ?? $atual;
?>


    <main>

        <h1>Calculando a sua idade</h1>


        <form method="get" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <label for="v1">Em que ano você nasceu? </label>
            <input type="number" name="anonascimento" id="anonascimento" min="1900" value="<?=$anonascimento?>">


            <label for="v2">Quer saber sua idade em que ano? (Atualmente estamos em <strong>
                    <?=$atual?></strong>)</label>
            <input type="number" name="idadeemqueano" id="idadeemqueano" min="1900" value="<?=$idadeemqueano?>">

            <input type="submit" value="Qual será minha idade?">

        </form>

    </main>

    <section>
        <h2>Resultado</h2>
        
        <?php 
        $calculoidade= $idadeemqueano - $anonascimento; 

        echo "Quem nasceu em $anonascimento vai ter <strong>$calculoidade</strong> anos em $idadeemqueano  <br></br>";
        ?>
    </section>

</body>

</html>