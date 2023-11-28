<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <main>

        <h1>Médias simples e ponderada</h1>


        <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

            <label for="v1">1º Valor </label>
            <input type="number" name="primeirovalor" id="primeirovalor" value="<?=$primeirovalor?>">


            <label for="v2">1º Peso </label>
            <input type="number" name="primeiropeso" id="primeiropeso" value="<?=$primeiropeso?>">


            <label for="v3">2º Valor </label>
            <input type="number" name="segundovalor" id="segundovalor" value="<?=$segundovalor?>">


            <label for="v4">2º Peso </label>
            <input type="number" name="segundopeso" id="segundopeso" value="<?=$segundopeso?>">

            
            <input type="submit" value="Calcular médias">

        </form>

    </main>



    <section>
        <h2>Cálculo das Médias</h2>

        <?php
        
         

        $primeirovalor= $_REQUEST['primeirovalor'];
        $primeiropeso= $_REQUEST['primeiropeso'];
        $segundovalor= $_REQUEST['segundovalor'];
        $segundopeso= $_REQUEST['segundopeso'];

        echo "Analisando os valores de $primeirovalor e $segundovalor:  <br></br>";

        $mediasimples= ($primeirovalor+$segundovalor)/2;
        $mediaponderada= ($primeirovalor*$primeiropeso + $segundovalor*$segundopeso)/2 ;

        

        echo "<li><strong>A Média Aritmética Simples</strong> entre os valores $primeirovalor e $segundovalor é: <strong>$mediasimples</strong></li>";
        echo "<li><strong>A Média Aritmética Ponderada</strong> com pesos $primeiropeso e $segundopeso é igual a: <strong>$mediaponderada</strong> </li>";

        //$calQuantosSalarios= floor($salario/1380) ;
        //$valorSobra= $salario%1380 ;


        

?>

    </section>
</body>

</html>